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
    		<link rel="shortcut icon" href="fev_icon.ico" type="image/x-icon"/>    <title>Admin_Panel</title>
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
</head>
<body>
    <?php
include"admin_header.php";
?>
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">Add New Client...</h4>

                </div>
				</div>
				
				
				<div class="container">
						 <div class="row">
                <div class="col-md-1"></div>
						                <div class="col-md-9">

						<div class="panel panel-default">
  <div class="panel-heading" align="center" style="background-color:#333; color:#FFFFFF; font-size:18px; font-family:Verdana, Arial, Helvetica, sans-serif"><b>Add New Client</b></div>
  <div class="panel-body">
  
						<center><form class="form-inline" role="form" action="client_ins.php" method="post">
  <div class="form-group">
    <label for="cno">Certification No:</label>
    <input type="text" name="cno" class="form-control">
  </div>
  <div class="form-group">
    <label for="reg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Registration Date:</label>
    <input type="date" name="regdate" class="form-control">
  </div></br>
  <div>&nbsp;</div>
    <div class="form-group">

  <label for="cname">Client Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
    <textarea class="form-control" name="cname" cols="66" ></textarea>
  </div>
      </br>
	  <div>&nbsp;</div>
  <div class="form-group">
    <label for="ctype">Certificate Type:</label>
    <input type="text" class="form-control" name="ctype">
  </div>
  <div class="form-group">
    <label for="cperson">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Mobile Number:&nbsp;&nbsp;&nbsp;</label>
    <input type="text" name="cperson" class="form-control">
  </div></br>
   <div>&nbsp;</div>
  <div class="form-group">
    <label for="city">City:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
    <input type="text" class="form-control" name="city">
  </div>
  <div class="form-group">
    <label for="status">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Status:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
    <input type="text" name="status" class="form-control">
  </div></br>

   <div>&nbsp;</div>


  <button type="submit" name="submit" class="glyphicon glyphicon-user btn btn-primary btn-md">ADD</button>
</form></center>
						
            			</div></div></div></div>
					
				 </div>
	<div>
                                <a href="all_clients.php" class="btn btn-default btn-block"> <i class="glyphicon glyphicon-backward"></i> Go Back</a>
                            </div>

	</div>
	
</body>
</html>
<?php } ?>