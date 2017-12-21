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

print_r($locations);