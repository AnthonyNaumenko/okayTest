{* User account *}
{if $user}
	<a class="d-inline-flex align-items-center account__link" href="{url_generator route='user'}">
		{include file="svg.tpl" svgId="user_icon"}
        <span class="account__text" data-language="index_account">{$lang->index_account} </span>
		<span>{$user->name|escape}</span>
        <div style="margin-left: 10%">
          {$quan=0}       
           {foreach $orders as $order}                                            
                {if $order->paid == 1}
                    {$quan=$quan+1}                                                                                   
                {/if}                                                     
            {/foreach} 
            <span class="account__text" data-language="orders_completed">{$lang->orders_completed}</span>
            <span>{$quan}</span>
        </div> 
	</a>
{else}
	<a class="d-inline-flex align-items-center account__link" href="javascript:;" onclick="document.location.href = '{url_generator route="login"}'" title="{$lang->index_login}">
		{include file="svg.tpl" svgId="user_icon"}
        <span class="account__text" data-language="index_account">{$lang->index_account} </span>
		<span class="account__login" data-language="index_login">{$lang->index_login}</span>
	</a>
{/if}