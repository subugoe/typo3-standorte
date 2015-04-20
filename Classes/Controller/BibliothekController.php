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
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

/**
 * Library Controller
 */
class BibliothekController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

	/**
	 * @var \Subugoe\Standorte\Domain\Repository\BibliothekRepository
	 * @inject
	 */
	protected $bibliothekenRepository;

	/**
	 * @var \Subugoe\Standorte\Domain\Repository\FakultaetRepository
	 * @inject
	 */
	protected $fakultaetRepository;

	/**
	 * @var \TYPO3\CMS\Core\Page\PageRenderer $pageRenderer
	 */
	protected $pageRenderer;

	/**
	 * @var \TYPO3\CMS\Extbase\SignalSlot\Dispatcher
	 * @inject
	 */
	protected $signalSlotDispatcher;

	public function initializeAction() {
		$this->pageRenderer = $GLOBALS['TSFE']->getPageRenderer();
		$this->pageRenderer->addCssFile(ExtensionManagementUtility::siteRelPath('standorte') . '/Resources/Public/Css/Standorte.css');
	}

	/**
	 * Index action to list all libraries
	 */
	public function indexAction() {
		$bibliotheken = $this->bibliothekenRepository->findAll();
		$this->view->assign('bibos', $bibliotheken);
	}

	/**
	 * List all libraries by faculty
	 * @param \Subugoe\Standorte\Domain\Model\Fakultaet $fakultaetId
	 */
	public function listAction(\Subugoe\Standorte\Domain\Model\Fakultaet $fakultaet = NULL) {

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

		$this->pageRenderer->addJsFile(ExtensionManagementUtility::siteRelPath('standorte') . '/Resources/Public/JavaScript/jquery.dataTables.min.js');
		$this->pageRenderer->addCssFile(ExtensionManagementUtility::siteRelPath('standorte') . '/Resources/Public/Css/dataTables.css');
		$this->pageRenderer->addJsFile(ExtensionManagementUtility::siteRelPath('standorte') . '/Resources/Public/JavaScript/Table.js');

		$bibliotheken = $this->bibliothekenRepository->findAll();
		$this->view->assign('bibos', $bibliotheken);
	}

	/**
	 * Single view
	 * @param \Subugoe\Standorte\Domain\Model\Bibliothek $bibliothek
	 */
	public function singleAction(\Subugoe\Standorte\Domain\Model\Bibliothek $bibliothek) {
		$this->pageRenderer->addJsFile(ExtensionManagementUtility::siteRelPath('standorte') . '/Resources/Public/JavaScript/leaflet.js');
		$this->pageRenderer->addCssFile(ExtensionManagementUtility::siteRelPath('standorte') . '/Resources/Public/Css/leaflet.css');
		$this->pageRenderer->addJsFile(ExtensionManagementUtility::siteRelPath('standorte') . '/Resources/Public/JavaScript/Map.js');

		// Neuer Seitentitel
		$GLOBALS['TSFE']->page['title'] = $bibliothek->getTitel();
		$this->view->assign('bibo', $bibliothek);
	}

	/**
	 * Renders a list of all libraries with links
	 */
	public function listBibMitLinkAction() {
		$bibliotheken = $this->bibliothekenRepository->findAll();
		$this->view->assign('bibos', $bibliotheken);
	}

}
