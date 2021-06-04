<?php
$conn_string = "host=ec2-54-91-188-254.compute-1.amazonaws.com
"
        . " port=5432 dbname=d1ei9pf017onc1"
        . " user=wsuqmbpmsdwjki"
        . " password=c8d8555244f712d81de30256e9f074c3f0cf12396eaba2ca97691c55546247fa";
$db = pg_connect($conn_string);
//connect to a database named "test" on the host "sheep" with a username and password
   if(!$db) {
      echo "Error : Unable to open database\n";
   } else {
      echo "Opened database successfullytai\n";
   }
?>