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
	 * @var Tx_Standorte_Domain_Repository_BibliothekRepository
	 * @inject
	 */
	protected $bibliothekenRepository;

	/**
	 * @var Tx_Standorte_Domain_Repository_FakultaetRepository
	 * @inject
	 */
	protected $fakultaetRepository;

	/**
	 * @var Tx_Extbase_SignalSlot_Dispatcher
	 * @inject
	 */
	protected $signalSlotDispatcher;

	/**
	 * Index action to list all libraries
	 */
	public function indexAction() {

		$bibliotheken = $this->bibliothekenRepository->findAll();
		$this->view->assign('bibos', $bibliotheken);
	}

	/**
	 * List all libraries by faculty
	 * @param Tx_Standorte_Domain_Model_Fakultaet $fakultaetId
	 */
	public function listAction(Tx_Standorte_Domain_Model_Fakultaet $fakultaet = NULL) {

		$bibliotheken = $this->bibliothekenRepository->findByFakultaet($fakultaet);

			// new pagetitle
		$GLOBALS['TSFE']->page['title'] = $fakultaet->getTitel();

		$this->view->assign('fakultaet', $fakultaet);
		$this->view->assign('bibos', $bibliotheken);
	}

	/**
	 * get all libraries in other view (only sigel and title)
	 */
	public function listSigelTitelAction() {

		$bibliotheken = $this->bibliothekenRepository->findAll();
		$this->view->assign('bibos', $bibliotheken);
	}

	/**
	 * Single view
	 * @param Tx_Standorte_Domain_Model_Bibliothek $bibliothek
	 */
	public function singleAction(Tx_Standorte_Domain_Model_Bibliothek $bibliothek) {
			// Neuer Seitentitel
		$GLOBALS['TSFE']->page['title'] = $bibliothek->getTitel();
		$this->view->assign('bibo', $bibliothek);
	}

	/**
	 * Renders a list of all libraries with links
	 */
	public function listBibMitLinkAction(){
		$bibliotheken = $this->bibliothekenRepository->findAll();
		$this->view->assign('bibos', $bibliotheken);
	}

}

?>