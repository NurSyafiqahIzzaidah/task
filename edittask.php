<!DOCTYPE html>
<html>
<head>
<title>CREATE TASK</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<?php

include_once("config.php");

$id = $_GET['id'];
$ret = $db->query("SELECT * FROM tasktable WHERE id = $id");
$row = $ret->fetchArray(SQLITE3_ASSOC);?>
<form autocomplete="off" name="form1" method="post" action="edittask_success.php">
<input name="id" type="hidden" id="id" value=<?php echo $row['id'] ;?> />
<input name="task" type="text" id="task" value=<?php echo $row['task'] ;?> />
<input type="submit" name="Submit" value="Update"  ></form>
<br/><form action = 'javascript:self.history.back();'><button>go back</botton><form>
<?php
 //echo "Operation done successfully\n";
   $db->close();
?>
</body>
</html>