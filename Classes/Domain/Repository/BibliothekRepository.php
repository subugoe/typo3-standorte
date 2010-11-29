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
 *
 * @author ingop
 */
class Tx_Standorte_Domain_Repository_BibliothekRepository extends Tx_Extbase_Persistence_Repository {

	/**
	 * n:m Abfrage 
	 * @param Tx_Standorte_Domain_Model_Fakultaet $fakultaet
	 * @return <type>
	 */
	public function fakultaetsliste(int $fakultaet) {

		t3lib_div::debug($fakultaet, 'id');

		$abfrage = 'SELECT DISTINCT(uid_local), uid_foreign FROM tx_standorte_domain_model_bibliothek_fakultaet_mm WHERE uid_local = ' . $fakultaet;

		$query = $this->createQuery()
						->statement($abfrage)
						->execute();

		t3lib_div::debug($query);

		return $query;
	}

}

?>
