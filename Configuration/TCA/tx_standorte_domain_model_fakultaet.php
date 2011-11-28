<?php

if (!defined('TYPO3_MODE'))
	die('Access denied.');

$TCA['tx_standorte_domain_model_fakultaet'] = array(
	'ctrl' => $TCA['tx_standorte_domain_model_fakultaet']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'sys_language_uid,l10n_parent,l10n_diffsource,hidden,titel,extlink'
	),
	'feInterface' => $TCA['tx_standorte_domain_model_fakultaet']['feInterface'],
	'columns' => array(
		'sys_language_uid' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.language',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'sys_language',
				'foreign_table_where' => 'ORDER BY sys_language.title',
				'items' => array(
					array('LLL:EXT:lang/locallang_general.xml:LGL.allLanguages', -1),
					array('LLL:EXT:lang/locallang_general.xml:LGL.default_value', 0)
				)
			)
		),
		'l10n_parent' => array(
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.l18n_parent',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('', 0),
				),
				'foreign_table' => 'tx_standorte_domain_model_fakultaet',
				'foreign_table_where' => 'AND tx_standorte_domain_model_fakultaet.pid=###CURRENT_PID### AND tx_standorte_domain_model_fakultaet.sys_language_uid IN (-1,0)',
			)
		),
		'l10n_diffsource' => array(
			'config' => array(
				'type' => 'passthrough'
			)
		),
		't3ver_label' => array (
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.versionLabel',
			'config' => array (
				'type' => 'input',
				'size' => '30',
				'max' => '30',
			)
		),
		'hidden' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config' => array(
				'type' => 'check',
				'default' => '0'
			)
		),
		'titel' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:standorte/locallang_db.xml:tx_standorte_domain_model_fakultaet.titel',
			'config' => array(
				'type' => 'input',
				'size' => '30',
				'eval' => 'required,trim',
			)
		),
		'extlink' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:standorte/locallang_db.xml:tx_standorte_domain_model_fakultaet.extlink',
			'config' => array(
				'type' => 'input',
				'size' => '15',
				'max' => '255',
				'checkbox' => '',
				'eval' => 'trim',
				'wizards' => array(
					'_PADDING' => 2,
					'link' => array(
						'type' => 'popup',
						'title' => 'Link',
						'icon' => 'link_popup.gif',
						'script' => 'browse_links.php?mode=wizard',
						'JSopenParams' => 'height=300,width=500,status=0,menubar=0,scrollbars=1'
					)
				)
			)
		),
	),
	'types' => array(
		'0' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, titel, extlink, bibliothek')
	),
	'palettes' => array(
		'1' => array('showitem' => '')
	)
);
?>