<!DOCTYPE html>
<html>
<head>
<!-- This stylesheet contains specific styles for displaying the map
on this page. Replace it with your own styles as described in the
documentation:
https://developers.google.com/maps/documentation/javascript/tutorial -->
<link rel="stylesheet" href="http://techmagnate.co.in/wavecity/wp-content/themes/wavecity/css/bootstrap.min.css">
</head>
<body>
<div id="map"></div>

<div class="testing-data">
   
<?php
  /*  $url  =  'https://maps.googleapis.com/maps/api/place/nearbysearch/json?location=28.5736571,77.2560474&radius=500&type=restaurant&keyword=&key=AIzaSyCx_utm4l1b07fsg1FfSYfb63OMqamhK_Y'; */
   $atm  =  'https://maps.googleapis.com/maps/api/place/nearbysearch/json?location=28.5736571,77.2560474&radius=1000&type=bus_station&keyword=&key=AIzaSyCx_utm4l1b07fsg1FfSYfb63OMqamhK_Y';
   $mapData =  file_get_contents($atm);
   
   $encoded =  json_decode($mapData, true);
   
   
   
   echo '<pre>'. print_r($encoded,true) . '</pre>';
   
   
?>   
   
  <?php foreach($encoded['results'] as $place) : ?>
      <div class="row border" style="border: 1px solid #ccc;">
         <div class="name col-sm-3"><?php echo $place['name']; ?></div>
         <div class="icon col-sm-3"><img src="<?php echo $place['icon']; ?>" alt="<?php echo $place['name']; ?>" /></div>
         <div class="vicinity address col-sm-3"><?php echo $place['vicinity']; ?></div>
      </div>
   <?php endforeach; ?>
   
   
<?php   
   /* echo $mapData; */
?>   
</div>
<script>
/* function initMap() {
   // Create a map object and specify the DOM element for display.
   var map = new google.maps.Map(document.getElementById('map'), {
      /* center: {lat: -34.397, lng: 150.644}, */
      /*// center: {lat: 28.5736571, lng: 77.2560474},
      scrollwheel: false,
      zoom: 8
   });
} */

</script>
<?php /*<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCx_utm4l1b07fsg1FfSYfb63OMqamhK_Y&callback=initMap" async defer></script> */ ?>
</body>
</html>