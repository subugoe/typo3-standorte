<?php
namespace Subugoe\Standorte\Controller;

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
 * FakultaetenController
 */
class FakultaetController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

	/**
	 *
	 * @var \Subugoe\Standorte\Domain\Repository\FakultaetRepository
	 */
	protected $fakultaetRepository;

	/**
	 * Initialisiert das Repository
	 *
	 * @param \Subugoe\Standorte\Domain\Repository\FakultaetRepository $fakultaetRepository
	 */
	public function injectFakultaetRepository(\Subugoe\Standorte\Domain\Repository\FakultaetRepository $fakultaetRepository) {
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
	 * @param \Subugoe\Standorte\Domain\Model\Fakultaet $fakultaet
	 * @dontvalidate $fakultaet
	 */
	public function newAction(\Subugoe\Standorte\Domain\Model\Fakultaet $fakultaet = NULL) {
		$this->view->assign('fakultaet', $fakultaet);
	}

	/**
	 * Erstellen der Datenbank
	 * @param \Subugoe\Standorte\Domain\Model\Fakultaet $fakultaet 
	 */
	public function createAction(\Subugoe\Standorte\Domain\Model\Fakultaet $fakultaet) {

		if ($fakultaet === NULL) {
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
