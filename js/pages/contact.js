var Contact = function () {

    return {
        
        //Map
        initMap: function () {
			var map;
			$(document).ready(function(){
			  map = new GMaps({
				div: '#map',
				lat: 29.994542,
				lng: -95.571998
			  });
			   var marker = map.addMarker({
		            lat: 29.994542,
					lng: -95.571998,
		            title: 'Loop, Inc.'
		        });
			});
        }

    };
}();