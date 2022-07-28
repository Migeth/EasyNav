"use strict";

// initialize map
var map = new GMaps({
  div: '#map',
  lat: 48.85966593647314,
  lng: 2.3526007291381346
});

var desti_lat = 48.85966593647314
var desti_long = 2.3526007291381346

// when the form is submitted
$("#search-form").submit(function(e) {
  e.preventDefault();

  // initialize map geocode
  GMaps.geocode({
    address: $('#address').val(),
    callback: function(results, status) {
      if (status == 'OK') {
        var latlng = results[0].geometry.location;
        desti_lat = latlng.lat()
        desti_long = latlng.lng()
        map.setCenter(latlng.lat(), latlng.lng());
        map.addMarker({
          lat: latlng.lat(),
          lng: latlng.lng()
        });
      }
    }
  });
})

// when the 'start travel' button is clicked
$("#start-travel").click(function() {
  $(this).fadeOut();
  $("#instructions").before("<div class='section-title'>Instructions</div>");
  // initialize map geolocation
  GMaps.geolocate({
    // when geolocation is allowed by user
    success: function(position) {
      // set center map according to user position
      map.setCenter(position.coords.latitude, position.coords.longitude);
      // add a marker to the map
      map.addMarker({
        lat: position.coords.latitude,
        lng: position.coords.longitude,
        title: 'Votre Position',
        infoWindow: {
          content: '<h6>Adresse actuelle</h6>'
        }
      });
      map.travelRoute({
        origin: [position.coords.latitude, position.coords.longitude],
        destination: [desti_lat, desti_long],
        travelMode: 'driving',
        step: function(e) {
          $('#instructions').append('<li class="media"><div class="media-icon"><i class="far fa-circle"></i></div><div class="media-body">'+e.instructions+'</div></li>');
          $('#instructions li:eq(' + e.step_number + ')').delay(450 * e.step_number).fadeIn(200, function() {
            map.setCenter(e.end_location.lat(), e.end_location.lng());
            map.drawPolyline({
              path: e.path,
              strokeColor: '#131540',
              strokeOpacity: 0.6,
              strokeWeight: 6
            });
          });
        }
      });
    },
    // when geolocation is blocked by the user
    error: function(error) {
      toastr.error('Erreur de géolocalisation : '+error.message);
    },
    // when the user's browser does not support
    not_supported: function() {
      toastr.error("Votre navigateur ne supporte pas la géolocalisation");
    }
  });

});
