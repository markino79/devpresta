<?php /* Smarty version Smarty-3.1.13, created on 2013-07-12 10:00:03
         compiled from "/srv/http/prestashop_develop/public_html/modules/blockcustomerprivacy/blockcustomerprivacy.tpl" */ ?>
<?php /*%%SmartyHeaderCode:144510051dfb78369a7d7-79873141%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '30d67e49695900a753bda347fecec0af5d8aa3fe' => 
    array (
      0 => '/srv/http/prestashop_develop/public_html/modules/blockcustomerprivacy/blockcustomerprivacy.tpl',
      1 => 1366892590,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '144510051dfb78369a7d7-79873141',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'privacy_message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51dfb7836a8220_21383592',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51dfb7836a8220_21383592')) {function content_51dfb7836a8220_21383592($_smarty_tpl) {?>

<div class="error_customerprivacy" style="color:red;"></div>
<fieldset class="account_creation customerprivacy">
	<h3><?php echo smartyTranslate(array('s'=>'Customer data privacy','mod'=>'blockcustomerprivacy'),$_smarty_tpl);?>
</h3>
	<p class="required">
		<input type="checkbox" value="1" id="customer_privacy" name="customer_privacy" style="float:left;margin: 15px;" />				
	</p>
	<label for="customer_privacy"><?php echo $_smarty_tpl->tpl_vars['privacy_message']->value;?>
</label>		
</fieldset><?php }} ?>