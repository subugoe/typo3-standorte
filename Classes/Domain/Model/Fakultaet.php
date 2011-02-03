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

/**
 * Description of Fakultaet
 * $Id$
 * @author ingop
 */
class Tx_Standorte_Domain_Model_Fakultaet extends Tx_Extbase_DomainObject_AbstractEntity {

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

	public function getAnzahlBibliotheken() {
		$bibliothek = & t3lib_div::makeInstance('Tx_Standorte_Domain_Repository_BibliothekRepository');
		$ergebnis = $bibliothek->countByFakultaet($this->uid);
		return $ergebnis;
	}

	public function setAnzahlBibliotheken($anzahlBibliotheken) {
		$this->anzahlBibliotheken = $anzahlBibliotheken;
	}

	/**
	 * Getter fuer einen externen link
	 * @return string
	 */
	public function getExtlink() {
		return $this->extlink;
	}

	/**
	 * Setter fuer einen externen Link
	 * @param string $extlink
	 */
	public function setExtlink($extlink) {
		$this->extlink = $extlink;
	}

	public function getTitel() {
		return $this->titel;
	}

	public function setTitel($titel) {
		$this->titel = $titel;
	}

}

?>
