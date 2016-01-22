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
 * Steuerung des Backendss
 */
class BackendController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     *
     * @var \Subugoe\Standorte\Domain\Repository\BibliothekRepository
     * @inject
     */
    protected $bibliothekenRepository;
    /**
     *
     * @var \Subugoe\Standorte\Domain\Repository\FakultaetRepository
     * @inject
     */
    protected $fakultaetRepository;

    public function initializeAction()
    {
        $GLOBALS['TT'] = new \TYPO3\CMS\Core\TimeTracker\NullTimeTracker;
    }

    /**
     * Index Action des Controllers
     *
     */
    public function indexAction()
    {
        $this->view->assign('backend', 'Standorte');
        $this->view->assign('fakultaeten', $this->fakultaetRepository->findAll());
    }

    /**
     * Auflistung aller Fakultaeten
     *
     */
    public function listFakultaetenAction()
    {
        $fakultaeten = $this->fakultaetRepository->findAll();
        $this->view->assign('fakultaeten', $fakultaeten);
        $this->view->assign('backend', 'Fakultäten');
    }

    /**
     * Auflistung aller Bibliotheken
     *
     */
    public function listBibliothekenAction()
    {
        $bibliotheken = $this->bibliothekenRepository->findAll();
        $this->view->assign('bibliotheken', $bibliotheken);
    }

    /**
     * Auflistung aller Bibliotheken einer bestimmten Fakultaet
     *
     * @param \Subugoe\Standorte\Domain\Model\Fakultaet $fakultaetUid
     */
    public function listBibliothekenByFakultaetAction(\Subugoe\Standorte\Domain\Model\Fakultaet $fakultaetUid)
    {
        $this->view->assign('fakultaet', $fakultaetUid);
        $bibliotheken = $this->bibliothekenRepository->findByFakultaet($fakultaetUid);
        $this->view->assign('backend', 'Bibiliotheken');

        $this->view->assign('bibliotheken', $bibliotheken);
    }

    /**
     * Loeschen einer einzelnen Bibliothek
     *
     * @param \Subugoe\Standorte\Domain\Model\Bibliothek $bibliothek
     */
    public function deleteBibliothekAction(\Subugoe\Standorte\Domain\Model\Bibliothek $bibliothek)
    {
        $this->bibliothekenRepository->remove($bibliothek);
        $this->addFlashMessage('Die Bibliothek ' . $bibliothek->getTitel() . ' wurde erfolgreich geloescht.');
        $this->redirect('listBibliotheken');
    }

    /**
     * Loeschen einer Fakultaet
     *
     * @param \Subugoe\Standorte\Domain\Model\Fakultaet $fakultaet
     */
    public function deleteFakultaetAction(\Subugoe\Standorte\Domain\Model\Fakultaet $fakultaet)
    {
        $this->fakultaetRepository->remove($fakultaet);
        $this->addFlashMessage('Die Fakultaet ' . $fakultaet->getTitel() . ' wurde erfolgreich geloescht.');
        $this->redirect('listFakultaeten');
    }
}
