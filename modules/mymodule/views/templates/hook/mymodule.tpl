<!-- Block mymodule -->
<div id="mymodule_block_left" class="block">
  <h4>{l s='Welcome!' mod='mymodule'}</h4>
  <div class="block_content">
    <p>
       {if !isset($my_module_name) && !$my_module_name}
			{capture name='my_module_tempvar'}{l s='World' mod='mymodule'}{/capture}
			{assign var='my_module_name' value=$smarty.capture.my_module_tempvar}
       {/if} 
       {l s='Hello %s!' sprintf=$my_module_name mod='mymodule'}   
    </p>    
    <ul>
      <li><a href="{$my_module_link}" title="Click this link">Click me!</a></li>
    </ul>
  </div>
</div>
<!-- /Block mymodule -->