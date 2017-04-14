<!DOCTYPE html>
<html>
<head>
<title>CREATE TASK</title>
<link rel="stylesheet" type="text/css" href="style.css">
<?php

include_once("config.php");
$name = $_POST['task'];
		


				
		if(empty($name)) 
        {
			echo "<font color='red'>Name field is empty.</font><br/>";
   echo "<br/><form action = 'javascript:self.history.back();'><button>go back</botton><form>";
   
              
		}
		

    else 
    { 
 $id = $_POST['id'];
   $task = $_POST['task'];

   $ret = $db->query("SELECT * FROM tasktable WHERE task = '$task'");
  $numrows = $ret->fetchArray(SQLITE3_ASSOC);
   if($numrows != 0)
   {  echo "task already exist";
   echo "<br/><form action = 'javascript:self.history.back();'><button>go back</botton><form>";
   }
   else {
   $ret = $db->exec("UPDATE tasktable set task = '$task' where id= $id ");
   if(!$ret){
      echo $db->lastErrorMsg();
   } else {
      echo $db->changes();
      
      header("Location:index.php?");
      }
   }
    }
$db->close();
?>
</body>
</html>