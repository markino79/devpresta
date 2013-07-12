<?php

class mymoduledisplayModuleFrontController extends ModuleFrontController{
	public function initContent(){
		parent::initContent();
		$this->context->smarty->assign('nome','Markino');
		$this->setTemplate('display.tpl');
	}
}