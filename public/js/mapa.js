$(document).ready(function () {
  var map = L.map('map').
    setView([43.3227696, -1.9940565, 17], 15);
  var layer = L.esri.basemapLayer('Physical').addTo(map);
  var layerLabels;

  function setBasemap(basemap) {
    if (layer) {
      map.removeLayer(layer);
    }

    layer = L.esri.basemapLayer(basemap);

    map.addLayer(layer);

    if (layerLabels) {
      map.removeLayer(layerLabels);
    }

    if (basemap.includes('Imagery')) {
      layerLabels = L.esri.basemapLayer('ImageryLabels');
      map.addLayer(layerLabels);
    }
  }
  $('.basemaps').click(function () {
    var basemap = $(this).attr('id');
    setBasemap(basemap);
  });


  L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://cloudmade.com">CloudMade</a>',
  }).addTo(map);
  var searchControl = L.esri.Geocoding.geosearch().addTo(map);
  var results = L.layerGroup().addTo(map);
  L.control.scale().addTo(map);
  let latitud = -1.9921275;
  let longitud = 43.3228796;
  for (i = 0; i < 3; i++) {
    L.marker([longitud, latitud], {
      draggable: false
    }).addTo(map);
    latitud += 0.5;
    longitud += 0.2;
  }
  //Al hacer click se guardan las coordenadas en la vista addlocal
  map.on('click', function(e) {
    var locate= e.latlng.lat + ", " + e.latlng.lng;
    document.getElementById("coord").value = locate; 
});
});