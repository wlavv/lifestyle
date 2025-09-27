{foreach $stylesheets.external as $stylesheet}
  <link rel="stylesheet" href="{$stylesheet.uri}" type="text/css" media="{$stylesheet.media}">
{/foreach}

<link rel="stylesheet" href="https://life-style.pt/themes/theme_corano1/assets/css/pe-icon-7-stroke.css" type="text/css" media="all">
{foreach $stylesheets.inline as $stylesheet}
  <style>
    {$stylesheet.content}
  </style>
{/foreach}

<style>
    .pos_bannerslide{ margin-bottom: 20px; }
    
    .search_top form button i { font-size: 21px; display: block; line-height: 0px; }
    
    #search_widget form i{ position: relative; padding: 0; }
    
</style>
