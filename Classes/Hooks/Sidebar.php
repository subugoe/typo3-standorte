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
//Unschoen aber laeuft
require_once(PATH_typo3conf . 'ext/standorte/Classes/Domain/Repository/BibliothekRepository.php');

/**
 * Description of Tx_Standorte_Classes_Hooks
 *
 * @author ingop
 */
class user_Tx_Standorte_Classes_Hooks_Sidebar extends Tx_Extbase_MVC_Controller_ActionController {

	public function hookFunc(&$tmp, $obj) {
		$bibliothekenRepository = t3lib_div::makeInstance('Tx_Standorte_Domain_Repository_BibliothekRepository');

		$gp = t3lib_div::GPvar('tx_standorte_pi1');


		$fakultaetId = intval($gp['fakultaetUid']);

		if ($fakultaetId >= 1) {

			$bibliotheken = $bibliothekenRepository->findByFakultaet($fakultaetId);

			$tmp = '';
			foreach ($bibliotheken as $bibliothek) {
				$tmp .= '<li><a href="#bibliothek-' . $bibliothek->getUid() . '">';
				$tmp .= $bibliothek->getTitel();
				$tmp .= '</a></li>';
			}
		}
	}

}

?>