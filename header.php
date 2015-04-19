<!doctype html>
<html>
    <head>
        <title>Student Housemate Finder</title>
        <link href="css/normal.css" rel="stylesheet">
        <link href="css/styles.css" rel="stylesheet">
        
            <div class="nav">
                
                <a href="home.php"><img class="image" src="images/houseLogo.jpg" alt="logo" width="69" height="38"></a>
                
                <ul>
                <li class="home"><a href="home.php">Home</a></li>
                <li class="search"><a href="search.php">Search</a></li>
                <li class="login"><a href="signup.php">Account</a></li>
                        <?php
                            if(isset($_SESSION["user"])) { ?>
                <li class="logout"><a href="logout.php">Sign Out</a></li> 
                        <?php }
                    ?>
                </ul>
                
            </div>
    </head>
    
    <body>
