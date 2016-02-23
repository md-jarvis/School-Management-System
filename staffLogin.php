<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="gencyolcu" />
    <link rel="stylesheet" href="staffLogin.css"  type="text/css" charset="utf-8" />


	<title>Staff Login</title>
   
  

</head>

<body >
<?php
session_start();
if(!(isset($_SESSION['user'])&& isset($_SESSION['pword'])))
{
        header("location:flogin.php");
}


?>
<div id="log"><h2>Teacher's Profile</h2></div>
<table border=1 cellspacing=0 cellpadding=2 >
<?php

include_once("InsertData.php");
$stf=new BuisinessLogic();
$stf->Connection();
$id=$_SESSION['user'];
$pass=$_SESSION['pword'];
$qry="select image,fullname,gender,teaches_class,empid,designation,specialization,attendance,dob from staff where empid='$id' AND password='$pass'";
$res=$stf->GetData($qry);
if($r=mysql_fetch_array($res))
{
    $arr=explode('-',$r[8]); 
    $d=date('Y');
    $age=$d-$arr[2];
echo "<tr><td rowspan='9' align='center' width=100><img src='$r[0]' height='200' width='130'></td>
<td>Name:</td><td>$r[1]</td></tr>
<tr><td>Gender:</td><td>$r[2]</td></tr>
<tr><td>Age:</td><td>$age years old</td></tr>
<tr ><td>Teaches-Class:</td><td>$r[3]th</td></tr>
<tr><td>Employee ID:</td><td>$r[4]</td></tr>
<tr><td>Designation:</td><td>$r[5]</td></tr>
<tr><td>Specializes in:</td><td>$r[6]</td></tr>
<tr><td>Attendance:</td><td>$r[7]</td></tr>
<tr><td>School</td><td>DPS Patna</td></td></tr>";
}
?>
</table>




<div id="conten">
<div id="main">
 <h2><u> School and Classroom Updates </u></h2>
<marquee direction=up scrollamount=3 onmouseover=stop() onmouseout=start()>
<p> * Annual day date-sheet announced . Please participate by filling the registration form under Navigate - Contests. </p>
<p> * Friday's singing competetions results are announced. Please check your navigation menu.</p>
<p> * Final Exam data-sheet has been uploaded. Please go through it and plan for preparation. </p>
<p> * Marks and grades of all unit tests are out.Visit your result page to view your marks.</p>
<p> * Assignment for social science is uploaded now. Go through it and bring a brief report on monday. </p>
</marquee>

</div>
<div id="side">
<h3>NEWS HEADLINES</h3>
<marquee  behaviour=scroll direction=up scrollamount=3 onmouseover=stop() onmouseout=start()>
<p> Patna and entire Bihar is experiencing <br /> heavy rainfall for last couple of days.</p>
<p> Fifa world cup: France beat Germany <br />by 2-1 in a tensed penalty shootout. </p>
<p> IRCTC launched the new E-Reservation <br /> page with much higher speed. </p>
</marquee> 
</div>
<div class ="clea"></div>
</div>
<div id="foote">

</div>

<div id="m1">
<ul id="nav1">
<li id="na1">Navigate
<ul class="sub">
<li><a href="assignment_staff.php">Assignments</a></li>
<li><a href="enquirypage.php">Enquiry</a></li>
<li><a href="acadmiccalander.html">Academic Calendar</a></li>
</ul>
</li>

</ul>
</div>

<div id="m2">
<ul>
<li>
<a href="factime.php">Timetable</a>
</li></ul>
</div>


<div id="m6">
<ul>
<li>
<a href="studentform.php">Manage Class</a>
</li></ul>
</div>



<div id="m4">
<ul id="nav4">
<li id="na4">Edit Profile
<ul class="sub">
<li><a href="fchangepass.php">Change Password</a></li>
<li><a href="fchangeimage.php">Change Profile Image</a></li>
</ul>
</li>

</ul>
</div>

<div id="m5">
<ul>
<li>
<a href="flogout.php">Logout</a>
</li></ul>
</div>

</body>
</html>