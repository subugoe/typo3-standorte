<?php
/***************************************************************
* Copyright notice
*
* (c) 2012 Ingo Pfennigstorf <pfennigstorf@sub.uni-goettingen.de>
* All rights reserved
*
* This script is part of the TYPO3 project. The TYPO3 project is
* free software; you can redistribute it and/or modify
* it under the terms of the GNU General Public License as published by
* the Free Software Foundation; either version 2 of the License, or
* (at your option) any later version.
*
* The GNU General Public License can be found at
* http://www.gnu.org/copyleft/gpl.html.
*
* This script is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
* GNU General Public License for more details.
*
* This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/

/**
 * Testcase for the Tx_Standorte_Controller_BibliothekController class.
 *
 * @package TYPO3
 * @subpackage tx_standorte
 *
 * @author Ingo Pfennigstorf <pfennigstorf@sub.uni-goettingen.de>
 */
class Tx_Standorte_Controller_BibliothekControllerTest extends Tx_Phpunit_TestCase {

	/**
	 * @var \Subugoe\Standorte\Controller\BibliothekController
	 */
	private $fixture = NULL;

	/**
	 * @var \Subugoe\Standorte\Domain\Repository\BibliothekRepository
	 */
	private $newsRepository = NULL;

	/**
	 * Set up framework
	 *
	 * @return void
	 */
	public function setUp() {
		$this->fixture = new \Subugoe\Standorte\Controller\BibliothekController();

		$this->newsRepository = $this->getMock(
			'Subugoe\\Standorte\\Domain\\Repository\\BibliothekRepository', array(), array(), '', FALSE
		);
	}

	/**
	 * Tear down framework
	 *
	 * @return void
	 */
	public function tearDown() {
		unset($this->fixture, $this->newsRepository);
	}

	/**
	 * Test for creating correct demand call
	 *
	 * @test
	 * @return void
	 */
	public function listActionFindsDemandedBibliothekByDemandFromSettings() {

	}
}
?>