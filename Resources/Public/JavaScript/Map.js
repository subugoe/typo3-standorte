$(document).ready(function() {

	var subIcon = L.icon({
		iconUrl: 'typo3conf/ext/standorte/Resources/Public/Images/icon_tx_standorte_domain_model_bibliothek.png',
		iconSize: [18, 18],
		popupAnchor: [0, -10]
	});

	$('.map').click(function() {

		var lat = $(this).attr('lat'),
			lng = $(this).attr('lng'),
			title = $(this).attr('head'),
			zoom = 16,
			mapid = this.id,
			mapcontainer = mapid.replace('cl-', 'map-');

		$('#' + mapcontainer + '.karte').toggle();

		var map = L.map(mapcontainer).setView([lat, lng], zoom);
		L.tileLayer('https://{s}.tile.osm.org/{z}/{x}/{y}.png', {
			attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
		}).addTo(map);
		L.marker([lat, lng], {icon: subIcon}).addTo(map)
			.bindPopup(title)
			.openPopup();
	});
});
