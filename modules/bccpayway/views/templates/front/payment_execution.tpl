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

{capture name=path}{l s=$title mod='bccpayway'}{/capture}
{include file="$tpl_dir./breadcrumb.tpl"}

{assign var='current_step' value='payment'}
{include file="$tpl_dir./order-steps.tpl"}



<h3>{l s=$message mod='bccpayway'}</h3>
<form action="{$action_form}" id="bccpayway_form" name="bccpayway_form"  method="post">
	<input type="hidden" value="{$MID}" name="MID" />
	<input type="hidden" value="artera-{$OID}" name="OID" />
	<input type="hidden" value="{$IMP}" name="IMP" />
	<input type="hidden" value="{$LAN}" name="LAN" />
	<input type="hidden" value="{$_EMail}" name="_EMail" />
	<input type="hidden" value="{$_Nome}" name="_Nome" />
	<input type="hidden" value="{$check}" name="check" />
	<input type="hidden" value="true" name="TEST" />
</form>

{literal}
<script type="text/javascript">
	$(document).ready( function() {
		$('#bccpayway_form').submit();
	});
</script>
{/literal}