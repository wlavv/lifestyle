{*
<meta name="facebook-domain-verification" content="s57xrlme1mvpd7r1epc9ympy8zs05e" />
*}

{block name='head_charset'}
    <meta charset="utf-8">
{/block}

{block name='head_ie_compatibility'}
    <meta http-equiv="x-ua-compatible" content="ie=edge">
{/block}

{block name='head_seo'}
    <title>{block name='head_seo_title'}{$page.meta.title}{/block}</title>
    <meta name="description" content="{block name='head_seo_description'}{$page.meta.description}{/block}">
    <meta name="keywords" content="{block name='head_seo_keywords'}{$page.meta.keywords}{/block}">

    {if $page.meta.robots !== 'index'}
        <meta name="robots" content="{$page.meta.robots}">
    {/if}
    

    {if $page.canonical}
        <link rel="canonical" href="{$page.canonical}">
    {/if}

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>             

    {block name='head_hreflang'}
        {foreach from=$urls.alternative_langs item=pageUrl key=code}
            <link rel="alternate" href="{$pageUrl}" hreflang="{$code}">
    {/foreach}
    {/block}
{/block}


{block name='head_viewport'}
    <meta name="viewport" content="width=device-width, initial-scale=1">
{/block}

{block name='head_icons'}
    <link rel="icon" type="image/vnd.microsoft.icon" href="{$shop.favicon}?{$shop.favicon_update_time}">
    <link rel="shortcut icon" type="image/x-icon" href="{$shop.favicon}?{$shop.favicon_update_time}">
{/block}

{block name='stylesheets'}
    {include file="_partials/stylesheets.tpl" stylesheets=$stylesheets}
{/block}

{block name='hook_header'}
    {$HOOK_HEADER nofilter}
{/block}

{block name='hook_extra'}{/block}