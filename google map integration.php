


<div class="map-box" id="map">        //id should be map.
 </div>


 <script>
       var map;
       function initMap() {
         map = new google.maps.Map(document.getElementById('map'), {
           center: {lat: 52.3053288, lng: 4.8747482},
           zoom: 15,
         });

    // This part generates the marker of location.
    
         var marker = new google.maps.Marker({
 		     position: {lat: 52.3053288, lng: 4.8747482},
 		      map: map
 		        });
 		      }
 		    </script>

//genterate the API key of location and enable the google map (www-html) Enter key="...."&call..

 <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDe-dvboOAZZBqbctQOJ-K-G9E-0BogrSk&callback=initMap"></script>
