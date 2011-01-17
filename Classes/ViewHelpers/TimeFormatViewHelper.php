<?php

class Tx_Standorte_ViewHelpers_TimeFormatViewHelper extends Tx_Fluid_Core_ViewHelper_AbstractViewHelper {

	/**
	 * Formats a given timestamp in seconds to a human readable format
	 *
	 * @param int $ts The timestamp
	 * @return string The formated Date/Time
	 */
	public function render($ts) {

		$ts = $ts - 3600;

		return date('H:i', $ts);
	}

}

?>