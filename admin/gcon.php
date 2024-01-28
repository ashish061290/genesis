<?php
$server = "localhost";
$user  = "root";
$pwd = "";
$dbname = "geneses";
$con = mysqli_connect($server,$user,$pwd,$dbname);
if(!$con){
	echo "Database Not connected";
}
 
?>