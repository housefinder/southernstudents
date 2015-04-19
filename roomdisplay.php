<div class="roomdisplay">
    
    <img class="image" width="150" height="150" src="../public/images/defhouse.jpg">	
    <h2><?php echo $row["university"]; ?></h2>
    <h4><?php echo $row["description"]; ?></h4>
	<h4>Postcode: <?php echo $row["postcode"]; ?></h4>
    <h4>Bedrooms: <?php echo $row["bedrooms"]; ?></h4>
	<h4>Rent: £<?php echo $row["rent"]; ?></h4>
    <h4>Contact Information: <?php echo $row["contact"]; ?></h4>
    <h4>Data Added: <?php echo $row["date_added"]; ?></h4>
  

</div>
