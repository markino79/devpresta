<?php

class BccpaywayPaymentModuleFrontController extends ModuleFrontController{
	public $ssl = true;

	/**
	 * @see FrontController::initContent()
	 */
	public function initContent(){
		$this->addCSS($this->module->getPathUri().'views/css/bccpayway.css','all');
		$this->display_column_left = false;
		parent::initContent();

		$cart = $this->context->cart;
		if ($cart->id_customer == 0 || $cart->id_address_delivery == 0 || $cart->id_address_invoice == 0 || !$this->module->active)
			Tools::redirect('index.php?controller=order&step=1');
			
		if (!$this->_autorized())
			die($this->module->l('This payment method is not available.', 'validation'));
			
		$customer = new Customer((int) $cart->id_customer);
		
		if (!Validate::isLoadedObject($customer))
			Tools::redirect('index.php?controller=order&step=1');
			
		$currency = $this->context->currency;
		$total = (float)$cart->getOrderTotal(true, Cart::BOTH);
		
		$this->module->validateOrder(
			$cart->id, 
			Configuration::get('BCCPAYWAY_OS_AUTHORIZATION'), 
			$total, 
			$this->module->displayName, 
			NULL, null, 
			(int)$currency->id, 
			false, 
			$customer->secure_key);

		$order = new Order($this->module->currentOrder);
		
		$this->context->smarty->assign(array(
			'title' => Configuration::get('BCCPAYWAY_TITLE'),
			'action_form' =>Configuration::get('BCCPAYWAY_URL'),
			'message' => Configuration::get('BCCPAYWAY_MESSAGE'),
			'MID' => Configuration::get('BCCPAYWAY_MARCHANT_ID') ,
			'OID' => $this->module->currentOrder ,
			'IMP' => number_format($order->total_paid_tax_incl,2,"","") ,
			'LAN' => "it" ,
			'_EMail' => $customer->email ,
			'_Nome' => $customer->lastname . " " . $customer->firstname,
			'check' => md5($this->module->currentOrder.$order->total_paid_tax_incl."crck3")
		));

		$this->setTemplate('payment_execution.tpl');
	}
	
	protected function _autorized(){
		$authorized = false;
		foreach (Module::getPaymentModules() as $module){
			if ($module['name'] == 'bankwire'){
				$authorized = true;
				break;
			}
		}
		return $authorized;
	}
} 
