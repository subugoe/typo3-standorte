<?php

/* * *************************************************************
 *  Copyright notice
 *
 *  (c) 2011 Ingo Pfennigstorf <pfennigstorf@sub.uni-goettingen.de>
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
 * Ajax Funktion fuer das bedarfsorientierte Nachladen der Maps
 * $Id$
 * @author Ingo Pfennigstorf <pfennigstorf@sub.uni-goettingen.de>
 */

if (!$_POST['uid']) {
	die('Direktes Aufrufen des Scripts ist nicht erlaubt');
}

$uid = intval(t3lib_div::_GP('uid'));

$datenbankname = 'tx_standorte_domain_model_bibliothek';

$res = $GLOBALS["TYPO3_DB"]->exec_SELECTquery(
		"lat,lon, titel, strasse, plz, ort", // SELECT ...
		$datenbankname, // FROM ...
		"uid=" . $uid, // WHERE...
		"", // GROUP BY...
		"", // ORDER BY...
		"1"// LIMIT ...
);


if ($res) {
	while ($row = $GLOBALS['TYPO3_DB']->sql_fetch_assoc($res)) {
		$lat = $row['lat'];
		$lon = $row['lon'];
		$titel = $row['titel'];
		$strasse = $row['strasse'];
		$plz = $row['plz'];
		$ort = $row['ort'];

		$adresse = generiereAdresse($titel, $strasse, $plz, $ort);
	}
}

/**
 * Adresse erstellen
 * @param <type> $titel
 * @param <type> $strasse
 * @param <type> $plz
 * @param <type> $ort
 * @return string
 */
function generiereAdresse($titel, $strasse, $plz, $ort) {
	$adresse = '<strong>' . $titel . '</strong><br />' . $strasse . '<br />' . $plz . ' ' . $ort;
	return $adresse;
}

?>

<script type="text/javascript">

	var latlng = new google.maps.LatLng(<?php echo $lat . ', ' . $lon; ?>);
	var myOptions = {
		zoom: 17,
		center: latlng,
		mapTypeId: google.maps.MapTypeId.ROADMAP,
		navigationControl: true,
		navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},
		scaleControl: true,
		streetViewControl: false
	};
	var map = new google.maps.Map(document.getElementById("map-<?php echo $uid; ?>"), myOptions);
	var myLatLng = new google.maps.LatLng(<?php echo $lat . ', ' . $lon; ?>);


	//Inhalt
	var inhalt = '<div class="standorte-infobox"><?php echo $adresse . ' ' . $url; ?></div>';


	//Infobubble
	var infowindow = new google.maps.InfoWindow({
		                                            content: inhalt
	                                            });

	//marker
	var marker = new google.maps.Marker({
			position: myLatLng,
			map: map,
			title: <?php echo json_encode($titel); ?>
		});

	//Click Listener
	google.maps.event.addListener(marker, 'click', function() {
		infowindow.open(map, marker);
	});
</script>