$(document).ready(function () {
  var map = L.map('map').
    setView([43.3227696, -1.9940565], 15);
  var layer = L.esri.basemapLayer('Physical').addTo(map);
  var layerLabels;
  //Localización basada en la posición actual; funciona bien en movil
  map.locate({setView: true, maxZoom: 16});

  function onLocationFound(e) {
    var radius = e.accuracy;

    L.marker(e.latlng).addTo(map)
        .bindPopup("Aqui estas tú");

    L.circle(e.latlng, radius).addTo(map);
}

map.on('locationfound', onLocationFound);

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
  //L.control.layers(overlayMaps, {collapsed: false}).addTo(map);

  //Al hacer click se guardan las coordenadas en la vista addlocal
  map.on('click', function(e) {
    var latitude= e.latlng.lat;
    var longitude=  e.latlng.lng;
    document.getElementById("lat").value = latitude; 
    document.getElementById("lng").value = longitude; 
  });

  /*var marker8 = L.marker([43.321589, -1.949238]).addTo(map);
  marker8.bindPopup("<b>Arzak</b><br>Avenida del, Alcalde J. Elosegi Hiribidea<br>273, 20015 Donostia, Gipuzkoa");*/

//Seccion Iconos
  var barIcon = L.icon({
    iconUrl: 'https://i.imgur.com/sIEwWRU.png',

    iconSize:     [69, 75], // Tamaño del icono
    iconAnchor:   [42, 64], // Punto del icono correspondiente al mapa
    popupAnchor:  [-3, -46] // Punto donde saldra el popup
});
var museoIcon = L.icon({
  iconUrl: 'https://i.imgur.com/W7soerF.png',

  iconSize:     [69, 75],
  iconAnchor:   [42, 64],
  popupAnchor:  [-3, -46]
});

var fiestasIcon = L.icon({
  iconUrl: 'https://i.imgur.com/b58IyNL.png',

  iconSize:     [69, 75],
  iconAnchor:   [42, 64],
  popupAnchor:  [-3, -46]
});
var gimnasiosIcon = L.icon({
  iconUrl: 'https://i.imgur.com/6C2YWrL.png',

  iconSize:     [69, 75],
  iconAnchor:   [42, 64], 
  popupAnchor:  [-3, -46] 
});
var cinesIcon = L.icon({
  iconUrl: 'https://i.imgur.com/qJe8fR6.png',

  iconSize:     [69, 75],
  iconAnchor:   [42, 64],
  popupAnchor:  [-3, -46]
});
var monumentosIcon = L.icon({
  iconUrl: 'https://i.imgur.com/2PvsE9c.png',

  iconSize:     [69, 75],
  iconAnchor:   [42, 64], 
  popupAnchor:  [-3, -46]
});
var centroIcon = L.icon({
  iconUrl: 'https://i.imgur.com/Ut3gIp6.png',

  iconSize:     [69, 75],
  iconAnchor:   [42, 64],
  popupAnchor:  [-3, -46]
});
var restauranteIcon = L.icon({
  iconUrl: 'https://i.imgur.com/yFiSM1C.png',

  iconSize:     [69, 75],
  iconAnchor:   [42, 64],
  popupAnchor:  [-3, -46]
});

    //Coje el valor de cuantos establecimientos tiene para el bucle
    var bucle = document.getElementById("res_final").value; 
    //Iniciamos las variables x e y que almacenaran las cooredenadas
    var x=0;
    var y=0;
    //Variable tipo solo muestra el tipo de establecimiento
    var tipo;
    var marker1;
    var marker2;
    var marker3;
    var marker4;
    var marker5;
    var marker6;
    var marker7;
    var marker8;
  while(bucle>0){
    //Tipo coje el tipo de establecimiento
    tipo = document.getElementById("desc"+bucle).value;
    //Almacenamos el nombre del establecimiento
    var nombre = document.getElementById("name"+bucle).value;
    //Cojemos las coordenadas
    x = document.getElementById("lat"+bucle).value;
    y = document.getElementById("long"+bucle).value;
    //Los if detectan que tipo son y le ponen su correspondiente icono
    if(tipo=="museos"){
      marker1 = L.marker([x,y], {icon: museoIcon}).addTo(map);
    marker1.bindPopup("<b>"+nombre+"</b><br>"+tipo);
    }
    if(tipo=="centros"){
      marker2 = L.marker([x,y], {icon: centroIcon}).addTo(map);
    marker2.bindPopup("<b>"+nombre+"</b><br>"+tipo);
    }
    if(tipo=="fiestas"){
      marker3 = L.marker([x,y], {icon: fiestasIcon}).addTo(map);
    marker3.bindPopup("<b>"+nombre+"</b><br>"+tipo);
    }
    if(tipo=="gimnasios"){
      marker4 = L.marker([x,y], {icon: gimnasiosIcon}).addTo(map);
    marker4.bindPopup("<b>"+nombre+"</b><br>"+tipo);
    }
    if(tipo=="cines"){
      marker5 = L.marker([x,y], {icon: cinesIcon}).addTo(map);
    marker5.bindPopup("<b>"+nombre+"</b><br>"+tipo);
    }
    if(tipo=="monumentos"){
      marker6 = L.marker([x,y], {icon: monumentosIcon}).addTo(map);
    marker6.bindPopup("<b>"+nombre+"</b><br>"+tipo);
    }
    if(tipo=="bares"){
      marker7 = L.marker([x,y], {icon: barIcon}).addTo(map);
    marker7.bindPopup("<b>"+nombre+"</b><br>"+tipo);
    }
    if(tipo=="restaurantes"){
      marker8 = L.marker([x,y], {icon: restauranteIcon}).addTo(map);
    marker8.bindPopup("<b>"+nombre+"</b><br>"+tipo);
    }
    
    bucle--;
  }

  //Grupo de capas para que el usuairo las pueda filtrar
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
  
  //L.control.layers(overlayMaps).addTo(map);

});