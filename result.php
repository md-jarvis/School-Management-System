<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="gencyolcu" />
    
	<title>Result</title>
    
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
<a href="Home.php"> Home </a>
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
  
<div id="dec">
<marquee  behaviour=scroll direction=right scrollamount=5 onmouseover=stop() onmouseout=start()>
<p> Results of all the examinations have been declared. <br />
  Use the links to see the result of respective examination.  </p></marquee></div> 
  

</body>    
</html>