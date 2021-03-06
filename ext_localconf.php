<?php

if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

/**
 * Configure the Plugin to call the
 * right combination of Controller and Action according to
 * the user input (default settings, FlexForm, URL etc.)
 */
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'Subugoe.' . $_EXTKEY,
    'Pi1',
    [
        'Fakultaet' => 'index,list',
        'Bibliothek' => 'list,listSigelTitel,single,listBibMitLink'
    ],
    [
        'Fakultaet' => 'index,list',
        'Bibliothek' => 'list,listSigelTitel,single,listBibMitLink'
    ]
);


\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'Subugoe.' . $_EXTKEY,
    'Pi2',
    [
        'Bibliothek' => 'listSigelTitel,single'
    ],
    [
        'Bibliothek' => 'listSigelTitel,single'
    ]
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'Subugoe.' . $_EXTKEY,
    'showLibrary',
    [
        'Bibliothek' => 'single'
    ]
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('

    # ***************************************************************************************
    # CONFIGURATION of RTE in table "tx_standorte_domain_model_bibliothek"
    # ***************************************************************************************
RTE.config.tx_standorte_domain_model_bibliothek.zusatzinformationen {
  hidePStyleItems = H1, H4, H5, H6
  proc.exitHTMLparser_db=1
  proc.exitHTMLparser_db {
    keepNonMatchedTags=1
    tags.font.allowedAttribs= color
    tags.font.rmTagIfNoAttrib = 1
    tags.font.nesting = global
  }
}
RTE.config.tx_standorte_domain_model_bibliothek.oeffnungszeiten {
  hidePStyleItems = H1, H4, H5, H6
  proc.exitHTMLparser_db=1
  proc.exitHTMLparser_db {
    keepNonMatchedTags=1
    tags.font.allowedAttribs= color
    tags.font.rmTagIfNoAttrib = 1
    tags.font.nesting = global
  }
}
');

// Added Hooks
$TYPO3_CONF_VARS['EXTCONF']['nkwsubmenu']['extendTOC'][$_EXTKEY] = 'EXT:standorte/Classes/Hooks/Sidebar.php:Subugoe\Standorte\Hooks\Sidebar->hookFunc';
$TYPO3_CONF_VARS['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass'][] = 'EXT:standorte/Classes/Hooks/BackendEdit.php:&user_Tx_Standorte_Classes_Hooks_BackendEdit';
// Evaluation functions for Backend edit form (coordinate precision)
$TYPO3_CONF_VARS['SC_OPTIONS']['tce']['formevals']['tx_standorte_double6'] = 'EXT:standorte/Classes/Utility/EvalFuncDouble6Utility.php';
$TYPO3_CONF_VARS['SC_OPTIONS']['tce']['formevals']['tx_standorte_double11'] = 'EXT:standorte/Classes/Utility/EvalFuncDouble11Utility.php';
$TYPO3_CONF_VARS['FE']['eID_include'][$_EXTKEY] = 'EXT:' . $_EXTKEY . '/Resources/Public/eId/maps.php';
