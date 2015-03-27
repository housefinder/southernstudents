<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/connect.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php include_once("../includes/templates/header.php"); ?>
    
<?php

    if(isset($_POST["submit"])) {
        
        $gender = $_POST["gender"];
        $address = $_POST["address"];
        $university = $_POST["university"];
        $postcode = $_POST["postcode"];
        $description = $_POST["description"];
        $bedrooms = $_POST["bedrooms"];
        $rent = $_POST["rent"];
        $contact = $_POST["contact"];
        
        $query = "INSERT INTO house (gender, address, university, postcode, description, bedrooms, rent, contact) VALUES ('{$gender}', '{$address}', '{$university}', '{$postcode}', '{$description}', '{$bedrooms}', '{$rent}', '{$contact}')";

        mysqli_query($connection, $query);
        
    }
?>

<?php
    if(isset($_POST["university"])){
        $uni = $_POST["university"];
        $query = "SELECT * FROM house WHERE university='{$uni}'";
    } else {
        $query = "SELECT * FROM house";   
    }
?>

<html>

  <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
   
<?php require_once("../includes/templates/submitform.php"); ?>
    
<?php require_once("../includes/templates/filterform.php"); ?>
    
<div class="results">
<?php
	
	$result = mysqli_query($connection, $query);
	if(!$result) {
		die("Database query failed.");
	}

	 while($row = mysqli_fetch_assoc($result)) {
	 include("../includes/templates/roomdisplay.php");
	}

?>
</div>
 
<?php include_once("../includes/templates/footer.php"); ?>
