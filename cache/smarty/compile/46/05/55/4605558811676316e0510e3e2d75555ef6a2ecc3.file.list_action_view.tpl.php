<?php /* Smarty version Smarty-3.1.13, created on 2013-07-12 09:06:29
         compiled from "/srv/http/prestashop_develop/public_html/ps-admin/themes/default/template/helpers/list/list_action_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:149877928351dfaaf5b8a598-11470431%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4605558811676316e0510e3e2d75555ef6a2ecc3' => 
    array (
      0 => '/srv/http/prestashop_develop/public_html/ps-admin/themes/default/template/helpers/list/list_action_view.tpl',
      1 => 1366892586,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '149877928351dfaaf5b8a598-11470431',
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
  'unifunc' => 'content_51dfaaf5ba0528_90457780',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51dfaaf5ba0528_90457780')) {function content_51dfaaf5ba0528_90457780($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" >
	<img src="../img/admin/details.gif" alt="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
</a><?php }} ?>