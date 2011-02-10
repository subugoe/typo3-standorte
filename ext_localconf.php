<?php

if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

/**
 * Configure the Plugin to call the 
 * right combination of Controller and Action according to
 * the user input (default settings, FlexForm, URL etc.)
 */
Tx_Extbase_Utility_Extension::configurePlugin(
				$_EXTKEY, // The extension name (in UpperCamelCase) or the extension key (in lower_underscore)
				'Pi1', // A unique name of the plugin in UpperCamelCase
				array(// An array holding the controller-action-combinations that are accessible
					'Fakultaet' => 'index,list',
					'Bibliothek' => 'list,listSigelTitel,single' // The first controller and its first action will be the default
				),
				array(// An array of non-cachable controller-action-combinations (they must already be enabled)
					'Fakultaet' => 'index,list',
					'Bibliothek' => 'index,list'
				)
);


Tx_Extbase_Utility_Extension::configurePlugin(
				$_EXTKEY, // The extension name (in UpperCamelCase) or the extension key (in lower_underscore)
				'Pi2', // A unique name of the plugin in UpperCamelCase
				array(// An array holding the controller-action-combinations that are accessible
					'Bibliothek' => 'listSigelTitel' // The first controller and its first action will be the default
				)
);

t3lib_extMgm::addUserTSConfig('
    options.saveDocNew.tx_standorte_domain_model_fakultaet=1
');
t3lib_extMgm::addUserTSConfig('
    options.saveDocNew.tx_standorte_domain_model_bibliothek=1
	options{
		RTESmallWidth = 500
		RTESmallHeight = 400
  }
');
t3lib_extMgm::addPageTSConfig('

    # ***************************************************************************************
    # CONFIGURATION of RTE in table "tx_standorte_domain_model_bibliothek", field "zusatzinformationen"
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
');

$TYPO3_CONF_VARS['EXTCONF']['nkwsubmenu']['extendTOC'][$_EXTKEY] = 'EXT:standorte/Classes/Hooks/Sidebar.php:user_Tx_Standorte_Classes_Hooks_Sidebar->hookFunc';
$TYPO3_CONF_VARS['FE']['eID_include'][$_EXTKEY] = 'EXT:' . $_EXTKEY . '/Resources/Public/eId/maps.php';
?>