<?php

########################################################################
# Extension Manager/Repository config file for ext "standorte".
#
# Auto generated 11-03-2011 11:52
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Standorte der SUB Goettingen',
	'description' => 'Anzeige der Standorte der SUB Goettingen inkl. Google Maps usw',
	'category' => 'plugin',
	'shy' => 0,
	'version' => '0.20.0',
	'dependencies' => 'extbase,fluid',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => '',
	'state' => 'beta',
	'uploadfolder' => 1,
	'createDirs' => '',
	'modify_tables' => '',
	'clearcacheonload' => 1,
	'lockType' => '',
	'author' => 'Ingo Pfennigstorf',
	'author_email' => 'pfennigstorf@sub.uni-goettingen.de',
	'author_company' => 'Goettingen State and University Library, Germany http://www.sub.uni-goettingen.de',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'constraints' => array(
		'depends' => array(
			'php' => '5.2.0-0.0.0',
			'typo3' => '4.4.0-4.9.99',
			'extbase' => '0.0.0-0.0.0',
			'fluid' => '0.0.0-0.0.0',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:58:{s:9:"ChangeLog";s:4:"2e39";s:6:"README";s:4:"adc1";s:12:"ext_icon.gif";s:4:"64af";s:17:"ext_localconf.php";s:4:"d562";s:14:"ext_tables.php";s:4:"b6fb";s:14:"ext_tables.sql";s:4:"9571";s:16:"locallang_db.xml";s:4:"3fa1";s:12:"t3jquery.txt";s:4:"1cac";s:40:"Classes/Controller/BackendController.php";s:4:"dbc0";s:43:"Classes/Controller/BibliothekController.php";s:4:"80fa";s:42:"Classes/Controller/FakultaetController.php";s:4:"5ad1";s:35:"Classes/Domain/Model/Bibliothek.php";s:4:"16e9";s:34:"Classes/Domain/Model/Fakultaet.php";s:4:"5266";s:50:"Classes/Domain/Repository/BibliothekRepository.php";s:4:"1a9a";s:49:"Classes/Domain/Repository/FakultaetRepository.php";s:4:"0933";s:25:"Classes/Hooks/Sidebar.php";s:4:"54c1";s:39:"Classes/ViewHelpers/SigelViewHelper.php";s:4:"3133";s:44:"Classes/ViewHelpers/TimeFormatViewHelper.php";s:4:"b4a1";s:42:"Classes/ViewHelpers/TypolinkViewHelper.php";s:4:"f1bb";s:58:"Configuration/TCA/tx_standorte_domain_model_bibliothek.php";s:4:"b833";s:57:"Configuration/TCA/tx_standorte_domain_model_fakultaet.php";s:4:"5022";s:34:"Configuration/TypoScript/setup.txt";s:4:"6f2a";s:44:"Resources/Private/Language/locallang.mod.xml";s:4:"37b7";s:40:"Resources/Private/Language/locallang.xml";s:4:"7f43";s:44:"Resources/Private/Layouts/backendLayout.html";s:4:"47af";s:44:"Resources/Private/Layouts/defaultLayout.html";s:4:"0719";s:41:"Resources/Private/Partials/backendJs.html";s:4:"288c";s:39:"Resources/Private/Partials/bestand.html";s:4:"649e";s:36:"Resources/Private/Partials/bild.html";s:4:"4311";s:37:"Resources/Private/Partials/sigel.html";s:4:"587d";s:57:"Resources/Private/Templates/Backend/deleteBibliothek.html";s:4:"3b0c";s:46:"Resources/Private/Templates/Backend/index.html";s:4:"b22f";s:57:"Resources/Private/Templates/Backend/listBibliotheken.html";s:4:"4c88";s:68:"Resources/Private/Templates/Backend/listBibliothekenByFakultaet.html";s:4:"9975";s:56:"Resources/Private/Templates/Backend/listFakultaeten.html";s:4:"add8";s:49:"Resources/Private/Templates/Bibliothek/index.html";s:4:"bd9f";s:48:"Resources/Private/Templates/Bibliothek/list.html";s:4:"5c37";s:58:"Resources/Private/Templates/Bibliothek/listSigelTitel.html";s:4:"8794";s:50:"Resources/Private/Templates/Bibliothek/single.html";s:4:"746a";s:48:"Resources/Private/Templates/Fakultaet/index.html";s:4:"f0bc";s:47:"Resources/Private/Templates/Fakultaet/list.html";s:4:"10f9";s:32:"Resources/Public/css/backend.css";s:4:"13c6";s:34:"Resources/Public/css/standorte.css";s:4:"a86b";s:29:"Resources/Public/eId/maps.php";s:4:"abb5";s:28:"Resources/Public/img/asc.gif";s:4:"f8a1";s:27:"Resources/Public/img/bg.gif";s:4:"c01a";s:34:"Resources/Public/img/closed_de.png";s:4:"6360";s:34:"Resources/Public/img/closed_en.png";s:4:"2e85";s:29:"Resources/Public/img/desc.gif";s:4:"a548";s:66:"Resources/Public/img/icon_tx_standorte_domain_model_bibliothek.png";s:4:"0ba8";s:65:"Resources/Public/img/icon_tx_standorte_domain_model_fakultaet.png";s:4:"99be";s:71:"Resources/Public/img/icon_tx_standorte_domain_model_oeffnungszeiten.png";s:4:"f1ca";s:34:"Resources/Public/img/opened_de.png";s:4:"e64a";s:34:"Resources/Public/img/opened_en.png";s:4:"97c4";s:34:"Resources/Public/img/standorte.png";s:4:"3ea3";s:45:"Resources/Public/js/jquery.tablesorter.min.js";s:4:"94e7";s:27:"Resources/Public/js/maps.js";s:4:"cfcc";s:14:"doc/manual.sxw";s:4:"e0af";}',
	'suggests' => array(
	),
);

?>