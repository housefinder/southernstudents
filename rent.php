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
        $search = $_POST["rent"];
        
        $query = "INSERT INTO house (bedrooms, description, gender, address, postcode, university) VALUES ('{$bedrooms}', '{$description}', '{$gender}', '{$address}', '{$postcode}', '{$university}', '{$rent}') ";
            
        mysqli_query($connection, $query);
        
    }
?>

<html>

  <link rel="stylesheet" type="text/css" href="css/stylesheet.css">

<body class="news">
    
    <div id="para1">
    <p>
        
        <?php include_once("loginform.php"); ?>
        
    </p>
            
            </div>
	
   
<?php require_once("../includes/templates/submitform.php"); ?>
    
<?php include_once("../includes/templates/roomdisplay.php"); ?>
  
<div id="footer">
    Copyright Housemate Finder
</div>

  
</body>
</html>

<?php include_once("../includes/templates/footer.php"); ?>
