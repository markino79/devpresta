<?php /* Smarty version Smarty-3.1.13, created on 2013-07-12 12:33:09
         compiled from "/srv/http/prestashop_develop/public_html/themes/default/modules/blocknewsletter/blocknewsletter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:110170993151dfdb651fe2f9-33383360%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '226e6b7f58949939481d580c93364419287d480d' => 
    array (
      0 => '/srv/http/prestashop_develop/public_html/themes/default/modules/blocknewsletter/blocknewsletter.tpl',
      1 => 1371485153,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '110170993151dfdb651fe2f9-33383360',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'msg' => 0,
    'nw_error' => 0,
    'link' => 0,
    'value' => 0,
    'base_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51dfdb6527d996_15110406',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51dfdb6527d996_15110406')) {function content_51dfdb6527d996_15110406($_smarty_tpl) {?>

<!-- Block Newsletter module-->
<div id="newsletter_block_left" class="block">
	<p class="title_block"><?php echo smartyTranslate(array('s'=>'Newsletter','mod'=>'blocknewsletter'),$_smarty_tpl);?>
</p>
	<div class="block_content">
	<?php if (isset($_smarty_tpl->tpl_vars['msg']->value)&&$_smarty_tpl->tpl_vars['msg']->value){?>
		<p class="<?php if ($_smarty_tpl->tpl_vars['nw_error']->value){?>warning_inline<?php }else{ ?>success_inline<?php }?>"><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</p>
	<?php }?>
		<form name="NewsletterForm" action="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('index');?>
" method="post" onsubmit="return checkPrivacyNewsletterForm();">
			<p>
				
				<input type="text" name="email" size="18" 
					value="<?php if (isset($_smarty_tpl->tpl_vars['value']->value)&&$_smarty_tpl->tpl_vars['value']->value){?><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
<?php }else{ ?><?php echo smartyTranslate(array('s'=>'your e-mail','mod'=>'blocknewsletter'),$_smarty_tpl);?>
<?php }?>" 
					onfocus="javascript:if(this.value=='<?php echo smartyTranslate(array('s'=>'your e-mail','mod'=>'blocknewsletter','js'=>1),$_smarty_tpl);?>
')this.value='';" 
					onblur="javascript:if(this.value=='')this.value='<?php echo smartyTranslate(array('s'=>'your e-mail','mod'=>'blocknewsletter','js'=>1),$_smarty_tpl);?>
';" 
					class="inputNew" />
					
					<p class="newsletter_privacy_content">
						<input type="checkbox" value="1" id="customer_privacy" name="customer_privacy" style="float:left;margin: 15px;" />
						<label for="customer_privacy"><?php echo smartyTranslate(array('s'=>'Autorizzo il trattamento dei dati personali ai sensi dell\'articolo 13 D.Lgs. 196/2003','mod'=>'blocknewsletter'),$_smarty_tpl);?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
cms.php?id_cms=6" target="_blank">(<?php echo smartyTranslate(array('s'=>'informativa','mod'=>'blocknewsletter'),$_smarty_tpl);?>
)</a></label>
					</p>
					<script type="text/javascript">
					function checkPrivacyNewsletterForm() {
						valid = true;
						var privacyAlertTxt = "<?php echo smartyTranslate(array('s'=>'Si prega di leggere ed accettare l\'Informativa Privacy','mod'=>'blocknewsletter','js'=>1),$_smarty_tpl);?>
";
						if ( document.NewsletterForm.customer_privacy.checked == false ) {
							alert (privacyAlertTxt);
							valid = false;
						}
						return valid;
					}
					</script>
					
					<input type="submit" value="ok" class="button_mini" name="submitNewsletter" />
				<input type="hidden" name="action" value="0" />
			</p>
		</form>
	</div>
</div>
<!-- /Block Newsletter module-->
<?php }} ?>