<?php

class BccpaywayOkModuleFrontController extends ModuleFrontController{

	/**
	 * @see FrontController::postProcess()
	 */
	public function postProcess(){
		try{
			throw new Exception("Prova ko");
			$order = new Order(Tools::getValue('OID'));
			
			$codAuto = Tools::getValue('CODAUTO') ;
			$stato = Tools::getValue('STA') ;
			$check = Tools::getValue('check') ;
			if($codAuto == null || $codAuto == ""){
				throw new Exception('Non è tornato il codice di autorizzazione');
			}
			
			if ($check != md5($order->id.$order->total_paid_tax_incl."crck3")){
				throw new Exception('Check di controllo corrotto');
			}
			
			$module = Module::getInstanceByName("bccpayway");
			
			$customer = new Customer($order->id_customer);
			
			if (Validate::isLoadedObject($order)){
				$new_history = new OrderHistory();
				$new_history->id_order = (int)$order->id;
				$new_history->changeIdOrderState((int)Configuration::get('PS_OS_WS_PAYMENT'), $order, true);
				$new_history->addWithemail(true);
			}else{
				throw new Exception('Check di controllo corrotto');
			}
			
			Tools::redirect(
				'index.php'
				.'?controller=order-confirmation'
				.'&id_cart='.$order->id_cart
				.'&id_module='.$module->id
				.'&id_order='.$order->id
				.'&key='.$customer->secure_key
			);
		}catch(Exception $e){
			$link = $this->context->link->getModuleLink('bccpayway','ko',array('message'=>$e->getMessage()));
			Tools::redirect($link);
		}
	}
}