

<?php
session_start();
if(!(isset($_SESSION['userid'])&& isset($_SESSION['password'])))
{
        header("location:slogin.php");
}

?>

<?php
include_once("InsertData.php");
$ob=new BuisinessLogic();
$ob->Connection();
$id=$_SESSION['userid'];
$pass=$_SESSION['password'];

$qry="select class from student where USERID='$id' AND Password='$pass'";
$res=$ob->GetData($qry);

$r=mysql_fetch_array($res);

switch($r[0])
{
    case 6: header("location:timetable6.php");
            break;
            
    case 7: header("location:timetable7.html");
            break;
            
    case 8: header("location:timetable8.html");
            break;
            
    case 9: header("location:timetable9.html");
            break;
            
    case 10: header("location:timetabe10.html");
            break;
            
}


?>