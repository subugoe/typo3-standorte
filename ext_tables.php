<?php

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
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . '/Configuration/TCA/tca.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . '/Resources/Public/img/icon_tx_standorte_domain_model_fakultaet.png',
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
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . '/Configuration/TCA/tca.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . '/Resources/Public/img/icon_tx_standorte_domain_model_bibliothek.png',
	),
);

$TCA['tx_standorte_domain_model_oeffnungszeiten'] = array(
	'ctrl' => array(
		'title' => 'Oeffnungszeiten',
		'requestUpdate' => 'wochentag',
		'label' => 'wochentag',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'default_sortby' => 'ORDER BY wochentag',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
		),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . '/Configuration/TCA/tca.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'icon_tx_standorte_domain_model_oeffnungszeiten.gif',
	),
);


Tx_Extbase_Utility_Extension::registerPlugin($_EXTKEY, 'Pi1', 'SUB Standorte');

if (TYPO3_MODE === 'BE') {
	/**
	 * Backend Modul
	 */
	Tx_Extbase_Utility_Extension::registerModule(
					$_EXTKEY,
					'web',
					'tx_standorte_m1',
					'',
					array(
						'Backend' => 'index,newBibo,createBibo,newFakultaet,createFakultaet',
					),
					array(
						'access' => 'user,group',
						'icon' => 'EXT:' . $_EXTKEY . '/Resources/Public/img/standorte.png',
						'labels' => 'LLL:EXT:' . $_EXTKEY . '/Resources/Private/Language/locallang.mod.xml'
			));
}

t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Standorte');
$TCA['tt_content']['ctrl']['requestUpdate'] = $TCA['tt_content']['ctrl']['requestUpdate'] ? $TCA['tt_content']['ctrl']['requestUpdate'] . ',wochentag' : 'wochentag';
?>