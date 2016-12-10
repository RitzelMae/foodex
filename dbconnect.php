<?php

$conn = mysql_connect("localhost","foodex","password");
$dbcon = mysql_select_db("owner");
if(!$conn){
	die("Not Connected" .mysql_error);
}


mysql_close($conn);
?>
 