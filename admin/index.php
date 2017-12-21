<!DOCTYPE html>
<?php 
include"../db.php";
$sql = "SELECT * FROM geo";
$result = $conn->query($sql);
$locations = [];
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        array_push($locations,[ $row["lati"] , $row["longi"] ]);
    }
} else {
    echo "0 results";
}
echo "<pre>";
print_r($locations);
?>
<html> 
<head> 
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" /> 
  <title>Google Maps Multiple Markers</title> 
  <script src="https://maps.google.com/maps/api/js?key=AIzaSyA6bcE2rRb8B3lLE44N5sEAiOGZq2GE6Lg" 
          type="text/javascript"></script>
          
  
</head> 
<body>

<H1>Dummy visitors as red marker </H1>
  <div id="map" style="width: 500px; height: 400px;"></div>

  <script type="text/javascript">
    var locations = [
	  ['Bondi Beach', -33.890542, 151.274856, 4],
      ['Coogee Beach', -33.923036, 151.259052, 5],
      ['Cronulla Beach', -34.028249, 151.157507, 3],
      ['Manly Beach', -33.80010128657071, 151.28747820854187, 2],
      ['Maroubra Beach', -33.950198, 151.259302, 1]
    ];
	
 var locations = <?php print_r($locations); ?>
 
 console.log(locations);
 
 console.log(locations);

    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 2,
      center: new google.maps.LatLng(-33.92, 151.25),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    var infowindow = new google.maps.InfoWindow();

    var marker, i;

    for (i = 0; i < locations.length; i++) {  
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
        map: map
      });

      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          infowindow.setContent(locations[i][0]);
          infowindow.open(map, marker);
        }
      })(marker, i));
    }
  </script>
</body>
</html>