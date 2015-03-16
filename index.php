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
<link rel="stylesheet" type="text/css" href="css/formstyles.css">

    <form action="index.php" method="post">
        <fieldset class="enter-info">
      
            <label>
                    Username:
<input type="text" name="username" placeholder="Enter">
            </label>
            <label>
                Password:
<input type="password" name="password" placeholder="Enter">
            </label>
            <label>
            Firstname:
<input type="text" name="firstname" placeholder="Enter">
            </label>
            <label>
            Lastname:
<input type="text" name="lastname" placeholder="Enter">
            </label>
            <label>
            E-mail:
<input type="text" name="email" placeholder="Enter">
            </label>
            <label>
            University:
	<select name="university">
<option value="AUB">Arts University Bournemouth</option>
<option value="Bath">University of Bath</option>
<option value="BathSpa">Bath Spa University</option>               
<option value="Bournemouth">Bournemouth University</option>                
<option value="Brighton">University of Brighton</option>         
<option value="Bristol">University of Bristol</option>
<option value="Exeter">Exeter University</option>
<option value="Kent">University of Kent</option>
<option value="OxfordBrookes">Oxford Brookes University</option>
<option value="Oxford">Oxford University</option>
<option value="Plymouth">Plymouth University</option>       
<option value="Portsmouth">Portsmouth University</option>             
<option value="Reading">Reading University</option>
<option value="RoyalHalloway">Royal Holloway University Of London</option>
<option value="Sussex">University of Sussex</option>
<option value="Southampton">Southampton University</option>                  
<option value="BristolUWE">U.W.E Bristol</option>             
	</select>
            </label>
        </fieldset>
    
  <fieldset class="enter-action">
    <input class="btn" type="submit" name="submit" value="Sign Up">
  </fieldset>
    
</form>

</html>


<?php include_once("../includes/templates/footer.php"); ?>   
