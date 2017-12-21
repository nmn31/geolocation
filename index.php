<!DOCTYPE html>

<?php
$servername = "sg3plcpnl0060.prod.sin3.secureserver.net:2083";
$username = "narenderthakur";
$password = "k_%Mkk{9L]mA";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>
<html> 
<head> 
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" /> 
  <title>Google Maps Multiple Markers</title> 
  <script src="https://maps.google.com/maps/api/js?key=AIzaSyA6bcE2rRb8B3lLE44N5sEAiOGZq2GE6Lg" 
          type="text/javascript"></script>
          
  <script>
	var x = document.getElementById("demo");
	function getLocation() {
	    if (navigator.geolocation) {
	        navigator.geolocation.getCurrentPosition(showPosition);
	    } else {
	        x.innerHTML = "Geolocation is not supported by this browser.";
	    }
	}
	function showPosition(position) {
	    x.innerHTML = "Latitude: " + position.coords.latitude + 
	    "<br>Longitude: " + position.coords.longitude; 
	}
	
	window.onload = function() {
		  getLocation();
		};
  </script>
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

    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 10,
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