$(document).ready(function(){
	global.storesBanner('div#store-hours-banner');
});
$(window).load(function(){

});


let global = {
	storesBanner : function(locId){
		let html = Mustache.render(mst.stores,{"status" : "Open Now","hours" : "8am - 7pm"});
		$(locId).html(html);
	}
};