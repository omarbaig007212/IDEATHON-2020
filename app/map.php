<?php


require_once('geoplugin.class.php');

$geoplugin = new geoPlugin();


$geoplugin->locate();
$geoplugin->city;
$geoplugin->countryName;
$geoplugin->latitude;
$geoplugin->longitude;


?>

<!DOCTYPE html>
<html>
  <head>
    <title>Simple Map</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
    <style>
      #map {
        height: 100%;
      }
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>
  <body>
    <div id="map"></div>
    <script>
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -34.397, lng: 150.644},
          zoom: 8
        });
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD90A_TaWuBdEqilXdXfVZ3-riJdkj-Apw&callback=initMap"
    async defer></script>
  </body>
</html>
