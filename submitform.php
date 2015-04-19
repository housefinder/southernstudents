<?php if(isset($_SESSION["user"])) { ?>

<div id="main2">          
<p> 
    
    <center>Submit A Room Here</center><br>
    
    <?php if(isset($message)) { 
         echo $message; } ?>
    
<link rel="stylesheet" type="text/css" href="css/formstyles.css">
                
    <form action="search.php" method="post">
        <fieldset class="enter-info">
      
    <label> 
    Address <input type="text" name="address" value="" placeholder="House No. and Street">
    </label>
    
    <label>
    Postcode <input type="text" name="postcode" value="" placeholder="House Postcode">    
    </label>
    
    <label>
    Description <input type="text" name="description" value="" placeholder="Sell The Room, Be Descriptive">
    </label>

    <label>
    Rent <input type="text" name="rent" value="" placeholder="Rent per Week">
    </label>
            
    <label>
    Contact Info <input type="text" name="contact" value="" placeholder="Email or Phone Number">
    </label>
    
    <label>
    Bedrooms <input type="text" name="bedrooms" value="" placeholder="Number of Rooms in House">
    </label>

    <label>
    Gender
    <input type="radio" name="gender" value="Male">Male 
    <input type="radio" name="gender" value="Female">Female
    </label> 
    
    <label>
    University
	<select name="university">
    <option value="Arts University Bournemouth">Arts University Bournemouth</option>
    <option value="University of Bath">University of Bath</option>
    <option value="Bath Spa University">Bath Spa University</option>               
    <option value="Bournemouth University">Bournemouth University</option>
    <option value="University of Brighton">University of Brighton</option>         
    <option value="University of Bristol">University of Bristol</option>
    <option value="Exeter University">Exeter University</option>
    <option value="University of Kent">University of Kent</option>
    <option value="Oxford Brookes University">Oxford Brookes University</option>
    <option value="Oxford University">Oxford University</option>
    <option value="Plymouth University">Plymouth University</option>       
    <option value="Portsmouth University">Portsmouth University</option>             
    <option value="Reading University">Reading University</option>
    <option value="Royal Halloway University of London">Royal Holloway University Of London</option>
    <option value="University of Sussex">University of Sussex</option>
    <option value="Southampton University">Southampton University</option>                  
    <option value="U.W.E Bristol">U.W.E Bristol</option>             
	</select>
    </label>
        </fieldset>
    
  <fieldset class="enter-action">
    <input class="btn" type="submit" name="submit" value="Enter Room">
  </fieldset>
    
    </form> 
    
    </p>      
</div>

<?php } ?>
