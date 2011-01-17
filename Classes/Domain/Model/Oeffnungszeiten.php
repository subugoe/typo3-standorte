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
 * Description of Oeffnungszeiten
 *
 * @author ingop
 */
class Tx_Standorte_Domain_Model_Oeffnungszeiten extends Tx_Extbase_DomainObject_AbstractEntity {

	/**
	 *
	 * @var int
	 */
	public $uid;
	/**
	 *
	 * @var int
	 */
	public $von;
	/**
	 *
	 * @var int
	 */
	public $bis;
	/**
	 *
	 * @var int
	 */
	public $bibliothek;
	/**
	 *
	 * @var int
	 */
	public $wochentag;
	/**
	 *
	 * @var string
	 */
	public $inhalt;

	public function getVon() {
		return $this->von;
	}

	public function setVon($von) {
		$this->von = $von;
	}

	public function getBis() {
		return $this->bis;
	}

	public function setBis($bis) {
		$this->bis = $bis;
	}

	public function getBibliothek() {
		return $this->bibliothek;
	}

	public function setBibliothek($bibliothek) {
		$this->bibliothek = $bibliothek;
	}

	public function getWochentag() {
		return $this->wochentag;
	}

	public function setWochentag($wochentag) {
		$this->wochentag = $wochentag;
	}

	public function getInhalt() {
		return $this->inhalt;
	}

	public function setInhalt($inhalt) {
		$this->inhalt = $inhalt;
	}

}

?>
