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
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">

var map;
var infowindow;

function toggleBounce() {
  if (marker.getAnimation() !== null) {
    marker.setAnimation(null);
  } else {
      // marker.setAnimation(google.maps.Animation.BOUNCE);
    marker.setAnimation(google.maps.Animation.DROP);
  }
}

function initMap(type = 'bus_station') {
   
   var pyrmont = {lat: 28.5736571, lng: 77.2560474};
   var iconBase = 'https://maps.google.com/mapfiles/kml/shapes/';
   
   map = new google.maps.Map(document.getElementById('map'), {
      center: pyrmont,
      zoom: 13
   });
   
   marker = new google.maps.Marker({
      map: map,
      draggable: false,
      animation: google.maps.Animation.DROP,
      position: pyrmont,
      // label: 'test label',
      // icon: iconBase + 'parking_lot_maps.png'
      // icon: iconBase + 'info-i_maps.png',
      icon: {
         // path: google.maps.SymbolPath.CIRCLE,
         path: google.maps.SymbolPath.BACKWARD_CLOSED_ARROW,
        /*  path: google.maps.SymbolPath.FORWARD_CLOSED_ARROW,
         path: google.maps.SymbolPath.BACKWARD_OPEN_ARROW,
         path: google.maps.SymbolPath.FORWARD_OPEN_ARROW, */
         scale: 10
       },
   });
  
  marker.addListener('click', toggleBounce);
   
   infowindow = new google.maps.InfoWindow();
   
   var service = new google.maps.places.PlacesService(map);
   
   var request = {
      location: pyrmont,
      radius: 2000,
      // /* type: ['bus_station'] */
      // /* type: ['restaurant'] */
      // /* type: ['<?php //echo $_GET['type']; ?>'] */
      type: [type]
   };
   
   service.nearbySearch(request, callback);

}

function callback(results, status) {
   
   if (status === google.maps.places.PlacesServiceStatus.OK) {
      /* THR */
         get_multiple_directions(results);
      /* THR */

      for (var i = 0; i < results.length; i++) {
         createMarker(results[i]);
      }
   }
}

function filterObject(results) {
   
   var routes   = [];   
   
   for (var i = 0; i < results.length; i++) {
      routes[i]   = {
         lat: results[i].geometry.location.lat(),
         lng: results[i].geometry.location.lng(),
         placeId: results[i].place_id,
         name: results[i].name,
      };
   }
   
   return routes;  
   
}

function createMarker(place) {

   var placeLoc = place.geometry.location;   

   var marker = new google.maps.Marker({
      map: map,
      position: place.geometry.location,
      animation: google.maps.Animation.DROP,
      // animation: google.maps.Animation.BOUNCE,
      icon: {
         url: place.icon,
         anchor: new google.maps.Point(20, 20),
         scaledSize: new google.maps.Size(20, 20)
      }
   });

   google.maps.event.addListener(marker, 'click', function() {

      infowindow.setContent('<strong style="font-weight: bold;">' + place.name + '</strong>, <br />Address: ' + place.vicinity);
      infowindow.open(map, this);


   });
}

function get_multiple_directions(results) {
   
   var routes  =  filterObject(results);
   /* console.log(routes); */
   /* console.log(routes.length); */
   var directionsService = new google.maps.DirectionsService;
   var directionsDisplay = new google.maps.DirectionsRenderer;
   
   
   var output  =  jQuery('#content_output.content_output ul#output_list');
   
   output.html('');
   
   for (var i = 0; i < routes.length; i++) {
   
      // console.log(routes[i]);
   
     calcAndGetDirection(directionsService, directionsDisplay,routes[i]);
     
   }
   
   /* console.log(routes); */
}


