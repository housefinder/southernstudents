<!DOCTYPE html>
<html> 
<body>
    
    
<?php
$servername = "localhost";
$username="tbridges"; 
$password="Tj/hCAezbIs=";
$dbname="tbridges";

//create connection
$conn = new mysqli($servername, $username, $password, $dbname);
//check connection
if ($conn->connect_error) {
    die("connection failed: " . $conn->connect_error);
}

$sql = "SELECT `id`,`gender`, `address`, `university`, `postcode`, `description`, `bedrooms`, `date_added` FROM `house`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    //output data of each row
    while($row = $result->fetch_assoc())  {
        echo "<br> id: ".$row["id"] . " - University:". $row["university"]. "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>
    
 
    
</body>
</html>
