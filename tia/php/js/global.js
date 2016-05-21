$(document).ready(function(){
	global.storesBanner('div#store-hours-banner');
});
$(window).load(function(){
	if( $('#google-map') ){ global.googleMap('google-map'); }
});


let global = {
	googleMap : function(locId){
		let latLng = {lat: 47.6678999, lng: -122.0964889};
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
