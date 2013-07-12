<?php /* Smarty version Smarty-3.1.13, created on 2013-07-12 14:03:31
         compiled from "/srv/http/prestashop_develop/public_html/modules/paypal/views/templates/hook/column.tpl" */ ?>
<?php /*%%SmartyHeaderCode:165003937851dff093169491-81607428%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'da9233e4dec0a510caf6ecb8dff71e6d1a88944f' => 
    array (
      0 => '/srv/http/prestashop_develop/public_html/modules/paypal/views/templates/hook/column.tpl',
      1 => 1371484259,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '165003937851dff093169491-81607428',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'base_dir_ssl' => 0,
    'logo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51dff09317dd51_12771837',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51dff09317dd51_12771837')) {function content_51dff09317dd51_12771837($_smarty_tpl) {?>

<div id="paypal-column-block">
	<p><a href="<?php echo $_smarty_tpl->tpl_vars['base_dir_ssl']->value;?>
modules/paypal/about.php" rel="nofollow"><img src="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" alt="PayPal" title="<?php echo smartyTranslate(array('s'=>'Pay with PayPal','mod'=>'paypal'),$_smarty_tpl);?>
" style="max-width: 100%" /></a></p>
</div>
<?php }} ?>