<?php

/* * *************************************************************
 *  Copyright notice
 *
 *  (c) 2010 Ingo Pfennigstorf <pfennigstorf@sub.uni-goettingen.de>
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 * ************************************************************* */
//Unschoen aber laeuft
require_once(\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath('standorte') . 'Classes/Domain/Repository/BibliothekRepository.php');

class user_Tx_Standorte_Classes_Hooks_Sidebar
{

    /**
     * Bibliothekenrepository
     * @var \Subugoe\Standorte\Domain\Repository\BibliothekRepository
     * @inject
     */
    public $bibliothekenRepository = null;

    function __construct()
    {
        /** @var \TYPO3\CMS\Extbase\Object\ObjectManager $objectManager */
        $objectManager = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TYPO3\\CMS\\Extbase\\Object\\ObjectManager');
        $this->bibliothekenRepository = $objectManager->get('Subugoe\\Standorte\\Domain\\Repository\\BibliothekRepository');
    }

    /**
     * Hook fuer die Ausgabe der Seiteninhalte in der Sidebar
     * @param string $tmp
     * @param object $obj
     */
    public function hookFunc(&$tmp, $obj)
    {

        $getPostVar = \TYPO3\CMS\Core\Utility\GeneralUtility::_GP('tx_standorte_pi1');

        $fakultaet = intval($getPostVar['fakultaet']);

        if ($fakultaet > 0) {
            //leeren der Sidebar
            $tmp = null;

            $bibliotheken = $this->bibliothekenRepository->findByUidEverywhere($fakultaet);

            foreach ($bibliotheken as $bibliothek) {
                $tmp .= '<li><a href="#bibliothek-' . $bibliothek->getUid() . '">';
                $tmp .= $bibliothek->getTitel();
                $tmp .= '</a></li>';
            }
        }
    }

}

?>
