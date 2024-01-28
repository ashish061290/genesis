<?php
session_start();
if(!isset($_SESSION["sess_user"]))
{
	echo"Invalid Page!";
}
else
{
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    		<link rel="shortcut icon" href="fev_icon.png" type="image/x-icon"/>    <title>Admin_Panel</title>

    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME ICONS  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
     <!-- HTML5 Shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
</head>

<body>
<?php
include"admin_header.php";
?>
<div class="container">
	<h3 align="center" style="background-color:#333; color:#FFFFFF; font-size:30px;"><b>Addministrator Profile</b></h3>
	<div class="row">
                <div class="col-md-3">&nbsp;
    
	</div>
	<style>
	#table2{display:none;}
	</style>
                <div class="col-md-6">
            
	<div class="panel panel-default">
  <div class="panel-heading"></div>
  <div class="panel-body">
  <?php 
  require"gcon.php";
  $qry="select * from login";
  $res=mysqli_query($con,$qry) or die(mysqli_error());
  while($row=mysqli_fetch_array($res))
  {
  	extract($row);
  ?>
  <script>
$(document).ready(function(){
    $("#show").click(function(){
        $("#table2").toggle();
    });
});
</script>
  
  <table class="table" id="table1">
  <form action="#" method="post">
    <tbody>
      <tr class="success">
        <td>Name:</td>
        <td><?php echo $name; ?></td>
      </tr>
      <tr class="danger">
        <td>Designation:</td>
        <td><?php echo $desi; ?></td>
      </tr>
      <tr class="info">
        <td>Email ID:</td>
        <td><?php echo $email; ?></td>
      </tr>
	  <tr class="danger">
        <td>Password:</td>
        <td><?php echo $password; ?></td>
      </tr>
	      <?php } ?>


	<tr>
  <td colspan="2" align="center"><input type="button" name="submit" class="btn btn-default btn-primary" value="Change Password" id="show"/></td>
  </tr>
	  	  </table>

    </tbody>

  </div>
 

  <?php
  require"gcon.php";
	if(isset($_POST["sub"]))
{
$uname=trim($_POST['user']);
$pas=trim($_POST['pwd']);
$pas1=trim($_POST['pwd1']);
if($pas1==$pas)
{
$qry = "update login set password='$pas' where email='$uname'";
mysqli_query($con,$qry) or die(mysqli_error());
echo"<p style=color:green;>Password Reset....</p>";

}
else
{
echo"<p style=color:red;>Password Not Match....</p>";
}	

}
?>
<table border="1px" align="center" width="300" class="table" id="table2">
<tr>
	<td colspan="2" align="center" style="background-color:#333; color:#fff; font-size:18px; font-family:Century Schoolbook;" ><b>Change Password</b></td>
</tr>

<tr>
<td align="justify">Email ID:</td>
<td><input type="email" name="user" size="40" /></td>
</tr>
<tr>
<td align="justify">Password:</td>
<td><input type="password" name="pwd" size="40" /></td>
</tr>
<tr>
<td align="justify">Confirm Password:</td>
<td><input type="password" name="pwd1" size="40" /></td>
</tr>
<tr align="center">
<td colspan="2" ><input type="submit" name="sub" value="Submit" class="btn btn-default btn-primary"/></td>
</tr>
</form>
</table>

  
  <div>
                                <a href="admin_panel.php" class="btn btn-default btn-block"> <i class="glyphicon glyphicon-backward"></i> Go Back</a>
                            </div>


</body>
</html>
<?php } ?>