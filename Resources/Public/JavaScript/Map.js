$(document).ready(function(){

	var lat = $('#map').attr('lat');
	var lng = $('#map').attr('lng');
	var zoom = $('#map').attr('zoom');
	var title = $('.details h2')[0];

	var subIcon = L.icon({
		iconUrl: 'typo3conf/ext/standorte/Resources/Public/Images/icon_tx_standorte_domain_model_bibliothek.png',
		iconSize:     [18, 18],
		popupAnchor:  [0, -10]
	});

	var map = L.map('map').setView([lat, lng], zoom);
	L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
		attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
	}).addTo(map);
	L.marker([lat, lng], {icon: subIcon}).addTo(map)
		.bindPopup(title.innerHTML)
		.openPopup();
});