<?php /* Smarty version Smarty-3.1.13, created on 2013-07-12 14:03:30
         compiled from "/srv/http/prestashop_develop/public_html/modules/mymodule/views/templates/hook/mymodule.tpl" */ ?>
<?php /*%%SmartyHeaderCode:190709704751dff092c06a94-74942665%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '354f6d61082f2352c25d247215f7e99b8b4edd9e' => 
    array (
      0 => '/srv/http/prestashop_develop/public_html/modules/mymodule/views/templates/hook/mymodule.tpl',
      1 => 1372337774,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '190709704751dff092c06a94-74942665',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'my_module_name' => 0,
    'my_module_link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51dff092c41a45_18264390',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51dff092c41a45_18264390')) {function content_51dff092c41a45_18264390($_smarty_tpl) {?><!-- Block mymodule -->
<div id="mymodule_block_left" class="block">
  <h4><?php echo smartyTranslate(array('s'=>'Welcome!','mod'=>'mymodule'),$_smarty_tpl);?>
</h4>
  <div class="block_content">
    <p>
       <?php if (!isset($_smarty_tpl->tpl_vars['my_module_name']->value)&&!$_smarty_tpl->tpl_vars['my_module_name']->value){?>
			<?php $_smarty_tpl->_capture_stack[0][] = array('my_module_tempvar', null, null); ob_start(); ?><?php echo smartyTranslate(array('s'=>'World','mod'=>'mymodule'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
			<?php $_smarty_tpl->tpl_vars['my_module_name'] = new Smarty_variable(Smarty::$_smarty_vars['capture']['my_module_tempvar'], null, 0);?>
       <?php }?> 
       <?php echo smartyTranslate(array('s'=>'Hello %s!','sprintf'=>$_smarty_tpl->tpl_vars['my_module_name']->value,'mod'=>'mymodule'),$_smarty_tpl);?>
   
    </p>    
    <ul>
      <li><a href="<?php echo $_smarty_tpl->tpl_vars['my_module_link']->value;?>
" title="Click this link">Click me!</a></li>
    </ul>
  </div>
</div>
<!-- /Block mymodule --><?php }} ?>