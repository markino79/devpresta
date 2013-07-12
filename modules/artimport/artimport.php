<?php

class ArtImport extends Module{
	public function __construct(){
		$this->name = 'artimport';
		$this->tab = 'administration';
		$this->version = '1.0';
		$this->author = 'Marco Pinna';
		$this->nedd_instance = 0;
		parent::__construct();
		$this->displayName = $this->l('100-one.it import');
		$this->description = $this->l('Custom XML import for 100-one.it');
	}
}
