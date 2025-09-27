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

  {*
    (Opcional) CSS crítico: quando quisermos voltar a inlinar,
    criamos um template em: templates/_partials/critical-home.tpl
    e depois descomentamos o include abaixo.
  *}
  {*
  {if $page.page_name == 'index'}
    <style>{include file="_partials/critical-home.tpl"}</style>
  {/if}
  *}

  {if $page.canonical}
    <link rel="canonical" href="{$page.canonical}">
  {/if}
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

{* Playfair: carregar sem bloquear *}
<link rel="preload" href="{$urls.theme}assets/css/PlayfairDisplay.css" as="style">
<link rel="stylesheet" href="{$urls.theme}assets/css/PlayfairDisplay.css" media="print" onload="this.media='all'">
<noscript><link rel="stylesheet" href="{$urls.theme}assets/css/PlayfairDisplay.css"></noscript>

{* jQuery em defer e sem domínio hardcoded *}
<script src="{$urls.theme}assets/js/jquery/3.2.1/jquery.min.js" defer></script>

{block name='stylesheets'}
  {include file="_partials/stylesheets.tpl" stylesheets=$stylesheets}
{/block}

{block name='javascript_head'}
  {include file="_partials/javascript.tpl" javascript=$javascript.head vars=$js_custom_vars}
{/block}

{block name='hook_header'}
  {$HOOK_HEADER nofilter}
{/block}

{block name='hook_extra'}{/block}
