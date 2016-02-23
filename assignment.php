<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="gencyolcu" />
    
	<title>Assignment</title>
    
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
<a href="studentLogin.php">Home</a>
</li>
</ul>
</div>
    <div id="content" >
      <ul id="nav">
         <li id="nav1"> SUBJECT<span class="darrow">&#9660;</span> 
         <ul class="sub">
         <li><a  href="math.php">MATH</a></li>
         <li><a href="science.php">SCIENCE</a></li>
         <li><a href="social.php">SOCIAL SCIENCE</a></li>
         <li><a href="english.php">ENGLISH</a></li>
         <li><a href="hindi.php">HINDI</a></li>
         
        
         </ul>
        </li>
         </ul>
         </div> <br /><br /><br /> <br /><br /><br />


  <h1 style="text-align: center;color: white; background-color: gray;">Assignment</h1> 
  <hr size=4 color=black />

</body>    
</html>