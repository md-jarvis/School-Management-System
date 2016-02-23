<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="gencyolcu" />
     <link rel="stylesheet" href="view_attd.css"  type="text/css" charset="utf-8" />
	<title>View attendance</title>
</head>

<body>

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
<h3 id="h3"> Attendance Sheet </h3> 
<div id="tab">
<table >
<tr class="abc"><th>DATE</th><th>ATTENDANCE</th></tr>
<?php
session_start();
$dat=array("14_07_2014","15_07_2014","16_07_2014","17_07_2014","18_07_2014","19_07_2014");
include_once("InsertData.php");
$ob=new BuisinessLogic();
$ob->Connection();
$id=$_SESSION['userid'];
$pass=$_SESSION['password'];
$qry="select class from student where USERID='$id'  AND Password='$pass'";
$res=$ob->GetData($qry);
if($r=mysql_fetch_array($res))
{ $class=$r[0]."class";
}
$qry1="select $dat[0],$dat[1],$dat[2],$dat[3],$dat[4],$dat[5] from $class where UserId='$id'";
$res1=$ob->GetData($qry1);
if($r1=mysql_fetch_array($res1))
{
echo "<tr><td>$dat[0]</td><td>$r1[0]</td></tr>
<tr class=g><td>$dat[1]</td><td>$r1[1]</td></tr>
<tr><td>$dat[2]</td><td>$r1[2]</td></tr>
<tr class=g><td>$dat[3]</td><td>$r1[3]</td></tr>
<tr><td>$dat[4]</td><td>$r1[4]</td></tr>
<tr class=g><td>$dat[5]</td><td>$r1[5]</td></tr>";
}
?>
</table>
</div>


</body>
</html>