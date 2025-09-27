{* Carregar CSS externo sem bloquear: preload + media=print/onload *}
{if isset($stylesheets)}
  {if !empty($stylesheets.external)}
    {foreach from=$stylesheets.external item=stylesheet}
      <link rel="preload" href="{$stylesheet.uri}" as="style">
      <link rel="stylesheet"
            href="{$stylesheet.uri}"
            media="print"
            onload="this.media='{$stylesheet.media|default:'all'}'">
      <noscript>
        <link rel="stylesheet" href="{$stylesheet.uri}" media="{$stylesheet.media|default:'all'}">
      </noscript>
    {/foreach}
  {/if}

  {if !empty($stylesheets.inline)}
    {foreach from=$stylesheets.inline item=stylesheet}
      <style>{$stylesheet.content nofilter}</style>
    {/foreach}
  {/if}
{/if}
