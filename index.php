<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
     integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI="
     crossorigin=""/>
      <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
     integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM="
     crossorigin=""></script>
     <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>leaflet</h1>
    <div id="map"></div>
    <?php include 'script.php';
    $stmt=$pdo->prepare("SELECT  ville, longitude, latitude FROM map");
    $stmt->execute();
    $results = $stmt->fetchAll();
    // print_r($results);

$longParis = $results[0]['longitude'];

$latParis = $results[0]['latitude'];

foreach ($results as $result) {
    echo $result['longitude'];
    echo $result['latitude'];
    
}

    ?>

    
    <script src="app.js"></script>

    <script>
       
L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);

var longParis = '<?php echo $longParis ; ?>';
var latParis =  '<?php echo $latParis ; ?>' ;
console.log(longParis);
var marker = L.marker([latParis, longParis ]).addTo(map);
// var marker = L.marker([45.777222, 3.087025]).addTo(map);
    </script>
</body>
</html>