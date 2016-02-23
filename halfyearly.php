<html>
<head>
    <title>Half Yearly</title>
     <link rel="stylesheet" href="assignment.css" />
    
</head>


<body>
<?php
session_start();
if(!(isset($_SESSION['userid'])&& isset($_SESSION['password'])))
{
        header("location:slogin.php");
}

?>

 
<div id="header">
<h2 id="htxt">Delhi Public School, Patna </h2><br />
<h3 id="htxt2">A Chance to Learn and Grow </h3>
<div id="logo"></div>

<div id="m1">
<ul>
<li>
<a href="studentLogin.php"> Home </a>
</li>
</ul>
</div>

 <div id="content" >
      <ul id="nav">
         <li id="nav1">RESULT<span class="darrow">&#9660;</span> 
         <ul class="sub">
         <li><a  href="unittest.php">Unit Test</a></li>
         <li><a href="halfyearly.php">Half Yearly</a></li>
         <li><a href="final.php">Final</a></li>
         
        
         </ul>
        </li>
         </ul>
         </div><br /><br /><br /><br /><br /><br />
  <hr size=4 color=black />
  <h1>Result</h1><hr size=4 color=black />
  
<h3 id="h3"> Half-Yearly Exams</h3>  
<table id="table">
<?php
//session_start();
include_once("InsertData.php");
$ob=new BuisinessLogic();
$ob->Connection();
$id=$_SESSION['userid'];
$pass=$_SESSION['password'];

$qry="select fullname,class,rollno,attendance from student where USERID='$id' AND Password='$pass'";
$res=$ob->GetData($qry);
if($r=mysql_fetch_array($res))
$db="class_".$r[1];




echo "   
             <tr>
                    <th colspan=2>Name:</th><td colspan=2>$r[0]</td>
    
                </tr>
                 <tr>
                    <th colspan=2>Class:</th><td colspan=2>$r[1]th</td>
    
                </tr>
                 <tr>
                    <th colspan=2>Roll:</th><td colspan=2>$r[2]</td>
    
                </tr>
                 <tr>
                    <th colspan=2>Attendence:</th><td colspan=2>$r[3]%</td>
                   </tr> 
                  
    
                <tr class=abc>
                    <td>SUBJECT</td>
                    <td>FULL MARKS</td>
                    <td>OBTAINED MARKS</td>
                    <td>PERSENTAGE</td>
                </tr>
          
        
        ";

mysql_connect("localhost","root","");
mysql_selectdb("$db");
$qry="select * from half where USERID='$id' ";
$data=mysql_query($qry);
$r=mysql_fetch_array($data);

if(isset($r))
{
    $mathper=($r[2]*100)/$r[1];
    $scper=($r[4]*100)/$r[3];
    $sstper=($r[6]*100)/$r[5];
    $engper=($r[8]*100)/$r[7];
    $hinper=($r[10]*100)/$r[9];

    
    
        echo "            
                <tr>
                    <td>Math</td>
                    <td>$r[1]</td>
                    <td>$r[2]</td>
                    <td>$mathper%</td>
                </tr>
                  <tr class=g>
                    <td>Science</td>
                    <td>$r[3]</td>
                    <td>$r[4]</td>
                    <td>$scper%</td>
                </tr>
                  <tr>
                    <td>Sicial Science</td>
                    <td>$r[5]</td>
                    <td>$r[6]</td>
                    <td>$sstper%</td>
                </tr>
                  <tr class=g>
                    <td>English</td>
                    <td>$r[7]</td>
                    <td>$r[8]</td>
                    <td>$engper%</td>
                </tr>
                  <tr>
                    <td>Hindi</td>
                    <td>$r[9]</td>
                    <td>$r[10]</td>
                    <td>$hinper%</td>
                </tr>
          
        
        ";


}


?>
  </table>


</body>
</html>