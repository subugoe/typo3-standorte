<?php

if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

$TCA['tx_standorte_domain_model_bibliothek'] = array(
    'ctrl' => $TCA['tx_standorte_domain_model_bibliothek']['ctrl'],
    'interface' => array(
        'showRecordFieldList' => 'sys_language_uid,l10n_parent,l10n_diffsource,hidden,sigel,titel,extlink,lat,lon,bestand,katalog,katalogteilweiseinstitutskatalog,strasse,adresszusatz,plz,ort,ansprechpartner,semesterferien,oeffnungszeiten,zusatzinformationen,bild,fakultaet,piz_nr'
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
        't3ver_label' => array(
            'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.versionLabel',
            'config' => array(
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
        'sigel' => array(
            'exclude' => 0,
            'label' => 'LLL:EXT:standorte/Resources/Private/Language/locallang_db.xml:tx_standorte_domain_model_bibliothek.sigel',
            'config' => array(
                'type' => 'input',
                'size' => '8',
                'max' => '20',
                'eval' => 'trim',
            )
        ),
        'titel' => array(
            'exclude' => 0,
            'label' => 'LLL:EXT:standorte/Resources/Private/Language/locallang_db.xml:tx_standorte_domain_model_bibliothek.titel',
            'config' => array(
                'type' => 'input',
                'size' => '30',
                'eval' => 'required,trim',
            )
        ),
        'lat' => array(
            'exclude' => 0,
            'label' => 'LLL:EXT:standorte/Resources/Private/Language/locallang_db.xml:tx_standorte_domain_model_bibliothek.lat',
            // 'config' => array(
            // 	'type' => 'input',
            // 	'size' => '30',
            // 	'eval' => 'tx_standorte_double11, nospace', //'double2, nospace'
            // )
            'config' => array(
                'type' => 'user',
                'size' => '30',
                'userFunc' => 'EXT:standorte/Classes/Utility/DisabledInputFieldUtility.php:Tx_Standorte_Utility_DisabledInputFieldUtility->disabledInputField',
                'parameters' => array(
                    'disabled' => 'true'
                ),
            )
        ),
        'lon' => array(
            'exclude' => 0,
            'label' => 'LLL:EXT:standorte/Resources/Private/Language/locallang_db.xml:tx_standorte_domain_model_bibliothek.lon',
            'config' => array(
                'type' => 'user',
                'size' => '30',
                'eval' => 'tx_standorte_double11, nospace', //double2,
                'userFunc' => 'EXT:standorte/Classes/Utility/DisabledInputFieldUtility.php:Tx_Standorte_Utility_DisabledInputFieldUtility->disabledInputField',
                'parameters' => array(
                    'disabled' => 'true'
                ),
            )
        ),
        'bestand' => array(
            'exclude' => 0,
            'label' => 'LLL:EXT:standorte/Resources/Private/Language/locallang_db.xml:tx_standorte_domain_model_bibliothek.bestand',
            'config' => array(
                'type' => 'input',
                'size' => '30',
            )
        ),
        'strasse' => array(
            'exclude' => 0,
            'label' => 'LLL:EXT:standorte/Resources/Private/Language/locallang_db.xml:tx_standorte_domain_model_bibliothek.strasse',
            'config' => array(
                'type' => 'input',
                'size' => '30',
                'eval' => 'trim',
            )
        ),
        'adresszusatz' => array(
            'exclude' => 0,
            'label' => 'LLL:EXT:standorte/Resources/Private/Language/locallang_db.xml:tx_standorte_domain_model_bibliothek.adresszusatz',
            'config' => array(
                'type' => 'input',
                'size' => '30',
                'eval' => 'trim',
            )
        ),
        'plz' => array(
            'exclude' => 0,
            'label' => 'LLL:EXT:standorte/Resources/Private/Language/locallang_db.xml:tx_standorte_domain_model_bibliothek.plz',
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
            'label' => 'LLL:EXT:standorte/Resources/Private/Language/locallang_db.xml:tx_standorte_domain_model_bibliothek.ort',
            'config' => array(
                'type' => 'input',
                'size' => '30',
                'eval' => 'trim',
            )
        ),
        'ansprechpartner' => array(
            'exclude' => 0,
            'label' => 'LLL:EXT:standorte/Resources/Private/Language/locallang_db.xml:tx_standorte_domain_model_bibliothek.ansprechpartner',
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
            'label' => 'LLL:EXT:standorte/Resources/Private/Language/locallang_db.xml:tx_standorte_domain_model_bibliothek.zusatzinformationen',
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
            'label' => 'LLL:EXT:standorte/Resources/Private/Language/locallang_db.xml:tx_standorte_domain_model_bibliothek.oeffnungszeiten',
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
            'label' => 'LLL:EXT:standorte/Resources/Private/Language/locallang_db.xml:tx_standorte_domain_model_bibliothek.bild',
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
            'label' => 'LLL:EXT:standorte/Resources/Private/Language/locallang_db.xml:tx_standorte_domain_model_bibliothek.fakultaet',
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
            'label' => 'LLL:EXT:standorte/Resources/Private/Language/locallang_db.xml:tx_standorte_domain_model_bibliothek.katalog',
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
        'katalogteilweise' => array(
            'exclude' => 0,
            'label' => 'LLL:EXT:standorte/Resources/Private/Language/locallang_db.xml:tx_standorte_domain_model_bibliothek.katalogteilweise',
            'config' => array(
                'type' => 'check',
                'cols' => 1
            )
        ),
        'institutskatalog' => array(
            'exclude' => 0,
            'label' => 'LLL:EXT:standorte/Resources/Private/Language/locallang_db.xml:tx_standorte_domain_model_bibliothek.institutskatalog',
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
            'label' => 'LLL:EXT:standorte/Resources/Private/Language/locallang_db.xml:tx_standorte_domain_model_fakultaet.extlink',
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
        'piz_nr' => array(
            'exclude' => 0,
            'label' => 'LLL:EXT:standorte/Resources/Private/Language/locallang_db.xml:tx_standorte_domain_model_bibliothek.pizNr',
            'config' => array(
                'type' => 'input',
                'size' => '10',
                'eval' => 'trim',
            )
        ),
    ),
    'types' => array(
        '0' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1,sigel, titel, extlink, lat, lon, bestand, katalog,katalogteilweise, institutskatalog, strasse, adresszusatz, plz, ort, ansprechpartner;;;richtext[]:rte_transform[mode=ts_css|imgpath=uploads/tx_standorte/rte/], semesterferien, oeffnungszeiten;;;richtext[]:rte_transform[mode=ts_css|imgpath=uploads/tx_standorte/rte/], zusatzinformationen;;;richtext[]:rte_transform[mode=ts_css|imgpath=uploads/tx_standorte/rte/], bild, fakultaet, piz_nr'),
    ),
    'palettes' => array(
        '1' => array('showitem' => '')
    )
);
?>
