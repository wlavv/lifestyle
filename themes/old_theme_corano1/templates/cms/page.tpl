{extends file='page.tpl'}

{block name='page_title'}
  {$cms.meta_title}
{/block}

{block name='page_content_container'}
  <section id="content" class="page-content page-cms page-cms-{$cms.id}">
      
      
    {block name='cms_content'}
      {$cms.content nofilter}
    {/block}

    {block name='hook_cms_dispute_information'}
      {hook h='displayCMSDisputeInformation'}
    {/block}

    {block name='hook_cms_print_button'}
      {hook h='displayCMSPrintButton'}
    {/block}

  </section>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.slim.min.js" integrity="sha512-6ORWJX/LrnSjBzwefdNUyLCMTIsGoNP6NftMy2UAm1JBm6PRZCO1d7OHBStWpVFZLO+RerTvqX/Z9mBFfCJZ4A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script>
    $(".collapse1").click(function() { $(".cms_collapse").hide('slow'); $("#collapse1").toggle('slow'); });
    $(".collapse2").click(function() { $(".cms_collapse").hide('slow'); $("#collapse2").toggle('slow'); });
    $(".collapse3").click(function() { $(".cms_collapse").hide('slow'); $("#collapse3").toggle('slow'); });
    $(".collapse4").click(function() { $(".cms_collapse").hide('slow'); $("#collapse4").toggle('slow'); });
    $(".collapse5").click(function() { $(".cms_collapse").hide('slow'); $("#collapse5").toggle('slow'); });
    $(".collapse6").click(function() { $(".cms_collapse").hide('slow'); $("#collapse6").toggle('slow'); });
    $(".collapse7").click(function() { $(".cms_collapse").hide('slow'); $("#collapse7").toggle('slow'); });
    $(".collapse8").click(function() { $(".cms_collapse").hide('slow'); $("#collapse8").toggle('slow'); });
    $(".collapse9").click(function() { $(".cms_collapse").hide('slow'); $("#collapse9").toggle('slow'); });
    $(".collapse10").click(function() { $(".cms_collapse").hide('slow'); $("#collapse10").toggle('slow'); });
    $(".collapse11").click(function() { $(".cms_collapse").hide('slow'); $("#collapse11").toggle('slow'); });

  </script>
{/block}
