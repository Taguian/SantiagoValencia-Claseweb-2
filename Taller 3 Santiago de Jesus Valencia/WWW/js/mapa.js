

 var locations = [
          ['Casa', 3.3603897,-76.5447813],
          ['Cristo Rey', 3.436294,-76.565105],
          ['Donde Oscar', 3.4464844,-76.4959637],
          ['Faró', 3.421320, -76.536393],
          ['Para el pueblo', 3.446766, -76.516566],
          ['San Pablito', 3.406240, -76.548152]
  
        ];

        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 13,
          center: new google.maps.LatLng(3.425675924511549, -76.55270937499995),
          mapTypeId: google.maps.MapTypeId.ROADMAP
        });

        var infowindow = new google.maps.InfoWindow();

        var marker, i;

        for (i = 0; i < locations.length; i++) {
          marker = new google.maps.Marker({
            position: new google.maps.LatLng(locations[i][1], locations[i][2]),
            map: map
          });

          google.maps.event.addListener(marker, 'click', (function(marker, i) {
            return function() {
              infowindow.setContent(locations[i][0]);
              infowindow.open(map, marker);
            }
          })(marker, i));
        }