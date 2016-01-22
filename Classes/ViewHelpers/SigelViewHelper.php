<?php
namespace Subugoe\Standorte\ViewHelpers;

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
 * Description of SigelViewHelper
 */
class SigelViewHelper extends \TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper
{

    /**
     * Rendert ein Sigel- je nachdem wo es hingehoert
     *
     * @param string $sigel $sigel Das zu ueberpruefende Sigel
     * @return string Das formatierte Sigel
     */
    public function render($sigel)
    {
        if ((is_numeric($sigel)) && (strlen($sigel) == 3)) {

            //dann nehmen wir mal an, dass es eine goettinger Bibliothek ist ...
            $sigel = '7/' . $sigel;
        }

        return $sigel;
    }
}
