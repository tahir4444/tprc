<!DOCTYPE html>
<html>
<head>
<title>Place searches</title>
<meta name="viewport" content="initial-scale=1.0, user-scalable=no">
<meta charset="utf-8">
<style>
/* Always set the map height explicitly to define the size of the div
* element that contains the map. */
#map {
height: 80%;
width: 50%;
 float: left;
 margin-right: 25px;
}
/* Optional: Makes the sample page fill the window. */
html, body {
height: 100%;
margin: 0;
padding: 0;
}
</style>
<script type='text/javascript' src="http://techmagnate.co.in/wavecity/wp-includes/js/jquery/jquery.js"></script>
<script>
// This example requires the Places library. Include the libraries=places
// parameter when you first load the API. For example:
// <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

var map;
var infowindow;

function initMap(type = 'bus_station') {
   
   var pyrmont = {lat: 28.5736571, lng: 77.2560474};
   
   map = new google.maps.Map(document.getElementById('map'), {
      center: pyrmont,
      zoom: 13
   });
   
   infowindow = new google.maps.InfoWindow();
   
   var service = new google.maps.places.PlacesService(map);
   
   var request = {
      location: pyrmont,
      radius: 1000,
      /* type: ['bus_station'] */
      /* type: ['restaurant'] */
      /* type: ['<?php echo $_GET['type']; ?>'] */
      type: [type]
   }
   
   service.nearbySearch(request, callback);
}

function callback(results, status) {
   if (status === google.maps.places.PlacesServiceStatus.OK) {
      for (var i = 0; i < results.length; i++) {
         createMarker(results[i]);
      }
   }
}

function createMarker(place) {
   var placeLoc = place.geometry.location;
   
   console.log(place);
   
   var marker = new google.maps.Marker({
      map: map,
      position: place.geometry.location,
      icon: {
      url: place.icon,
      anchor: new google.maps.Point(30, 30),
      scaledSize: new google.maps.Size(30, 30)
    }
   });
   
   google.maps.event.addListener(marker, 'click', function() {
   
      /* console.log(place); */
   
      infowindow.setContent('<strong style="font-weight: bold;">' + place.name + '</strong>, <br />Address: ' + place.vicinity);
      infowindow.open(map, this);
      
      
   });
}

function getDirections() {
   
   var directionsService = new google.maps.DirectionsService;
   var directionsDisplay = new google.maps.DirectionsRenderer;
   var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 7,
      center: {lat: 28.5736571, lng: 77.2560474}
   });
   
   calculateAndDisplayRoute(directionsService, directionsDisplay)
   
   directionsDisplay.setMap(map);

   
   /* document.getElementById('end').addEventListener('change', onChangeHandler); */
   
}

function calculateAndDisplayRoute(directionsService, directionsDisplay) {
   
   /* console.log('Origin: ' + document.getElementById('start').value); */
   /* console.log('Destination : ' + document.getElementById('end').value); */
   
   directionsService.route({
         origin: document.getElementById('start').value,
         destination: document.getElementById('end').value,
         travelMode: 'TRANSIT'
   }, function(response, status) {
   
      /* console.log(directionsDisplay);routes */
      /* console.log(response); */
      /* console.log(response['routes']); */
      
      console.log(response['routes'][0].legs);
   
      if (status === 'OK') {
         directionsDisplay.setDirections(response);
      } else {
         window.alert('Directions request failed due to ' + status);
      }
   });
   
   /* document.getElementById('get_directions').addEventListener('click', onChangeHandler); */
  

}


jQuery(document).on('ready',function(){
   
   jQuery(document).on('click','a.change_location',function(e){
      
      e.preventDefault();
      
      var this_e        =  jQuery(this);
      var thisLocation  =  this_e.attr('data-location-type');
      
      
      /* console.log(this_e.attr('data-location-type')); */
      
      /* var new_url =  "https://maps.googleapis.com/maps/api/js?key=AIzaSyCx_utm4l1b07fsg1FfSYfb63OMqamhK_Y&libraries=" + thisLocation + "&callback=initMap"; */

      /* jQuery('#googleLocation').attr('src',new_url); */
      
      initMap(thisLocation);
      
   });
   
   
   
  
   document.getElementById('get_directions').addEventListener('click', getDirections);

});

</script>
</head>
<body>
<div id="map"></div>

<div id="available_amenities" style="width: 300px; float: left;">
   <div class="parameters">
      <input type="hidden" class="origin" id="origin"value="28.5736571|77.2560474">
      <input type="hidden" class="destination" id="destination" value="28.5712781|77.2588765">
      <input type="hidden" class="start" id="start" value="28.5736571,77.2560474">
      <input type="hidden" class="end" id="end" value="28.5712781,77.2588765">
      <button id="get_directions" class="get_directions"><span>Get Directions</span></button>
   </div>
   <div class="row"><a href="#gym" class="change_location" data-location-type="gym">GYM</a></div>
   <div class="row"><a href="#hospital" class="change_location" data-location-type="hospital">HOSPITALS</a></div>
   <div class="row"><a href="#school" class="change_location" data-location-type="school">SCHOOLS</a></div>
   <div class="row"><a href="#bus_station" class="change_location" data-location-type="bus_station">BUS STATIONS</a></div>
   <div class="row"><a href="#train_station" class="change_location" data-location-type="train_station">METRO STATIONS</a></div>
   <div class="row"><a href="#post_office" class="change_location" data-location-type="post_office">POST OFFFICE</a></div>
</div>
<script id="googlePlace" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCx_utm4l1b07fsg1FfSYfb63OMqamhK_Y&libraries=places&callback=initMap" async defer></script>
<?php /* <script id="googlePlace" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCx_utm4l1b07fsg1FfSYfb63OMqamhK_Y&libraries=places&callback=initMap" async defer></script> */ ?>
</body>
</html>