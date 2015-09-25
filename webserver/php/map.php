<?php 
    session_start(); 
    include 'text.php'; 
    include 'func.php';
    start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>BikeShare | Map</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
            <meta charset="utf-8">
                <style>
                    html, body, #map-canvas {
                        margin: 0;
                        padding: 0;
                        height: 100%;
                    }
                #legend {
                    font-family: Arial, sans-serif;
                    background: lightgrey;
                    padding: 10px;
                    margin: 10px;
                    border: 3px solid #000;
                }
                #legend h3 {
                    margin-top: 0;
                }
                #legend img {
                    vertical-align: middle;
                }
                </style>
                <script src="https://maps.googleapis.com/maps/api/js"></script>
                <script>
                    var map;
                    function initialize() {
                        map = new google.maps.Map(document.getElementById('map-canvas'), {
                                                  zoom: 15,
                                                  center: new google.maps.LatLng(21.299859,-157.860272),
                                                  mapTypeId: google.maps.MapTypeId.ROADMAP,
                                                  });
                                                  
                                                  var icons = {
                                                      rack: {
                                                          name: 'Bike Racks',
                                                          icon: 'bicycle-clipart-bike.png'
                                                      },
                                                      current: {
                                                          name: 'Current Location',
                                                          icon: 'green-arrow-down-md.jpg'
                                                      },
                                                      deal: {
                                                          name: 'Deals',
                                                          icon: 'Double-barred_dollar_sign.svg.png'
                                                      }
                                                  };
                                                  
                                                  function addMarker(feature) {
                                                      var marker = new google.maps.Marker({
                                                                                          position: feature.position,
                                                                                          icon: icons[feature.type].icon,
                                                                                          map: map
                                                                                          });
                                                  }
                                                  
                                                  var features = [
                                                                  {
                                                                      
                                                                  <?php
                                                                  
                                                                  $sql = "Select * From businesses";
                                                                  
                                                                  $results = $conn->query($sql);
                                                                  
                                                                  while($row = $results->fetch_assoc()){
                                                                      
                                                                      ?>
                                                                      
                                                                      position: new google.maps.LatLng(<?php echo $row['lat']; ?>, 
                                                                         <?php echo $row['longt']; ?>),
                                                                      type: 'deal'
                                                                      }, {
                                                                      
                                                                      <?php
                                                                  }
                                                                  
                                                                  $sql = "Select * From racks";
                                                                  
                                                                  $results = $conn->query($sql);
                                                                  
                                                                  while($row = $results->fetch_assoc()){
                                                                      
                                                                      ?>
                                                                      
                                                                      position: new google.maps.LatLng(<?php echo $row['lat']; ?>, 
                                                                         <?php echo $row['longt']; ?>),
                                                                      type: 'rack'
                                                                      }, {
                                                                      
                                                                      <?php
                                                                  }  
                                                                  ?>
                                                                      
                                                                  position: new google.maps.LatLng(21.299859,-157.860272),
                                                                  type: 'current'
                                                                  }
                                                                  ];
                                                                  
                                                                  for (var i = 0, feature; feature = features[i]; i++) {
                                                                      addMarker(feature);
                                                                  }
                                                                  
                                                                  var legend = document.getElementById('legend');
                                                                  for (var key in icons) {
                                                                      var type = icons[key];
                                                                      var name = type.name;
                                                                      var icon = type.icon;
                                                                      var div = document.createElement('div');
                                                                      div.innerHTML = '<img src="' + icon + '"> ' + name;
                                                                      legend.appendChild(div);
                                                                  }
                    map.controls[google.maps.ControlPosition.RIGHT_BOTTOM].push(legend);
                    }
                google.maps.event.addDomListener(window, 'load', initialize);
                
                
                    </script>
                </head>
    <body>
        <div id="map-canvas"></div>
        <div id="legend"><h3>Legend</h3></div>
    </body>
</html>

<?php finish(); ?>

