<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="initial-scale=1.0, user-scalable=no">
<meta charset="utf-8">
<title>Simple markers</title>
<style>
   html, body {
   height: 100%;
   margin: 0;
   padding: 0;
   }
   #map {
   width: 500px;
   height: 400px;
   }
</style>
</head>
<body>
<div id="map"></div>
<script>
   
   function initMap() {
      var myLatLng = {lat: -25.363, lng: 131.044};
      
      var map = new google.maps.Map(document.getElementById('map'), {
         zoom: 5,
         center: myLatLng
      });
      
      var marker = new google.maps.Marker(
      {
         position: myLatLng,
         map: map,
         title: 'Hello World!'
      },
      {
         position: {lat: 28.6139 ,lng:77.2090},
         map: map,
         title: 'Hello World!'
      }
      
      );
   }
   
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC8mbhydKUuMdavyL54zx2zDClYmoHI4Cs&callback=initMap"></script>
</body>
</html>