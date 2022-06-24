"use strict";

// initialize map
var map = new GMaps({
  div: '#map',
  lat: 48.85966593647314,
  lng: 2.3526007291381346,
  zoom: 8
});
// Added markers to the map
map.addMarker({
  lat: 48.85966593647314,
  lng: 2.3526007291381346,
  title: 'Chatelet Les Halles',
  infoWindow: {
    content: '<h6>Chatelet Les Halles</h6>'
  }
});
map.addMarker({
  lat: 48.86103098099422,
  lng: 2.3405363868659457,
  title: 'ESGI',
  infoWindow: {
    content: '<h6>ESGI, École Supérieure de Génie Informatique</h6><p>242 Rue du Faubourg Saint-Antoine\n' +
        '75012 Paris\n' +
        'France</p>'
  }
});
map.addMarker({
  lat: 48.84739446354133,
  lng: 2.353072251464159,
  title: 'Sorbonne',
  infoWindow: {
    content: '<h6>Sorbonne</h6><p>4 Pl. Jussieu\n' +
        '75005 Paris\n' +
        'France</p>'
  }
});
