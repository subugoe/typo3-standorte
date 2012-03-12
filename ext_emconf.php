<?php

########################################################################
# Extension Manager/Repository config file for ext "standorte".
#
# Auto generated 29-11-2011 13:13
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
	'version' => '2.0.0',
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
			'extbase' => '0.0.0-0.0.0',
			'fluid' => '0.0.0-0.0.0',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:65:{s:9:"ChangeLog";s:4:"1c27";s:6:"README";s:4:"adc1";s:9:"build.xml";s:4:"c3a3";s:12:"ext_icon.gif";s:4:"64af";s:17:"ext_localconf.php";s:4:"aafe";s:14:"ext_tables.php";s:4:"daa0";s:14:"ext_tables.sql";s:4:"a450";s:16:"locallang_db.xml";s:4:"7ca4";s:12:"t3jquery.txt";s:4:"3353";s:40:"Classes/Controller/BackendController.php";s:4:"1f27";s:43:"Classes/Controller/BibliothekController.php";s:4:"973e";s:42:"Classes/Controller/FakultaetController.php";s:4:"5ad1";s:35:"Classes/Domain/Model/Bibliothek.php";s:4:"1608";s:34:"Classes/Domain/Model/Fakultaet.php";s:4:"5266";s:50:"Classes/Domain/Repository/BibliothekRepository.php";s:4:"add5";s:49:"Classes/Domain/Repository/FakultaetRepository.php";s:4:"0933";s:25:"Classes/Hooks/Sidebar.php";s:4:"7486";s:39:"Classes/ViewHelpers/SigelViewHelper.php";s:4:"a7ed";s:42:"Classes/ViewHelpers/TypolinkViewHelper.php";s:4:"8ad2";s:58:"Configuration/TCA/tx_standorte_domain_model_bibliothek.php";s:4:"54c4";s:57:"Configuration/TCA/tx_standorte_domain_model_fakultaet.php";s:4:"afc2";s:34:"Configuration/TypoScript/setup.txt";s:4:"6f2a";s:33:"Resources/Private/Infos/Antje.csv";s:4:"bf50";s:32:"Resources/Private/Infos/alte.xml";s:4:"8bda";s:33:"Resources/Private/Infos/antje.txt";s:4:"c10d";s:31:"Resources/Private/Infos/exports";s:4:"8786";s:32:"Resources/Private/Infos/l10n.txt";s:4:"4457";s:44:"Resources/Private/Language/locallang.mod.xml";s:4:"37b7";s:40:"Resources/Private/Language/locallang.xml";s:4:"20e3";s:44:"Resources/Private/Layouts/backendLayout.html";s:4:"47af";s:44:"Resources/Private/Layouts/defaultLayout.html";s:4:"2ab2";s:41:"Resources/Private/Partials/backendJs.html";s:4:"6a4f";s:39:"Resources/Private/Partials/bestand.html";s:4:"7108";s:36:"Resources/Private/Partials/bild.html";s:4:"4311";s:37:"Resources/Private/Partials/sigel.html";s:4:"768f";s:57:"Resources/Private/Templates/Backend/DeleteBibliothek.html";s:4:"3b0c";s:46:"Resources/Private/Templates/Backend/Index.html";s:4:"b22f";s:57:"Resources/Private/Templates/Backend/ListBibliotheken.html";s:4:"4c88";s:68:"Resources/Private/Templates/Backend/ListBibliothekenByFakultaet.html";s:4:"9975";s:56:"Resources/Private/Templates/Backend/ListFakultaeten.html";s:4:"add8";s:49:"Resources/Private/Templates/Bibliothek/Index.html";s:4:"20e9";s:48:"Resources/Private/Templates/Bibliothek/List.html";s:4:"d3cf";s:58:"Resources/Private/Templates/Bibliothek/ListBibMitLink.html";s:4:"982c";s:58:"Resources/Private/Templates/Bibliothek/ListSigelTitel.html";s:4:"fef3";s:50:"Resources/Private/Templates/Bibliothek/Single.html";s:4:"f3d7";s:48:"Resources/Private/Templates/Fakultaet/Index.html";s:4:"c49d";s:47:"Resources/Private/Templates/Fakultaet/List.html";s:4:"d091";s:32:"Resources/Public/Css/backend.css";s:4:"13c6";s:34:"Resources/Public/Css/standorte.css";s:4:"4f86";s:45:"Resources/Public/Js/jquery.tablesorter.min.js";s:4:"94e7";s:43:"Resources/Public/Js/jquery.uitablefilter.js";s:4:"668f";s:27:"Resources/Public/Js/maps.js";s:4:"66b2";s:29:"Resources/Public/eId/maps.php";s:4:"1bce";s:28:"Resources/Public/img/asc.gif";s:4:"f8a1";s:27:"Resources/Public/img/bg.gif";s:4:"c01a";s:31:"Resources/Public/img/closed.gif";s:4:"acbf";s:29:"Resources/Public/img/desc.gif";s:4:"a548";s:66:"Resources/Public/img/icon_tx_standorte_domain_model_bibliothek.png";s:4:"0ba8";s:65:"Resources/Public/img/icon_tx_standorte_domain_model_fakultaet.png";s:4:"99be";s:71:"Resources/Public/img/icon_tx_standorte_domain_model_oeffnungszeiten.png";s:4:"f1ca";s:31:"Resources/Public/img/opened.gif";s:4:"d7ba";s:34:"Resources/Public/img/standorte.png";s:4:"3ea3";s:15:"build/phpcs.xml";s:4:"ab01";s:15:"build/phpmd.xml";s:4:"ab48";s:14:"doc/manual.sxw";s:4:"e0af";}',
	'suggests' => array(
	),
);

?>