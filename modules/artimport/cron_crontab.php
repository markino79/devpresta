<?php
define('_PS_ADMIN_DIR_', realpath(dirname(__FILE__).'/../../ps-admin'));

require(dirname(__FILE__).'/../../config/config.inc.php');

$_GET['skip'] = 0;
$_GET['csv'] = 'ArtModa.xml';
$_GET['convert'] = "";
$_GET['entity'] = 7;
$_GET['iso_lang'] = 'it';
$_GET['separator'] = ';';
$_GET['multiple_value_separator'] = ',';
$_GET['import'] = 1;
$_GET['type_value'] = array(
	'articolo-variante',
	'articolo_x0020_codice_x0020_esterno',
	'articolo',
	'variante',
	'codice_x0020_fornitore',
	'fornitore',
	'Tipo_x0020_Sigla',
	'Tipo_x0020_Descrizione',
	'Reparto_x0020_Sigla',
	'Reparto_x0020_Descrizione',
	'Sottoreparto_x0020_Sigla',
	'Sottoreparto_x0020_Descrizione',
	'Categoria_x0020_Sigla',
	'Categoria_x0020_Descrizione',
	'Marchio_x0020_Sigla',
	'Marchio_x0020_Descrizione',
	'OLD_x0020_Sigla',
	'OLD_x0020_Descrizione',
	'tg1',
	'tg2',
	'tg3',
	'tg4',
	'tg5',
	'tg6',
	'tg7',
	'tg8',
	'tg9',
	'tg10',
	'tg11',
	'tg12',
	'tg13',
	'tg14',
	'tg15',
	'tg16',
	'tg17',
	'tg18',
	'tg19',
	'tg20',
	'tg21',
	'tg22',
	'tg23',
	'tg24',
	'tg25',
	'tg26',
	'tg27',
	'tg28',
	'tg29',
	'tg30',
	'giacenza_x0020_tg1',
	'giacenza_x0020_tg2',
	'giacenza_x0020_tg3',
	'giacenza_x0020_tg4',
	'giacenza_x0020_tg5',
	'giacenza_x0020_tg6',
	'giacenza_x0020_tg7',
	'giacenza_x0020_tg8',
	'giacenza_x0020_tg9',
	'giacenza_x0020_tg10',
	'giacenza_x0020_tg11',
	'giacenza_x0020_tg12',
	'giacenza_x0020_tg13',
	'giacenza_x0020_tg14',
	'giacenza_x0020_tg15',
	'giacenza_x0020_tg16',
	'giacenza_x0020_tg17',
	'giacenza_x0020_tg18',
	'giacenza_x0020_tg19',
	'giacenza_x0020_tg20',
	'giacenza_x0020_tg21',
	'giacenza_x0020_tg22',
	'giacenza_x0020_tg23',
	'giacenza_x0020_tg24',
	'giacenza_x0020_tg25',
	'giacenza_x0020_tg26',
	'giacenza_x0020_tg27',
	'giacenza_x0020_tg28',
	'giacenza_x0020_tg29',
	'giacenza_x0020_tg30',
	'prezzo_x0020_vendita_x0020_tg1',
	'prezzo_x0020_vendita_x0020_tg2',
	'prezzo_x0020_vendita_x0020_tg3',
	'prezzo_x0020_vendita_x0020_tg4',
	'prezzo_x0020_vendita_x0020_tg5',
	'prezzo_x0020_vendita_x0020_tg6',
	'prezzo_x0020_vendita_x0020_tg7',
	'prezzo_x0020_vendita_x0020_tg8',
	'prezzo_x0020_vendita_x0020_tg9',
	'prezzo_x0020_vendita_x0020_tg10',
	'prezzo_x0020_vendita_x0020_tg11',
	'prezzo_x0020_vendita_x0020_tg12',
	'prezzo_x0020_vendita_x0020_tg13',
	'prezzo_x0020_vendita_x0020_tg14',
	'prezzo_x0020_vendita_x0020_tg15',
	'prezzo_x0020_vendita_x0020_tg16',
	'prezzo_x0020_vendita_x0020_tg17',
	'prezzo_x0020_vendita_x0020_tg18',
	'prezzo_x0020_vendita_x0020_tg19',
	'prezzo_x0020_vendita_x0020_tg20',
	'prezzo_x0020_vendita_x0020_tg21',
	'prezzo_x0020_vendita_x0020_tg22',
	'prezzo_x0020_vendita_x0020_tg23',
	'prezzo_x0020_vendita_x0020_tg24',
	'prezzo_x0020_vendita_x0020_tg25',
	'prezzo_x0020_vendita_x0020_tg26',
	'prezzo_x0020_vendita_x0020_tg27',
	'prezzo_x0020_vendita_x0020_tg28',
	'prezzo_x0020_vendita_x0020_tg29',
	'prezzo_x0020_vendita_x0020_tg30',
	'tab_x0020_stagione_x0020_sigla',
	'tab_x0020_stagione_x0020_descrizione',
	'prezzo2_x0020_vendita_x0020_tg1',
	'prezzo2_x0020_vendita_x0020_tg2',
	'prezzo2_x0020_vendita_x0020_tg3',
	'prezzo2_x0020_vendita_x0020_tg4',
	'prezzo2_x0020_vendita_x0020_tg5',
	'prezzo2_x0020_vendita_x0020_tg6',
	'prezzo2_x0020_vendita_x0020_tg7',
	'prezzo2_x0020_vendita_x0020_tg8',
	'prezzo2_x0020_vendita_x0020_tg9',
	'prezzo2_x0020_vendita_x0020_tg10',
	'prezzo2_x0020_vendita_x0020_tg11',
	'prezzo2_x0020_vendita_x0020_tg12',
	'prezzo2_x0020_vendita_x0020_tg13',
	'prezzo2_x0020_vendita_x0020_tg14',
	'prezzo2_x0020_vendita_x0020_tg15',
	'prezzo2_x0020_vendita_x0020_tg16',
	'prezzo2_x0020_vendita_x0020_tg17',
	'prezzo2_x0020_vendita_x0020_tg18',
	'prezzo2_x0020_vendita_x0020_tg19',
	'prezzo2_x0020_vendita_x0020_tg20',
	'prezzo2_x0020_vendita_x0020_tg21',
	'prezzo2_x0020_vendita_x0020_tg22',
	'prezzo2_x0020_vendita_x0020_tg23',
	'prezzo2_x0020_vendita_x0020_tg24',
	'prezzo2_x0020_vendita_x0020_tg25',
	'prezzo2_x0020_vendita_x0020_tg26',
	'prezzo2_x0020_vendita_x0020_tg27',
	'prezzo2_x0020_vendita_x0020_tg28',
	'prezzo2_x0020_vendita_x0020_tg29',
	'prezzo2_x0020_vendita_x0020_tg30',
	'articolo_x0020_descrizione2',
	'tab_x0020_tipo_x0020_taglia_x0020_sigla',
	'nogozio_x0020_sigla',
	'nogozio_x0020_descrizione',
	'articolo_x0020_note',
	'tab_x0020_tipo_x0020_taglia_x0020_descrizione'
);

if (file_exists(_PS_ADMIN_DIR_.'/import/ArtModa.xml')){
	Context::getContext()->controller = new AdminImportController();
	Context::getContext()->controller->Xml100OneImport();
	unlink(_PS_ADMIN_DIR_.'/import/ArtModa.xml');
}


