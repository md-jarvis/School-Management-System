<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="gencyolcu" />

	<title>take attendance</title>
</head>

<body>
<?php
if(!(isset($_SESSION['user']))&&isset($_SESSION['pword']))
{
    header("location:flogin.php");
}
?>
<form name="formt" action="" method="POST">
<table border=2>
<?php
session_start();
$d=date('d');
$m=date('m');
$y=date('Y');
include_once("InsertData.php");
$ob=new BuisinessLogic();
$ob->Connection();
$id=$_SESSION['user'];
$qry="select teaches_class from staff where empid='$id'";
$res=$ob->GetData($qry);
if($r=mysql_fetch_array($res))
{  $ob->Connection();
   $arr=explode(",",$r[0]);
   if(count($arr)==2)
   {
    $qry2="select fullname,rollno,USERID from student where class='$arr[0]' and class='$arr[1]";
   }
   else if(count($arr)==3)
    {$qry2="select fullname,rollno,USERID from student where class='$arr[0]' and class='$arr[1] and class='$arr[2]'";}
   $res2=$ob->GetData($qry2);
   if($r2=mysql_fetch_row($res2))
   {
    echo "<tr><th>Name </th><th>rollno </th><th>USERID </th><th>" .$d. "_" .$m. "_" .$y."</th></tr>";
    echo "<tr><td>$r2[0]</td><td>$r2[1] </td><td>$r[2] </td><td>Present <input type='radio' name='rd' value='P'/> &nbsp Absent <input type='radio' name='rd' value='A'/> </td></tr>";
   
   }
}
?>
</table>
</form>

</body>
</html>