<?php 

include"../db.php";

$sql = "SELECT * FROM geo";
$result = $conn->query($sql);
$locations = [];
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $locations[] = $row;
    }
} else {
    echo "0 results";
}

 print_r(json_encode($locations));