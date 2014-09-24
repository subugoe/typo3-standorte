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

/**
 * Bibliothek
 */
class Bibliothek extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * 
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
	 *
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
	 * @var \Subugoe\Standorte\Domain\Model\Fakultaet
	 */
	protected $fakultaet;
	/**
	 * Link zum Katalog
	 *
	 * @var string
	 */
	protected $katalog;
	/**
	 * Wenn der Bestand nur teilweise im GUK enthalten ist
	 *
	 * @var boolean
	 */
	protected $katalogteilweise;
	/**
	 * Link zum Institutskatalog
	 *
	 * @var string
	 */
	protected $institutskatalog;
	/**
	 * Falls die Bibliothek nur einen Link nach extern hat (Sonderfall MPI)
	 *
	 * @var string
	 */
	protected $extlink;

	/**
	 *
	 * Wenn die Bibliothek versteckt ist
	 * @var boolean
	 */
	protected $hidden;

	/**
	 * PizNr for internal use and linking to other services
	 *
	 * @var int
	 */
	protected $pizNr;

	/**
	 *
	 * @return bool
	 * @return void
	 */
	public function getHidden() {
		return $this->hidden;
	}

	/**
	 *
	 * @param $hidden
	 * @return void
	 */
	public function setHidden($hidden) {
		$this->hidden = $hidden;
	}

	/**
	 *
	 * @return bool
	 */
	public function getKatalogteilweise() {
		return $this->katalogteilweise;
	}

	/**
	 *
	 * @param $katalogteilweise
	 * @return void
	 */
	public function setKatalogteilweise($katalogteilweise) {
		$this->katalogteilweise = $katalogteilweise;
	}

	/**
	 * Getter fuer einen link nach Extern
	 *
	 * @return string Link
	 * @return string
	 */
	public function getExtlink() {
		return $this->extlink;
	}

	/**
	 * Setter fuer einen Link nach Extern
	 *
	 * @param string $extlink
	 * @return void
	 */
	public function setExtlink($extlink) {
		$this->extlink = $extlink;
	}

	/**
	 * Getter fuer den Institutskatalog
	 *
	 * @return string
	 */
	public function getInstitutskatalog() {
		return $this->institutskatalog;
	}

	/**
	 * Setter fuer den Institutskatalog
	 *
	 * @param string $institutskatalog
	 * @return void
	 */
	public function setInstitutskatalog($institutskatalog) {
		$this->institutskatalog = $institutskatalog;
	}

	/**
	 * Simpler Getter fuer den Adresszusatz
	 *
	 * @return string
	 * @return void
	 */
	public function getAdresszusatz() {
		return $this->adresszusatz;
	}

	/**
	 * Setter fuer einen Adresszusatz
	 *
	 * @param string $adresszusatz
	 * @return void
	 */
	public function setAdresszusatz($adresszusatz) {
		$this->adresszusatz = $adresszusatz;
	}

	/**
	 * Getter fuer den Katalog
	 *
	 * @return string
	 */
	public function getKatalog() {
		return $this->katalog;
	}

	/**
	 * Link zum Katalog
	 *
	 * @param string $katalog
	 * @return void
	 */
	public function setKatalog($katalog) {
		$this->katalog = $katalog;
	}

	/**
	 * Getter fuer Fakultaet
	 * 
	 * @return \Subugoe\Standorte\Domain\Model\Fakultaet
	 */
	public function getFakultaet() {
		return $this->fakultaet;
	}

	/**
	 * Fakultaet der die Bibliothek angehoert
	 *
	 * @param \Subugoe\Standorte\Domain\Model\Fakultaet $fakultaet
	 */
	public function setFakultaet(\Subugoe\Standorte\Domain\Model\Fakultaet $fakultaet) {
		$this->fakultaet = $fakultaet;
	}

	/**
	 *
	 * @return string
	 */
	public function getSigel() {
		return $this->sigel;
	}

	/**
	 *
	 * @param $sigel
	 * @return void
	 */
	public function setSigel($sigel) {
		$this->sigel = $sigel;
	}

	/**
	 * Auslesen der Oeffnungszeiten
	 * 
	 * @lazy
	 * @return array
	 */
	public function getOeffnungszeiten() {
		return $this->oeffnungszeiten;
	}

	/**
	 * Setter fuer die Oeffnungszeiten
	 *
	 * @param array $oeffnungszeiten
	 * @return void
	 */
	public function setOeffnungszeiten($oeffnungszeiten) {
		$this->oeffnungszeiten = $oeffnungszeiten;
	}

	/**
	 *
	 * @return string
	 */
	public function getTitel() {
		return $this->titel;
	}

	/**
	 *
	 * @param $titel
	 * @return void
	 */
	public function setTitel($titel) {
		$this->titel = $titel;
	}

	/**
	 *
	 * @return string
	 */
	public function getLon() {
		if ($this->lon <= '0.00') {
			$this->lon = $this->geoCode('lon');
		}
		return $this->lon;
	}

	/**
	 *
	 * @param $lon
	 * @return void
	 */
	public function setLon($lon) {
		$this->lon = $lon;
	}

	/**
	 *
	 * @return string
	 */
	public function getLat() {
		if ($this->lat <= '0.00') {
			$this->lat = $this->geoCode('lat');
		}
		return $this->lat;
	}

	/**
	 *
	 * @param $lat
	 * @return void
	 */
	public function setLat($lat) {
		$this->lat = $lat;
	}

	/**
	 *
	 * @return string
	 */
	public function getAnsprechpartner() {
		return $this->ansprechpartner;
	}

	/**
	 *
	 * @param $ansprechpartner
	 * @return void
	 */
	public function setAnsprechpartner($ansprechpartner) {
		$this->ansprechpartner = $ansprechpartner;
	}

	/**
	 *
	 * @return string
	 */
	public function getBestand() {
		return $this->bestand;
	}

	/**
	 *
	 * @param $bestand
	 * @return void
	 */
	public function setBestand($bestand) {
		$this->bestand = $bestand;
	}

	/**
	 * 
	 * @return string
	 */
	public function getStrasse() {
		return $this->strasse;
	}

	/**
	 * 
	 * @param $strasse
	 * @return void
	 */
	public function setStrasse($strasse) {
		$this->strasse = $strasse;
	}

	/**
	 *
	 * @return int
	 */
	public function getPlz() {
		return $this->plz;
	}

	/**
	 *
	 * @param $plz
	 * @return void
	 */
	public function setPlz($plz) {
		$this->plz = $plz;
	}

	/**
	 *
	 * @return string
	 */
	public function getOrt() {
		return $this->ort;
	}

	/**
	 *
	 * @param string $ort
	 * @return void
	 */
	public function setOrt($ort) {
		$this->ort = $ort;
	}

	/**
	 *
	 * @return string
	 */
	public function getZusatzinformationen() {
		return $this->zusatzinformationen;
	}

	/**
	 *
	 * @param string $zusatzinformationen
	 * @return void
	 */
	public function setZusatzinformationen($zusatzinformationen) {
		$this->zusatzinformationen = $zusatzinformationen;
	}

	/**
	 * Existiert ein Bild fuer die aktuelle Bibliothek?
	 *
	 * @return string
	 */
	public function getBild() {
		return $this->bild;
	}

	/**
	 *
	 * @param $bild
	 * @return void
	 */
	public function setBild($bild) {

		$this->bild = $bild;
	}

	/**
	 * Geocoding mit der Google Maps Api v3
	 *
	 * @param string $latlon
	 * @return string
	 */
	private function geoCode($latlon) {

		$adresse = $this->erzeugeAdresse();
		$url = 'http://maps.google.com/maps/api/geocode/json?address=' . $adresse . '&sensor=false';

		$rueckgabe = t3lib_div::getURL($url);
		if (!$rueckgabe) {
			throw new Exception('Geocoding failed', 1342516484);
		}
		$code = json_decode($rueckgabe);
		$latlon == 'lat' ? $geo = $code->results[0]->geometry->location->lat : $geo = $code->results[0]->geometry->location->lng;

		return $geo;
	}

	/**
	 * Adresse zum geokodieren aufbereiten
	 * 
	 * @return string
	 */
	private function erzeugeAdresse() {
		$concat = $this->strasse . ',' . $this->plz . ' ' . $this->ort;
		return urlencode($concat);
	}

	/**
	 * @param int $pizNr
	 */
	public function setPizNr($pizNr) {
		$this->pizNr = $pizNr;
	}

	/**
	 * @return int
	 */
	public function getPizNr() {
		return $this->pizNr;
	}
}
