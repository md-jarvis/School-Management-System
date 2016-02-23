<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="gencyolcu" />
    
	<title>Hindi</title>
    
     <link rel="stylesheet" href="assignment.css" />
     
     <style>
        
        legend
        { 
            color: white;
            background-color: gray;
            font-family: monospace;
            font-size: 25px;
            
            
            
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
<div id="logo"></div>

<div id="m1">
<ul>
<li>
<a href="staffLogin.php">Home</a>
</li>
</ul>
</div>
    <div id="content" >
      <ul id="nav">
         <li id="nav1"> SUBJECT<span class="darrow">&#9660;</span> 
         <ul class="sub">
         <li><a  href="math_staff.php">MATH</a></li>
         <li><a href="science_staff.php">SCIENCE</a></li>
         <li><a href="social_staff.php">SOCIAL SCIENCE</a></li>
         <li><a href="english_staff.php">ENGLISH</a></li>
         <li><a href="hindi_staff.php">HINDI</a></li>
         
        
         </ul>
        </li>
         </ul>
         </div> <br /><br /><br /> <br /><br /><br />


  <h1 style="text-align: center;color: white; background-color: gray;">Hindi</h1> 
  <hr size=4 color=black />
 
    <form action="" method="post" enctype="multipart/form-data">
    
    <fieldset>
        <legend align=center>Upload Assignment</legend>
         <table align=center>
         <tr><td>For Class:</td><td><input type="number" max="10" min="6" name="cls" /></td></tr>
        <tr><td><input type="file" name="upload"  /></td><td><input type="submit" name="sub1" value="Send" /></td></tr>
         </table>
    </fieldset>
   
    </form><br /><br />
    <form action="" method="post" >
    
    <fieldset>
        <legend align=center>Visit Assignment</legend>
         <table align=center>
         <tr><td>For Class:</td><td><input type="number" max="10" min="6" name="cls" /></td></tr>
        <tr><td><input type="submit" name="sub2" value="Visit" /></td></tr>
         </table>
    </fieldset>
   
    </form>
    
     <?php
   

   
   if(isset($_POST['sub1']))
   {
   
        $path=$_SERVER['DOCUMENT_ROOT'];
        $filename=$_FILES['upload']['name'];
        $temp=$_FILES['upload']['tmp_name'];
        $r="class_".$_POST['cls'];
        $localpath=$path."/Md_Sadik_Hussain_School_Management_System/Project/Assignment/".$r."/student/hindi/".$filename;
         
        
        if(move_uploaded_file($temp,$localpath))
        {
             echo "File Uploaded successfully";
        }
        
        else
         echo "Error.. Try again";
     }    
   
    if(isset($_POST['sub2'])) 
   {
        $path=$_SERVER['DOCUMENT_ROOT'];
        $r="class_".$_POST['cls'];
        $localpath=$path."/Md_Sadik_Hussain_School_Management_System/Project/Assignment/".$r."/teacher/hindi";
        
        $handler=opendir($localpath);
        
        while($file=readdir($handler))
        {
            if(!($file=='.' || $file=='..'))
            {
                $absolutepath=$localpath."/".$file;
                
                echo "<ul>
                
                    <li><a href='download.php?name=$absolutepath'>$file </a></li> 
                    
                    </ul>
                    ";
            }
        }
   } 
   
  ?>

    
  

</body>    
</html>