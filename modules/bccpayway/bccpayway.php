<?php

class BccPayway extends PaymentModule{
	public function __construct(){
		$this->name = 'bccpayway';
		$this->tab = 'payments_gateways';
		$this->version = '1.0';
		$this->author = 'Artera';
		
		$this->currencies = true;
		$this->currencies_mode = 'radio';
		
		parent::__construct();
		
		$this->displayName = $this->l('BCC Payway');
		$this->description = $this->l('Gateway di pagamento BCC payway');
		$this->confirmUninstall = $this->l('Sicuro di voler disinstallare il modulo?');
	}
	public function install(){
		if (Shop::isFeatureActive())
			Shop::setContext(Shop::CONTEXT_ALL);
		
		$install = true;
		if (!parent::install()
			|| !$this->registerHook('payment')
			|| !$this->registerHook('paymentReturn')
			)
		$install = false;
		
		Configuration::updateValue('BCCPAYWAY_URL', 'https://wsso.bccsoar.it:443/vtrans/ezcode.do');
		Configuration::updateValue('BCCPAYWAY_TITLE', 'Pagamento con carte di credito');
		Configuration::updateValue('BCCPAYWAY_MESSAGE', 'Sta per essere reindirizzato al sito della banca');
		
		if (!Configuration::get('BCCPAYWAY_OS_AUTHORIZATION')){
			$orderState = new OrderState();
			$orderState->name = array();

			foreach (Language::getLanguages() as $language){
				$orderState->name[$language['id_lang']] = 'In attesa di pagamento da BCC';
			}

			$orderState->send_email = false;
			$orderState->color = '#DDEEFF';
			$orderState->hidden = false;
			$orderState->delivery = false;
			$orderState->logable = false;
			$orderState->invoice = false;
			$orderState->module_name = $this->name;
			if ($orderState->add())
			{
				$source = dirname(__FILE__).'/BCC.gif';
				$destination = dirname(__FILE__).'/../../img/os/'.(int)$orderState->id.'.gif';
				copy($source, $destination);
			}
			Configuration::updateValue('BCCPAYWAY_OS_AUTHORIZATION', (int)$orderState->id);
		}
	}
	public function uninstall(){
		Configuration::deleteByName('BCCPAYWAY_OS_AUTHORIZATION');
		Configuration::deleteByName('BCCPAYWAY_URL');
		Configuration::deleteByName('BCCPAYWAY_TITLE');
		Configuration::deleteByName('BCCPAYWAY_MARCHANT_ID');
		Configuration::deleteByName('BCCPAYWAY_MESSAGE');
		return parent::uninstall();
	}
	public function getContent(){
		$output = null;
		
		if (Tools::isSubmit('submit'.$this->name)){
			$url = strval(Tools::getValue('BCCPAYWAY_URL')); 
			$title = strval(Tools::getValue('BCCPAYWAY_TITLE')); 
			$marchant_id = strval(Tools::getValue('BCCPAYWAY_MARCHANT_ID')); 
			$message = strval(Tools::getValue('BCCPAYWAY_MESSAGE')); 
			
			$valid = true;
			if (!$url || empty($url) || !Validate::isAbsoluteUrl($url)){ 
				$output .= $this->displayError($this->l("Invalid url"));
				$valid = false;
			}
			if (!$title || empty($title)){ 
				$output .= $this->displayError($this->l("Invalid title"));
				$valid = false;
			}
			if (!$marchant_id || empty($marchant_id)){ 
				$output .= $this->displayError($this->l("Invalid marchant id"));
				$valid = false;
			}
			if (!$message || empty($message)){ 
				$output .= $this->displayError($this->l("Invalid message"));
				$valid = false;
			}
			
			if($valid){
				Configuration::updateValue('BCCPAYWAY_URL',$url);
				Configuration::updateValue('BCCPAYWAY_TITLE',$title);
				Configuration::updateValue('BCCPAYWAY_MARCHANT_ID',$marchant_id);
				Configuration::updateValue('BCCPAYWAY_MESSAGE',$message);
				$output .= $this->displayConfirmation($this->l('Settings update'));
			}
		}
		return $output .$this->_displayForm();
	}
	protected function _displayForm(){
		$default_lang = (int) Configuration::get('PS_LANG_DEFAULT');
		$config_value = Configuration::getMultiple(
			array(
				'BCCPAYWAY_URL',
				'BCCPAYWAY_MARCHANT_ID',
				'BCCPAYWAY_TITLE',
				'BCCPAYWAY_MESSAGE'
			)
		);
		$fields_form[0]['form'] = array(
			'legend' => array(
				'title' => $this->l('Settings')
			),
			'input' => array(
				array(
					'type' => 'text',
					'label' => $this->l('BCC url'),
					'name' => 'BCCPAYWAY_URL',
					'size' => 60,
					'required' => true
				),
				array(
					'type' => 'text',
					'label' => $this->l('Marchant id'),
					'name' => 'BCCPAYWAY_MARCHANT_ID',
					'size' => 60,
					'required' => true
				),
				array(
					
					'type' => 'textarea',
					'label' => $this->l('Payment method title'),
					'name' => 'BCCPAYWAY_TITLE',
					'cols' => 65,
					'rows' => 5,
					'required' => true,
				),
				array(
					'type' => 'textarea',
					'label' => $this->l('Message shown before gateway reindex'),
					'name' => 'BCCPAYWAY_MESSAGE',
					'cols' => 65,
					'rows' => 5,
					'required' => true
				),
			),
			'submit' => array(
				'title' => $this->l('Save new value')
			)
		);
		
		$helper = new HelperForm();
		
		$helper->module = $this;
		$helper->name_controller = $this->name;
		$helper->token = Tools::getAdminTokenLite('AdminModules');
		$helper->currentIndex = AdminController::$currentIndex.'&configure='.$this->name;
		
		$helper->default_form_language = $default_lang;
		$helper->allow_employee_from_lang = $default_lang;
		
		$helper->title = $this->displayName;
		$helper->show_toolbar = true; 
		$helper->toolbar_scroll = true; 
		$helper->submit_action = 'submit'.$this->name;
		$helper->languages = Language::getLanguages(false);
		
		$helper->toolbar_btn = array(
			'save' => array(
				'desc' => $this->l('Salva impostazioni'),
				'href' => AdminController::$currentIndex
						. '&configure=' . $this->name
						. '&save=' . $this->name
						. '&token='. Tools::getAdminTokenLite('AdminModules'),
			),
			'back' => array(
				'desc' => $this->l('Back to list'),
				'href' => AdminController::$currentIndex
						. '&token='.Tools::getAdminTokenLite('AdminModules')
			)
		);
		
		$helper->fields_value = array_merge($helper->fields_value, $config_value);
		
		return $helper->generateForm($fields_form);
	}
	public function hookPayment($params){
		if (!$this->active) return;
		
		$config_value = Configuration::getMultiple(
			array(
				'BCCPAYWAY_TITLE',
				'BCCPAYWAY_MESSAGE'
			)
		);
		
		$this->smarty->assign(array(
			'this_path' => $this->_path,
			'this_path_ssl' => Tools::getShopDomainSsl(true, true).__PS_BASE_URI__.'modules/'.$this->name.'/'
		));
		$this->smarty->assign($config_value);
		
		return $this->display(__FILE__, 'payment.tpl');
	}
	public function hookPaymentReturn($params){
		if (!$this->active) return;
		
		$this->smarty->assign(array('params' => $params));
		
		return $this->display(__FILE__, 'payment_return.tpl');
	}
}