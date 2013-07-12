<?php /* Smarty version Smarty-3.1.13, created on 2013-07-12 12:16:23
         compiled from "/srv/http/prestashop_develop/public_html/modules/bankwire/views/templates/hook/payment_return.tpl" */ ?>
<?php /*%%SmartyHeaderCode:104970821151dfd77799eba4-29708973%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '57a1dab06f64c4a589dea3ccebc98c23aa932289' => 
    array (
      0 => '/srv/http/prestashop_develop/public_html/modules/bankwire/views/templates/hook/payment_return.tpl',
      1 => 1366892590,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '104970821151dfd77799eba4-29708973',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'status' => 0,
    'shop_name' => 0,
    'total_to_pay' => 0,
    'bankwireOwner' => 0,
    'bankwireDetails' => 0,
    'bankwireAddress' => 0,
    'reference' => 0,
    'id_order' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51dfd777a7b3b9_41820787',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51dfd777a7b3b9_41820787')) {function content_51dfd777a7b3b9_41820787($_smarty_tpl) {?>

<?php if ($_smarty_tpl->tpl_vars['status']->value=='ok'){?>
<p><?php echo smartyTranslate(array('s'=>'Your order on %s is complete.','sprintf'=>$_smarty_tpl->tpl_vars['shop_name']->value,'mod'=>'bankwire'),$_smarty_tpl);?>

		<br /><br />
		<?php echo smartyTranslate(array('s'=>'Please send us a bank wire with','mod'=>'bankwire'),$_smarty_tpl);?>

		<br /><br />- <?php echo smartyTranslate(array('s'=>'Amount','mod'=>'bankwire'),$_smarty_tpl);?>
 <span class="price"> <strong><?php echo $_smarty_tpl->tpl_vars['total_to_pay']->value;?>
</strong></span>
		<br /><br />- <?php echo smartyTranslate(array('s'=>'Name of account owner','mod'=>'bankwire'),$_smarty_tpl);?>
  <strong><?php if ($_smarty_tpl->tpl_vars['bankwireOwner']->value){?><?php echo $_smarty_tpl->tpl_vars['bankwireOwner']->value;?>
<?php }else{ ?>___________<?php }?></strong>
		<br /><br />- <?php echo smartyTranslate(array('s'=>'Include these details','mod'=>'bankwire'),$_smarty_tpl);?>
  <strong><?php if ($_smarty_tpl->tpl_vars['bankwireDetails']->value){?><?php echo $_smarty_tpl->tpl_vars['bankwireDetails']->value;?>
<?php }else{ ?>___________<?php }?></strong>
		<br /><br />- <?php echo smartyTranslate(array('s'=>'Bank name','mod'=>'bankwire'),$_smarty_tpl);?>
  <strong><?php if ($_smarty_tpl->tpl_vars['bankwireAddress']->value){?><?php echo $_smarty_tpl->tpl_vars['bankwireAddress']->value;?>
<?php }else{ ?>___________<?php }?></strong>
		<?php if (!isset($_smarty_tpl->tpl_vars['reference']->value)){?>
			<br /><br />- <?php echo smartyTranslate(array('s'=>'Do not forget to insert your order number #%d in the subject of your bank wire','sprintf'=>$_smarty_tpl->tpl_vars['id_order']->value,'mod'=>'bankwire'),$_smarty_tpl);?>

		<?php }else{ ?>
			<br /><br />- <?php echo smartyTranslate(array('s'=>'Do not forget to insert your order reference %s in the subject of your bank wire.','sprintf'=>$_smarty_tpl->tpl_vars['reference']->value,'mod'=>'bankwire'),$_smarty_tpl);?>

		<?php }?>		<br /><br /><?php echo smartyTranslate(array('s'=>'An email has been sent with this information.','mod'=>'bankwire'),$_smarty_tpl);?>

		<br /><br /> <strong><?php echo smartyTranslate(array('s'=>'Your order will be sent as soon as we receive payment.','mod'=>'bankwire'),$_smarty_tpl);?>
</strong>
		<br /><br /><?php echo smartyTranslate(array('s'=>'If you have questions, comments or concerns, please contact our','mod'=>'bankwire'),$_smarty_tpl);?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('contact',true);?>
"><?php echo smartyTranslate(array('s'=>'expert customer support team. ','mod'=>'bankwire'),$_smarty_tpl);?>
</a>.
	</p>
<?php }else{ ?>
	<p class="warning">
		<?php echo smartyTranslate(array('s'=>'We noticed a problem with your order. If you think this is an error, feel free to contact our','mod'=>'bankwire'),$_smarty_tpl);?>
 
		<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('contact',true);?>
"><?php echo smartyTranslate(array('s'=>'expert customer support team. ','mod'=>'bankwire'),$_smarty_tpl);?>
</a>.
	</p>
<?php }?>
<?php }} ?>