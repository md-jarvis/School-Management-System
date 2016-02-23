<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="gencyolcu" />
    <link rel="stylesheet" href="studentLogin.css"  type="text/css" charset="utf-8" />


	<title>Student Login</title>
   
  

</head>

<body >
<?php
session_start();
if(!(isset($_SESSION['userid'])&& isset($_SESSION['password'])))
{
        header("location:slogin.php");
}

?>

<div id="logo"><h2>Student's Profile</h2></div>
<table border=1 cellspacing=0 cellpadding=2 id="table1">
<?php
//session_start();
include_once("InsertData.php");
$ob=new BuisinessLogic();
$ob->Connection();
$id=$_SESSION['userid'];
   $pass=$_SESSION['password'];

$qry="select fullname,class,rollno,attendance,Image,DOB,gender from student where USERID='$id' AND Password='$pass'";
$res=$ob->GetData($qry);
if($r=mysql_fetch_array($res))
{    $arr=explode('-',$r[5]); 
    $d=date('Y');
    $age=$d-$arr[2];
echo   "<tr><td rowspan='7' align='center' width=100><img src='$r[4]' height='190' width='130' name='profile'></td>
<td>Name:</td><td>$r[0]</td></tr>
<tr ><td>Class:</td><td>$r[1]th</td></tr>
<tr><td>Roll:</td><td>$r[2]</td></tr>
<tr><td>Gender:</td><td>$r[6]</td></tr>
<tr><td>Age:</td><td>$age years old</td></tr>
<tr><td>Attendance:</td><td>$r[3]%</td></tr>
<tr><td>School:</td><td>DPS PATNA</td></td></tr>";
    
}

?>
</table>

<div id="content">
<div id="main">
<table id="table2">
<tr><th align=left><b><u>SUBJECT</u></b></th><th align=center> <b><u>ACTIVE TOPICS</u></b> </th><th align=right> <b><u>TEACHER</u></b></th></tr>
<tr><td align=left> Mathematics </td><td align=center> Algebra,chap 03 </th><td align=right> Mr. Rajiv Sinha </td></tr>
<tr><td align=left> Science </td><td align=center> Optics,chap 04 </th><td align=right> Ms. Akansha Singh </td></tr>
<tr><td align=left> Social Science </td><td align=center> Russian Revolution,chap 02 </th><td align=right> Ms. Amrita Ghosh </td></tr>
<tr><td align=left> English </td><td align=center> Snake Charmer(story),chap 04 </th><td align=right> Ms. Ashwini Roy </td></tr>
<tr><td align=left> Hindi </td><td align=center> Girgit(story),chap 05 </th><td align=right> Mr. Gopal Jha </td></tr>
<tr><td align=left> Computer </td><td align=center> MS word,chap 04 </th><td align=right> Mr. Akbar Khan </td></tr>
</table>
<h3>Teacher's on  Leave:</h3>
<p>Mr. Rajesh Mehra  -----  PGT Computer</p>
</div>
<div id="side">
<h3>NEWS HEADLINES</h3>
<marquee  behaviour=scroll direction=up scrollamount=3 onmouseover=stop() onmouseout=start()>
<p> Patna and entire Bihar is experiencing <br /> heavy rainfall for last couple of days.</p>
<p> Fifa world cup: France beat Germany <br />by 2-1 in a tensed penalty shootout. </p>
<p> IRCTC launched the new E-Reservation <br /> page with much higher speed. </p>
</marquee> 
</div>
<div class ="clear"></div>
</div>
<div id="footer">
<h2> School and Classroom Updates </h2>
<marquee direction=up scrollamount=3 onmouseover=stop() onmouseout=start()>
<p> * Annual day date-sheet announced . Please participate by filling the registration form under Navigate - Contests. </p>
<p> * Friday's singing competetions results are announced. Please check your navigation menu.</p>
<p> * Final Exam data-sheet has been uploaded. Please go through it and plan for preparation. </p>
<p> * Marks and grades of all unit tests are out.Visit your result page to view your marks.</p>
<p> * Assignment for social science is uploaded now. Go through it and bring a brief report on monday. </p>
</marquee>
</div>
<div id="m1">
<ul id="nav1">
<li id="na1">Navigate
<ul class="sub">
<li><a href="view_attd.php">Attendance</a></li>
<li><a href="assignment.php">Assignments</a></li>
<li><a href="enquirypage.php">Enquiry</a></li>
<li><a href="result.php">Result</a></li>
<li><a href="acadmiccalander.html">Academic Calendar</a></li>
</ul>
</li>

</ul>
</div>

<div id="m2">
<ul>
<li>
<a href="timetable.php">TimeTable</a>
</li></ul>
</div>


<div id="m4">
<ul id="nav4">
<li id="na4">Edit Profile
<ul class="sub">
<li><a href="changepass.php">Change Password</a></li>
<li><a href="changeimage.php">Change Profile Image</a></li>

</ul>
</li>

</ul>
</div>

<div id="m5">
<ul>
<li>
<a href="logout.php">Logout</a>
</li></ul>


</body>
</html>