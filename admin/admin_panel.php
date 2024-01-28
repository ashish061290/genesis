<?php
ob_start();
session_start();
if(!isset($_SESSION["sess_user"]) &&($_SESSION["sess_desi"]))
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
    <!-- WARNING: Respond.js doesnt work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<style>
		.dashboard-div-wrapper h4 a{color:#fff;}
	</style>
</head><body>
<?php
require"admin_header.php";
?>

        <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">Dashboard</h4>

                </div>

            </div>
            <div class="row">
                <div class="col-md-12">
                   
                </div>

            </div>
            <div class="row">
                 <div class="col-md-4 col-sm-4 col-xs-6">
                    <div class="dashboard-div-wrapper bk-clr-one">
                        <i  class="fa fa-venus dashboard-div-icon" ></i>
                        <div class="progress progress-striped active">
  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
  </div>
                           
</div>
                         <h4>Total Visitors </h4>
                    </div>
                </div>
                                  <div class="col-md-4 col-sm-4 col-xs-6">
                    <div class="dashboard-div-wrapper bk-clr-three">
                        <i  class="fa fa-cogs dashboard-div-icon" ></i>
                        <div class="progress progress-striped active">
  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
  </div>
                           
</div>
                         <h4><a href="profile_update.php">Profile Update</a></h4>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-6">
                    <div class="dashboard-div-wrapper bk-clr-four">
						<?php
						require"gcon.php";
						$qry="select * from clients";
						$res=mysqli_query($con,$qry) or die(mysqli_error());
						$count=mysqli_num_rows($res);
						?>
                        <i  class="fa fa-bell-o dashboard-div-icon" ></i>
                        <div class="progress progress-striped active">
  <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
  </div>
                           
</div>
                         <h4>Total Clients(<?php echo $count; ?>)</h4>
                    </div>
                </div>

            </div>
			
			<!----table content-->
			<hr />
			<div class="row">
                <div class="col-md-6">
            
                     <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Certificate Number</th>
                                            <th>Cliens Name</th>
                                            <th>City</th>
                                            <th>View Records</th>
                                        </tr>
                                    </thead>
                                    <tbody>
								<!--	<tr>
										<?php
										require"gcon.php";
										$qry="select * from clients order by clients_id ASC LIMIT 0,16";
										$res=mysqli_query($con,$qry) or die(mysqli_error());
										while($row=mysqli_fetch_array($res))
										{
											extract($row);
										?>
										
										

                                       
                                        <tr>
                                            <td><?php echo $certificate_no; ?></td>
                                            <td><?php echo $client_name; ?></td>
                                                                                       <td><?php echo $city; ?></td>
                                             <td> <a href="all_clients.php"  class="btn btn-xs btn-primary glyphicon glyphicon-info-sign"  >View More</a> </td>
                                        </tr>
                                                                            </tbody>
                                								<?php } ?>
								</tr>-->
								
								
								
									<?php
				/*$resc = mysql_query("select * from city order by cityname ASC") or die(mysql_error());*/
	 			$num_rec_per_page=16;
					if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 
					$start_from = ($page-1) * $num_rec_per_page; 
					$sql = "SELECT * FROM clients order by client_name ASC LIMIT $start_from, $num_rec_per_page"; 
					$resc = mysqli_query ($con,$sql); //run the query
				if($start_from != 0) { $csr = 1 * ($start_from+1); }
				else { $csr = 1; }
				//$csr = 1;
				while($rowc = mysqli_fetch_array($resc))
				{
				extract($rowc);
					
			  ?>
			  		<tr>
                                            <td><?php echo $certificate_no; ?></td>
                                            <td><?php echo $client_name; ?></td>
                                                                                       <td><?php echo $city; ?></td>
                                             <td> <a href="all_clients.php"  class="btn btn-xs btn-primary glyphicon glyphicon-info-sign"  >View More</a> </td>
                                        </tr>
			  <?php $csr++; } ?>
			  <tr><td colspan="3" align="center">
					<?php
						$sql = "SELECT * FROM clients"; 
						$rs_result = mysqli_query($con,$sql); //run the query
						$total_records = mysqli_num_rows($rs_result);  //count number of records
						$total_pages = ceil($total_records / $num_rec_per_page); 
						echo "<a href='admin_panel.php?page=1' style='border:1px #CCC solid; padding:5px 6px; border-radius:3px;'>".'|<'."</a> "; // Goto 1st page  
						for ($i=1; $i<=$total_pages; $i++) { 
							echo "<a href='admin_panel.php?page=".$i."' style='border:1px #CCC solid; padding:5px 6px; border-radius:3px;'>".$i."</a> "; 
						}; 
						echo "<a href='admin_panel.php?page=$total_pages' style='border:1px #CCC solid; padding:5px 6px; border-radius:3px;'>".'>|'."</a> "; // Goto last page
					?>
				
					</td></tr>
								
								
								
								
								</table>
								<!--<center><ul class="pagination pagination-sm">
 									 <li><a href="#">1</a></li>
 									 <li><a href="#">2</a></li>
 									 <li><a href="#">3</a></li>
  									 <li><a href="#">4</a></li>
  									<li><a href="#">5</a></li>
									<li><a href="#">6</a></li>
  									<li><a href="#">7</a></li>						  							
									<li><a href="#">8</a></li>
									<li><a href="#">9</a></li>
									 <li><a href="#">10</a></li>

								</ul></center>-->
								
										
                            </div>
                </div>
				
				

			<!-- xxxx-->
           
                <div class="col-md-6">
                      <div class="notice-board">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                           <b>Active  Notice Panel</b> 
                                <div class="pull-right" >
                                    <div class="dropdown">
  <button class="btn btn-success dropdown-toggle btn-xs" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
    <span class="glyphicon glyphicon-cog"></span>
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Refresh</a></li>
    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Logout</a></li>
  </ul>
</div>
                                </div>
                            </div>
                            <div class="panel-body">
                               
                                <ul >
                                   
                                     <li>
                                            <a href="#">
                                     <span class="glyphicon glyphicon-align-left text-success" ></span> 
                                                  <?php
												  require"gcon.php";
												  $qry="select client_name from clients 
												  order by client_name DESC LIMIT 0,1";
												  $res=mysqli_query($con,$qry) or die(mysqli_error());
												  while($row=mysqli_fetch_array($res))
												  {
												  	extract($row);
													
												  ?>
												  <?php echo "Recently Added Client"." "."&mdash;". $client_name; ?>
												  <?php } ?>
                                            </a>
                                    </li>
                                     <li>
                                          <a href="#">
                                     <span class="glyphicon glyphicon-align-left text-success" ></span>  
<?php
												  require"gcon.php";
												  $qry="select client_name from clients 
												  order by client_name DESC LIMIT 2,1";
												  $res=mysqli_query($con,$qry) or die(mysqli_error());
												  while($row=mysqli_fetch_array($res))
												  {
												  	extract($row);
													
												  ?>
												  <?php echo "Recently Added Client"." "."&mdash;". $client_name; ?>
												  <?php } ?>
                                            </a>
                                    </li>
                                     <li>
                                          <a href="#">
                                     <span class="glyphicon glyphicon-align-left text-success" ></span>  
<?php
												  require"gcon.php";
												  $qry="select client_name from clients 
												  order by client_name DESC LIMIT 3,1";
												  $res=mysqli_query($con,$qry) or die(mysqli_error());
												  while($row=mysqli_fetch_array($res))
												  {
												  	extract($row);
													
												  ?>
												  <?php echo "Recently Added Client"." "."&mdash;". $client_name; ?>
												  <?php } ?>
                                            </a>
                                    </li>
                                    <li>
                                          <a href="#">
                                     <span class="glyphicon glyphicon-align-left text-success" ></span>  
<?php
												  require"gcon.php";
												  $qry="select client_name from clients 
												  order by client_name DESC LIMIT 4,1";
												  $res=mysqli_query($con,$qry) or die(mysqli_error());
												  while($row=mysqli_fetch_array($res))
												  {
												  	extract($row);
													
												  ?>
												  <?php echo "Recently Added Client"." "."&mdash;". $client_name; ?>
												  <?php } ?>
                                            </a>
                                    </li>
                                   </a>
                                    </li>
                                </ul>
                            </div>
                                                    </div>
                    </div>
					
                    <hr />
                    <!--<div class="text-center alert alert-warning">-->
					
                       <!-- <a href="https://www.facebook.com" target="_blank" class="btn btn-social btn-facebook">
                            <i class="fa fa-facebook"></i>&nbsp; Facebook</a>
                        <a href="https://www.google.com" target="_blank" class="btn btn-social btn-google">
                            <i class="fa fa-google-plus"></i>&nbsp; Google</a>
                        <a href="https://www.twitter.com" target="_blank" class="btn btn-social btn-twitter">
                            <i class="fa fa-twitter"></i>&nbsp; Twitter </a>
                        <a href="https://www.linkedin.com" target="_blank" class="btn btn-social btn-linkedin">
                            <i class="fa fa-linkedin"></i>&nbsp; Linkedin </a>-->
                    </div>
                     
                                    <div class="col-md-6">
<script src="jquery/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("p").click(function(){
        $(this).hide();
    });
});
</script> 
            
                   
                </div>
                     </div>
                </div>
            </div>
        </div>
		
    </div>         
	<div class="panel-footer">
                                <a href="#" class="btn btn-default btn-block"> <i class="glyphicon glyphicon-repeat"></i> Go Top</a>
                            </div>

	</div>
	
	
    <!-- CONTENT-WRAPPER SECTION END-->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
				
                </div>

            </div>
        </div>
    </footer>
    <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.11.1.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
</body>
</html>
<?php } ?>