"use strict";

// initialize map
var map = new GMaps({
  div: '#map',
  lat: 48.85966593647314,
  lng: 2.3526007291381346
});
// Added a marker to the map
map.addMarker({
  lat: 48.86103098099422,
  lng: 2.3405363868659457,
  title: 'Musée du Louvre',
  infoWindow: {
    content: '<h6>Multinity</h6><p>Jl. HM. Syarifudin, Bubulak, Bogor Bar., <br>Kota Bogor, Jawa Barat 16115</p><p><a target="_blank" href="http://multinity.com">Website</a></p>'
  }
});
