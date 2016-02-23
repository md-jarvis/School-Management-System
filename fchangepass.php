<html>
<head>
    <title>Change Password</title>
    <link rel="stylesheet" href="assignment.css" type="text/css" />
    <style>
        
        p
        {
            font-family: monospace;
            background-color: gray;
            color: #ffffff;
            font-size: 30px;
        }
                
#d1 ul{ text-align: center;  font-size: 20px; font-weight: bold;
            font-family: "Courier New", Courier, monospace;
     position:absolute; top:10px; right:00px; height:  30px; list-style: none;  margin-bottom:10px; width: 20%;}
#d1 ul li{
    float: left;
    margin-right:5px;
}

#d1 ul li a{display: block; color:#000; background:#DDDED5; text-decoration:none;  padding:0 20px; line-height:  30px;} 
#d1 ul li a:hover{ background:#0A912D;
    color:#FFF;
    transition:ease-in-out 0.5s;
}
        
       
    </style>
</head>
<body>
<?php
session_start();
if(!(isset($_SESSION['user'])&& isset($_SESSION['pword'])))
{
        header("location:flogin.php");
}

?>

<div id="header">
<h2 id="htxt">Delhi Public School, Patna </h2><br />
<h3 id="htxt2">A Chance to Learn and Grow </h3>
<div id="logo">
</div>

<div id="home">
            <a href="staffLogin.php">HOME</a>
         </div>

<div id="pass">
<form action="" method="post">
<fieldset>
<legend  ><p>Change Password</p></legend>

<table border=4 align=center>
<?php

    include_once("InsertData.php");
    $ob=new BuisinessLogic();
    $ob->Connection();
    $id=$_SESSION['user'];
    $pass=$_SESSION['pword'];


echo "
    
        <tr>
            <td>UserId:</td>
            <td><input type=text name=fnam value=$id  readonly size=80 ></td>
        </tr>
        
         <tr>
            <td>Old Password:</td>
            <td><input type=password name=pwds   size=80 required/></td>
        </tr>
        
        <tr>
            <td>New Password:</td>
            <td><input type=password name=pwd1  size=80 required/></td>
        </tr>
        
        <tr>
            <td>Conferm Password:</td>
            <td><input type=password name=pwd2 size=80  required/></td>
        </tr>
        
        <tr>
            <td colspan=2><input type=submit name=s value=Change /> &nbsp;<input type=reset name=s value=Clear /></td>
        </tr>
        
        
        
    
";


 $mes=null;

if(isset($_POST['s']))
{
    
    $fname=$_POST['fnam'];
    $npass=$_POST['pwd1'];
    $cpass=$_POST['pwd2'];
    $password=$_POST['pwds'];
    
    
    
     
    
    if($pass==$password)
    {
        if($npass==$cpass)
        {
            
           
             
             $str2="update staff set password='$npass' where empid='$id' AND password='$pass'";
             
             $temp=mysql_query($str2);
             
             if($temp)
             $mes="Profile Successfully Update";
             
             else
             $mes="Profile not Updated Please try again"; 
             
         }    
        
        else
        $mes="New Password and Conform Password don't match";
    }
    
    else
    $mes="Miss Match Password";
    
}

echo "<tr><td colspan=2>$mes</td></tr>";





?>
</table>
</fieldset>
</form>
</div>
<div id="d1">
<ul>
<li>
<a href="flogout.php"> Student Login Home </a>
</li>
</ul>
</div>
</body>
</html>