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
 * Description of BibliothekRepository
 * $Id$
 * @author ingop
 */
class Tx_Standorte_Domain_Repository_BibliothekRepository extends Tx_Extbase_Persistence_Repository {

	public function __construct(Tx_Extbase_Object_ObjectManagerInterface $objectManager = NULL) {


		// Sortierung nach Titel
		$defaultOrderings = array(
			'sorttitel' => Tx_Extbase_Persistence_QueryInterface::ORDER_ASCENDING,
			'titel' => Tx_Extbase_Persistence_QueryInterface::ORDER_ASCENDING
		);
		//Workaround fuer 4.4.x
		if (t3lib_div::int_from_ver(TYPO3_version) >= 4005000) {
			$this->setDefaultOrderings($defaultOrderings);
		} parent::__construct($objectManager);
	}

	/**
	 * Spezialmethode fuer den Hook
	 * @param int $fakultaet
	 * @return Tx_Standorte_Domain_Model_Bibliothek
	 */
	public function findByUidEverywhere($fakultaet) {

		$query = $this->createQuery();

		$query->getQuerySettings()->
				setRespectStoragePage(false)->
				setRespectEnableFields(true)->
				setRespectSysLanguage(true);

		$query->matching($query->equals('fakultaet', $fakultaet));

		$result = $query->execute();

		return $result;
	}
	
}

?>