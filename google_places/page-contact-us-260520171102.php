<?php get_header(); ?>
<section class="wraper page" id="primary" >
   
   <div id="primary" class="content-area container page">
      
      <div class="map_area">
      
      <div class="top_row">
         <ul id="map_tabs">
            <li id="project_connectivity"><a href="javascript:void(0);" class="map_places active">Project Connectivity</a></li>
            <li id="essential_amenities"><a href="javascript:void(0);" class="map_places">Essential Amenities</a></li>
            <li id="custom_comutation"><a href="javascript:void(0);" class="map_places">Custom Commutation</a></li>
            <li id="other_amenities"><a href="javascript:void(0);" class="map_places">Other Amenities</a></li>
         </ul>
      </div>
      
      <div class="row_content">
         <div class="left-content">
            <div class="map_tab_content">
               <div class="contetivities active project_connectivity">
                  <h2>Project Connectivity</h2>
                  <ul>
                     <li><a href="javascript:void(0);" class="get_nearby" data-location-type="bus_station">Bus Stop</a></li>
                     <li><a href="javascript:void(0);" class="get_nearby" data-location-type="train_station">Metro & Train Station</a></li>
                     <li><a href="javascript:void(0);" class="get_nearby" data-location-type="taxi_stand">Taxi Stand</a></li>
                     <li><a href="javascript:void(0);" class="get_nearby" data-location-type="airport">Airport</a></li>
                  </ul>
               </div>
               <div class="contetivities essential_amenities">
                  <h2>Essential Amenities</h2>
                  <ul>
                     <li><a href="javascript:void(0);" class="get_nearby" data-location-type="pharmacy, dentist, doctor, health, hospital">Hospitals & Healthcare</a></li>
                     <li><a href="javascript:void(0);" class="get_nearby" data-location-type="school, university">Schools & Education</a></li>
                     <li><a href="javascript:void(0);" class="get_nearby" data-location-type="bank, atm">Banks & ATM</a></li>
                     <li><a href="javascript:void(0);" class="get_nearby" data-location-type="convenience_store, department_store, grocery_or_supermarket">Grocery Stores</a></li>
                     <li><a href="javascript:void(0);" class="get_nearby" data-location-type="clothing_store, furniture_store, shoe_store, home_goods_store, jewelry_store">Shops Nearby</a></li>
                     <li><a href="javascript:void(0);" class="get_nearby" data-location-type="restaurant, bakery, cafe, food, meal_delivery, meal_takeaway">Food & Restaurants</a></li>
                     <li><a href="javascript:void(0);" class="get_nearby" data-location-type="gas_station">Fuel Station</a></li>
                  </ul>
               </div> 
               <div class="contetivities custom_comutation">
                  <div class="location-filter-header text-center apdd26">                       
                  <h4>Custom Commutation</h4>
                  </div>
                 <div class="custom_comutationform">
                        <div class="place-search-input text-center">
                        <input placeholder="Enter a place to commute..." type="text">
                        <input value="Go" class="loc_search_button" type="button">
                        </div> 
                        <div class="my-loc"><i class="fa fa-fw" aria-hidden="true"></i> Your Current Location</div>
                  </div>
               </div>
               <div class="contetivities other_amenities">
                  <h2>Other Amenities</h2>
                  <ul>
                     <li><a href="javascript:void(0);" class="get_nearby" data-location-type="bank,atm,convenience_store,department_store,grocery_or_supermarket,pharmacy, dentist, doctor, health, gas_station, school, university, library, laundry">Utilities & Necessities</a></li>
                     <li><a href="javascript:void(0);" class="get_nearby" data-location-type="convenience_store_department_store_grocery_or_supermarket">Metro & Grocery Store</a></li>
                     <li><a href="javascript:void(0);" class="get_nearby" data-location-type="pharmacy_dentis_doctor_health">Pharmacy & Health</a></li>
                     <li><a href="javascript:void(0);" class="get_nearby" data-location-type="gas_station">Fuel Station</a></li>
                     <li><a href="javascript:void(0);" class="get_nearby" data-location-type="school, university, library">Education</a></li>
                     <li><a href="javascript:void(0);" class="get_nearby" data-location-type="laundry">Laundry</a></li>
                  </ul>
               </div>
               
               <div class="google_directions">
                  <div class="location-filter-header text-center">                       
                  <a href="javascript:void(0)" class="text-uppercase"><i class="icon-sprite"></i>Back</a>
                  <h4>Bus Stop</h4>
                  </div>
                  <ul></ul>
               </div>
               
            </div>
         </div>
         <div class="right-map map-content">
            <div id="map" style="width: 100%; height:300px;"></div>
         </div>
      </div>
      
   </div>      
      <?php
         // Start the loop.
         while ( have_posts() ) : the_post();
         
         // Include the page content template.
         get_template_part( 'content', 'page' );

         endwhile;
      ?> 
   </div><!-- .container -->
</section><!-- section.wraper -->

<script type="text/javascript" src="<?php echo THEME_URI; ?>/js/thr-places.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBrX83i-pqZllzWn1kHHoh-pHQHcMOsMdE&libraries=places&callback=initMap"></script>
<script type="text/javascript">
jQuery(document).on('ready',function(){
   
   jQuery(document).on('click','#map_tabs a.map_places',function(e){
      
      var this_e  =  jQuery(this);
      
      var parent_li  =  this_e.parent();
      
      var parentID   =  parent_li.prop('id');
      
      jQuery('.map_tab_content .contetivities').removeClass('active');
      jQuery('.map_tab_content .contetivities.'+parentID).addClass('active');
      
      
   });
   
   jQuery(document).on('click','a.get_nearby',function(e){
      
      e.preventDefault();
      
      var this_e        =  jQuery(this);
      var thisLocation  =  this_e.attr('data-location-type');
      
      /* this_e.parent().parents().find('li').removeClass('active'); */
      this_e.parents('.contetivities').removeClass('active');
      
      // this_e.parent().addClass('active');
      
      
      /* jQuery('.google_directions').slideUp("slow"); */
      jQuery('.google_directions').addClass();
      jQuery('.google_directions').slideDown(2000);
      
      console.log(thisLocation);
      
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
<?php /*
<script type="text/javascript">
   
   
   
document.addEventListener( 'wpcf7mailsent', function( event ) {

   // console.log('wpcf7mailsent');
   console.log(event);
   console.log(jQuery('.redirect_url').val());
}, false );
</script>
*/
?>
<?php get_footer(); ?>