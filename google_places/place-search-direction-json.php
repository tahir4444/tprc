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



</script>
</head>
<body>
<?php
   
// echo origin=place_id:ChIJ3S-JXmauEmsRUcIaWtf4MzE   
// echo origin=place_id:ChIJ3S-JXmauEmsRUcIaWtf4MzE   
// https://maps.googleapis.com/maps/api/directions/outputFormat?parameters


// $googleApi  =  'https://maps.googleapis.com/maps/api/directions/outputFormat?parameters';
// $googleApi  =  'https://maps.googleapis.com/maps/api/directions/json?mode=bicycling&origin=Toronto&destination=Montreal&key=AIzaSyCx_utm4l1b07fsg1FfSYfb63OMqamhK_Y';
// $googleApi  =  'https://maps.googleapis.com/maps/api/directions/json?mode=transit&origin=Toronto&destination=Montreal&key=AIzaSyCx_utm4l1b07fsg1FfSYfb63OMqamhK_Y';
$googleApi  =  'https://maps.googleapis.com/maps/api/directions/json?mode=transit&origin=place_id:ChIJ3S-JXmauEmsRUcIaWtf4MzE&destination=place_id:ChIJvUf7g6PjDDkRE8zQIiadotU&key=AIzaSyCx_utm4l1b07fsg1FfSYfb63OMqamhK_Y';



$request =  file_get_contents($googleApi);


echo '<pre>'.print_r(json_decode($request,true),true).'</pre>';


?>

   
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
   <div class="row"><a href="#train_station" class="change_location" data-location-type="subway_station,train_station">METRO STATIONS</a></div>
   <div class="row"><a href="#post_office" class="change_location" data-location-type="post_office">POST OFFFICE</a></div>
</div>

<div class="content_output" id="content_output" style="width: 100%; float: left;"><ul id="output_list"></ul></div>

</body>
</html>