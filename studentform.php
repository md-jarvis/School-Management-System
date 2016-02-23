<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="gencyolcu" />
 <link rel="stylesheet" href="studForm.css"  type="text/css" charset="utf-8" />

	<title>Form page</title>
    
</head>

<body>
<div id="header">
<h2 id="htxt">Delhi Public School, Patna </h2><br />
<h3 id="htxt2">A Chance to Learn and Grow </h3>
<div id="logo"></div>
</div>
<div id="main">
<h2 id="fill" align="center">Student Fill In Form</h2>
<form name=frm action="" method="POST">
<table border=4  align="left" cellspacing=7 cellpadding=8>
<tr> <td>Student Name: </td><td><input type=text name="txt1" size="50" required ></td></tr>
<tr> <td>Father's Name:</td><td><input type=text name="txt2" size="50"/></td></tr>
<tr> <td>Mother's Name:</td><td><input type=text name="txt3" size="50"/></td></tr>
<tr><td> DOB: </td><td><input type=date name="txt5" /></td></tr>
<tr> <td>Gender: </td><td>Male <input type="radio" name="rd" value="male" /> <br/> Female <input type="radio" name="rd" value="Female" /></td></tr>
<tr> <td>Address: </td><td><textarea rows="5" name="address"  ></textarea></td></tr>
<tr> <td>previuos Board %: </td> <td><input type="text" name="txt4" value=""/></td>  </tr>
<tr> <td>Class: </td><td><select name="class" >
  <option selected>--SELECT--</option>
  <option>6</option>
  <option >7</option>
  <option>8</option>
  <option>9</option>
  <option>10</option>
  </select></td></tr>

<tr> <td>Sports interests: </td><td><select name="sports">
  <option selected>---Select---</option>
  <option> Cricket </option>
   <option> Hockey </option>
  <option> BasketBall </option>
    <option>Lawn Tennis</option>
  <option>Badminton</option>
  <option> Football </option>
  <option> Table Tennis </option>
 </select></td></tr>

  <tr> <td>Other Interests</td> <td><select name="extra">
  <option selected >---SELECT---</option>
 <option>Reading</option>
 <option>Writing</option>
   <option>Singing</option>
 <option>Dancing</option>
   <option>Sketching</option>
 <option>Painting</option>
    <option>Drawing</option>
 <option>Calligraphy</option>
  <option>Others</option>
  </select></td></tr>
<tr><td>USERID:</td><td><input type="text" name="uid" value=""/> </td></tr>
<tr><td>Password:</td><td><input type="text" name="passw" value=""/> </td></tr>
<tr><td>Roll:</td><td><input type="text" name="roll" value=""/> </td></tr>

  
<tr> <td>Submit </td><td><input type=submit name="sub" value="SUBMIT"/></td></tr> 
<tr><td>RESET </td><td><input type=reset name="rst" value="Clear"/></td></tr>

<?php

   if(isset($_POST['sub']))
{
    if(!($_POST['txt1']=="" || $_POST['txt2']=="" || $_POST['txt3']==""))
    {
    $fname=$_POST['txt1'];
    $father=$_POST['txt2'];
    $mother=$_POST['txt3'];
    $dob=$_POST['txt5'];
    $gen=$_POST['rd'];
    $address=$_POST['address'];
    $perc=$_POST['txt4'];
    $class=$_POST['class'];
    $sports=$_POST['sports'];
    $other=$_POST['extra'];
    $uid=$_POST['uid'];
    $passw=$_POST['passw'];
    $roll=$_POST['roll'];
    include_once("InsertData.php");
    $ob=new BuisinessLogic();
    $ob->Connection();
    $qry="Insert into student values('$fname','$father','$mother','$dob','$gen','$address','$perc','$class','$sports','$other','$uid','$passw','$roll','','') ";
    $r=$ob->insertData($qry);
    if($r)
    {
        echo "<tr><td colspan=2> Details stored into Database Successfully</td><tr>";
    }
    else
    {
      echo "<tr><td colspan=2> Something went wrong ... Try Again </td><tr>";
    }
}
else
    {echo "<tr><td colspan=2> Some fields are left blank .. Please fill them and submit again </td><tr>";
    }
}    

?>







</table>
</form>
</div>
</body>

</html>

