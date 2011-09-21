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
 * Controller
 * $Id$
 * @author Ingo Pfennigstorf <pfennigstorf@sub.uni-goettingen.de>
 */
class Tx_Standorte_Controller_BibliothekController extends Tx_Extbase_MVC_Controller_ActionController {

	/**
	 *
	 * @var Tx_Standorte_Domain_Repository_BibliothekRepository
	 */
	protected $bibliothekenRepository;
	/**
	 * @var Tx_Standorte_Domain_Repository_FakultaetRepository
	 */
	protected $fakultaetRepository;

	/**
	 * DI fuer die Bibliotheken
	 *
	 * @param Tx_Standorte_Domain_Repository_BibliothekRepository $bibliothekenRepository
	 */
	public function injectBibliothekRepository(Tx_Standorte_Domain_Repository_BibliothekRepository $bibliothekenRepository){
		$this->bibliothekenRepository = $bibliothekenRepository;
	}

	/**
	 * DI fuer die Fakultaeten
	 *
	 * @param Tx_Standorte_Domain_Repository_FakultaetRepository $fakultaetRepository
	 */
	public function injectFakultaetRepository(Tx_Standorte_Domain_Repository_FakultaetRepository $fakultaetRepository){
		$this->fakultaetRepository = $fakultaetRepository;
	}

	/**
	 * Index action mit Auflistung aller Bibliotheken.
	 *
	 */
	public function indexAction() {

		$bibliotheken = $this->bibliothekenRepository->findAll();
		$this->view->assign('bibos', $bibliotheken);
	}

	/**
	 * Alle Bibliotheken einer Fakultaet auflisten
	 * @param Tx_Standorte_Domain_Model_Fakultaet $fakultaetId
	 */
	public function listAction(Tx_Standorte_Domain_Model_Fakultaet $fakultaet =NULL) {

		$bibliotheken = $this->bibliothekenRepository->findByFakultaet($fakultaet);

		$this->view->assign('fakultaet', $fakultaet);
		$this->view->assign('bibos', $bibliotheken);
	}

	/**
	 * Ausgabe aller Bibliotheken mit anderm View (nur sigel und titel)
	 */
	public function listSigelTitelAction() {

		$bibliotheken = $this->bibliothekenRepository->findAll();
		$this->view->assign('bibos', $bibliotheken);
	}

	/**
	 * Single ansicht
	 * @param Tx_Standorte_Domain_Model_Bibliothek $bibliothek
	 */
	public function singleAction(Tx_Standorte_Domain_Model_Bibliothek $bibliothek) {

		$this->view->assign('bibo', $bibliothek);
	}

	/**
	 * Ausgabe einer Liste mit allen Bibliotheken und den entsprechenden Links dazu
	 */
	public function listBibMitLinkAction(){
		$bibliotheken = $this->bibliothekenRepository->findAll();
		$this->view->assign('bibos', $bibliotheken);
	}

}

?>