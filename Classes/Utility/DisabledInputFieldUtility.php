<?php

/* * *************************************************************
 *  Copyright notice
 *
 *  (c) 2013 Dominic Simm <dominic.simm@sub.uni-goettingen.de>, Goettingen State Library
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
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
 * Helper-Class to provide disabled HTML input field in Backend edit-module
 */
class Tx_Standorte_Utility_DisabledInputFieldUtility {

	function disabledInputField($PA, $fObj) {

		$disabled = (isset($PA['parameters']['disabled']) && $PA['parameters']['disabled'] == 'true') ? ' disabled="disabled"' : '';
		$formField = '<span class="t3-tceforms-input-wrapper">';
		$formField .= '<span tag="a" class="t3-icon t3-icon-actions t3-icon-actions-input t3-icon-input-clear t3-tceforms-input-clearer">&nbsp;</span>';
		$formField .= '<input type="text" name="' . $PA['itemFormElName'] . '"';
		$formField .= ' value="' . htmlspecialchars($PA['itemFormElValue']) . '"';
		$formField .= ' onchange="' . htmlspecialchars(implode('', $PA['fieldChangeFunc'])) . '"';
		$formField .= ' class="formField1 tceforms-textfield hasDefaultValue"';
		$formField .= ' size="' . htmlspecialchars($PA['fieldConf']['config']['size']) . '"';
		$formField .= $PA['onFocus'];
		$formField .= $disabled . ' />';
		$formField .= '<input type="hidden" name="' . $PA['itemFormElName'] . '" value="' . htmlspecialchars($PA['itemFormElValue']) . '">';
		$formField .= '</span>';

		return $formField;
	}

}
