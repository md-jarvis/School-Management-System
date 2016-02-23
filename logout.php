<?php
session_start();
 if(isset($_SESSION['userid']) && isset($_SESSION['password']) )
        { 
            session_destroy();
         header("location:sLogin.php");
       }  

?>