{extends file=$layout}
{block name='content'}
  <section id="main">
    {block name='brand_miniature'}
      <ul>
        {foreach from=$brands item=brand}
          {include file='catalog/_partials/miniatures/brand.tpl' brand=$brand}
        {/foreach}
      </ul>
    {/block}
    <div style="height: 100px; width: 100%;"></div>
  </section>
{/block}