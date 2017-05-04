/********************Google MAP Start*************************************************/
var projectName = "Golf Links";
$(function() {
   var options = {
      //locationSearch  : true,        // if true then place address location required to search that place
      //address         : 'Noida, UP',
      categoryNav: true, // to show places categories and sub categories list with navigations
      customCommuteNav: true, // to show input to set custom commute from location
      
      sourceCommuteNav: false, // to show input to set source location
      
      mapContainerClass: 'map-container',
      mapLocationClass: 'location-container',
      mapPlaceClass: 'place-category',
   };
   options.locationName = 'Sector 27, Greater Noida, Noida';
   options.lat = '28.473670';
   options.lng = '77.5329600';
   
   $('.p-map').srGoogleMap(options);
   
   $('.map-project_title').html(projectName);
});
/********************Google MAP End*************************************************/   