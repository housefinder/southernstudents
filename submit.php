<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/connect.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php include_once("../includes/templates/header.php"); ?>
    
    <?php

        if(isset($_POST["submit"])) {

            $bedrooms = $_POST["bedrooms"];
            $description = $_POST["description"];
            $gender = $_POST["gender"];
            $address = $_POST["address"];
            $postcode = $_POST["postcode"];
            $university = $_POST["university"];
        } else {
             $bedrooms = "";
            $description = "";
            $gender = "";
            $address = "";
            $postcode = "";
            $university = "";

        }
    ?>

<?php 
    if(isset($_POST["submit"])) {
        
        if(empty($bedrooms)) {
            $message = "Please enter number of Bedrooms"
        } else if(empty($description)) {
            $message = "Please enter a description"
        } else if(empty($gender)) {
            $message = "Please enter a gender"
        } else if(empty($address)) {
            $message = "Please enter a address"
        } else if(empty($postcode)) {
            $message = "Please enter a postcode"
        } else if(empty($university)) {
            $message = "Please enter a description"        
        
        $query = "INSERT INTO house (bedrooms, description, gender, address, postcode, university) VALUES ('{$bedrooms}', '{$description}', '{$gender}', '{$address}', '{$postcode}', '{$university}')";
            mysqli_query($connection, $query);
        
            if($result) {
                $message = "Success, your details were registered";
            } else {
                $message = "Sorry, something went wrong";
            }
            $bedrooms = "";
            $description = "";
            $gender = "";
            $address = "";
            $postcode = "";
            $university = "";
        }    
    }
?>

<html>

  <link rel="stylesheet" type="text/css" href="css/stylesheet.css">

<body class="news">
    
    <div id="para1">
    <p>
        
        <?php include_once("../includes/templates/loginform.php"); ?>
        
    </p>
            
            </div>
	
<div id="para2">          
    <p>      
    <?php require_once("../includes/templates/submitform.php"); ?>
    </p>      
</div>
    
<?php include_once("../includes/templates/roomdisplay.php"); ?>
  
<div id="footer">
    Copyright Housemate Finder
</div>

  
</body>
</html>

<?php include_once("../includes/templates/footer.php"); ?>
