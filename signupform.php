<link rel="stylesheet" type="text/css" href="css/formstyles.css">

<form action="signup.php" method="post">
    <fieldset class="enter-info">
      
            <label>
            Username
<input type="text" name="username" placeholder="Enter">
            </label>
            <label>
            Password
<input type="password" name="password" placeholder="Enter">
            </label>
            <label>
            First Name
<input type="text" name="firstname" placeholder="Enter">
            </label>
            <label>
            Last Name
<input type="text" name="lastname" placeholder="Enter">
            </label>
            <label>
            E-mail
<input type="text" name="email" placeholder="Enter">
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
    <input class="btn" type="submit" name="submit" value="Sign Up">
  </fieldset>
    
</form>
