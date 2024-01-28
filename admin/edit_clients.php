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
</head>
<body>
    <?php
include"admin_header.php";
?>
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">Edit Clients Records...</h4>

                </div>
				</div>
				
				<div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
				
				
              
				
				 <?php
  require"gcon.php";
  $id_new=$_GET["id"];
  $qry="select * from clients where clients_id='$id_new'";
  $result=mysqli_query($con,$qry) or die(mysqli_error());
					
                                      while($row= mysqli_fetch_array($result))
					{
     extract($row);
					
                                            ?>

				
				<form class="form-horizontal" role="form" method="post">
  <div class="form-group">
    <label class="control-label col-sm-2" for="cno">Certificate Number:</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" name="cno" value="<?php echo $certificate_no; ?>">
	  
    </div>
  </div>
   <div class="form-group">
    <label class="control-label col-sm-2" for="reg_date">Registration date:</label>
    <div class="col-sm-4"> 
      <input type="text" class="form-control" name="regdate" value="<?php echo $reg_date; ?>">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="cname">Client Name:</label>
    <div class="col-sm-4"> 
      <input type="text" class="form-control" name="cname" value="<?php echo $client_name; ?>">
    </div>
  </div>
<div class="form-group">
    <label class="control-label col-sm-2" for="ctype">Certificate type:</label>
    <div class="col-sm-4"> 
      <input type="text" class="form-control" name="ctype" value="<?php echo $certificate_type; ?>">
    </div>
  </div>
<div class="form-group">
    <label class="control-label col-sm-2" for="cperson">Mobile number:</label>
    <div class="col-sm-4"> 
      <input type="text" class="form-control" name="cperson" value="<?php echo $contact_person; ?>">
    </div>
  </div>
<div class="form-group">
    <label class="control-label col-sm-2" for="city">City:</label>
    <div class="col-sm-4"> 
      <input type="text" class="form-control" name="city" value="<?php echo $city; ?>">
    </div>
  </div>

  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default" name="update">UPDATE</button>
    </div>

  </div>

</form>
  	<?php } ?>
	
	<?php
                
                 require"gcon.php";
                if(isset($_POST["update"])) { 
                
$cnumber=$_POST["cno"];
$rdate=$_POST["regdate"];
$client_name=$_POST["cname"];
$client_type=$_POST["ctype"];
$contact=$_POST['cperson'];
$city=$_POST["city"];

               
        $certificate_number = $_POST["cno"];         
        $quary = "update clients set certificate_no='$cnumber',reg_date='$rdate',client_name='$client_name',certificate_type='$client_type',contact_person='$contact',city='$city' where clients_id='$id_new'";
             mysqli_query($con,$quary);                                                                                         
                }
                ?>

</div></div></div>
 </div>
	<div>
                                <a href="all_clients.php" class="btn btn-default btn-block"> <i class="glyphicon glyphicon-backward"></i> Go Back</a>
                            </div>

	</div>
	
</body>
</html>
<?php } ?>
