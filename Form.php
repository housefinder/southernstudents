# southernstudents
A place where we can share our files for our group project


<html>

    
    address: <input type="text" name="Address" value="<?php echo $address;?>">
    
    
    
    university: <input type="text" name="University" value="<?php echo $university;?>">
    
    
    
    postcode: <input type="text" name="Postcode" value="<?php echo $postcode;?>" >    
    
    
    
    description: <input type="text" name="Description" value="<?php echo $description;?>">
    
    
    
    bedrooms: <input type="text" name="Bedrooms" value="<?php echo $bedrooms;?>">
    

    gender: <input type="radio" name="gender" 
            <?php if (isset($gender) && $gender== "female") echo "checked";?>
                    value="female">Female
            <input type="radio" name="gender"
            <?php if (isset($gender) && $gender=="male") echo "checked";?>
                    value="male">Male



</html>
