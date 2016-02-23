<?php
    
    //echo $path;
    //echo $path.$_GET['name'];
    $fullpath=$_GET['name'];
    //echo $fullpath;
    
    if($fd=fopen($fullpath,"r"))
    {
    $fsize=filesize($fullpath);
    $path_parts=pathinfo($fullpath);
    /*pathinfo() returns an associative array containing information about path .*/ 
    //var_dump($path_parts);
     
    $ext=strtolower($path_parts["extension"]);
    //echo $ext;
    
  switch($ext)
      {
        case "jpg":
        header("content-type:application/image");
        header("content-disposition:attachment;filename=\"".$path_parts["basename"]."\"");
        /*Content-Disposition header is used to supply a recommended filename and force the
         browser to display the save dialog.*/
       break;
        case "pdf":
        header("content-type:application/pdf");
        header("content-disposition:attachment;filename=\"".$path_parts["basename"]."\"");
        break;
      default:
        header("content-type:application/octet-stream");
        header("content-disposition:attachment;filename=\"".$path_parts["basename"]."\"");
        break;
        }
        header("content-length:$fsize");
        header("cache-control:private");
        while(!feof($fd))
        {  
            $buffer=fread($fd,$fsize);
            echo $buffer; 
        }
          
       }    fclose($fd); 
   exit;

?>