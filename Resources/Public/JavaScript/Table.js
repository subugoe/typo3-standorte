$(document).ready(function() {

	var splitte = function(uid) {
		id = uid.split('-');
		return id[1];
	};

	if ($('table#daten').length > 0) {
		$('table#daten').DataTable(
			{
				"dom": '<"datahead"fp>ti',
				"language": {
					"url": "/typo3conf/ext/standorte/Resources/Public/JavaScript/German.json"
				}
			}
		);
	}
});
