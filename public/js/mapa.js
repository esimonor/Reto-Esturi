$(document).ready(function () {
  var map = L.map('map').
    setView([43.3227696, -1.9940565], 15);
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
  /*var marker = L.marker([43.3228796, -1.9921275]).addTo(map);
  marker.bindPopup("<b>Aquarium</b><br>1 Plaza de Carlos Blasco Imaz<br> 20003 Donostia, Gipuzkoa");

  var marker2 = L.marker([43.305941, -1.973445]).addTo(map);
  marker2.bindPopup("<b>Arcco</b><br>Plaza de Irún <br>6, 20011 Donostia-San Sebastian, SS");

  var marker3 = L.marker([43.315552, -1.988778]).addTo(map);
  marker3.bindPopup("<b>Bataplan</b><br>Kontxa Pasealekua<br> 12, 20007 Donostia, Gipuzkoa");

  var marker4 = L.marker([43.323342, -1.977731]).addTo(map);
  marker4.bindPopup("<b>Altafit</b><br>Peña y Goñi Kalea<br>12, 14, 20002 Donostia-San Sebastian, SS");

  var marker5 = L.marker([43.322437, -1.974759]).addTo(map);
  marker5.bindPopup("<b>Cine Trueba</b><br>Secundino Esnaola Kalea<br> 2, 4, 20001 Donostia, SS");

  var marker6 = L.marker([43.321834, -2.005437]).addTo(map);
  marker6.bindPopup("<b>Peine del Viento</b><br>Eduardo Chillida Pasealekua<br> 20008 Donostia, Gipuzkoa");

  var marker7 = L.marker([43.324096, -1.983742]).addTo(map);
  marker7.bindPopup("<b>Bar Néstor</b><br>Arrandegi Kalea<br>11, 20003 Donostia, Gipuzkoa");

  var marker8 = L.marker([43.321589, -1.949238]).addTo(map);
  marker8.bindPopup("<b>Arzak</b><br>Avenida del, Alcalde J. Elosegi Hiribidea<br>273, 20015 Donostia, Gipuzkoa");*/


  var bucle = document.getElementById("res_final").value;

  //for(var count=1;count<bucle;count++){}
  var lugar = document.getElementById(count).value;
    var x = lugar.slice(0,16);
    var y = lugar.slice(19,99);
    var marker9 = L.marker([x,y]).addTo(map);
    marker9.bindPopup("<b>Esto es una prueba"+count+"</b>");

    var lugar = document.getElementById("1").value;
    var x = lugar.slice(0,16);
    var y = lugar.slice(19,99);
    var marker9 = L.marker([x,y]).addTo(map);
    marker9.bindPopup("<b>Esto es una prueba"+count+"</b>");
    
    var lugar = document.getElementById("2").value;
    var x = lugar.slice(0,16);
    var y = lugar.slice(19,99);
    var marker9 = L.marker([x,y]).addTo(map);
    marker9.bindPopup("<b>Esto es una prueba"+count+"</b>");
    
    var lugar = document.getElementById("3").value;
    var x = lugar.slice(0,16);
    var y = lugar.slice(19,99);
    var marker9 = L.marker([x,y]).addTo(map);
    marker9.bindPopup("<b>Esto es una prueba"+count+"</b>");
    
    var lugar = document.getElementById("4").value;
    var x = lugar.slice(0,16);
    var y = lugar.slice(19,99);
    var marker9 = L.marker([x,y]).addTo(map);
    marker9.bindPopup("<b>Esto es una prueba"+count+"</b>");

  /*var museos = L.layerGroup([marker]);
  var centros = L.layerGroup([marker2]);
  var fiestas = L.layerGroup([marker3]);
  var gimnasio = L.layerGroup([marker4]);
  var cines = L.layerGroup([marker5]);
  var monumentos = L.layerGroup([marker6]);
  var bares = L.layerGroup([marker7]);
  var restaurantes = L.layerGroup([marker8]);
  var prueba = L.layerGroup([marker9]);*/


  /*var overlayMaps = {
    "museos": museos,
    "centros": centros,
    "fiestas": fiestas,
    "gimnasio": gimnasio,
    "cines": cines,
    "monumentos": monumentos,
    "bares": bares,
    "restaurantes": restaurantes,
    "basedatos": prueba

  };
  var layer= L.control.layers(overlayMaps).addTo(map);*/


  //Al hacer click se guardan las coordenadas en la vista addlocal
  map.on('click', function(e) {
    var locate= e.latlng.lat + ", " + e.latlng.lng;
    document.getElementById("coord").value = locate; 
});

});