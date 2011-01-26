/* Liefere nur die uid zurueck*/
function splitte(uid){
	id = uid.split('-')
	return id[1];
}

jQuery(document).ready(function(){
	/*standorte*/
	jQuery('.map').click(function(){

		uid = splitte(jQuery(this).attr('id'));

		jQuery("#map-"+uid).toggle(
			function(){
				jQuery.ajax({
					url: '/?eID=standorte',
					type: "POST",
					data: "uid="+uid,
					success: function(data) {
						$('#map-'+uid).html(data);
					}
				});
			}
			);
		return false;
	});
});