<?php

class MyDb extends SQlite3
{
    function __construct()
    {
        $this->open('datatask.db');
    }
}
$db = new MyDB();
if(!$db){
    echo $db->lastErrorMsg();
} else {
   //echo "\nOpened database successfully\n";
   
}
?>