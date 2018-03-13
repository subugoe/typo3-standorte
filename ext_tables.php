<?php

if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin($_EXTKEY, 'Pi1', 'SUB Standorte');
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin($_EXTKEY, 'Pi2', 'SUB Standorte Sigelliste');
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    $_EXTKEY,
    'showLibrary',
    'SUB Standorte Bibliothek Single View'
);

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
