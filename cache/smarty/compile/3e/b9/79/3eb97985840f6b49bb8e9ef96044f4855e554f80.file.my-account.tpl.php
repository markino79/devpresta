<?php /* Smarty version Smarty-3.1.13, created on 2013-07-12 14:03:31
         compiled from "/srv/http/prestashop_develop/public_html/modules/favoriteproducts/views/templates/hook/my-account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:171555402351dff09337e841-23336537%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3eb97985840f6b49bb8e9ef96044f4855e554f80' => 
    array (
      0 => '/srv/http/prestashop_develop/public_html/modules/favoriteproducts/views/templates/hook/my-account.tpl',
      1 => 1366892592,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '171555402351dff09337e841-23336537',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'in_footer' => 0,
    'mobile_hook' => 0,
    'module_template_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51dff0933c7af7_73295098',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51dff0933c7af7_73295098')) {function content_51dff0933c7af7_73295098($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/srv/http/prestashop_develop/public_html/tools/smarty/plugins/modifier.escape.php';
?>

<li class="favoriteproducts">
	<a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['link']->value->getModuleLink('favoriteproducts','account'), 'htmlall', 'UTF-8');?>
" title="<?php echo smartyTranslate(array('s'=>'My favorite products.','mod'=>'favoriteproducts'),$_smarty_tpl);?>
">
		<?php if (!$_smarty_tpl->tpl_vars['in_footer']->value){?><img <?php if (isset($_smarty_tpl->tpl_vars['mobile_hook']->value)){?>src="<?php echo $_smarty_tpl->tpl_vars['module_template_dir']->value;?>
img/favorites.png" class="ui-li-icon ui-li-thumb"<?php }else{ ?>src="<?php echo $_smarty_tpl->tpl_vars['module_template_dir']->value;?>
img/favorites.png" class="icon"<?php }?> alt="<?php echo smartyTranslate(array('s'=>'My favorite products.','mod'=>'favoriteproducts'),$_smarty_tpl);?>
"/><?php }?>
		<?php echo smartyTranslate(array('s'=>'My favorite products.','mod'=>'favoriteproducts'),$_smarty_tpl);?>

	</a>
</li>
<?php }} ?>