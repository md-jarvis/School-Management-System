<?php

include_once("DBconnect.php");
class BuisinessLogic{
    function Connection()
    {
        mysql_connect(HOST,USER,password);
        mysql_selectdb(DATABASE);
        
    }
  function insertData($qry)
  {
    self::Connection();
    $res=mysql_query($qry);
    if($res)
    return true;
    else
    return false;
    
  }
  function GetData($qry)
  {
    self::Connection();
    $res=mysql_query($qry);
    return $res;
  }
  
}


?>