<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/connect.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php include_once("../includes/templates/header.php"); ?>
    
<?php

    if(isset($_POST["submit"])) {
        
        $username = $_POST["username"];
        $password = $_POST["password"];
        
        $query = "INSERT INTO users (username, password) VALUES ('{$username}', '{$password}')";
            
        mysqli_query($connection, $query);
        
    }

?>

<html>
<link rel="stylesheet" type="text/css" href="css/formstyles.css">

    <form action="index.php" method="post">
        <fieldset class="enter-info">
      
            <label>
                Username
            <input type="text" name="username" placeholder="Enter Username...">
            </label>
            <label>
                Password
            <input type="password" name="password" placeholder="Enter Password...">
            </label>
        </fieldset>
    
  <fieldset class="enter-action">
    <input class="btn" type="submit" name="submit" value="Login">
  </fieldset>
    
</form>

</html>


<?php include_once("../includes/templates/footer.php"); ?>        
