<?php

namespace Subugoe\Standorte\Hooks;

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

class Sidebar
{

    /**
     * @var \Subugoe\Standorte\Domain\Repository\BibliothekRepository
     */
    public $bibliothekenRepository;

    public function __construct(\Subugoe\Standorte\Domain\Repository\BibliothekRepository $bibliothekRepository)
    {
        $this->bibliothekenRepository = $bibliothekRepository;
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

            /** @var \Subugoe\Standorte\Domain\Model\Bibliothek $bibliothek */
            foreach ($bibliotheken as $bibliothek) {
                $tmp .= '<li><a href="#bibliothek-' . $bibliothek->getUid() . '">';
                $tmp .= $bibliothek->getTitel();
                $tmp .= '</a></li>';
            }
        }
    }
}
