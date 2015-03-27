<link rel="stylesheet" type="text/css" href="css/loginform.css">
            
    <form action="../public/login.php" method="post">
        <fieldset class="enter-info" name="login">
            <label>
                <?php 
    if(isset($_SESSION["message"])) {
        echo $_SESSION["message"];
}?>
                <br>
                <br>
                Username
                <input type="text" name="username" placeholder="Enter">
            </label>
            <label>
                Password
                <input type="password" name="password" placeholder="Enter">
            </label>
        </fieldset>
        
        <fieldset class="enter-action">
                <input class="btn" type="submit" name="login" value="Login">
        </fieldset>
    </form>
