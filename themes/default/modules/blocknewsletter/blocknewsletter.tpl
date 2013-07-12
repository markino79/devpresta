{*
* 2007-2013 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2013 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}

<!-- Block Newsletter module-->
<div id="newsletter_block_left" class="block">
	<p class="title_block">{l s='Newsletter' mod='blocknewsletter'}</p>
	<div class="block_content">
	{if isset($msg) && $msg}
		<p class="{if $nw_error}warning_inline{else}success_inline{/if}">{$msg}</p>
	{/if}
		<form name="NewsletterForm" action="{$link->getPageLink('index')}" method="post" onsubmit="return checkPrivacyNewsletterForm();">
			<p>
				{* @todo use jquery (focusin, focusout) instead of onblur and onfocus *}
				<input type="text" name="email" size="18" 
					value="{if isset($value) && $value}{$value}{else}{l s='your e-mail' mod='blocknewsletter'}{/if}" 
					onfocus="javascript:if(this.value=='{l s='your e-mail' mod='blocknewsletter' js=1}')this.value='';" 
					onblur="javascript:if(this.value=='')this.value='{l s='your e-mail' mod='blocknewsletter' js=1}';" 
					class="inputNew" />
					
					<p class="newsletter_privacy_content">
						<input type="checkbox" value="1" id="customer_privacy" name="customer_privacy" style="float:left;margin: 15px;" />
						<label for="customer_privacy">{l s='Autorizzo il trattamento dei dati personali ai sensi dell\'articolo 13 D.Lgs. 196/2003' mod='blocknewsletter'} <a href="{$base_dir}cms.php?id_cms=6" target="_blank">({l s='informativa' mod='blocknewsletter'})</a></label>
					</p>
					<script type="text/javascript">
					function checkPrivacyNewsletterForm() {
						valid = true;
						var privacyAlertTxt = "{l s='Si prega di leggere ed accettare l\'Informativa Privacy' mod='blocknewsletter' js=1}";
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
