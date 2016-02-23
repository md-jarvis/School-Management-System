
 <html>
<head>
    <title>Change Image</title>
</head>
<body>
<?php
session_start();
if(!(isset($_SESSION['userid'])&& isset($_SESSION['password'])))
{
        header("location:slogin.php");
}

?>
<form action="" name="file" enctype="multipart/form-data" method="post">
<input type="file" name="upload" value="upload" /><br />
<input type="submit" value="UPLOAD" name="sub"  />
</form>
<?php

    include_once("InsertData.php");
    $ob=new BuisinessLogic();
    $ob->Connection();
    $id=$_SESSION['userid'];
    $pass=$_SESSION['password'];

if(isset($_POST['sub']))
{
    if(empty($_FILES['upload']['name']))
    {
        echo "first select a file";
    }
    
    else
    {
        if($_FILES['upload']['error']==0 && $_FILES['upload']['type']=='image/jpeg')
        {
            $des=$_SERVER['DOCUMENT_ROOT']."/Md_Sadik_Hussain_School_Management_System/Project/".$_FILES['upload']['name'];
            
            if(move_uploaded_file($_FILES['upload']['tmp_name'],$des))
            {
                $des=$_FILES['upload']['name'];
                
                $qry="update student set Image='$des' where USERID='$id' AND Password='$pass'";
                
                if(mysql_query($qry))
                {
                    header("location:studentLogin.php");
                }
                
                else
                echo "database not updated";
            }
        }
        
        else
        {
            echo "error in file";
        }
    }
    
}


?>