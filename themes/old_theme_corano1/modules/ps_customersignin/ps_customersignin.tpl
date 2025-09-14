<div id="_desktop_user_info">
	<div class="user-info-block">
		<div class=" dropdown js-dropdown"> 
			<a class=" btn-unstyle" href="{$my_account_url}"> <i class="pe-7s-user"></i> </a>
			
            {*
			<button data-target="#" data-toggle="dropdown" class=" btn-unstyle">
				<i class="pe-7s-user"></i>
			</button>
			<ul class="dropdown-menu">
			<li>
				<a href="{$my_account_url}" rel="nofollow" class="dropdown-item">{l s='My account' d='Shop.Theme.Customeraccount'}</a>
			</li>
			<li>
			<li>
				<a href="{$link->getPageLink('cart', true)|escape:'html':'UTF-8'}?action=show" class="dropdown-item" >{l s='Checkout' d='Shop.Theme.Actions'}</a>
			</li>
			<li>
				{if $logged}
				  <a
					class="logout dropdown-item"
					href="{$logout_url}"
					rel="nofollow"
				  >
					{l s='Sign out' d='Shop.Theme.Actions'}
				  </a>

				{else}
				  <a
					href="{$my_account_url}"
					title="{l s='Log in to your customer account' d='Shop.Theme.Customeraccount'}"
					rel="nofollow" class="dropdown-item"
				  >
					<span>{l s='Sign in' d='Shop.Theme.Actions'}</span>
				  </a>
			  </li>
			{/if}
			</ul>
			*}
			
		</div>
	</div>
</div>