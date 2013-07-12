<?php /* Smarty version Smarty-3.1.13, created on 2013-07-12 12:33:09
         compiled from "/srv/http/prestashop_develop/public_html/modules/paypal/views/templates/hook/express_checkout_shortcut_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11378056951dfdb65822d52-16099569%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dd3e135dd617011908015319f1ce88b032185ae5' => 
    array (
      0 => '/srv/http/prestashop_develop/public_html/modules/paypal/views/templates/hook/express_checkout_shortcut_form.tpl',
      1 => 1371484259,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11378056951dfdb65822d52-16099569',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'base_dir_ssl' => 0,
    'PayPal_payment_type' => 0,
    'PayPal_current_page' => 0,
    'PayPal_tracking_code' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51dfdb65853ec4_94117779',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51dfdb65853ec4_94117779')) {function content_51dfdb65853ec4_94117779($_smarty_tpl) {?><form id="paypal_payment_form" action="<?php echo $_smarty_tpl->tpl_vars['base_dir_ssl']->value;?>
modules/paypal/express_checkout/payment.php" data-ajax="false" title="<?php echo smartyTranslate(array('s'=>'Pay with PayPal','mod'=>'paypal'),$_smarty_tpl);?>
" method="post" data-ajax="false">
	<?php if (isset($_GET['id_product'])){?><input type="hidden" name="id_product" value="<?php echo $_GET['id_product'];?>
" /><?php }?>
	
	<!-- Change dynamicaly when the form is submitted -->
	<input type="hidden" name="quantity" value="1" />
	<input type="hidden" name="id_p_attr" value="" />
	<input type="hidden" name="express_checkout" value="<?php echo $_smarty_tpl->tpl_vars['PayPal_payment_type']->value;?>
"/>
	<input type="hidden" name="current_shop_url" value="<?php echo $_smarty_tpl->tpl_vars['PayPal_current_page']->value;?>
" />
	<input type="hidden" name="bn" value="<?php echo $_smarty_tpl->tpl_vars['PayPal_tracking_code']->value;?>
" />
</form>
<?php }} ?>