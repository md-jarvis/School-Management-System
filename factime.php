

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
$id=$_SESSION['user'];
$pass=$_SESSION['pword'];

$qry="select fullname from staff where empid='$id' AND password='$pass'";
$res=$ob->GetData($qry);

$r=mysql_fetch_array($res);

switch($r[0])
{
    case 'Chandra Nayudu': header("location:chandranyadu.php");
            break;
            
    case 'Payal Mishra': header("location:payal.php");
      break;
    case 'Ramesh Paul': header("location:ramashpaul.php");
            break;
            
    case 'Sakshi saini': header("location:sakshi.php");
            break;
            
    case 'Smriti Irani': header("location:smiriti.php");
            break;          
            
   case 'Gopal Jha': header("location:gopal.php");
            break;
            
    case 'Vivek kumar singh': header("location:vivek.php");
           break;
    case 'Naina Shah': header("location:naina.php");
            break;
            
    case 'John Mathews': header("location:john.php");
            break;
            
    case 'Geeta Mishra': header("location:geeta.php");
            break;    
            
    case 'Rohit Pandey': header("location:rohit.php");
            break;
            
    case 'Rohini Verma': header("location:rohini.php");
            break;    
            
  
            
}


?>

