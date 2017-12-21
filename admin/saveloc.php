<?PHP 

include"../db.php"; 
$longitude = $_POST['longitude'];
$latitude  =$_POST['latitude'];
$sql = "INSERT INTO geo (lati, longi)
VALUES ('$latitude', '$longitude')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>