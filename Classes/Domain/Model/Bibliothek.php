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
 * Description of Bibliothek
 *
 * @author Ingo Pfennigstorf <pfennigstorf@sub.uni-goettingen.de>
 */
class Tx_Standorte_Domain_Model_Bibliothek extends Tx_Extbase_DomainObject_AbstractEntity {

	/**
	 * @var int
	 */
	protected $uid;
	/**
	 *
	 * @var string
	 */
	protected $sigel;
	/**
	 *
	 * @var string
	 */
	protected $oeffnungszeiten;
	/**
	 *
	 * @var string
	 */
	protected $titel;
	/**
	 *
	 * @var string
	 */
	protected $lon;
	/**
	 *
	 * @var string
	 */
	protected $lat;
	/**
	 *
	 * @var string
	 */
	protected $ansprechpartner;
	/**
	 *
	 * @var string
	 */
	protected $bestand;
	/**
	 *
	 * @var string
	 */
	protected $strasse;

	/**
	 * Adresszusatz (sowas wie "Juridicum, 4. Stock ...)
	 * @var string
	 */
	protected $adresszusatz;

	/**
	 *
	 * @var int
	 */
	protected $plz;
	/**
	 *
	 * @var string
	 */
	protected $ort;
	/**
	 *
	 * @var string
	 */
	protected $zusatzinformationen;
	/**
	 *
	 * @var string
	 */
	protected $bild;
	/**
	 *
	 * @var string
	 */
	protected $geoeffnet;
	/**
	 *
	 * @var Tx_Standorte_Domain_Model_Fakultaet
	 */
	protected $fakultaet;
	
	/**
	 * Link zum Katalog
	 * @var string
	 */
	protected $katalog;

	/**
	 * Link zum Institutskatalo
	 * @var string
	 */
	protected $institutskatalog;

	/**
	 * Getter fuer den Institutskatalog
	 * @return string
	 */
	public function getInstitutskatalog() {
	 return $this->institutskatalog;
	}

	/**
	 * Setter fuer den Institutskatalog
	 * @param string $institutskatalog
	 */
	public function setInstitutskatalog($institutskatalog) {
	 $this->institutskatalog = $institutskatalog;
	}

	/**
	 * Simpler Getter fuer den Adresszusatz
	 * @return string
	 */
	public function getAdresszusatz() {
	 return $this->adresszusatz;
	}

	/**
	 * Setter fuer einen Adresszusatz
	 * @param string $adresszusatz
	 */
	public function setAdresszusatz($adresszusatz) {
	 $this->adresszusatz = $adresszusatz;
	}

	
	/**
	 *
	 * @return string
	 */
	public function getKatalog() {
		return $this->katalog;
	}

	/**
	 * Link zum Katalog
	 * @param string $katalog
	 */
	public function setKatalog($katalog) {
		$this->katalog = $katalog;
	}

	/**
	 * Getter fuer Fakultaet
	 * @return Tx_Standorte_Domain_Model_Fakultaet
	 */
	public function getFakultaet() {
		return $this->fakultaet;
	}

	/**
	 *
	 * @param Tx_Standorte_Domain_Model_Fakultaet $fakultaet 
	 */
	public function setFakultaet(Tx_Standorte_Domain_Model_Fakultaet $fakultaet) {

		$this->fakultaet = $fakultaet;
	}

	public function getSigel() {
		return $this->sigel;
	}

	public function setSigel($sigel) {
		$this->sigel = $sigel;
	}

	public function getOeffnungszeiten() {

		$oeffis = & t3lib_div::makeInstance('Tx_Standorte_Domain_Repository_OeffnungszeitenRepository');

		$ergebnis = $oeffis->findByBibliothek($this->uid);

		return $ergebnis->von;
	}

	public function setOeffnungszeiten($oeffnungszeiten) {

		t3lib_div::debug('set');


		$this->oeffnungszeiten = $oeffis;
	}

	public function getTitel() {
		return $this->titel;
	}

	public function setTitel($titel) {
		$this->titel = $titel;
	}

	public function getLon() {
		return $this->lon;
	}

	public function setLon($lon) {
		$this->lon = $lon;
	}

	public function getLat() {
		return $this->lat;
	}

	public function setLat($lat) {
		$this->lat = $lat;
	}

	public function getAnsprechpartner() {
		return $this->ansprechpartner;
	}

	public function setAnsprechpartner($ansprechpartner) {
		$this->ansprechpartner = $ansprechpartner;
	}

	public function getBestand() {
		return $this->bestand;
	}

	public function setBestand($bestand) {
		$this->bestand = $bestand;
	}

	public function getStrasse() {
		return $this->strasse;
	}

	public function setStrasse($strasse) {
		$this->strasse = $strasse;
	}

	public function getPlz() {
		return $this->plz;
	}

	public function setPlz($plz) {
		$this->plz = $plz;
	}

	public function getOrt() {
		return $this->ort;
	}

	public function setOrt($ort) {
		$this->ort = $ort;
	}

	public function getZusatzinformationen() {
		return $this->zusatzinformationen;
	}

	public function setZusatzinformationen($zusatzinformationen) {
		$this->zusatzinformationen = $zusatzinformationen;
	}

	public function getBild() {
		return $this->bild;
	}

	public function setBild($bild) {
		$this->bild = $bild;
	}

	public function getGeoeffnet() {
		return $this->geoeffnet;
	}

	public function setGeoeffnet($geoeffnet) {
		$this->geoeffnet = $geoeffnet;
	}

}

?>
