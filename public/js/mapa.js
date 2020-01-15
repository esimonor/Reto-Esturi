$(document).ready(function () {
  var map = L.map('map').
    setView([43.3227696, -1.9940565], 15);
    layers: [baseLayers, overlayMaps];
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
  searchControl = L.esri.Geocoding.geosearch().addTo(map);
   L.control.layers(baseLayers, overlayMaps, {
    collapsed: false
  }).addTo(map);

  //Al hacer click se guardan las coordenadas en la vista addlocal
  map.on('click', function(e) {
    var latitude= e.latlng.lat;
    var longitude= e.latlng.lng;
    document.getElementById("lat").value = latitude;
    document.getElementById("lng").value = longitude; 
  });

  //Seccion de iconos
  var barIcon = L.icon({
    iconUrl: 'https://i.imgur.com/sIEwWRU.png',

    iconSize:     [69, 75], // Tamaño del icono
    iconAnchor:   [42, 64], // Punto correspondiente en el mapa del icono
    popupAnchor:  [-3, -76] // Punto donde deberia salir el popup
});
var museoIcon = L.icon({
  iconUrl: 'https://i.imgur.com/W7soerF.png',

  iconSize:     [69, 75],
  iconAnchor:   [42, 64],
  popupAnchor:  [-3, -76]
});

var fiestasIcon = L.icon({
  iconUrl: 'https://i.imgur.com/b58IyNL.png',

  iconSize:     [69, 75],
  iconAnchor:   [42, 64],
  popupAnchor:  [-3, -76]
});
var gimnasiosIcon = L.icon({
  iconUrl: 'https://i.imgur.com/6C2YWrL.png',

  iconSize:     [69, 75],
  iconAnchor:   [42, 64],
  popupAnchor:  [-3, -76]
});
var cinesIcon = L.icon({
  iconUrl: 'https://i.imgur.com/qJe8fR6.png',

  iconSize:     [69, 75],
  iconAnchor:   [42, 64],
  popupAnchor:  [-3, -76] 
});
var monumentosIcon = L.icon({
  iconUrl: 'https://i.imgur.com/2PvsE9c.png',

  iconSize:     [69, 75],
  iconAnchor:   [42, 64],
  popupAnchor:  [-3, -76]
});
var centroIcon = L.icon({
  iconUrl: 'https://i.imgur.com/Ut3gIp6.png',

  iconSize:     [69, 75],
  iconAnchor:   [42, 64],
  popupAnchor:  [-3, -76] 
});
var restauranteIcon = L.icon({
  iconUrl: 'https://i.imgur.com/yFiSM1C.png',

  iconSize:     [69, 75],
  iconAnchor:   [42, 64],
  popupAnchor:  [-3, -76]
});

    //Seccion de añadir las coordenadas de la BD en el mapa
    var bucle = document.getElementById("res_final").value;//Cuantas vueltas va a tener que dar para poner todos los establecimientos
    var x=0;//Primera mitad de las coordenadas
    var y=0;//Segunda mitad de las coordenadas
    var lugar;//Coordenadas completas
    var tipo;//Tipo de establecimiento
  while(bucle>0){
    lugar = document.getElementById(bucle).value;
    tipo = document.getElementById("desc"+bucle).value;
    var nombre = document.getElementById("name"+bucle).value;
    x = lugar.slice(0,17);
    y = lugar.slice(19,99);
    //Los if detectan que categoria es, y añade el icono correspondiente
    if(tipo=="museos"){
      var marker1 = L.marker([x,y], {icon: museoIcon}).addTo(map);
    marker1.bindPopup("<b>"+nombre+"</b><br>"+tipo);
    }
    if(tipo=="centros"){
      var marker2 = L.marker([x,y], {icon: centroIcon}).addTo(map);
    marker2.bindPopup("<b>"+nombre+"</b><br>"+tipo);
    }
    if(tipo=="fiestas"){
      var marker3 = L.marker([x,y], {icon: fiestasIcon}).addTo(map);
    marker3.bindPopup("<b>"+nombre+"</b><br>"+tipo);
    }
    if(tipo=="gimnasios"){
      var marker4 = L.marker([x,y], {icon: gimnasiosIcon}).addTo(map);
    marker4.bindPopup("<b>"+nombre+"</b><br>"+tipo);
    }
    if(tipo=="cines"){
      var marker5 = L.marker([x,y], {icon: cinesIcon}).addTo(map);
    marker5.bindPopup("<b>"+nombre+"</b><br>"+tipo);
    }
    if(tipo=="monumentos"){
      var marker6 = L.marker([x,y], {icon: monumentosIcon}).addTo(map);
    marker6.bindPopup("<b>"+nombre+"</b><br>"+tipo);
    }
    if(tipo=="bares"){
      var marker7 = L.marker([x,y], {icon: barIcon}).addTo(map);
    marker7.bindPopup("<b>"+nombre+"</b><br>"+tipo);
    }
    if(tipo=="restaurantes"){
      var marker8 = L.marker([x,y], {icon: restauranteIcon}).addTo(map);
    marker8.bindPopup("<b>"+nombre+"</b><br>"+tipo);
    }
    
    bucle--;
  }

  //LayerGroup para que se puedan seleccionar y quiar en el mapa
  var museos = L.layerGroup([marker1]);
  var centros = L.layerGroup([marker2]);
  var fiestas = L.layerGroup([marker3]);
  var gimnasio = L.layerGroup([marker4]);
  var cines = L.layerGroup([marker5]);
  var monumentos = L.layerGroup([marker6]);
  var bares = L.layerGroup([marker7]);
  var restaurantes = L.layerGroup([marker8]);


  var overlayMaps = {
    "museos": museos,
    "centros": centros,
    "fiestas": fiestas,
    "gimnasio": gimnasio,
    "cines": cines,
    "monumentos": monumentos,
    "bares": bares,
    "restaurantes": restaurantes
  };

  var baseLayers = {
    'OSM': osm
  }; 



});