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
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper;
use TYPO3\CMS\Frontend\ContentObject\ContentObjectRenderer;

/**
 * View Helper for a TypoLink
 */
class TypolinkViewHelper extends AbstractViewHelper
{

    /**
     * Renders a Typolink with title etc
     *
     * @param string $typolink Typolink to be processes
     * @param string $linktext Text around the link
     * @param string $title link title attribute
     * @return string
     */
    public function render($typolink, $linktext, $title = '')
    {
        $local_cObj = GeneralUtility::makeInstance(ContentObjectRenderer::class);

        $url = $local_cObj->typoLink(
            $linktext, [
                'parameter' => $typolink,
                'title' => $title
            ]
        );
        return $url;
    }

}
