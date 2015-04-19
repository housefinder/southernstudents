<?php
    require_once("../includes/session.php");
    require_once("../includes/connect.php");
    require_once("../includes/functions.php");
    $_SESSION["message"] = "";


    if(isset($_POST["username"])) {
        
        $username = $_POST["username"];
        $password = $_POST["password"];

        $query = "SELECT * FROM users WHERE username='{$username}' AND password='{$password}' LIMIT 1";
        $result = mysqli_query($connection, $query);
        
        
        if($user = mysqli_fetch_assoc($result)) {
            $_SESSION["user"] = $user["username"];
            $_SESSION["user_id"] = $user["id"];
            $_SESSION["message"] = "Success, welcome back {$user["username"]}";

        } else {
            $_SESSION["message"] = "Wrong username/password";
        }

    }

    redirectTo("signup.php");

?>
<?php 
    if (isset ($connection)) {
        mysqli_close($connection);    
    }
?>
