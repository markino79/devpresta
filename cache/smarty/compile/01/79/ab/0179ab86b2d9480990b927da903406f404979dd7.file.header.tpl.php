<?php /* Smarty version Smarty-3.1.13, created on 2013-07-12 14:03:29
         compiled from "/srv/http/prestashop_develop/public_html/modules/ganalytics/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:89941958651dff091e686c5-90308920%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0179ab86b2d9480990b927da903406f404979dd7' => 
    array (
      0 => '/srv/http/prestashop_develop/public_html/modules/ganalytics/header.tpl',
      1 => 1371484247,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '89941958651dff091e686c5-90308920',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ganalytics_id' => 0,
    'pageTrack' => 0,
    'isOrder' => 0,
    'trans' => 0,
    'items' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51dff091efc544_95665378',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51dff091efc544_95665378')) {function content_51dff091efc544_95665378($_smarty_tpl) {?><script type="text/javascript">
var _gaq = _gaq || [];
_gaq.push(['_setAccount', '<?php echo $_smarty_tpl->tpl_vars['ganalytics_id']->value;?>
']);
// Recommanded value by Google doc and has to before the trackPageView
_gaq.push(['_setSiteSpeedSampleRate', 5]);

_gaq.push(['_trackPageview'<?php if (isset($_smarty_tpl->tpl_vars['pageTrack']->value)){?>, '<?php echo $_smarty_tpl->tpl_vars['pageTrack']->value;?>
'<?php }?>]);

<?php if ($_smarty_tpl->tpl_vars['isOrder']->value==true){?>		
  _gaq.push(['_addTrans',
    '<?php echo $_smarty_tpl->tpl_vars['trans']->value['id'];?>
',			
    '<?php echo $_smarty_tpl->tpl_vars['trans']->value['store'];?>
',		
    '<?php echo $_smarty_tpl->tpl_vars['trans']->value['total'];?>
',		
    '<?php echo $_smarty_tpl->tpl_vars['trans']->value['tax'];?>
',			
    '<?php echo $_smarty_tpl->tpl_vars['trans']->value['shipping'];?>
',	
    '<?php echo $_smarty_tpl->tpl_vars['trans']->value['city'];?>
',		
    '<?php echo $_smarty_tpl->tpl_vars['trans']->value['state'];?>
',		
    '<?php echo $_smarty_tpl->tpl_vars['trans']->value['country'];?>
'		
  ]);

	<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
		_gaq.push(['_addItem',
		'<?php echo $_smarty_tpl->tpl_vars['item']->value['OrderId'];?>
',		
		'<?php echo $_smarty_tpl->tpl_vars['item']->value['SKU'];?>
',			
		'<?php echo $_smarty_tpl->tpl_vars['item']->value['Product'];?>
',		
		'<?php echo $_smarty_tpl->tpl_vars['item']->value['Category'];?>
',		
		'<?php echo $_smarty_tpl->tpl_vars['item']->value['Price'];?>
',		
		'<?php echo $_smarty_tpl->tpl_vars['item']->value['Quantity'];?>
'		
		]);
	<?php } ?>
	

  _gaq.push(['_trackTrans']);	

<?php }?>

(function() {
	var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})(); 
</script>
<?php }} ?>