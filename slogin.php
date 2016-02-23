<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="gencyolcu" />
    <link rel="stylesheet" href="slogin.css"  type="text/css" charset="utf-8" />
<title>Student_Log</title>

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
<form action="" method="POST" name=frm>
<fieldset id="fdset">
<legend id="leg">Student login</legend>
<table align=left>
<tr> <td>User Id &nbsp: <input type=text name="txt"  placeholder="enter userId" size="40"  /></td></tr>
<tr><td>Password : <input type=password name="pwd" size="40"/></td></tr>
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
if((isset($_SESSION['userid'])&& isset($_SESSION['password'])))
{
        header("location:studentLogin.php");
}
  include_once("InsertData.php");
  $ob=new BuisinessLogic();
    
  if(isset($_POST['sub']))
  {
    if(!(empty($_POST['txt'])) && !(empty($_POST['pwd'])))
    {
        $id=$_POST['txt'];
        $pass=$_POST['pwd'];
        $ob->Connection();
         $qry="select USERID,Password from student where USERID='$id' AND Password='$pass'";
         $res=$ob->GetData($qry);
         $r=mysql_fetch_array($res);
         if($r[0]==$id && $r[1]==$pass)
         { 
            $_SESSION['userid']=$id;
            $_SESSION['password']=$pass;
   
            if(isset($_SESSION['userid']) && isset($_SESSION['password']) )
            {
                 header("location:studentLogin.php");
            }  
         }
    }
 }
  
  
  ?>
</body>
</html>


