{extends file='layouts/layout-both-columns.tpl'}
{block name='right_column'}{/block}
{block name='content_wrapper'}
    <div id="content-wrapper" class="left-column col-xs-12 col-sm-12 {if $smarty.server.REQUEST_URI|strstr:'controller=search&s='}col-md-12{elseif $smarty.server.REQUEST_URI|strstr:'novos-produtos'}col-md-12{else}col-md-9{/if}">
        {hook h="displayContentWrapperTop"}
        {block name='content'}
        <p>Hello world! This is HTML5 Boilerplate.</p>
        {/block}
        {hook h="displayContentWrapperBottom"}
    </div>
{/block}