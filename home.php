<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/connect.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php include_once("../includes/templates/header.php"); ?>

<html>

  <link rel="stylesheet" type="text/css" href="css/stylesheet.css">

<body class="news">
    
<div id="mainimagediv"> 
    <p> <center><img src="images/logoText.jpg" no-repeat alt="logo"></center> 
    
    </p>
</div>
  
<div id="heading1"> 
    <p> <h3>Welcome to StudentHousemateFinder, let's get started</h3> <br>
        <br> <button type="button" class="homeButton" onclick="window.location.href='search.php'">Let Me Search For A Room</button>
         <button type="button" class="homeButton" onclick="window.location.href='signup.php'">Let Me Post A Room</button></center>
    </p>
</div>
                
       <div id="howitworks">
            <p>
            	<center><h1>How It Works</h1></center>
            </p>
            </div>
    
   <div id="main">
            <img class="image" src="images/account.jpg" alt="account" width="175" height="175"> 
            <p>
            	<b>Creating An Account:</b>
            	<br><font size="-1">
            	Here at Housemate Finder our website makes it extremely easy to become a member and to create an account. All you need is simply a unique username and a password. To sign up you will need to go to the 'Sign Up' page, which can be found, on the navigation bar at the top of the page. This quick and simple process will allow you to then sign into the site and explore all vacant rooms we have on offer, something you can not do when you do not have an account. Additionally this will allow you to post about any vacant rooms (those processes are explained below!)</font>
            </p>
            </div>
            
            <div id="main">
            <img class="image" src="images/search.jpg" alt="search" width="175" height="175">
            <p>
            	<b>Searching:</b>
            	<br><font size="-1">
            	Once you have created an account and are logged in you will then be able to search for rooms. The searching process means you are able to search the sites inventory for rooms that are vacant and have been posted on the site by others. The search section has multiple search filters ranging from number of occupants to disabled access to details about the existing housemates. We hope that these filters will allow you to find the perfect housemates for you to live with during your time at university. No need to worry about your new housemates, they will be just what you were looking for.</font>
            </p>
            </div>
            
            <div id="main">
            <img class="image" src="images/upload.jpg" alt="upload" width="175" height="175">
            <p>
            <b>Uploading:</b><br><font size="-1">
            Displaying a vacant room has never been so easy. All you need to do is first create an account, once you have done this and you are logged in you will find the submit page extremely easy to navigate. On the submissions page you will be greeted with a form to fill out about the room you have vacant. You will be asked multiple questions about both the property and its existing occupants. This process is quick and effect allowing room hunters an in-depth incite into the room and you they should be just what you were looking for!</font>
            </p>
  			</div>
              
 <?php include_once("../includes/templates/footer.php"); ?>
