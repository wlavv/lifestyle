<script async src="https://www.googletagmanager.com/gtag/js?id=G-EKG6F536HP"></script>

<script>
  window.dataLayer = window.dataLayer || [];
  
  function gtag(){ dataLayer.push(arguments); }

  gtag('js', new Date());
  gtag('config', 'G-EKG6F536HP');
  
</script>

{foreach $javascript.inline as $js}
  <script type="text/javascript">
    {$js.content nofilter}
  </script>
{/foreach}

{foreach $javascript.external as $js}
  <script type="text/javascript" src="{$js.uri}" {$js.attribute}></script>
{/foreach}

{if isset($vars)}
<script type="text/javascript">
    {foreach from=$vars key=var_name item=var_value}
        var {$var_name} = {$var_value|json_encode nofilter};
    {/foreach}
</script>
{/if}