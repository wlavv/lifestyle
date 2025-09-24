{foreach $stylesheets.external as $stylesheet}
    
    {if ! $stylesheet.uri|strstr:"Lato" }
        <link rel="stylesheet" href="{$stylesheet.uri}" type="text/css" media="{$stylesheet.media}">
    {/if}
{/foreach}

{foreach $stylesheets.inline as $stylesheet}
    <style>
        {$stylesheet.content}
    </style>
{/foreach}

<style>
   
   /* cyrillic */
    @font-face {
      font-family: 'Playfair Display';
      font-style: italic;
      font-weight: 400;
      font-display: swap;
      src: url(https://fonts.gstatic.com/s/playfairdisplay/v22/nuFRD-vYSZviVYUb_rj3ij__anPXDTnCjmHKM4nYO7KN_qiTXtXA-W2r.woff2) format('woff2');
      unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }
    /* vietnamese */
    @font-face {
      font-family: 'Playfair Display';
      font-style: italic;
      font-weight: 400;
      font-display: swap;
      src: url(https://fonts.gstatic.com/s/playfairdisplay/v22/nuFRD-vYSZviVYUb_rj3ij__anPXDTnCjmHKM4nYO7KN_qiTXt7A-W2r.woff2) format('woff2');
      unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
    }
    /* latin-ext */
    @font-face {
      font-family: 'Playfair Display';
      font-style: italic;
      font-weight: 400;
      font-display: swap;
      src: url(https://fonts.gstatic.com/s/playfairdisplay/v22/nuFRD-vYSZviVYUb_rj3ij__anPXDTnCjmHKM4nYO7KN_qiTXt_A-W2r.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }
    /* latin */
    @font-face {
      font-family: 'Playfair Display';
      font-style: italic;
      font-weight: 400;
      font-display: swap;
      src: url(https://fonts.gstatic.com/s/playfairdisplay/v22/nuFRD-vYSZviVYUb_rj3ij__anPXDTnCjmHKM4nYO7KN_qiTXtHA-Q.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }
    /* cyrillic */
    @font-face {
      font-family: 'Playfair Display';
      font-style: italic;
      font-weight: 700;
      font-display: swap;
      src: url(https://fonts.gstatic.com/s/playfairdisplay/v22/nuFRD-vYSZviVYUb_rj3ij__anPXDTnCjmHKM4nYO7KN_k-UXtXA-W2r.woff2) format('woff2');
      unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }
    /* vietnamese */
    @font-face {
      font-family: 'Playfair Display';
      font-style: italic;
      font-weight: 700;
      font-display: swap;
      src: url(https://fonts.gstatic.com/s/playfairdisplay/v22/nuFRD-vYSZviVYUb_rj3ij__anPXDTnCjmHKM4nYO7KN_k-UXt7A-W2r.woff2) format('woff2');
      unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
    }
    /* latin-ext */
    @font-face {
      font-family: 'Playfair Display';
      font-style: italic;
      font-weight: 700;
      font-display: swap;
      src: url(https://fonts.gstatic.com/s/playfairdisplay/v22/nuFRD-vYSZviVYUb_rj3ij__anPXDTnCjmHKM4nYO7KN_k-UXt_A-W2r.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }
    /* latin */
    @font-face {
      font-family: 'Playfair Display';
      font-style: italic;
      font-weight: 700;
      font-display: swap;
      src: url(https://fonts.gstatic.com/s/playfairdisplay/v22/nuFRD-vYSZviVYUb_rj3ij__anPXDTnCjmHKM4nYO7KN_k-UXtHA-Q.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }
    /* cyrillic */
    @font-face {
      font-family: 'Playfair Display';
      font-style: italic;
      font-weight: 900;
      font-display: swap;
      src: url(https://fonts.gstatic.com/s/playfairdisplay/v22/nuFRD-vYSZviVYUb_rj3ij__anPXDTnCjmHKM4nYO7KN_gGUXtXA-W2r.woff2) format('woff2');
      unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }
    /* vietnamese */
    @font-face {
      font-family: 'Playfair Display';
      font-style: italic;
      font-weight: 900;
      font-display: swap;
      src: url(https://fonts.gstatic.com/s/playfairdisplay/v22/nuFRD-vYSZviVYUb_rj3ij__anPXDTnCjmHKM4nYO7KN_gGUXt7A-W2r.woff2) format('woff2');
      unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
    }
    /* latin-ext */
    @font-face {
      font-family: 'Playfair Display';
      font-style: italic;
      font-weight: 900;
      font-display: swap;
      src: url(https://fonts.gstatic.com/s/playfairdisplay/v22/nuFRD-vYSZviVYUb_rj3ij__anPXDTnCjmHKM4nYO7KN_gGUXt_A-W2r.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }
    /* latin */
    @font-face {
      font-family: 'Playfair Display';
      font-style: italic;
      font-weight: 900;
      font-display: swap;
      src: url(https://fonts.gstatic.com/s/playfairdisplay/v22/nuFRD-vYSZviVYUb_rj3ij__anPXDTnCjmHKM4nYO7KN_gGUXtHA-Q.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }
    /* cyrillic */
    @font-face {
      font-family: 'Playfair Display';
      font-style: normal;
      font-weight: 400;
      font-display: swap;
      src: url(https://fonts.gstatic.com/s/playfairdisplay/v22/nuFvD-vYSZviVYUb_rj3ij__anPXJzDwcbmjWBN2PKdFvXDTbtPY_Q.woff2) format('woff2');
      unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }
    /* vietnamese */
    @font-face {
      font-family: 'Playfair Display';
      font-style: normal;
      font-weight: 400;
      font-display: swap;
      src: url(https://fonts.gstatic.com/s/playfairdisplay/v22/nuFvD-vYSZviVYUb_rj3ij__anPXJzDwcbmjWBN2PKdFvXDYbtPY_Q.woff2) format('woff2');
      unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
    }
    /* latin-ext */
    @font-face {
      font-family: 'Playfair Display';
      font-style: normal;
      font-weight: 400;
      font-display: swap;
      src: url(https://fonts.gstatic.com/s/playfairdisplay/v22/nuFvD-vYSZviVYUb_rj3ij__anPXJzDwcbmjWBN2PKdFvXDZbtPY_Q.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }
    /* latin */
    @font-face {
      font-family: 'Playfair Display';
      font-style: normal;
      font-weight: 400;
      font-display: swap;
      src: url(https://fonts.gstatic.com/s/playfairdisplay/v22/nuFvD-vYSZviVYUb_rj3ij__anPXJzDwcbmjWBN2PKdFvXDXbtM.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }
    /* cyrillic */
    @font-face {
      font-family: 'Playfair Display';
      font-style: normal;
      font-weight: 700;
      font-display: swap;
      src: url(https://fonts.gstatic.com/s/playfairdisplay/v22/nuFvD-vYSZviVYUb_rj3ij__anPXJzDwcbmjWBN2PKeiunDTbtPY_Q.woff2) format('woff2');
      unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }
    /* vietnamese */
    @font-face {
      font-family: 'Playfair Display';
      font-style: normal;
      font-weight: 700;
      font-display: swap;
      src: url(https://fonts.gstatic.com/s/playfairdisplay/v22/nuFvD-vYSZviVYUb_rj3ij__anPXJzDwcbmjWBN2PKeiunDYbtPY_Q.woff2) format('woff2');
      unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
    }
    /* latin-ext */
    @font-face {
      font-family: 'Playfair Display';
      font-style: normal;
      font-weight: 700;
      font-display: swap;
      src: url(https://fonts.gstatic.com/s/playfairdisplay/v22/nuFvD-vYSZviVYUb_rj3ij__anPXJzDwcbmjWBN2PKeiunDZbtPY_Q.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }
    /* latin */
    @font-face {
      font-family: 'Playfair Display';
      font-style: normal;
      font-weight: 700;
      font-display: swap;
      src: url(https://fonts.gstatic.com/s/playfairdisplay/v22/nuFvD-vYSZviVYUb_rj3ij__anPXJzDwcbmjWBN2PKeiunDXbtM.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }
    /* cyrillic */
    @font-face {
      font-family: 'Playfair Display';
      font-style: normal;
      font-weight: 900;
      font-display: swap;
      src: url(https://fonts.gstatic.com/s/playfairdisplay/v22/nuFvD-vYSZviVYUb_rj3ij__anPXJzDwcbmjWBN2PKfsunDTbtPY_Q.woff2) format('woff2');
      unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }
    /* vietnamese */
    @font-face {
      font-family: 'Playfair Display';
      font-style: normal;
      font-weight: 900;
      font-display: swap;
      src: url(https://fonts.gstatic.com/s/playfairdisplay/v22/nuFvD-vYSZviVYUb_rj3ij__anPXJzDwcbmjWBN2PKfsunDYbtPY_Q.woff2) format('woff2');
      unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
    }
    /* latin-ext */
    @font-face {
      font-family: 'Playfair Display';
      font-style: normal;
      font-weight: 900;
      font-display: swap;
      src: url(https://fonts.gstatic.com/s/playfairdisplay/v22/nuFvD-vYSZviVYUb_rj3ij__anPXJzDwcbmjWBN2PKfsunDZbtPY_Q.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }
    /* latin */
    @font-face {
      font-family: 'Playfair Display';
      font-style: normal;
      font-weight: 900;
      font-display: swap;
      src: url(https://fonts.gstatic.com/s/playfairdisplay/v22/nuFvD-vYSZviVYUb_rj3ij__anPXJzDwcbmjWBN2PKfsunDXbtM.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /**CMS**/
    .card-body { border-left: 1px solid #eee; padding: 20px; border-right: 1px solid #eee; border-bottom: 1px solid #eee; }
    .btn-link:focus, .btn-link:hover { color: #000; }
    
    .user-info-block a { font-size: 26px; line-height: 43px; color: #222; cursor: pointer; }

    .wishlist-add-to-new i{ color: #c29958 !important; }
    .wishlist-add-to-new{ color: #c29958 !important; }
    .wishlist-list-item:hover .wishlist-list-item-title{ color: #c29958 !important; }
    .wishlist-product-combinations a:hover{ color: #c29958 !important; }
    
    /** My account **/
    form#customer-form > section > * > .form-control-label{ text-align: right !important; }

    
    @media (max-width: 575.98px) {
        .account-link:nth-child(2){ float: right; margin-right: 0; }
        #exportDataToPdf, #exportDataToCsv { margin-right: 0; margin-left: 0; margin-top: 10px; width: 100%; }
        {if $page.page_name=='product'}
            #wrapper{ padding-top: 20px; }
            .content_info{ text-align: center; }
            .product-add-to-cart{ display: inline-flex; }
            .product-actions .product-add-to-cart{ padding-top: 0px; }
        {/if}
    }

    // Small devices (landscape phones, less than 768px)
    @media (max-width: 767.98px) { 
        .account-link:nth-child(2){ float: right;  margin-right: 0; }
        #exportDataToPdf, #exportDataToCsv { margin-right: 0; margin-left: 0; margin-top: 10px; width: 100%; }
        {if $page.page_name=='product'}
            #wrapper{ padding-top: 20px; }
            .content_info{ text-align: center; }
            .product-add-to-cart{ display: inline-flex; }
            .product-actions .product-add-to-cart{ padding-top: 0px; }
        {/if}
        
    }
    
    @media (max-width: 991.98px) { 
        #exportDataToPdf { margin-right: 0; margin-left: 0; margin-top: 10px; float: left; }
        #exportDataToCsv { margin-right: 0; margin-left: 0; margin-top: 10px; float: right; }
        {if $page.page_name=='product'}
            #wrapper{ padding-top: 20px; }
            .content_info{ text-align: center; }
            .product-add-to-cart{ display: inline-flex; }
            .product-actions .product-add-to-cart{ padding-top: 0px; }
        {/if}
    }

    .pos_bannerslide{
        display: contents;
    }
    
    .spacer-1{ height: 1px; width: 100%; display: inline-flex; }
    
    .product-description > p{
        padding-top: 20px;
    }
    
    .h1.namne_details, .product_name_h1{ text-transform: none; }
</style>