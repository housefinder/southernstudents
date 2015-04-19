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
            $messa = "Please enter username";
        } else if(empty($password)) {
            $messa = "Please enter password";
        } else if(empty($firstname)) {
            $messa = "Please enter firstname";
        } else if(empty($lastname)) {
            $messa = "Please enter lastname";
        } else if(empty($email)) {
            $messa = "Please enter email";
        } else if(empty($university)) {
            $messa = "Please enter university";
        } else { 
        
        $query = "INSERT INTO users (username, password, firstname, lastname, email, university) VALUES ('{$username}', '{$password}', '{$firstname}', '{$lastname}', '{$email}', '{$university}')";
        mysqli_query($connection, $query);
            
            if($query) {
                $mess = "Account created, please sign in above.";
            } else {
                $mess = "Sorry, something went wrong.";
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

    <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
    
    <?php if(isset($_SESSION["user"])) { ?>
    <div id="main2">
    <p>
        <center><h4>Welcome!</h4> Now that you are logged in you are able to submit rooms. <br> Head on over to the Search page, here you can enter infromation about the vacant room in your house via the submission form.</center>
    </p>
    </div>
    <?php } ?>
	
        <?php include_once("loginform.php"); ?> 

 	
    <div id="main2">
    <p>
        <center>Sign Up</center>
        <br>
        <center><h4>Please ensure you have filled in all fields, if not your information will not be submitted. Thank you!<br>Once you have created an account you will be able to submit rooms to the site, allowing others to see the vacancy.</h4></center>
        <br>
        
        <center><?php if(isset($mess)) { 
         echo $mess; } ?></center><br>
        
      <?php include_once("../includes/templates/signupform.php"); ?>
       
    </p>
    </div>  
                 
<?php include_once("../includes/templates/footer.php"); ?> 
