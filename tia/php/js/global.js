$(document).ready(function(){
	global.storesBanner('div#store-hours-banner');
});
$(window).load(function(){
	if( $('#google-map') ){ global.googleMap('google-map'); }
});


let global = {
	googleMap : function(locId){
		let latLng = {lat: 39.9512117, lng: -75.1712311};
		let map = new google.maps.Map(document.getElementById(locId), {
		    center: latLng,
		    zoom: 13,
		    zoomControl: false,
	    	scaleControl: true,
	    	streetViewControl: true
		  });
		let marker = new google.maps.Marker({
		    position: latLng,
		    map: map,
		    title: 'Massage By Tia'
		  });
	},
	storesBanner : function(locId){
		let html = Mustache.render(mst.stores,{"status" : "Open Now","hours" : "8am - 7pm"});
		$(locId).html(html);
	}
};
