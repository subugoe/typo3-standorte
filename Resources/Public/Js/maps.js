/*
 * JS for Extension standorte
 * @author Ingo Pfennigstorf <pfennigstorf@sub.uni-goettingen.de>
 */

/* Liefere nur die uid zurueck*/
function splitte(uid){
	id = uid.split('-');
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
						if (typeof(piwikTracker) != 'undefined') {
							piwikTracker.trackPageView('Map/Standorte');
						}
						jQuery('#map-'+uid).html(data);
					}
				});
			}
			);
		return false;
	});

	//tablefilter
	jQuery(function() {
		var theTable = jQuery('table#daten');

		theTable.find('tbody > tr').find('td:eq(1)').mousedown(function(){
			jQuery(this).prev().find(':checkbox').click();
		});

		jQuery('#filter').keyup(function() {
			jQuery.uiTableFilter( theTable, this.value );
		})

		jQuery('#filter-form').submit(function(){
			theTable.find("tbody > tr:visible > td:eq(1)").mousedown();
			return false;
		}).focus(); //Give focus to input field
	});
});