<html>
<head></head>
<body>
<form name="frm" method="post" action="" enctype="multipart/form-data" > 
<input type="file" Value="Upload File" name="upfile">
<input type="submit" name="sb1" value="Upload">
<input type="submit" name="sb2" value="File Info">
<?php

if(isset($_POST['sb2']))
{
echo $_SERVER['DOCUMENT_ROOT']."<br>";

    echo "File Name=".$_FILES['upfile']['name']."<br>";
    echo "File Type=".$_FILES['upfile']['type']."<br>";
    echo "File Size=".$_FILES['upfile']['size']."<br>";
    echo "File Temp=".$_FILES['upfile']['tmp_name']."<br>";
    echo "File Error=".$_FILES['upfile']['error']."<br>";
   
}
if(isset($_POST['sb1']))
{
  if($_FILES['upfile']['error']==0)
    {
        $tmpname=$_FILES['upfile']['tmp_name'];                
        $tpath=$_SERVER['DOCUMENT_ROOT']."STPJune/img/".$_FILES['upfile']['name'];
        echo $tpath;
        
        if(move_uploaded_file($tmpname,$tpath))
        {
            echo "File Uploded Successfully<br>";
            echo "<img src='$tpath' >";
        }
        else
        {
            echo "File not uploaded!!<br>";
        }
    }  
    
}


?>
</body>
</html>
