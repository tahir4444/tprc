<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
<title>Place details</title>
<meta name="viewport" content="initial-scale=1.0, user-scalable=no">
<meta charset="utf-8">
<style>
/* Always set the map height explicitly to define the size of the div
* element that contains the map. */
#map {height: 100%;}
/* Optional: Makes the sample page fill the window. */
html, body {height: 100%;margin: 0;padding: 0;}
</style>
<script>
   // This example requires the Places library. Include the libraries=places
   // parameter when you first load the API. For example:
   // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">
   
   function initMap() {
      var map = new google.maps.Map(document.getElementById('map'), {
         center: {lat: -33.866, lng: 151.196},
         zoom: 15
      });
      
      var infowindow = new google.maps.InfoWindow();
      var service = new google.maps.places.PlacesService(map);
      
      service.getDetails({
         placeId: 'ChIJN1t_tDeuEmsRUsoyG83frY4'
         }, function(place, status) {
            console.log(place);
            console.log(place.formatted_address);
         if (status === google.maps.places.PlacesServiceStatus.OK) {
            var marker = new google.maps.Marker({
               map: map,
               position: place.geometry.location
            });
            google.maps.event.addListener(marker, 'click', function() {
               infowindow.setContent('<div><strong>' + place.name + '</strong><br>' +
               'Place ID: ' + place.place_id + '<br>' +
               place.formatted_address + '</div>');
               infowindow.open(map, this);
            });
         }
      });
   }
</script>
</head>
<body>
<div id="map"></div>
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCx_utm4l1b07fsg1FfSYfb63OMqamhK_Y&libraries=places&callback=initMap">
</script>
</body>
</html>