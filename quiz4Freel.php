<?php

require_once('/home/ptfreel/DBfreel.php');
$mysqli = new mysqli(DBHOST, USERNAME, PASSWORD, DBNAME);

if($mysqli->connnect_errno){
  die("Could not connect to server ".$DBHOST."<br />");
}
else{
  echo "Successful connection to ".$USERNAME." database <br />";
}
 ?>
