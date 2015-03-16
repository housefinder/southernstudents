<?php
    session_start();

    function message() {
        
        if(isset($_SESSION["messsage"])) {
            $output = "<div class=\"message\">";
            $output .= $_SESSION["message"];
            $output .= "</div>";   
            $_SESSION["message"] = null;
             
            return $output; 
        } 
    }


?>
