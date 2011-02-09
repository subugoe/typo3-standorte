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
 * Steuerung des Backendss
 * $Id$
 * @author ingop
 */
class Tx_Standorte_Controller_BackendController extends Tx_Extbase_MVC_Controller_ActionController {

	/**
	 *
	 * @var Tx_Standorte_Domain_Repository_BibliothekRepository
	 */
	protected $bibliothekenRepository;
	/**
	 *
	 * @var Tx_Standorte_Domain_Repository_FakultaetRepository
	 */
	protected $fakultaetRepository;

	/**
	 * Initialisierungsaktion des Controllers
	 * Erzeugung von Objektreferenzen
	 */
	public function initializeAction() {

		$this->bibliothekenRepository = & t3lib_div::makeInstance('Tx_Standorte_Domain_Repository_BibliothekRepository');
		$this->fakultaetRepository = & t3lib_div::makeInstance('Tx_Standorte_Domain_Repository_FakultaetRepository');
	}

	public function indexAction() {

		$this->view->assign('backend', 'Standorte');
		$this->view->assign('fakultaeten', $this->fakultaetRepository->findAll());
	}

	/**
	 * Auflistung aller Fakultaeten
	 */
	public function listFakultaetenAction() {
		$fakultaeten = $this->fakultaetRepository->findAll();
		$this->view->assign('fakultaeten', $fakultaeten);
		$this->view->assign('backend', 'Fakultäten');
	}

	/**
	 * Auflistung aller Bibliotheken
	 */
	public function listBibliothekenAction() {

		$bibliotheken = $this->bibliothekenRepository->findAll();
		$this->view->assign('bibliotheken', $bibliotheken);
	}

	/**
	 * Auflistung aller Bibliotheken einer bestimmten Fakultaet
	 */
	public function listBibliothekenByFakultaetAction(Tx_Standorte_Domain_Model_Fakultaet $fakultaetUid) {

		$this->view->assign('fakultaet', $fakultaetUid);
		$bibliotheken = $this->bibliothekenRepository->findByFakultaet($fakultaetUid);
		$this->view->assign('backend', 'Bibiliotheken');

		$this->view->assign('bibliotheken', $bibliotheken);
	}

}

?>