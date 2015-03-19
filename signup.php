<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/connect.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php include_once("../includes/templates/header.php"); ?>
    
<?php

    if(isset($_POST["submit"])) {
        
        $username = $_POST["username"];
        $password = $_POST["password"];
        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];
        $email = $_POST["email"];
        $university = $_POST["university"];

        
        $query = "INSERT INTO users (username, password, firstname, lastname, email, university) VALUES ('{$username}', '{$password}', '{$firstname}', '{$lastname}', '{$email}', '{$university}')";
            
        mysqli_query($connection, $query);
        
    }

?>

<html>

  <link rel="stylesheet" type="text/css" href="css/signup.css"

<body class="news">
	
  
 	
    <div id="para2">
    <p>
        
      <?php include_once("../includes/templates/signupform.php"); ?>
       
    </p>
    </div>   
           
  
 		<div id="footer">
			Copyright Housemate Finder
		</div>
  
<?php include_once("../includes/templates/footer.php"); ?> 
