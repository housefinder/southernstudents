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
    } else {
        $username = "";
        $password = "";
        $firstname = "";
        $lastname = "";
        $email = "";
        $university = "";
    } 
?>

<?php
    if(isset($_POST["submit"])) {
        
        if(empty($username)) {
            $mess = "Please enter username";
        } else if(empty($password)) {
            $mess = "Please enter password";
        } else if(empty($firstname)) {
            $mess = "Please enter firstname";
        } else if(empty($lastname)) {
            $mess = "Please enter lastname";
        } else if(empty($email)) {
            $mess = "Please enter email";
        } else if(empty($university)) {
            $mess = "Please enter university";
        } else { 
        
        $query = "INSERT INTO users (username, password, firstname, lastname, email, university) VALUES ('{$username}', '{$password}', '{$firstname}', '{$lastname}', '{$email}', '{$university}')";
        mysqli_query($connection, $query);
            
            if($result) {
                $mess = "Success";
            } else {
                $mess = "Sorry";
            }
        $username = "";
        $password = "";
        $firstname = "";
        $lastname = "";
        $email = "";
        $university = "";
            
        }
        
    }

?>

<html>

  <link rel="stylesheet" type="text/css" href="css/signup.css"

<body class="news">
	
  
 	
    <div id="para2">
    <p>
        
        <?php if(isset($mess)) { 
         echo $mess; } ?>
        
      <?php include_once("../includes/templates/signupform.php"); ?>
       
    </p>
    </div>   
             
<?php include_once("../includes/templates/footer.php"); ?> 
