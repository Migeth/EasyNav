"use strict";

// initialize map
var map = new GMaps({
  div: '#map',
  lat: 48.85966593647314,
  lng: 2.3526007291381346,
  zoom: 13
});

// draw route between 'origin' to 'destination'
map.drawRoute({
  origin: [48.86103098099422, 2.3405363868659457],
  destination: [48.84917600452775, 2.389915089889527],
  travelMode: 'driving',
  strokeColor: '#131540',
  strokeOpacity: 0.6,
  strokeWeight: 6
});