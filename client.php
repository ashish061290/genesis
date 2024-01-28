<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="web project, iso certification,jobs in bhopal,jobs,vacancy bhopal,lattest job,iso,certification" />

	<!-- Stylesheets
	============================================= -->
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="css/style.css" type="text/css" />
    <link rel="stylesheet" href="css/style2.css" type="text/css" />
	<link rel="stylesheet" href="css/dark.css" type="text/css" />
	<link rel="stylesheet" href="css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="css/animate.css" type="text/css" />
	<!--<link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />-->

	<link rel="stylesheet" href="css/responsive.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!--[if lt IE 9]>
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->

	<!-- External JavaScripts
	============================================= -->
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/plugins.js"></script>
<title>Geneses Incorporation Client </title>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
<?php include"inc/header.php"; ?>
<br/>

<div style="margin-left:140px">
<img src="images/finding-your-dream-client.png" width="1350" height="300"/></div>
<div>&nbsp;</div>
<div>&nbsp;</div>
<center>
<div class="about-us" id="about">
	<div class="container">	
	
	<form class="form-inline" role="form" action="#" method="post">
<label style="font-family:stencil; font-size:24px;">INTERNATIONAL  CERTIFICATE  REGISTER</label></br>
<div>&nbsp;</div>
<div>&nbsp;</div>
<form method="post">
  <div class="form-group">

    <label>Enter   Certificate   Number:</label>
    <input type="text" class="form-control" name="cno">
	  <label>Enter Verification  Code:</label>
    <input type="text" class="form-control" name="vcode">
  
  </div>
    <button type="submit" class="btn btn-default" name="submit">Verify</button><div>&nbsp;</div>
    
</div></div>
</form>
</center>
    <?php if(isset($_POST['submit']))
    {
        require"gcon.php";
          $id = $_POST['cno'];
          $qry="select * from clients where certificate_no='$id'";
		    $qry2 = mysqli_query($con,$qry);
           if($row=mysqli_fetch_array($qry2))
           {
               extract($row);
           
    ?>
 <div class="container">
<table class="table-responsive" border="1" cellpadding="0" cellspacing="0">
    <tr>
                <th style="text-align:center;" width="10%">Certificate Number</th>
				<th  style="text-align:center;" width="10%">Registration Date</th>
                <th  style="text-align:center;" width="10%">Client Name</th>
	     		<th  style="text-align:center;" width="10%">Certificate Type</th>
				<th  style="text-align:center;" width="10%">Contact Person</th>
                <th  style="text-align:center;" width="10%">City</th>

                                        </tr>   
                                         <tr style="background-color:#f1f1;">
               <td align="center"><?php echo $certificate_no; ?></td>
						<td align="center"><?php echo $reg_date; ?></td>
                        <td align="center"> <?php echo $client_name; ?></td>
						<td align="center"><?php echo $certificate_type; ?></td>
						<td align="center"><?php echo $contact_person; ?></td>
                        <td align="center"><?php echo $city; ?></td>
   						 
                                        </tr>  
    
    
</table>
</div>
<?php } } ?>


<div>&nbsp;</div>
<div>&nbsp;</div>
	

<div>&nbsp;</div>
<div>&nbsp;</div>

<?php include"inc/footer.php"; ?>
</body>


<!-- Mirrored from genesesinc.com/client.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 23 Nov 2017 13:06:22 GMT -->
</html>