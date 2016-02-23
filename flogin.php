<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="gencyolcu" />
    <link rel="stylesheet" href="flogin.css"  type="text/css" charset="utf-8" />
<title>Faculty_Log</title>

</head>
<body>
<div id="header">
<h2 id="htxt">Delhi Public School, Patna </h2><br />
<h3 id="htxt2">A Chance to Learn and Grow </h3>
<div id="logo"></div>
<div id="email">
 <form name="myForm" action="demo_form.php" onsubmit="return validateForm();" method="post">
Enter Email to get updates<br />on Admissions and more <br />
  <input type="text" name="email">
<input type="submit" value="Submit">
</form></div>  


<div id="frm">
<form name=frm action="#" method="POST">
<fieldset id="fdset">
<legend id="leg">Faculty login</legend>
<table align=left>
<tr> <td>Employee Id : <input type=text name="txt" placeholder="Enter UserId" size="40" /></td></tr>
<tr><td>Password &nbsp &nbsp: <input type=password name="pwd" size="40"/></td></tr>
<tr ><td><input id="sub" type =submit name="sub" value="login"/></td></tr> 

<div id="sth">
<label class="remember">
 <span>
  Stay signed in
  </span>
<input id="PersistentCookie" name="PersistentCookie"
                 type="checkbox" value="yes"/>
                 
<p>For your convenience, keep this checked.</p>



</label>
  <input type="hidden" name="rmShown" value="1"/>
 <a href="#"
       class="need-help-reverse"
       >
  forgot password?
  </a>
 
 </div>

</table>
</fieldset>

</form>
</div>
<?php
session_start();
if(isset($_SESSION['user'])&&isset($_SESSION['pword']))
{
    header("location:staffLogin.php");
}
include("InsertData.php");
$ob=new BuisinessLogic();
if(isset($_POST['sub']))
{
    if(!(empty($_POST['txt']))&&!(empty($_POST['pwd'])))
    {
        $id=$_POST['txt'];
        $pass=$_POST['pwd'];
        $ob->Connection();
        $qry="select empid,password from staff where empid='$id' AND password='$pass'";
        $data=$ob->GetData($qry);
        $r=mysql_fetch_array($data);
        if($r[0]==$id && $r[1]==$pass)
        {   $_SESSION['user']=$id;
              $_SESSION['pword']=$pass;
            header("location:staffLogin.php");
        }
    }
}


?>
</body>
</html>


