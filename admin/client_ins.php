<?php
require"gcon.php";
if(isset($_POST["submit"]))
{
	$cno=$_POST["cno"];
	$regd=$_POST["regdate"];
	$cname=$_POST["cname"];
	$ctype=$_POST["ctype"];
	$cperson=$_POST["cperson"];
	$city=$_POST["city"];
	$status=$_POST["status"];
	
	$qry="insert into clients values('','$cno','$regd','$cname','$ctype','$cperson','$city','$status')";
	mysqli_query($con,$qry) or die(mysqli_error());
}
?>
<meta http-equiv="refresh" content="0, URL=all_clients.php"/>