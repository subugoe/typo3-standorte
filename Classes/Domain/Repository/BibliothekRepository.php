<?php
namespace Subugoe\Standorte\Domain\Repository;

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
 */
class BibliothekRepository extends \TYPO3\CMS\Extbase\Persistence\Repository {

	public $defaultOrderings = array(
		'sigel' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_ASCENDING,
		'titel' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_ASCENDING
	);

	/**
	 * Spezialmethode fuer den Hook
	 * @param int $fakultaet
	 * @return \Subugoe\Standorte\Domain\Model\Bibliothek
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
