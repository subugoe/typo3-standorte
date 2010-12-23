<?php

########################################################################
# Extension Manager/Repository config file for ext "standorte".
#
# Auto generated 23-12-2010 11:45
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
	'version' => '0.1.2',
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
	'_md5_values_when_last_written' => 'a:48:{s:9:"ChangeLog";s:4:"5082";s:6:"README";s:4:"89f6";s:12:"ext_icon.gif";s:4:"64af";s:17:"ext_localconf.php";s:4:"e753";s:14:"ext_tables.php";s:4:"d4e1";s:14:"ext_tables.sql";s:4:"8d1c";s:16:"locallang_db.xml";s:4:"9ec4";s:43:"Classes/user_Tx_Standorte_Classes_Hooks.php";s:4:"1f48";s:40:"Classes/Controller/BackendController.php";s:4:"f04f";s:43:"Classes/Controller/BibliothekController.php";s:4:"32bb";s:42:"Classes/Controller/FakultaetController.php";s:4:"3a1a";s:35:"Classes/Domain/Model/Bibliothek.php";s:4:"11bd";s:34:"Classes/Domain/Model/Fakultaet.php";s:4:"2fbc";s:40:"Classes/Domain/Model/Oeffnungszeiten.php";s:4:"1c24";s:50:"Classes/Domain/Repository/BibliothekRepository.php";s:4:"e96f";s:49:"Classes/Domain/Repository/FakultaetRepository.php";s:4:"e751";s:55:"Classes/Domain/Repository/OeffnungszeitenRepository.php";s:4:"fe7f";s:43:"Classes/ViewHelpers/DummytextViewHelper.php";s:4:"bea5";s:38:"Classes/ViewHelpers/LoopViewHelper.php";s:4:"9a42";s:25:"Configuration/TCA/tca.php";s:4:"8358";s:34:"Configuration/TypoScript/setup.txt";s:4:"e224";s:44:"Resources/Private/Language/locallang.mod.xml";s:4:"5bf6";s:40:"Resources/Private/Language/locallang.xml";s:4:"e4e8";s:44:"Resources/Private/Layouts/backendLayout.html";s:4:"ad99";s:44:"Resources/Private/Layouts/defaultLayout.html";s:4:"19ab";s:39:"Resources/Private/Partials/bestand.html";s:4:"c676";s:36:"Resources/Private/Partials/bild.html";s:4:"4311";s:36:"Resources/Private/Partials/maps.html";s:4:"314e";s:47:"Resources/Private/Partials/oeffnungszeiten.html";s:4:"df8b";s:56:"Resources/Private/Templates/Backend/createfakultaet.html";s:4:"580f";s:46:"Resources/Private/Templates/Backend/index.html";s:4:"c853";s:48:"Resources/Private/Templates/Backend/newbibo.html";s:4:"6915";s:53:"Resources/Private/Templates/Backend/newfakultaet.html";s:4:"765d";s:50:"Resources/Private/Templates/Bibliothek/create.html";s:4:"6aa3";s:49:"Resources/Private/Templates/Bibliothek/index.html";s:4:"e605";s:48:"Resources/Private/Templates/Bibliothek/list.html";s:4:"8744";s:47:"Resources/Private/Templates/Bibliothek/new.html";s:4:"7c50";s:49:"Resources/Private/Templates/Fakultaet/create.html";s:4:"d26a";s:48:"Resources/Private/Templates/Fakultaet/index.html";s:4:"3ab8";s:47:"Resources/Private/Templates/Fakultaet/list.html";s:4:"5932";s:46:"Resources/Private/Templates/Fakultaet/new.html";s:4:"170f";s:34:"Resources/Public/css/standorte.css";s:4:"8446";s:66:"Resources/Public/img/icon_tx_standorte_domain_model_bibliothek.png";s:4:"0ba8";s:65:"Resources/Public/img/icon_tx_standorte_domain_model_fakultaet.png";s:4:"99be";s:71:"Resources/Public/img/icon_tx_standorte_domain_model_oeffnungszeiten.png";s:4:"f1ca";s:34:"Resources/Public/img/standorte.png";s:4:"3ea3";s:27:"Resources/Public/js/maps.js";s:4:"0af2";s:14:"doc/manual.sxw";s:4:"e0af";}',
	'suggests' => array(
	),
);

?>