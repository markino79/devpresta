<?php
/// stringa inserita per ragioni di sicurezza in modo che il file non possa essere
/// lanciato 'da solo'
if (!defined('_PS_VERSION_'))
	exit;

/// la classe del modulo deve estendere la classe module
/// Ma ovviemante può estendere qualsiasa altra classe che estende Module in caso di usi specifici
/// Esempio: PaymentModule, ModuleGridEngine, ModuleGraph...
class MyModule extends Module{
	public function __construct(){
		///identificatore del modulo deve essere il nome della cartella 
		$this->name = 'mymodule';
		/// Il titolo della sezione che conterrà il modulo nella lista dei moduli del backoffice
		/// si dovrebbe usare un nome esistente come seo, front_office_features o analytics_stats
		/// oppure uno creato custom in questo caso una nuova sezione verrà creata
		$this->tab = 'front_office_features';
		/// versione del modulo
		$this->version = '1.0';
		/// nome autore verrà visualizza nell a lista moduli
		$this->author = "Marco Pinna";
		/// se nella lista moduli è necessario caricare un istanza del modulo
		/// se si usa il warning message deve essere impostata a 1
		/// se la si imposta a zero è più veloce la visualizzazione della pagina
		$this->need_instance = 0;
		/// versioni compatibili
		$this->ps_version_complicancy = array('min' => '1.5', 'max' => '1.5');
		/// dipendenze
		$this->dependecies = array('blockcart');
		
		/// la chiamata al costruttore padre va fatta dopo la valorizzazione di $this->name
		/// e prima di un qualsiasa chiama a l mentodo $this->l
		parent::__construct();

		$this->displayName = $this->l('First module'); /// nome visualizzato nella lista moduli
		$this->description = $this->l('My first module *_*'); /// descrizione visualizzato nella lista moduli
		/// Un messaggio con la domanda che viene fuori chiedendoti se lo vuoi disinstallare
		$this->confirmUninstall = $this->l('Are you sure that you want uninstall this moudule?');
		
		if (!Configuration::get('MYMODULE_NAME'))
			$this->warning = $this->l('module name not provided');
	}
	public function install(){
		if (Shop::isFeatureActive())
			Shop::setContext(Shop::CONTEXT_ALL);
			
		return parent::install() &&
			$this->registerHook('leftColumn') &&
			$this->registerHook('rightColumn') &&
			$this->registerHook('header') &&
			Configuration::updateValue('MYMODULE_NAME', 'My friend');
	}
	public function uninstall(){
		return parent::uninstall() && Configuration::deleteByName('MYMODULE_NAME');
	}
	public function hookDisplayLeftColumn($params){
		$this->context->smarty->assign(
			array(
				'my_module_name' => Configuration::get('MYMODULE_NAME'),
				'my_module_link' => $this->context->link->getModuleLink('mymodule','display')
			)
		);
		return $this->display(__FILE__,'mymodule.tpl');
	}
	public function hookDisplayRightColumn($params){
		return $this->hookDisplayLeftColumn($params);
	}
	public function hookDisplayHeader(){
		$this->context->controller->addCSS($this->_path.'views/css/mymodule.css','all');
	}
	
	/** 
		having a getContent() public method in the My object make the "Configure" link appear
	*/
	public function getContent(){
		$output = null;
		
		if (Tools::isSubmit('submit'.$this->name)){
			$my_module_name = strval(Tools::getValue('MYMODULE_NAME')); /// retrieve the content of the POST or GET array in order to get the value of the specified variable.
			/// The Validate object contains many data validation methods
			if (!$my_module_name || empty($my_module_name) || !Validate::isGenericName($my_module_name)){ 
				$output .= $this->displayError($this->l("invalid name"));
			}else{
				Configuration::updateValue('MYMODULE_NAME',$my_module_name);
				$output .= $this->displayConfirmation($this->l('Settings update'));
			}
		}
		return $output .$this->displayForm();
	}
	public function displayForm(){
		/// Get default Language
		$default_lang = (int) Configuration::get('PS_LANG_DEFAULT');
		
		/// Init Fields form array
		$fields_form[0]['form'] = array(
			'legend' => array(
				'title' => $this->l('Settings')
			),
			'input' => array(
				array(
					'type' => 'text',
					'label' => $this->l('Configuration Value'),
					'name' => 'MYMODULE_NAME',
					'size' => 20,
					'required' => true
				)
			),
			'submit' => array(
				'title' => $this->l('Save new value'),
				/// sembra inutile inserire questa classa tanto il bottono non è visualizzato
// 				'class' => 'button' 
			)
		);
		
		$helper = new HelperForm();
		
		/// Module, token and currentIndex
		$helper->module = $this;
		$helper->name_controller = $this->name;
		$helper->token = Tools::getAdminTokenLite('AdminModules');
		/// current index viene messo nell'action del form
		$helper->currentIndex = AdminController::$currentIndex.'&configure='.$this->name;
		
		/// Language
		$helper->default_form_language = $default_lang;
		$helper->allow_employee_from_lang = $default_lang;
		
		/// Title nad toolbar
		$helper->title = $this->displayName;
		$helper->show_toolbar = true; /// false remuve toolbar
		$helper->toolbar_scroll = true; /// true Toolbar is always visible on the top of the screen 
		$helper->submit_action = 'submit'.$this->name; /// nome del bottone submit
		/// l'indice 'save' serve solo a far apparire il pulsante salva
		/// poi in realtà scatena l'evento submit e tutti si suoi valori sono sovrascritti
		/// da quelli inseriti nel campo submit inserito nei valori del form
		$helper->toolbar_btn = array(
			'save' => array(
				'desc' => $this->l('Save values'),
				'href' => AdminController::$currentIndex
							.'&configure='.$this->name
							.'&save='.$this->name
							.'&token='.Tools::getAdminTokenLite('AdminModules'),
			),
			'back' => array(
				'desc' => $this->l('Back to list'),
				'href' => AdminController::$currentIndex
							.'&token='.Tools::getAdminTokenLite('AdminModules')
			)
		);
		
		/// Load current value
		$helper->fields_value['MYMODULE_NAME'] = Configuration::get('MYMODULE_NAME');
		
		return $helper->generateForm($fields_form);
	}
}