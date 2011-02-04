/* Liefere nur die uid zurueck*/
function splitte(uid){
	id = uid.split('-')
	return id[1];
}
jQuery(document).ready(function(){

	
	jQuery('table#daten').tablesorter();
	/*standorte*/
	jQuery('.map').click(function(){

		uid = splitte(jQuery(this).attr('id'));
		jQuery.fx.off = true
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

	//tablefilter
	$(function() {
		var theTable = $('table.#daten')

		theTable.find("tbody > tr").find("td:eq(1)").mousedown(function(){
			$(this).prev().find(":checkbox").click()
		});

		$("#filter").keyup(function() {
			$.uiTableFilter( theTable, this.value );
		})

		$('#filter-form').submit(function(){
			theTable.find("tbody > tr:visible > td:eq(1)").mousedown();
			return false;
		}).focus(); //Give focus to input field
	});  


});