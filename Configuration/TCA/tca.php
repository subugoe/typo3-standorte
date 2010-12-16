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



$TCA['tx_standorte_domain_model_bibliothek'] = array(
	'ctrl' => $TCA['tx_standorte_domain_model_bibliothek']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'sys_language_uid,l10n_parent,l10n_diffsource,hidden,sigel,titel,sorttitel,extlink,lat,lon,bestand,katalog,institutskatalog,strasse,adresszusatz,plz,ort,ansprechpartner,oeffnungszeiten,zusatzinformationen,bild,fakultaet'
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
		'sorttitel' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:standorte/locallang_db.xml:tx_standorte_domain_model_bibliothek.sorttitel',
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
				'type' => 'none',
				'size' => '30',
				'eval' => 'double2,nospace',
			)
		),
		'lon' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:standorte/locallang_db.xml:tx_standorte_domain_model_bibliothek.lon',
			'config' => array(
				'type' => 'none',
				'size' => '30',
				'eval' => 'double2,nospace',
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
		'adresszusatz' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:standorte/locallang_db.xml:tx_standorte_domain_model_bibliothek.adresszusatz',
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
		'oeffnungszeiten' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:standorte/locallang_db.xml:tx_standorte_domain_model_bibliothek.oeffnungszeiten',
			'config' => array(
				'type' => 'inline',
				'foreign_table' => 'tx_standorte_domain_model_oeffnungszeiten',
				'foreign_field' => 'bibliothek',
				'maxitems' => 9999
			),
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
				'loadingStrategy' => 'eager',
				'foreign_table' => 'tx_standorte_domain_model_fakultaet',
//				'foreign_field' => 'titel',
				'size' => 1,
				'minitems' => 1,
				'maxitems' => 1
			)
		),
		'katalog' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:standorte/locallang_db.xml:tx_standorte_domain_model_bibliothek.katalog',
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
		'institutskatalog' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:standorte/locallang_db.xml:tx_standorte_domain_model_bibliothek.institutskatalog',
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
		'0' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, sigel, titel, sorttitel, extlink, lat, lon, bestand, katalog, institutskatalog, strasse, adresszusatz, plz, ort, ansprechpartner, oeffnungszeiten, zusatzinformationen;;;richtext[]:rte_transform[mode=ts_css|imgpath=uploads/tx_standorte/rte/], bild, fakultaet'),
	),
	'palettes' => array(
		'1' => array('showitem' => '')
	)
);

$TCA['tx_standorte_domain_model_oeffnungszeiten'] = array(
	'ctrl' => $TCA['tx_standorte_domain_model_oeffnungszeiten']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'wochentag,von,bis,inhalt'
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
				'eval' => 'required,trim',
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
				'eval' => 'required,trim',
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