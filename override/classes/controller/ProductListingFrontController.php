<?php
use PrestaShop\PrestaShop\Core\Product\Search\ProductSearchQuery;
use PrestaShop\PrestaShop\Core\Product\Search\Pagination;
use PrestaShop\PrestaShop\Core\Product\Search\ProductSearchContext;
use PrestaShop\PrestaShop\Core\Product\Search\ProductSearchResult;
use PrestaShop\PrestaShop\Core\Product\Search\Facet;
use PrestaShop\PrestaShop\Core\Product\Search\SortOrder;
use PrestaShop\PrestaShop\Core\Product\Search\ProductSearchProviderInterface;
use PrestaShop\PrestaShop\Core\Product\Search\FacetsRendererInterface;
abstract class ProductListingFrontController extends ProductListingFrontControllerCore
{
    
    /*
    * module: ps_searchbar
    * date: 2024-10-19 18:41:43
    * version: 2.1.3
    */
    public function getProductSearchVariablesPos()
    {
        include_once(_PS_MODULE_DIR_.'possearchproducts/PosSearch.php');
        /*
         * To render the page we need to find something (a ProductSearchProviderInterface)
         * that knows how to query products.
         */
        $context = $this->getProductSearchContext();
        $query = $this->getProductSearchQuery();
        $provider = $this->getProductSearchProviderFromModules($query);
        if (null === $provider) {
            $provider = $this->getDefaultProductSearchProvider();
        }
        $resultsPerPage = (int) Tools::getValue('resultsPerPage');
        if ($resultsPerPage <= 0 || $resultsPerPage > 36) {
            $resultsPerPage = Configuration::get('PS_PRODUCTS_PER_PAGE');
        }
        $query
            ->setResultsPerPage($resultsPerPage)
            ->setPage(max((int) Tools::getValue('page'), 1))
        ;
        if (($encodedSortOrder = Tools::getValue('order'))) {
            $query->setSortOrder(SortOrder::newFromString(
                $encodedSortOrder
            ));
        }
        $encodedFacets = Tools::getValue('q');
        /*
         * The controller is agnostic of facets.
         * It's up to the search module to use /define them.
         *
         * Facets are encoded in the "q" URL parameter, which is passed
         * to the search provider through the query's "$encodedFacets" property.
         */
        $query->setEncodedFacets($encodedFacets);
        $result = $provider->runQuery(
            $context,
            $query
        );
        $string_query = $this->getStringSearchQuery();
        $id_lang = $this->getIdLanguage();
        $id_category = $this->getCategorySearchQuery();
        $posproducts = PosSearch::find($id_lang,$string_query,$id_category,1,10);
        if (!$result->getCurrentSortOrder()) {
            $result->setCurrentSortOrder($query->getSortOrder());
        }
        $products = $this->prepareMultipleProductsForTemplate($posproducts['result']);
        if ($provider instanceof FacetsRendererInterface) {
            $rendered_facets = $provider->renderFacets(
                $context,
                $result
            );
            $rendered_active_filters = $provider->renderActiveFilters(
                $context,
                $result
            );
        } else {
            $rendered_facets = $this->renderFacets(
                $result
            );
            $rendered_active_filters = $this->renderActiveFilters(
                $result
            );
        }
        $pagination = $this->getTemplateVarPaginationPos(
            $query,
            $posproducts
        );
        $sort_orders = $this->getTemplateVarSortOrders(
            $result->getAvailableSortOrders(),
            $query->getSortOrder()->toString()
        );
        $sort_selected = false;
        if (!empty($sort_orders)) {
            foreach ($sort_orders as $order) {
                if (isset($order['current']) && true === $order['current']) {
                    $sort_selected = $order['label'];
                    break;
                }
            }
        }
        $searchVariables = array(
            'label' => $this->getListingLabel(),
            'products' => $products,
            'sort_orders' => $sort_orders,
            'sort_selected' => $sort_selected,
            'pagination' => $pagination,
            'rendered_facets' => $rendered_facets,
            'rendered_active_filters' => $rendered_active_filters,
            'js_enabled' => $this->ajax,
            'current_url' => $this->updateQueryString(array(
                'q' => $result->getEncodedFacets(),
            )),
        );
        Hook::exec('filterProductSearch', array('searchVariables' => &$searchVariables));
        Hook::exec('actionProductSearchAfter', $searchVariables);
        return $searchVariables;
    }
    /*
    * module: ps_searchbar
    * date: 2024-10-19 18:41:43
    * version: 2.1.3
    */
    protected function getTemplateVarPaginationPos(
        ProductSearchQuery $query, $posproducts
    ) {
        $pagination = new Pagination();
        $pagination
            ->setPage($query->getPage())
            ->setPagesCount(
                ceil($posproducts['total'] / $query->getResultsPerPage())
            )
        ;
        $totalItems = $posproducts['total'];
        $itemsShownFrom = ($query->getResultsPerPage() * ($query->getPage() - 1)) + 1;
        $itemsShownTo = $query->getResultsPerPage() * $query->getPage();
        return array(
            'total_items' => $totalItems,
            'items_shown_from' => $itemsShownFrom,
            'items_shown_to' => ($itemsShownTo <= $totalItems) ? $itemsShownTo : $totalItems,
            'pages' => array_map(function ($link) {
                $link['url'] = $this->updateQueryString(array(
                    'page' => $link['page'],
                ));
                return $link;
            }, $pagination->buildLinks()),
            'should_be_displayed' => (count($pagination->buildLinks()) > 3)
        );
    }
    /*
    * module: ps_searchbar
    * date: 2024-10-19 18:41:43
    * version: 2.1.3
    */
    public function doProductSearchPos($template, $params = array(), $locale = null)
    {
        if ($this->ajax) {
            ob_end_clean();
            header('Content-Type: application/json');
            $this->ajaxDie(json_encode($this->getAjaxProductSearchVariables()));
        } else {
            $variables = $this->getProductSearchVariablesPos();
            $this->context->smarty->assign(array(
                'listing' => $variables,
            ));
            $this->setTemplate($template, $params, $locale);
        }
    }
    /*
    * module: ps_searchbar
    * date: 2024-10-19 18:41:43
    * version: 2.1.3
    */
    private function getProductSearchProviderFromModules($query)
    {
        $providers = Hook::exec(
            'productSearchProvider',
            array('query' => $query),
            null,
            true
        );
        if (!is_array($providers)) {
            $providers = array();
        }
        foreach ($providers as $provider) {
            if ($provider instanceof ProductSearchProviderInterface) {
                return $provider;
            }
        }
        return;
    }
	/*
    * module: ps_searchbar
    * date: 2024-10-19 18:41:43
    * version: 2.1.3
    */
    protected function getAjaxProductSearchVariables()
    {
        $search = $this->getProductSearchVariables();
        $rendered_products_top = $this->render('catalog/_partials/products-top', array('listing' => $search));
        $rendered_products = $this->render('catalog/_partials/products',
            array('listing' => $search,
            'static_token' => Tools::getToken(false), // added token
            'configuration' => $this->getTemplateVarConfiguration(),
            'urls' => array('pages'=>array('cart'=>$this->context->link->getPageLink('cart'))))); 
        $rendered_products_bottom = $this->render('catalog/_partials/products-bottom', array('listing' => $search));
        $data = array(
            'rendered_products_top' => $rendered_products_top,
            'rendered_products' => $rendered_products,
            'rendered_products_bottom' => $rendered_products_bottom,
        );
        foreach ($search as $key => $value) {
            $data[$key] = $value;
        }
        return $data;
    }
}
