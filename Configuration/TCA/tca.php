<?php

if (!defined('TYPO3_MODE'))
	die('Access denied.');

$TCA['tx_standorte_domain_model_fakultaet'] = array(
	'ctrl' => $TCA['tx_standorte_domain_model_fakultaet']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'sys_language_uid,l10n_parent,l10n_diffsource,hidden,titel,bibliothek'
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
		'bibliothek' => array(
			'exclude' => 0,
			'label' => 'Bibliotheken',
			'config' => array(
				'type' => 'select',
				'loadingStrategy' => 'proxy',
				'foreign_class' => 'Tx_Standorte_Domain_Model_Bibliothek',
				'foreign_table' => 'tx_standorte_domain_model_bibliothek',
				'MM' => 'tx_standorte_domain_model_bibliothek_fakultaet_mm',
				'MM_insert_fields' => array('tablenames' => 'tx_standorte_domain_model_fakultaet'),
				'MM_match_fields' => array('tablenames' => 'tx_standorte_domain_model_fakultaet'),
				'size' => 5,
				'minitems' => 0,
				'maxitems' => 99
			)
		),
	),
	'types' => array(
		'0' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, titel, bibliothek')
	),
	'palettes' => array(
		'1' => array('showitem' => '')
	)
);



$TCA['tx_standorte_domain_model_bibliothek'] = array(
	'ctrl' => $TCA['tx_standorte_domain_model_bibliothek']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'sys_language_uid,l10n_parent,l10n_diffsource,hidden,sigel,titel,lat,lon,bestand,strasse,plz,ort,ansprechpartner,zusatzinformationen,bild,fakultaet'
	),
	'feInterface' => $TCA['tx_standorte_domain_model_bibliothek']['feInterface'],
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
				'foreign_table' => 'tx_standorte_domain_model_bibliothek',
				'foreign_table_where' => 'AND tx_standorte_domain_model_bibliothek.pid=###CURRENT_PID### AND tx_standorte_domain_model_bibliothek.sys_language_uid IN (-1,0)',
			)
		),
		'l10n_diffsource' => array(
			'config' => array(
				'type' => 'passthrough'
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
		'sigel' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:standorte/locallang_db.xml:tx_standorte_domain_model_bibliothek.sigel',
			'config' => array(
				'type' => 'input',
				'size' => '5',
				'max' => '3',
				'eval' => 'required,trim',
			)
		),
		'titel' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:standorte/locallang_db.xml:tx_standorte_domain_model_bibliothek.titel',
			'config' => array(
				'type' => 'input',
				'size' => '30',
				'eval' => 'required,trim',
			)
		),
		'lat' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:standorte/locallang_db.xml:tx_standorte_domain_model_bibliothek.lat',
			'config' => array(
				'type' => 'input',
				'size' => '30',
				'eval' => 'double2,nospace',
			)
		),
		'lon' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:standorte/locallang_db.xml:tx_standorte_domain_model_bibliothek.lon',
			'config' => array(
				'type' => 'input',
				'size' => '30',
				'eval' => 'double2',
			)
		),
		'bestand' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:standorte/locallang_db.xml:tx_standorte_domain_model_bibliothek.bestand',
			'config' => array(
				'type' => 'input',
				'size' => '30',
			)
		),
		'strasse' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:standorte/locallang_db.xml:tx_standorte_domain_model_bibliothek.strasse',
			'config' => array(
				'type' => 'input',
				'size' => '30',
				'eval' => 'trim',
			)
		),
		'plz' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:standorte/locallang_db.xml:tx_standorte_domain_model_bibliothek.plz',
			'config' => array(
				'type' => 'input',
				'size' => '5',
				'max' => '5',
				'eval' => 'int',
				'checkbox' => '0',
				'range' => array(
					'upper' => '99999',
					'lower' => '10000'
				),
				'default' => 0
			)
		),
		'ort' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:standorte/locallang_db.xml:tx_standorte_domain_model_bibliothek.ort',
			'config' => array(
				'type' => 'input',
				'size' => '30',
				'eval' => 'trim',
			)
		),
		'ansprechpartner' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:standorte/locallang_db.xml:tx_standorte_domain_model_bibliothek.ansprechpartner',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'tt_address',
				'foreign_table_where' => ' ORDER BY tt_address.last_name',
				'size' => 5,
				'minitems' => 0,
				'maxitems' => 100,
				'MM' => 'tx_standorte_domain_model_bibliothek_ansprechpartner_mm',
				'MM_opposite_field' => 'ansprechpartner',
				'MM_insert_fields' => array('tablenames' => 'tx_standorte_domain_model_bibliothek'),
				'MM_match_fields' => array('tablenames' => 'tx_standorte_domain_model_bibliothek'),
			)
		),
		'zusatzinformationen' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:standorte/locallang_db.xml:tx_standorte_domain_model_bibliothek.zusatzinformationen',
			'config' => array(
				'type' => 'text',
				'cols' => '30',
				'rows' => '5',
				'wizards' => array(
					'_PADDING' => 2,
					'RTE' => array(
						'notNewRecords' => 1,
						'RTEonly' => 1,
						'type' => 'script',
						'title' => 'Full screen Rich Text Editing|Formatteret redigering i hele vinduet',
						'icon' => 'wizard_rte2.gif',
						'script' => 'wizard_rte.php',
					),
				),
			)
		),
		'bild' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:standorte/locallang_db.xml:tx_standorte_domain_model_bibliothek.bild',
			'config' => array(
				'type' => 'group',
				'internal_type' => 'file',
				'allowed' => $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext'],
				'max_size' => $GLOBALS['TYPO3_CONF_VARS']['BE']['maxFileSize'],
				'uploadfolder' => 'uploads/tx_standorte',
				'show_thumbs' => 1,
				'size' => 1,
				'minitems' => 0,
				'maxitems' => 1,
			)
		),
		'fakultaet' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:standorte/locallang_db.xml:tx_standorte_domain_model_bibliothek.fakultaet',
			'config' => array(
				'type' => 'select',
				'loadingStrategy' => 'proxy',
				'foreign_class' => 'Tx_Standorte_Domain_Model_Fakultaet',
				'foreign_table' => 'tx_standorte_domain_model_fakultaet',
				'MM' => 'tx_standorte_domain_model_bibliothek_fakultaet_mm',
				'MM_opposite_field' => 'fakultaet',
				'MM_insert_fields' => array('tablenames' => 'tx_standorte_domain_model_fakultaet'),
				'MM_match_fields' => array('tablenames' => 'tx_standorte_domain_model_fakultaet'),
				'size' => 5,
				'minitems' => 0,
				'maxitems' => 99
			)
		),
	),
	'types' => array(
		'0' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, sigel, titel, lat, lon, bestand, strasse, plz, ort, ansprechpartner, zusatzinformationen;;;richtext[]:rte_transform[mode=ts_css|imgpath=uploads/tx_standorte/rte/], bild, fakultaet')
	),
	'palettes' => array(
		'1' => array('showitem' => '')
	)
);
?>