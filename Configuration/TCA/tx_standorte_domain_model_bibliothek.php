<?php

if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

$TCA['tx_standorte_domain_model_bibliothek'] = [
    'ctrl' => $TCA['tx_standorte_domain_model_bibliothek']['ctrl'],
    'interface' => [
        'showRecordFieldList' => 'sys_language_uid,l10n_parent,l10n_diffsource,hidden,sigel,titel,extlink,lat,lon,bestand,katalog,katalogteilweiseinstitutskatalog,strasse,adresszusatz,plz,ort,ansprechpartner,semesterferien,oeffnungszeiten,zusatzinformationen,bild,fakultaet,piz_nr'
    ],
    'feInterface' => $TCA['tx_standorte_domain_model_bibliothek']['feInterface'],
    'columns' => [
        'sys_language_uid' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.language',
            'config' => [
                'type' => 'select',
                'foreign_table' => 'sys_language',
                'foreign_table_where' => 'ORDER BY sys_language.title',
                'items' => [
                    ['LLL:EXT:lang/locallang_general.xml:LGL.allLanguages', -1],
                    ['LLL:EXT:lang/locallang_general.xml:LGL.default_value', 0]
                ]
            ]
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'exclude' => 1,
            'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'tx_standorte_domain_model_bibliothek',
                'foreign_table_where' => 'AND tx_standorte_domain_model_bibliothek.pid=###CURRENT_PID### AND tx_standorte_domain_model_bibliothek.sys_language_uid IN (-1,0)',
            ]
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough'
            ]
        ],
        't3ver_label' => [
            'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.versionLabel',
            'config' => [
                'type' => 'input',
                'size' => '30',
                'max' => '30',
            ]
        ],
        'hidden' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
            'config' => [
                'type' => 'check',
                'default' => '0'
            ]
        ],
        'sigel' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:standorte/Resources/Private/Language/locallang_db.xml:tx_standorte_domain_model_bibliothek.sigel',
            'config' => [
                'type' => 'input',
                'size' => '8',
                'max' => '20',
                'eval' => 'trim',
            ]
        ],
        'titel' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:standorte/Resources/Private/Language/locallang_db.xml:tx_standorte_domain_model_bibliothek.titel',
            'config' => [
                'type' => 'input',
                'size' => '30',
                'eval' => 'required,trim',
            ]
        ],
        'lat' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:standorte/Resources/Private/Language/locallang_db.xml:tx_standorte_domain_model_bibliothek.lat',
            // 'config' => array(
            // 	'type' => 'input',
            // 	'size' => '30',
            // 	'eval' => 'tx_standorte_double11, nospace', //'double2, nospace'
            // )
            'config' => [
                'type' => 'user',
                'size' => '30',
                'userFunc' => 'EXT:standorte/Classes/Utility/DisabledInputFieldUtility.php:Tx_Standorte_Utility_DisabledInputFieldUtility->disabledInputField',
                'parameters' => [
                    'disabled' => 'true'
                ],
            ]
        ],
        'lon' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:standorte/Resources/Private/Language/locallang_db.xml:tx_standorte_domain_model_bibliothek.lon',
            'config' => [
                'type' => 'user',
                'size' => '30',
                'eval' => 'tx_standorte_double11, nospace', //double2,
                'userFunc' => 'EXT:standorte/Classes/Utility/DisabledInputFieldUtility.php:Tx_Standorte_Utility_DisabledInputFieldUtility->disabledInputField',
                'parameters' => [
                    'disabled' => 'true'
                ],
            ]
        ],
        'bestand' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:standorte/Resources/Private/Language/locallang_db.xml:tx_standorte_domain_model_bibliothek.bestand',
            'config' => [
                'type' => 'input',
                'size' => '30',
            ]
        ],
        'strasse' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:standorte/Resources/Private/Language/locallang_db.xml:tx_standorte_domain_model_bibliothek.strasse',
            'config' => [
                'type' => 'input',
                'size' => '30',
                'eval' => 'trim',
            ]
        ],
        'adresszusatz' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:standorte/Resources/Private/Language/locallang_db.xml:tx_standorte_domain_model_bibliothek.adresszusatz',
            'config' => [
                'type' => 'input',
                'size' => '30',
                'eval' => 'trim',
            ]
        ],
        'plz' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:standorte/Resources/Private/Language/locallang_db.xml:tx_standorte_domain_model_bibliothek.plz',
            'config' => [
                'type' => 'input',
                'size' => '5',
                'max' => '5',
                'eval' => 'int',
                'checkbox' => '0',
                'range' => [
                    'upper' => '99999',
                    'lower' => '10000'
                ],
                'default' => 0
            ]
        ],
        'ort' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:standorte/Resources/Private/Language/locallang_db.xml:tx_standorte_domain_model_bibliothek.ort',
            'config' => [
                'type' => 'input',
                'size' => '30',
                'eval' => 'trim',
            ]
        ],
        'ansprechpartner' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:standorte/Resources/Private/Language/locallang_db.xml:tx_standorte_domain_model_bibliothek.ansprechpartner',
            'config' => [
                'type' => 'text',
                'cols' => '30',
                'rows' => '5',
                'wizards' => [
                    '_PADDING' => 2,
                    'RTE' => [
                        'notNewRecords' => 1,
                        'RTEonly' => 1,
                        'type' => 'script',
                        'title' => 'Full screen Rich Text Editing|Formatteret redigering i hele vinduet',
                        'icon' => 'wizard_rte2.gif',
                        'script' => 'wizard_rte.php',
                    ],
                ],
            ]
        ],
        'zusatzinformationen' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:standorte/Resources/Private/Language/locallang_db.xml:tx_standorte_domain_model_bibliothek.zusatzinformationen',
            'config' => [
                'type' => 'text',
                'cols' => '30',
                'rows' => '5',
                'wizards' => [
                    '_PADDING' => 2,
                    'RTE' => [
                        'notNewRecords' => 1,
                        'RTEonly' => 1,
                        'type' => 'script',
                        'title' => 'Full screen Rich Text Editing|Formatteret redigering i hele vinduet',
                        'icon' => 'wizard_rte2.gif',
                        'script' => 'wizard_rte.php',
                    ],
                ],
            ]
        ],
        'oeffnungszeiten' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:standorte/Resources/Private/Language/locallang_db.xml:tx_standorte_domain_model_bibliothek.oeffnungszeiten',
            'config' => [
                'type' => 'text',
                'cols' => '30',
                'rows' => '5',
                'wizards' => [
                    '_PADDING' => 2,
                    'RTE' => [
                        'notNewRecords' => 1,
                        'RTEonly' => 1,
                        'type' => 'script',
                        'title' => 'Full screen Rich Text Editing|Formatteret redigering i hele vinduet',
                        'icon' => 'wizard_rte2.gif',
                        'script' => 'wizard_rte.php',
                    ],
                ],
            ]
        ],
        'bild' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:standorte/Resources/Private/Language/locallang_db.xml:tx_standorte_domain_model_bibliothek.bild',
            'config' => [
                'type' => 'group',
                'internal_type' => 'file',
                'allowed' => $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext'],
                'max_size' => $GLOBALS['TYPO3_CONF_VARS']['BE']['maxFileSize'],
                'uploadfolder' => 'uploads/tx_standorte',
                'show_thumbs' => 1,
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
            ]
        ],
        'fakultaet' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:standorte/Resources/Private/Language/locallang_db.xml:tx_standorte_domain_model_bibliothek.fakultaet',
            'config' => [
                'type' => 'select',
                'loadingStrategy' => 'eager',
                'foreign_table' => 'tx_standorte_domain_model_fakultaet',
//				'foreign_field' => 'titel',
                'size' => 1,
                'minitems' => 1,
                'maxitems' => 1
            ]
        ],
        'katalog' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:standorte/Resources/Private/Language/locallang_db.xml:tx_standorte_domain_model_bibliothek.katalog',
            'config' => [
                'type' => 'input',
                'size' => '15',
                'max' => '255',
                'checkbox' => '',
                'eval' => 'trim',
                'wizards' => [
                    '_PADDING' => 2,
                    'link' => [
                        'type' => 'popup',
                        'title' => 'Link',
                        'icon' => 'link_popup.gif',
                        'script' => 'browse_links.php?mode=wizard',
                        'JSopenParams' => 'height=300,width=500,status=0,menubar=0,scrollbars=1'
                    ]
                ]
            ]
        ],
        'katalogteilweise' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:standorte/Resources/Private/Language/locallang_db.xml:tx_standorte_domain_model_bibliothek.katalogteilweise',
            'config' => [
                'type' => 'check',
                'cols' => 1
            ]
        ],
        'institutskatalog' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:standorte/Resources/Private/Language/locallang_db.xml:tx_standorte_domain_model_bibliothek.institutskatalog',
            'config' => [
                'type' => 'input',
                'size' => '15',
                'max' => '255',
                'checkbox' => '',
                'eval' => 'trim',
                'wizards' => [
                    '_PADDING' => 2,
                    'link' => [
                        'type' => 'popup',
                        'title' => 'Link',
                        'icon' => 'link_popup.gif',
                        'script' => 'browse_links.php?mode=wizard',
                        'JSopenParams' => 'height=300,width=500,status=0,menubar=0,scrollbars=1'
                    ]
                ]
            ]
        ],
        'extlink' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:standorte/Resources/Private/Language/locallang_db.xml:tx_standorte_domain_model_fakultaet.extlink',
            'config' => [
                'type' => 'input',
                'size' => '15',
                'max' => '255',
                'checkbox' => '',
                'eval' => 'trim',
                'wizards' => [
                    '_PADDING' => 2,
                    'link' => [
                        'type' => 'popup',
                        'title' => 'Link',
                        'icon' => 'link_popup.gif',
                        'script' => 'browse_links.php?mode=wizard',
                        'JSopenParams' => 'height=300,width=500,status=0,menubar=0,scrollbars=1'
                    ]
                ]
            ]
        ],
        'piz_nr' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:standorte/Resources/Private/Language/locallang_db.xml:tx_standorte_domain_model_bibliothek.pizNr',
            'config' => [
                'type' => 'input',
                'size' => '10',
                'eval' => 'trim',
            ]
        ],
    ],
    'types' => [
        '0' => ['showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1,sigel, titel, extlink, lat, lon, bestand, katalog,katalogteilweise, institutskatalog, strasse, adresszusatz, plz, ort, ansprechpartner;;;richtext[]:rte_transform[mode=ts_css|imgpath=uploads/tx_standorte/rte/], semesterferien, oeffnungszeiten;;;richtext[]:rte_transform[mode=ts_css|imgpath=uploads/tx_standorte/rte/], zusatzinformationen;;;richtext[]:rte_transform[mode=ts_css|imgpath=uploads/tx_standorte/rte/], bild, fakultaet, piz_nr'],
    ],
    'palettes' => [
        '1' => ['showitem' => '']
    ]
];
