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
 * @author Ingo Pfennigstorf <pfennigstorf@sub.uni-goettingen.de>
 */
class Tx_Standorte_Controller_BibliothekController extends Tx_Extbase_MVC_Controller_ActionController {

	/**
	 *
	 * @var Tx_Standorte_Domain_Repository_BibliothekRepository
	 */
	protected $bibliothekenRepository;

	/**
	 * Initializes the current action
	 *
	 * @return void
	 */
	public function initializeAction() {
		$this->bibliothekenRepository = & t3lib_div::makeInstance('Tx_Standorte_Domain_Repository_BibliothekRepository');
	}

	/**
	 * Index action for this controller.
	 *
	 */
	public function indexAction() {

		$bibliotheken = $this->bibliothekenRepository->findAll();
		$this->view->assign('bibos', $bibliotheken);
	}

	/**
	 * Fuege neue Bibliothek hinzu
	 * @param Tx_Standorte_Domain_Model_Bibliothek $bibliothek
	 * @dontvalidate $bibliothek
	 */
	public function newAction(Tx_Standorte_Domain_Model_Bibliothek $bibliothek = NULL) {

		$this->view->assign('bibos', $bibliothek);
	}

	/**
	 * Erzeugt einen neuen Eintrag
	 * @param Tx_Standorte_Domain_Model_Bibliothek $bibliothek
	 */
	public function createAction(Tx_Standorte_Domain_Model_Bibliothek $bibliothek) {

		debug($bibliothek);
		$this->bibliothekenRepository->add($bibliothek);

		$this->view->assign('bibo', $bibliothek);
	}

	/**
	 * Alle Bibliotheken einer Fakultaet auflisten
	 * @param int $fakultaetId
	 */
	public function listAction(int $fakultaet =NULL) {
		$fakultaet = 1;
		$bibliotheken = $this->bibliothekenRepository->fakultaetsliste($fakultaet);

		$bibos = array();

		foreach ($bibliotheken as $bibo){
			$bibos = $this->bibliothekenRepository->findByUid($bibo[]);
		}

		$this->view->assign('bibos', $bibliotheken);
	}

}

?>