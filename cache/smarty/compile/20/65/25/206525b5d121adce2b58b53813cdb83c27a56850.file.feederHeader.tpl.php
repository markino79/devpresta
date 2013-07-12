<?php /* Smarty version Smarty-3.1.13, created on 2013-07-12 14:03:29
         compiled from "/srv/http/prestashop_develop/public_html/modules/feeder/feederHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:173208359751dff091e39596-38843972%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '206525b5d121adce2b58b53813cdb83c27a56850' => 
    array (
      0 => '/srv/http/prestashop_develop/public_html/modules/feeder/feederHeader.tpl',
      1 => 1366892592,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '173208359751dff091e39596-38843972',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'meta_title' => 0,
    'feedUrl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51dff091e4e156_86711156',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51dff091e4e156_86711156')) {function content_51dff091e4e156_86711156($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/srv/http/prestashop_develop/public_html/tools/smarty/plugins/modifier.escape.php';
?>

<link rel="alternate" type="application/rss+xml" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['meta_title']->value, 'html', 'UTF-8');?>
" href="<?php echo $_smarty_tpl->tpl_vars['feedUrl']->value;?>
" /><?php }} ?>