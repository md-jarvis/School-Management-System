<?php
session_start();
if(isset($_SESSION['user'])&& isset($_SESSION['pword']))
{
    session_destroy();
    header("location:flogin.php");
}

?>