"use strict";

// initialize map
var map = new GMaps({
  div: '#map',
  lat: 48.85966593647314,
  lng: 2.3526007291381346
});

// when the 'start travel' button is clicked
$("#start-travel").click(function() {
  $(this).fadeOut();
  $("#instructions").before("<div class='section-title'>Instructions</div>");
  map.travelRoute({
    origin: [48.86103098099422, 2.3405363868659457],
    destination: [48.84917600452775, 2.389915089889527],
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
});
