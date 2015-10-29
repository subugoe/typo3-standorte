<?php

if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}
$TCA['tx_standorte_domain_model_fakultaet'] = [
    'ctrl' => [
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
        'enablecolumns' => [
            'disabled' => 'hidden',
        ],
        'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . '/Configuration/TCA/tx_standorte_domain_model_fakultaet.php',
        'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . '/Resources/Public/img/icon_tx_standorte_domain_model_fakultaet.png',
        'searchFields' => 'titel',
        'versioningWS' => true,
        'origUid' => 't3_origuid',
    ],
];

$TCA['tx_standorte_domain_model_bibliothek'] = [
    'ctrl' => [
        'title' => 'Bibliotheken',
        'label' => 'titel',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'default_sortby' => 'ORDER BY sigel',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
        ],
        'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . '/Configuration/TCA/tx_standorte_domain_model_bibliothek.php',
        'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . '/Resources/Public/img/icon_tx_standorte_domain_model_bibliothek.png',
        'searchFields' => 'titel, sigel, strasse',
        'versioningWS' => true,
        'origUid' => 't3_origuid',
    ],
];

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin($_EXTKEY, 'Pi1', 'SUB Standorte');
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin($_EXTKEY, 'Pi2', 'SUB Standorte Sigelliste');
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin($_EXTKEY, 'showLibrary',
    'SUB Standorte Bibliothek Single View');

if (TYPO3_MODE === 'BE') {
    /**
     * Backend Modul
     */
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
        'Subugoe.' . $_EXTKEY,
        'web',
        'tx_standorte_m1',
        '',
        [
            'Backend' => 'index,newBibo,createBibo,deleteBibliothek,newFakultaet,createFakultaet,deleteFakultaet,listFakultaeten,listBibliotheken,listBibliothekenByFakultaet',
        ],
        [
            'access' => 'user,group',
            'icon' => 'EXT:' . $_EXTKEY . '/Resources/Public/Images/standorte.png',
            'labels' => 'LLL:EXT:' . $_EXTKEY . '/Resources/Private/Language/locallang.mod.xml'
        ]
    );
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Standorte');
