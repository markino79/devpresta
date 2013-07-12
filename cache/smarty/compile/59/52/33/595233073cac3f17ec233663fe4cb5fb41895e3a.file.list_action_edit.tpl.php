<?php /* Smarty version Smarty-3.1.13, created on 2013-07-01 14:20:22
         compiled from "/srv/http/prestashop_develop/public_html/ps-admin/themes/default/template/helpers/list/list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:48058680651d17406099004-97764411%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '595233073cac3f17ec233663fe4cb5fb41895e3a' => 
    array (
      0 => '/srv/http/prestashop_develop/public_html/ps-admin/themes/default/template/helpers/list/list_action_edit.tpl',
      1 => 1366892586,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '48058680651d17406099004-97764411',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51d174060ab489_70909495',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d174060ab489_70909495')) {function content_51d174060ab489_70909495($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" class="edit" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
	<img src="../img/admin/edit.gif" alt="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
</a><?php }} ?>