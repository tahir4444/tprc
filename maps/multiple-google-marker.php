<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
<style type="text/css">
   html { height: 100% }
   body { height: 100%; margin: 0; padding: 0 }
   #map_canvas { height: 100% }
</style>
<script type="text/javascript"
src=
"http://maps.googleapis.com/maps/api/js?key=AIzaSyC8mbhydKUuMdavyL54zx2zDClYmoHI4Cs&sensor=false">
</script>
<script type="text/javascript">
   
   var locations = [
   ['loan 1', -25.363, 131.044, 'Sydney, Australia'],
   ['loan 1', 28.6139, 77.2090, 'New Delhi, India'],
   // ['loan 2', 33.923036, 151.259052, 'address 2'],
   // ['loan 3', 34.028249, 151.157507, 'address 3'],
   // ['loan 4', 33.80010128657071, 151.28747820854187, 'address 4'],
   // ['loan 5', 33.950198, 151.259302, 'address 5']
   ];
   
   function initialize() {
      
      var myOptions = {
         center: new google.maps.LatLng(33.890542, 151.274856),
         zoom: 2,
         mapTypeId: google.maps.MapTypeId.ROADMAP
         
      };
      var map = new google.maps.Map(document.getElementById("default"),
      myOptions);
      
      setMarkers(map,locations)
      
   }
   
   
   function setMarkers(map,locations){
      
      var marker, i
      
      for (i = 0; i < locations.length; i++)
      {
         
         var loan    =  locations[i][0];
         var lat     =  locations[i][1];
         var long    =  locations[i][2];
         var add     =  locations[i][3];
         
         latlngset = new google.maps.LatLng(lat, long);
         
         var marker = new google.maps.Marker({
            map: map, title: loan , position: latlngset
         });
         map.setCenter(marker.getPosition())
         
         
         var content = "Loan Number: " + loan +  '</h3>' + "Address: " + add
         
         var infowindow = new google.maps.InfoWindow()
         
         /* google.maps.AddListener(marker,'click', function(map,marker){
            infowindow.setContent(content)
            infowindow.open(map,marker)
            
         }); */
         
         google.maps.event.addListener(marker,'click', (function(marker,content,infowindow){
            return function() {
               infowindow.setContent(content);
               infowindow.open(map,marker);
            };
         })(marker,content,infowindow));  
         
      }
   }
   
   
   
</script>
</head>
<body onload="initialize()">
<div id="default" style="width:100%; height:100%"></div>
</body>
</html>