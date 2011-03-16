/*
 * JS for Extension standorte
 * @author Ingo Pfennigstorf <pfennigstorf@sub.uni-goettingen.de>
 * jQueryId: maps.js 847 2011-02-09 14:19:28Z pfennigstorf jQuery
 */

/* Liefere nur die uid zurueck*/
function splitte(uid){
	id = uid.split('-')
	return id[1];
}
jQuery(document).ready(function(){
	jQuery('.tx-standorte-pi1 .list .bibhead h2 a').addClass('closed');
	jQuery('.tx-standorte-pi1 .list:first .bibhead h2 a').addClass('opened').removeClass('closed');

	
	jQuery('.tx-standorte-pi1 .list .details').css('display','none');
	jQuery('.tx-standorte-pi1 .list:first .details').attr('style','display:block');


	/* Klick auf Titel*/
	jQuery('.tx-standorte-pi1 .bibhead').click(function(){

		jQuery(this).next('.details').toggle();

		if (jQuery("a", this).attr('class') == 'opened'){
			jQuery("a", this).addClass('closed').removeClass('opened');
		}
		else{
			jQuery("a", this).addClass('opened').removeClass('closed');

		}
		
		
		return false;
	});
	
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
						
						jQuery('#map-'+uid).html(data);
					}
				});
			}
			);
		return false;
	});

	//tablefilter
	jQuery(function() {
		var theTable = jQuery('table.#daten')

		theTable.find("tbody > tr").find("td:eq(1)").mousedown(function(){
			jQuery(this).prev().find(":checkbox").click()
		});

		jQuery("#filter").keyup(function() {
			jQuery.uiTableFilter( theTable, this.value );
		})

		jQuery('#filter-form').submit(function(){
			theTable.find("tbody > tr:visible > td:eq(1)").mousedown();
			return false;
		}).focus(); //Give focus to input field
	});


});