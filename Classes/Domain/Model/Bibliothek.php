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
	 * @var array
	 */
	protected $oeffnungszeiten;
	/**
	 *
	 * @var string
	 */
	protected $titel;
	/**
	 * Titel fuer die Sortierung
	 * @var string
	 */
	protected $sorttitel;
	/**
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
	 * @var boolean
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
	 * Falls die Bibliothek nur einen Link nach extern hat (Sonderfall MPI)
	 * @var string
	 */
	protected $extlink;


	public function getSorttitel() {
		return $this->sorttitel;
	}

	public function setSorttitel($sorttitel) {
		$this->sorttitel = $sorttitel;
	}

	/**
	 * Getter fuer einen link nach Extern
	 * @return string Link
	 */
	public function getExtlink() {
		return $this->extlink;
	}

	/**
	 * Setter fuer einen Link nach Extern
	 * @param string $extlink
	 */
	public function setExtlink($extlink) {
		$this->extlink = $extlink;
	}

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

	/**
	 * Auslesen der Oeffnungszeiten
	 * @lazy
	 * @return array
	 */
	public function getOeffnungszeiten() {

		$oeffis = & t3lib_div::makeInstance('Tx_Standorte_Domain_Repository_OeffnungszeitenRepository');

		$ergebnis = $oeffis->findByBibliothek($this->uid);

		$oeffnungszeiten = array();

		foreach ($ergebnis as $resultat) {

			//checken ob es geoffnet ist
			$oeffnungszeiten[] = $resultat;
		}

		return $oeffnungszeiten;
	}

	/**
	 * Formatiert die Zeit in Sekunden seit 00:00 des Tages
	 * @return int Aktuelle Zeit in Sekunden des Tages
	 */
	public function holeZeit() {
		$stunde = date('H');
		$minute = date('i');

		$zeit = (($stunde * 60) + $minute) * 60;

		return $zeit;
	}

	/**
	 * Ist die betreffende Bibliothek geoeffnet?
	 * @return boolean 
	 */
	public function getGeoeffnet() {

		// Integer Wert des heutigen Tags
		$tagJetzt = date('N');
		$zeitJetzt = $this->holeZeit();

		//Referenz auf Oeffnungszeiten Objekt
		$oeffis = & t3lib_div::makeInstance('Tx_Standorte_Domain_Repository_OeffnungszeitenRepository');

		//Oeffnungszeiten nach Bibliothek suchen
		$ergebnis = $oeffis->findByBibliothek($this->uid);

		foreach ($ergebnis as $resultat) {

			//Wochentag Check
			if ($resultat->wochentag == $tagJetzt) {
				$geoeffnet = true;
			}

			//Option Montag bis Freitag - WOchentag = 8
			if (($resultat->wochentag === 8) && ($tagJetzt >= 1 && $tagJetzt <= 5)) {
				$geoeffnet = true;
			}


			//Wenn es sich um den falschen Wochentag handelt - nicht weiterchecken
			if ($resultat->wochentag != $tagJetzt && $geoeffnet != true) {
				$geoeffnet = false;
			}

			//Wenn Wochentag Check ok, dann Uhrzeiten vergleichen
			if ($geoeffnet && ($resultat->wochentag == $tagJetzt)) {

				try {
					$von = $resultat->von;
					$bis = $resultat->bis;

					($zeitJetzt >= $von) && ($zeitJetzt <= $bis) ? $geoeffnet = true : $geoeffnet = false;
				} catch (Exception $e) {
					//@TODO fehlernachricht
				}
			}
		}


		return $geoeffnet;
	}

	/**
	 * Setter fuer den Oeffnungsstatus
	 */
	public function setGeoeffnet() {

		$this->geoeffnet = $geoeffnet;
	}

	/**
	 * Setter fuer die Oeffnungszeiten
	 * @param array $oeffnungszeiten
	 */
	public function setOeffnungszeiten($oeffnungszeiten) {
		$this->oeffnungszeiten = $oeffnungszeiten;
	}

	public function getTitel() {
		return $this->titel;
	}

	public function setTitel($titel) {
		$this->titel = $titel;
	}

	/**
	 * @return <type>
	 */
	public function getLon() {

		$this->lon = $this->geoCode('lon');
		return $this->lon;
	}

	public function setLon($lon) {
		$this->lon = $lon;
	}

	public function getLat() {

		$this->lat = $this->geoCode('lat');

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

	/**
	 * Existiert ein Bild fuer die aktuelle Bibliothek?
	 * @return string
	 */
	public function getBild() {
		return $this->bild;
	}

	public function setBild($bild) {

		$this->bild = $image;
	}

	/**
	 * Geocoding mit der Google Maps Api v3
	 * @param string $latlon
	 * @return <type>
	 */
	private function geoCode($latlon) {

		$adresse = $this->erzeugeAdresse();
		$url = 'http://maps.google.com/maps/api/geocode/json?address=' . $adresse . ',germany&sensor=false';

		$rueckgabe = t3lib_div::getURL($url);
		if (!$rueckgabe) {
			throw new Exception('Geocoding failed', 2342, $previous);
		}

		$code = json_decode($rueckgabe);

		$latlon == 'lat' ? $geo = $code->results[0]->geometry->location->lat : $geo = $code->results[0]->geometry->location->lng;

		return $geo;
	}

	/**
	 * Adresse zum geokodieren aufbereiten
	 * @return string
	 */
	private function erzeugeAdresse() {

		$concat = $this->strasse . ',' . $this->plz . ' ' . $this->ort;

		return urlencode($concat);
	}

}

?>
