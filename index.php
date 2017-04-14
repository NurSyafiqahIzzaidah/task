<!DOCTYPE html>
<html>
<head>
    <title>INDEX</title>
  <link rel="stylesheet" type="text/css" href="style.css">
 
</head>
<body>
<?php

echo "add another task? ";?>
<a href='add.html'><button class= "button button1"> yes </button></a>
<?php
// including the database connection file
include_once("config.php");
 
 


    $ret = $db->query("SELECT * from tasktable ORDER BY task");?>
    <table><tr>
    <th><?php echo "ID" ?></th>
    <th><?php echo "Task" ?></th>
    <th><?php echo "Edit" ?></th>
    <th><?php echo "Delete" ?></th></tr>

    <?php 
    $no = 1;
    while($row = $ret->fetchArray(SQLITE3_ASSOC) )
    {
       $id = $row['id'] ?>
        <tr> <td><?php echo $no ?>  </td>
        <td><?php echo $row['task'] ?> </td>
       
        <td>

                    <a href='edittask.php?id=<?php echo $id ?>'><button>Edit</button></a> </td>
        <td>
                     <a href='deletetask.php?id= <?php echo $id ?> ' onclick="return confirm('Are you sure you want to delete this task?');"><button>Delete</button</a>
                    
                    
                </td>

            </tr>

        
      <?php 
      $no++;
      }?>
      
      </table>
      <?php
      $db->close();
?>
</body>
<html>

