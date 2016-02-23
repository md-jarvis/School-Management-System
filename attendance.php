<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="gencyolcu" />

	<title>Untitled 1</title>
</head>

<link rel="stylesheet" href="attendance.css" type="text/css" charset="utf-8"/>
<body>
<form name=frm action="attendance.php" method="GET">
<table>
<h1>Attendance details</h1><tr>
<td><div class="ex">
export</div></td><td><img src="dde.png" /></td>
<td>file type</td>
<td><select name=drop>
<option>...select</option>
<option>.pdf</option>
<option>.doc</option>
<option>.exe</option>
</select></td>
</tr>
<tr><td id="center"><input type=submit name ="load" value="DOWNLOAD"></td>
<td id="center"><input type=submit name="show" value="SHOW"></td></tr>
</table>


<table border=3 align=center cellpadding=10>
<?php


if(isset($_GET['load']))
{
      $exten =$_GET['drop'];
/* 
    check extension
    search from database
    if extension=ext
    select filename.ext from tab_2
    accordung to extension write code to download
    logic to download */
    
    echo "ur fil is downloding.";

}

if(isset($_GET['show']))
{
  $d=@date(d);
  $m=@date(m);
  $y=@date(y);
  
  $d1=$d-1; $d2=$d1-1; $d3=$d2-1; $d4=$d3-1; $d5=$d4-1; $d6=$d5-1;
  
  echo "
  
   
        <tr>
            <th>Subject</th><th>$d/$m/$y</th><th>$d1/$m/$y</th><th>$d2/$m/$y</th><th>$d3/$m/$y</th><th>$d4/$m/$y</th><th>$d5/$m/$y</th><th>$d6/$m/$y</th>
        </tr>
         <tr>
            <th>Math</th><th>p</th><th>a</th><th>p</th><th>p</th><th>p</th><th>p</th><th>sun</th>
        </tr>
         <tr>
            <th>Science</th><th>p</th><th>a</th><th>p</th><th>p</th><th>p</th><th>p</th><th>sun</th>
        </tr>
         <tr>
            <th>Social Science</th><th>p</th><th>a</th><th>p</th><th>p</th><th>p</th><th>p</th><th>sun</th>
        </tr>
         <tr>
            <th>English</th><th>p</th><th>a</th><th>p</th><th>p</th><th>p</th><th>p</th><th>sun</th>
        </tr>
         <tr>
            <th>Hindi</th><th>p</th><th>a</th><th>p</th><th>p</th><th>p</th><th>p</th><th>sun</th>
        </tr>
        
    
  
  " ;
   
   
    
}

?>
</table>
</body>
</html>