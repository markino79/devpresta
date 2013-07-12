<?php /* Smarty version Smarty-3.1.13, created on 2013-07-12 12:33:09
         compiled from "/srv/http/prestashop_develop/public_html/modules/blockadvertising/blockadvertising.tpl" */ ?>
<?php /*%%SmartyHeaderCode:166128978751dfdb651d5a17-25556959%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a324014cf6f7bb6db29f5873e168328153d7cd3d' => 
    array (
      0 => '/srv/http/prestashop_develop/public_html/modules/blockadvertising/blockadvertising.tpl',
      1 => 1366892590,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '166128978751dfdb651d5a17-25556959',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'adv_link' => 0,
    'adv_title' => 0,
    'image' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51dfdb651f3ab4_45008039',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51dfdb651f3ab4_45008039')) {function content_51dfdb651f3ab4_45008039($_smarty_tpl) {?>

<!-- MODULE Block advertising -->
<div class="advertising_block">
	<a href="<?php echo $_smarty_tpl->tpl_vars['adv_link']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['adv_title']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['adv_title']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['adv_title']->value;?>
" width="155"  height="163" /></a>
</div>
<!-- /MODULE Block advertising -->
<?php }} ?>