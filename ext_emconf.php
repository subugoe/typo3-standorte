<?php

########################################################################
# Extension Manager/Repository config file for ext "standorte".
#
# Auto generated 13-03-2012 08:27
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
	'version' => '3.0.0',
	'dependencies' => '',
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
	'constraints' => array(
		'depends' => array(
			'typo3' => '6.2.0-6.2.99',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:64:{s:9:"ChangeLog";s:4:"9d7e";s:6:"README";s:4:"adc1";s:9:"build.xml";s:4:"6661";s:12:"ext_icon.gif";s:4:"64af";s:17:"ext_localconf.php";s:4:"5909";s:14:"ext_tables.php";s:4:"c2a1";s:14:"ext_tables.sql";s:4:"e0d4";s:16:"locallang_db.xml";s:4:"7ca4";s:12:"t3jquery.txt";s:4:"3353";s:40:"Classes/Controller/BackendController.php";s:4:"ae1c";s:43:"Classes/Controller/BibliothekController.php";s:4:"ee22";s:42:"Classes/Controller/FakultaetController.php";s:4:"1b76";s:35:"Classes/Domain/Model/Bibliothek.php";s:4:"3f45";s:34:"Classes/Domain/Model/Fakultaet.php";s:4:"225e";s:50:"Classes/Domain/Repository/BibliothekRepository.php";s:4:"2a8b";s:49:"Classes/Domain/Repository/FakultaetRepository.php";s:4:"a5c5";s:25:"Classes/Hooks/Sidebar.php";s:4:"182e";s:39:"Classes/ViewHelpers/SigelViewHelper.php";s:4:"cca8";s:42:"Classes/ViewHelpers/TypolinkViewHelper.php";s:4:"4675";s:58:"Configuration/TCA/tx_standorte_domain_model_bibliothek.php";s:4:"95a2";s:57:"Configuration/TCA/tx_standorte_domain_model_fakultaet.php";s:4:"afc2";s:34:"Configuration/TypoScript/setup.txt";s:4:"6f2a";s:31:"Documentation/Manual/Manual.rst";s:4:"a0b6";s:41:"Resources/Private/Language/_locallang.xml";s:4:"d278";s:43:"Resources/Private/Language/de.locallang.xlf";s:4:"9105";s:43:"Resources/Private/Language/en.locallang.xlf";s:4:"e5ac";s:44:"Resources/Private/Language/locallang.mod.xml";s:4:"37b7";s:44:"Resources/Private/Layouts/backendLayout.html";s:4:"47af";s:44:"Resources/Private/Layouts/defaultLayout.html";s:4:"8ff0";s:42:"Resources/Private/Partials/Bibliothek.html";s:4:"ac9a";s:41:"Resources/Private/Partials/backendJs.html";s:4:"b9a4";s:39:"Resources/Private/Partials/bestand.html";s:4:"7108";s:36:"Resources/Private/Partials/bild.html";s:4:"4311";s:37:"Resources/Private/Partials/sigel.html";s:4:"768f";s:37:"Resources/Private/Sass/Standorte.scss";s:4:"a416";s:57:"Resources/Private/Templates/Backend/DeleteBibliothek.html";s:4:"3b0c";s:46:"Resources/Private/Templates/Backend/Index.html";s:4:"b22f";s:57:"Resources/Private/Templates/Backend/ListBibliotheken.html";s:4:"4c88";s:68:"Resources/Private/Templates/Backend/ListBibliothekenByFakultaet.html";s:4:"9975";s:56:"Resources/Private/Templates/Backend/ListFakultaeten.html";s:4:"add8";s:48:"Resources/Private/Templates/Bibliothek/List.html";s:4:"6f92";s:58:"Resources/Private/Templates/Bibliothek/ListBibMitLink.html";s:4:"982c";s:58:"Resources/Private/Templates/Bibliothek/ListSigelTitel.html";s:4:"74cc";s:50:"Resources/Private/Templates/Bibliothek/Single.html";s:4:"24fd";s:48:"Resources/Private/Templates/Fakultaet/Index.html";s:4:"66f4";s:47:"Resources/Private/Templates/Fakultaet/List.html";s:4:"ffe9";s:34:"Resources/Public/Css/Standorte.css";s:4:"8f1c";s:32:"Resources/Public/Css/backend.css";s:4:"13c6";s:45:"Resources/Public/Js/jquery.tablesorter.min.js";s:4:"94e7";s:43:"Resources/Public/Js/jquery.uitablefilter.js";s:4:"97f9";s:27:"Resources/Public/Js/Map.js";s:4:"b509";s:29:"Resources/Public/eId/maps.php";s:4:"9933";s:28:"Resources/Public/img/asc.gif";s:4:"f8a1";s:27:"Resources/Public/img/bg.gif";s:4:"c01a";s:31:"Resources/Public/img/closed.gif";s:4:"acbf";s:29:"Resources/Public/img/desc.gif";s:4:"a548";s:66:"Resources/Public/img/icon_tx_standorte_domain_model_bibliothek.png";s:4:"0ba8";s:65:"Resources/Public/img/icon_tx_standorte_domain_model_fakultaet.png";s:4:"99be";s:71:"Resources/Public/img/icon_tx_standorte_domain_model_oeffnungszeiten.png";s:4:"f1ca";s:31:"Resources/Public/img/opened.gif";s:4:"d7ba";s:34:"Resources/Public/img/standorte.png";s:4:"3ea3";s:50:"Tests/Unit/Controller/BibliothekControllerTest.php";s:4:"ec97";s:15:"build/phpcs.xml";s:4:"ab01";s:15:"build/phpmd.xml";s:4:"ab48";}',
	'suggests' => array(
	),
);

?>