<?php

if (!defined('TYPO3_MODE'))
	die('Access denied.');


$TCA['tx_standorte_domain_model_oeffnungszeiten'] = array(
	'ctrl' => $TCA['tx_standorte_domain_model_oeffnungszeiten']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'wochentag,von,bis,inhalt',
		'maxDBListItems' => 0
	),
	'feInterface' => $TCA['tx_standorte_domain_model_oeffnungszeiten']['feInterface'],
	'columns' => array(
		'hidden' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config' => array(
				'type' => 'check',
				'default' => '0'
			)
		),
		'wochentag' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:standorte/locallang_db.xml:tx_standorte_domain_model_oeffnungszeiten.wochentag',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('LLL:EXT:standorte/locallang_db.xml:tx_standorte_domain_model_oeffnungszeiten.wochentag.I.0', '1'),
					array('LLL:EXT:standorte/locallang_db.xml:tx_standorte_domain_model_oeffnungszeiten.wochentag.I.1', '2'),
					array('LLL:EXT:standorte/locallang_db.xml:tx_standorte_domain_model_oeffnungszeiten.wochentag.I.2', '3'),
					array('LLL:EXT:standorte/locallang_db.xml:tx_standorte_domain_model_oeffnungszeiten.wochentag.I.3', '4'),
					array('LLL:EXT:standorte/locallang_db.xml:tx_standorte_domain_model_oeffnungszeiten.wochentag.I.4', '5'),
					array('LLL:EXT:standorte/locallang_db.xml:tx_standorte_domain_model_oeffnungszeiten.wochentag.I.5', '6'),
					array('LLL:EXT:standorte/locallang_db.xml:tx_standorte_domain_model_oeffnungszeiten.wochentag.I.6', '7'),
					array('LLL:EXT:standorte/locallang_db.xml:tx_standorte_domain_model_oeffnungszeiten.wochentag.I.7', '8'),
					array('LLL:EXT:standorte/locallang_db.xml:tx_standorte_domain_model_oeffnungszeiten.wochentag.I.8', '9'),
				),
				'size' => 1,
				'maxitems' => 1,
			)
		),
		'von' => array(
			'displayCond' => 'FIELD:wochentag:<=:8',
			'exclude' => 0,
			'label' => 'LLL:EXT:standorte/locallang_db.xml:tx_standorte_domain_model_oeffnungszeiten.von',
			'config' => array(
				'type' => 'input',
				'size' => '5',
				'max' => '5',
				'eval' => 'required,trim,time',
			)
		),
		'bis' => array(
			'displayCond' => 'FIELD:wochentag:<=:8',
			'exclude' => 0,
			'label' => 'LLL:EXT:standorte/locallang_db.xml:tx_standorte_domain_model_oeffnungszeiten.bis',
			'config' => array(
				'type' => 'input',
				'size' => '5',
				'max' => '5',
				'eval' => 'required,trim,time',
			)
		),
		'inhalt' => array(
			'displayCond' => 'FIELD:wochentag:=:9',
			'exclude' => 0,
			'label' => 'LLL:EXT:standorte/locallang_db.xml:tx_standorte_domain_model_oeffnungszeiten.inhalt',
			'config' => array(
				'type' => 'text',
				'cols' => 30,
				'rows' => 5
			)
		),
		'bibliothek' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:standorte/locallang_db.xml:tx_standorte_domain_model_oeffnungszeiten.bibliothek',
			'config' => array(
				'type' => 'passthrough',
			)
		),
	),
	'types' => array(
		'0' => array('showitem' => 'hidden;;1;;1-1-1, wochentag, von, bis,inhalt'),
	)
);
?>