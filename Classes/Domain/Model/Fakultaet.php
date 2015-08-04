<?php
namespace Subugoe\Standorte\Domain\Model;

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
use TYPO3\CMS\Core\Utility\GeneralUtility;

/**
 * Description of Fakultaet
 * $Id$
 * @author ingop
 */
class Fakultaet extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * Titel der Fakultaet
     * @var string
     */
    protected $titel;
    /**
     * Falls die Fakultaet nur einen Link nach Extern hat
     * @var string
     */
    protected $extlink;
    /**
     * Anzahl der referenzierten Bibliotheken
     * @var int
     */
    protected $anzahlBibliotheken;

    public function getAnzahlBibliotheken()
    {
        $bibliothek = GeneralUtility::makeInstance('Subugoe\\Standorte\\Domain\\Repository\\BibliothekRepository');
        $ergebnis = $bibliothek->countByFakultaet($this->uid);
        return $ergebnis;
    }

    public function setAnzahlBibliotheken($anzahlBibliotheken)
    {
        $this->anzahlBibliotheken = $anzahlBibliotheken;
    }

    /**
     * Getter fuer einen externen link
     * @return string
     */
    public function getExtlink()
    {
        return $this->extlink;
    }

    /**
     * Setter fuer einen externen Link
     * @param string $extlink
     */
    public function setExtlink($extlink)
    {
        $this->extlink = $extlink;
    }

    public function getTitel()
    {
        return $this->titel;
    }

    public function setTitel($titel)
    {
        $this->titel = $titel;
    }

}
