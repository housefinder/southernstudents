<?php if(isset($_SESSION["user"])) { ?>

<div id="para2">          
<p>      
<link rel="stylesheet" type="text/css" href="css/formstyles.css">
                
    <form action="search.php" method="post">
        <fieldset class="enter-info">
      
    <label> 
    Address <input type="text" name="address" value="" placeholder="Enter">
    </label>
    
    <label>
    Postcode <input type="text" name="postcode" value="" placeholder="Enter">    
    </label>
    
    <label>
    Description <input type="text" name="description" value="" placeholder="Enter">
    </label>
    
    <label>
    Bedrooms <input type="text" name="bedrooms" value="" placeholder="Enter">
    </label>

    <label>
    Gender
    <input type="radio" name="gender" value="male">Male <input type="radio" name="gender" value="female">Female
    </label> 
    
    <label>
    University
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
    
    </p>      
</div>

<?php } ?>
