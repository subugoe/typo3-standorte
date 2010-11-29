<?php

########################################################################
# Extension Manager/Repository config file for ext "standorte".
#
# Auto generated 15-11-2010 08:53
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
	'version' => '0.0.0',
	'dependencies' => 'extbase,fluid',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => '',
	'state' => 'alpha',
	'uploadfolder' => 0,
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
			'typo3' => '4.3.0-4.9.99',
			'extbase' => '0.0.0-0.0.0',
			'fluid' => '0.0.0-0.0.0',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:35:{s:12:"ext_icon.gif";s:4:"8c8e";s:17:"ext_localconf.php";s:4:"79f2";s:14:"ext_tables.php";s:4:"6833";s:14:"ext_tables.sql";s:4:"ccb0";s:16:"locallang_db.xml";s:4:"295e";s:40:"Classes/Controller/BackendController.php";s:4:"7d1e";s:43:"Classes/Controller/BibliothekController.php";s:4:"235f";s:42:"Classes/Controller/FakultaetController.php";s:4:"d1e3";s:35:"Classes/Domain/Model/Bibliothek.php";s:4:"0979";s:34:"Classes/Domain/Model/Fakultaet.php";s:4:"2c6a";s:50:"Classes/Domain/Repository/BibliothekRepository.php";s:4:"68e1";s:49:"Classes/Domain/Repository/FakultaetRepository.php";s:4:"e334";s:43:"Classes/ViewHelpers/DummytextViewHelper.php";s:4:"2158";s:38:"Classes/ViewHelpers/LoopViewHelper.php";s:4:"3545";s:25:"Configuration/TCA/tca.php";s:4:"75b9";s:44:"Resources/Private/Language/locallang.mod.xml";s:4:"5bf6";s:40:"Resources/Private/Language/locallang.xml";s:4:"ca47";s:44:"Resources/Private/Layouts/backendLayout.html";s:4:"dfb6";s:44:"Resources/Private/Layouts/defaultLayout.html";s:4:"19ab";s:42:"Resources/Private/Partials/formErrors.html";s:4:"669f";s:56:"Resources/Private/Templates/Backend/createfakultaet.html";s:4:"580f";s:46:"Resources/Private/Templates/Backend/index.html";s:4:"9c61";s:48:"Resources/Private/Templates/Backend/newbibo.html";s:4:"02b5";s:53:"Resources/Private/Templates/Backend/newfakultaet.html";s:4:"765d";s:50:"Resources/Private/Templates/Bibliothek/create.html";s:4:"6aa3";s:49:"Resources/Private/Templates/Bibliothek/index.html";s:4:"f565";s:47:"Resources/Private/Templates/Bibliothek/new.html";s:4:"7c50";s:49:"Resources/Private/Templates/Fakultaet/create.html";s:4:"d26a";s:49:"Resources/Private/Templates/Fakultaet/detail.html";s:4:"56d8";s:48:"Resources/Private/Templates/Fakultaet/index.html";s:4:"5e13";s:46:"Resources/Private/Templates/Fakultaet/new.html";s:4:"170f";s:30:"Resources/Public/img/house.png";s:4:"99be";s:66:"Resources/Public/img/icon_tx_standorte_domain_model_bibliothek.png";s:4:"0ba8";s:65:"Resources/Public/img/icon_tx_standorte_domain_model_fakultaet.png";s:4:"99be";s:14:"doc/manual.sxw";s:4:"f02d";}',
	'suggests' => array(
	),
);

?>