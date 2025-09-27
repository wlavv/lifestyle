{* Non-blocking CSS loader com preload + media=print/onload *}
{if isset($stylesheets)}
  {if !empty($stylesheets.external)}
    {foreach from=$stylesheets.external item=stylesheet}
      {*
        Skip se for uma das folhas que já inlinámos (Playfair/Lato/Pe Icon).
        Como o Smarty pode estar em modo seguro (sem funções PHP), fazemos match simples por sufixo.
      *}
      {assign var=uri value=$stylesheet.uri}
      {assign var=skip value=false}
      {if substr($uri, -9) == 'Lato.css'}{assign var=skip value=true}{/if}
      {if substr($uri, -22) == 'pe-icon-7-stroke.css'}{assign var=skip value=true}{/if}
      {if substr($uri, -18) == 'PlayfairDisplay.css'}{assign var=skip value=true}{/if}

      {if !$skip}
        <link rel="preload" href="{$stylesheet.uri}" as="style">
        <link rel="stylesheet"
              href="{$stylesheet.uri}"
              media="print"
              onload="this.media='{$stylesheet.media|default:'all'}'">
        <noscript>
          <link rel="stylesheet" href="{$stylesheet.uri}" media="{$stylesheet.media|default:'all'}">
        </noscript>
      {/if}
    {/foreach}
  {/if}

  {if !empty($stylesheets.inline)}
    {foreach from=$stylesheets.inline item=stylesheet}
      <style>{$stylesheet.content nofilter}</style>
    {/foreach}
  {/if}
{/if}
