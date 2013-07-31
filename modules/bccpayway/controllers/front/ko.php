<?php

class BccpaywayKoModuleFrontController extends ModuleFrontController{
	public $ssl = true;

	/**
	 * @see FrontController::initContent()
	 */
	public function initContent(){
		$this->addCSS($this->module->getPathUri().'views/css/bccpayway.css','all');
		$this->display_column_left = false;
		parent::initContent();
		$message = "Si è verificato un errore durante la procedura di pagamento.";
		if (Tools::getValue('message')){
			$message = Tools::getValue('message');
		}
		
		$this->context->smarty->assign(array(
			'title' => 'Errore pagamento',
			'message' => $message,
		));

		$this->setTemplate('ko.tpl');
	}
} 
