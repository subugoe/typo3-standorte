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
 * Description of FakultaetenController
 * $Id: FakultaetController.php 1728 2012-03-05 07:04:11Z pfennigstorf $
 * @author ingop
 */
class Tx_Standorte_Controller_FakultaetController extends Tx_Extbase_MVC_Controller_ActionController {

	/**
	 *
	 * @var Tx_Standorte_Domain_Repository_FakultaetRepository
	 */
	protected $fakultaetRepository;

	/**
	 * Initialisiert das Repository
	 *
	 * @param Tx_Standorte_Domain_Repository_FakultaetRepository $fakultaetRepository
	 */
	public function injectFakultaetRepository(Tx_Standorte_Domain_Repository_FakultaetRepository $fakultaetRepository) {
		$this->fakultaetRepository = $fakultaetRepository;
	}

	/**
	 * Listet alle Fakultaeten auf und verlinkt diese
	 */
	public function indexAction() {

		$fakultaeten = $this->fakultaetRepository->findAll();
		$this->view->assign('fakultaeten', $fakultaeten);
	}

	/**
	 * Neue Fakultaet anlegen
	 * @param Tx_Standorte_Domain_Model_Fakultaet $fakultaet
	 * @dontvalidate $fakultaet
	 */
	public function newAction(Tx_Standorte_Domain_Model_Fakultaet $fakultaet = NULL) {

		$this->view->assign('fakultaet', $fakultaet);
	}

	/**
	 * Erstellen der Datenbank
	 * @param Tx_Standorte_Domain_Model_Fakultaet $fakultaet 
	 */
	public function createAction(Tx_Standorte_Domain_Model_Fakultaet $fakultaet) {

		If ($fakultaet === NULL) {
			$this->redirect('index');
		}
		$this->fakultaetRepository->add($fakultaet);
	}

	/**
	 * Detailansicht einer Fakultaet
	 */
	public function detailAction() {

		$this->view->assign('titel', $this->fakultaetRepository);
	}

}

?>