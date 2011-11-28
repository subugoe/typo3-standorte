<?php

// $Id$


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
$TCA['tx_standorte_domain_model_fakultaet'] = array(
	'ctrl' => array(
		'title' => 'Fakultaeten',
		'label' => 'titel',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'default_sortby' => 'ORDER BY crdate',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
		),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . '/Configuration/TCA/tx_standorte_domain_model_fakultaet.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . '/Resources/Public/img/icon_tx_standorte_domain_model_fakultaet.png',
		'searchFields' => 'titel',
		'versioningWS' => TRUE,
		'origUid' => 't3_origuid',
	),
);

$TCA['tx_standorte_domain_model_bibliothek'] = array(
	'ctrl' => array(
		'title' => 'Bibliotheken',
		'label' => 'titel',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'default_sortby' => 'ORDER BY crdate',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
		),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . '/Configuration/TCA/tx_standorte_domain_model_bibliothek.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . '/Resources/Public/img/icon_tx_standorte_domain_model_bibliothek.png',
		'searchFields' => 'titel, sigel',
		'versioningWS' => TRUE,
		'origUid' => 't3_origuid',
	),
);

Tx_Extbase_Utility_Extension::registerPlugin($_EXTKEY, 'Pi1', 'SUB Standorte');
Tx_Extbase_Utility_Extension::registerPlugin($_EXTKEY, 'Pi2', 'SUB Standorte Sigelliste');

if (TYPO3_MODE === 'BE') {
	/**
	 * Backend Modul
	 */
	Tx_Extbase_Utility_Extension::registerModule(
					$_EXTKEY, 'web', 'tx_standorte_m1', '', array(
				'Backend' => 'index,newBibo,createBibo,deleteBibliothek,newFakultaet,createFakultaet,deleteFakultaet,listFakultaeten,listBibliotheken,listBibliothekenByFakultaet',
					), array(
				'access' => 'user,group',
				'icon' => 'EXT:' . $_EXTKEY . '/Resources/Public/img/standorte.png',
				'labels' => 'LLL:EXT:' . $_EXTKEY . '/Resources/Private/Language/locallang.mod.xml'
			));
}

t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Standorte');
?>