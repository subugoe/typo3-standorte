<?php
if (!$_POST['uid']) {
	die('geh fort');
}

$uid = intval(t3lib_div::_GP('uid'));

$datenbankname = 'tx_standorte_domain_model_bibliothek';

$db = tslib_eidtools::connectDB();

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
		$titel = $row ['titel'];
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
	var inhalt = "<?php echo $adresse . ' ' . $url; ?>";


	//Infobubble
	var infowindow = new google.maps.InfoWindow({
		content: inhalt
	});

	//marker
	var marker = new google.maps.Marker({
		position: myLatLng,
		map: map,
		title: "<?php echo $titel; ?>"
	});

	//Oeffnen des Infofensters
	infowindow.open(map,marker);

	//Click Listener
	google.maps.event.addListener(marker, 'click', function() {
		infowindow.open(map,marker);
	});
</script>


