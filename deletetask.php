<?php

include_once("config.php"); 
$id = $_GET['id'];
  
   $ret = $db->exec("DELETE from tasktable where ID = $id ");
   if(!$ret){
     echo $db->lastErrorMsg();
   } else {
      echo $db->changes(), " Record deleted successfully\n";
   }
 //echo "Operation done successfully\n";
 header("Location:index.php?");
   $db->close();
?>