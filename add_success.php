<!DOCTYPE html>
<html>
<head>
<title>CREATE TASK</title>
<link rel="stylesheet" type="text/css" href="style.css">
<?php

// including the database connection file
include_once("config.php");

$name = $_POST['task'];
		
	// checking empty fields

				
		if(empty($name)) 
        {
			echo "<font color='red'>Name field is empty.</font><br/>";
   echo "<br/><form action = 'javascript:self.history.back();'><button>go back</botton></form>
";   
              
		}
		

    else 
    { 
 $task = $_POST['task'];

  $ret = $db->query("SELECT * FROM tasktable WHERE task = '$task'");
  $numrows = $ret->fetchArray(SQLITE3_ASSOC);
   if($numrows != 0)
   {  echo "task already exist";
   echo "<br/><form action = 'javascript:self.history.back();'><button>go back</botton></form>";
   }
   else 
   {
       $ins = $db->exec("INSERT INTO tasktable (task) VALUES ('$task')");
   if(!$ins){
      echo $db->lastErrorMsg();
   } 
   else 
   {
      header("Location: index.php");
   }
   }
    }
      $db->close();
?>
</body>
</html>