function calcAndGetDirection(directionsService, directionsDisplay,routes) {
   
   // console.log(routes);
   
   directionsService.route({
         origin: {'placeId': document.getElementById('origin_place_id').value},
         destination: {'placeId': routes.placeId},
         travelMode: 'DRIVING'
   }, function(response, status) {
      
      /* console.log(response['routes'][0].legs[0].distance.text); */
      
         // console.log(response);
   
      if (status === 'OK') {
         
         var output  =  jQuery('#content_output.content_output ul#output_list');
         
         var outputHtml =  '<li>';
         
         outputHtml +=  '<div class="name_distance">';
         // outputHtml +=  'Address: '+response['routes'][0].legs[0].start_address;
         outputHtml +=  ' <strong>Name</strong>: <a class="get_directions" href="javascript:void(0);" rel="'+response['routes'][0].legs[0].end_location.lat()+'" data-cordinate-lat="'+response['routes'][0].legs[0].end_location.lat()+'" data-cordinate-lang="'+response['routes'][0].legs[0].end_location.lng()+'" data-place-id="'+routes.placeId+'">' + routes.name + '</a>';
         outputHtml +=  ' <strong>Address</strong>: '+response['routes'][0].legs[0].end_address;
         outputHtml +=  ' <strong>Distance</strong>: '+response['routes'][0].legs[0].distance.text;
         outputHtml +=  ' <strong>Duration</strong>: '+response['routes'][0].legs[0].duration.text;
         outputHtml +=  '</div>';
         outputHtml +=  '</li>';
         
         output.append(outputHtml);
         
         // console.log(response['routes'][0].legs);
         
         
      } /* else {
         window.alert('Directions request failed due to ' + status);
      } */
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

function getGoogleMapDirections(placeRoute) {
   
   var directionsService = new google.maps.DirectionsService;
   var directionsDisplay = new google.maps.DirectionsRenderer;
   
   var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 3,
      center: {lat: 28.5736571, lng: 77.2560474}
   });
   
   calculateAndDisplayRoute(directionsService, directionsDisplay,placeRoute)
   
   directionsDisplay.setMap(map);

}

function calculateAndDisplayRoute(directionsService, directionsDisplay,placeRoute) {
   
   directionsService.route({
         origin: {'placeId': placeRoute.originPlaceId},
         // origin: document.getElementById('start').value,
         // destination: document.getElementById('end').value,
         destination: {'placeId': placeRoute.destinationPlaceId},
         // travelMode: 'DRIVING'
         // travelMode: 'TRANSIT'
         // travelMode: 'WALKING'
         travelMode: 'DRIVING'
   }, function(response, status) {
      
      /* // console.log(response['routes'][0].legs); */
   
      if (status === 'OK') {
         directionsDisplay.setDirections(response);
      } else {
         window.alert('Directions request failed due to ' + status);
      }
   });

}


jQuery(document).on('ready',function(){
   
   jQuery(document).on('click','a.change_location',function(e){
      
      e.preventDefault();
      
      var this_e        =  jQuery(this);
      var thisLocation  =  this_e.attr('data-location-type');      
      
      initMap(thisLocation);
      
   });
   
   // document.getElementsByClassName("get_directions").addEventListener('click', getDirections);
   // document.getElementById('get_directions').addEventListener('click', getDirections);
   
   jQuery(document).on('click','a.get_directions',function(e){
   
      var this_e  =  jQuery(this);
      
      var lat     =  this_e.attr('data-cordinate-lat');
      var lang    =  this_e.attr('data-cordinate-lang');
      var placeId =  this_e.attr('data-place-id');
      
      
      var placeRoute =  {
         originPlaceId: 'ChIJvUf7g6PjDDkRE8zQIiadotU',
         destinationPlaceId: placeId,
         destinationLat: lat,
         destinationLang: lang,
      }
      
      
      console.log(placeRoute);
      getGoogleMapDirections(placeRoute);
      
   });
   
   



});

</script>
</head>
<body>
<div id="map"></div>

<div id="available_amenities" style="width: 500px; float: left;">
   <div class="parameters">
      <input type="hidden" class="origin_place_id" id="origin_place_id" value="ChIJvUf7g6PjDDkRE8zQIiadotU">
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
   <div class="row"><a href="#taxi_stand" class="change_location" data-location-type="taxi_stand">TAXI STAND</a></div>
   <div class="row"><a href="#bank_atm" class="change_location" data-location-type="bank,atm">BANK ATM</a></div>
   <div class="row"><a href="#mosque" class="change_location" data-location-type="mosque">mosque</a></div>
</div>

<div class="content_output" id="content_output" style="width: 600px; float: left;"><ul id="output_list"></ul></div>
<script id="googlePlace" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCx_utm4l1b07fsg1FfSYfb63OMqamhK_Y&libraries=places&callback=initMap" async defer></script>
<?php /* <script id="googlePlace" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCx_utm4l1b07fsg1FfSYfb63OMqamhK_Y&libraries=places&callback=initMap" async defer></script> */ ?>
</body>
</html>