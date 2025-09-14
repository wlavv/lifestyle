<div class="footer-container">
	<div class="footer_top">
		<div class="container">
		    <div class="row">
			   {block name='hook_footer'}
					{hook h='displayFooter'}
			    {/block}
			</div>
			<div class="row row_bottom">
			  {block name='hook_footer_after'}
				  {hook h='displayFooterAfter'}
			  {/block}
			</div>
		</div>
	</div>
	<div class="footer_bottom">
		<div class="container">
			<div class="row">
				{hook h='displayFooterBottom'}
			</div>
		</div>
	</div>
</div