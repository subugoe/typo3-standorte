<?php

class Tx_Standorte_ViewHelpers_GoogleMapsViewHelper extends Tx_Fluid_Core_ViewHelper_AbstractViewHelper {

	/**
	 * Renders Google Maps
	 *
	 * @param string $lat Latitude
	 * @param string $lon Longitute
	 * @return string Maps Output
	 */
	public function render($lat, $lon) {

		$template = <<<'EOD'
		
EOD;

		$con = $lat . ' - ' . $lon;

		return $template;
	}

}
?>