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
                    <h4 class="page-head-line">Clients Records...</h4>

                </div>
				</div>
 <div class="table-responsive">
 										 <div><a href="add_clients.php"  class="btn btn-sm btn-success glyphicon glyphicon-plus" style="font-size:16px;"><strong>Add Client</strong></a> </div>
										 <div>&nbsp;</div>

                                <table width="84%" class="table table-striped table-bordered table-hover">
                                    
                                        <tr>
                                            <th width="7%" align="center">Certificate Number</th>
											<th width="8%" align="center">Registration Date</th>
                                            <th width="25%" align="center">Client Name</th>
											<th width="9%" align="center">Certificate Type</th>
											<th width="6%" align="center">Contact Person</th>
                                            <th width="5%" align="center">City</th>
											<th width="5%" align="center">Status</th>

																						<th width="12%" align="center">Action</th>

                                        </tr>                                    
									
									
									<?php
									error_reporting(0);	
                 require"gcon.php";
                if($_GET["status"]=="delete") { 
                
     $abc = $_GET["abcd"];          
  $quary = "delete from clients where certificate_no='$abc'";
       
             mysql_query($quary);                                                                                         
                
                 echo "<script>";
        echo "alert ('Records Deleted Successfully')";
        echo "</script>";
                }
                ?>  
  
										                                 

										<?php
										require"gcon.php";
										
										$qry="select * from clients";
										
										$res=mysql_query($qry) or die(mysql_error());
										while($row=mysql_fetch_array($res))
										{
											extract($row);
										
										?>
										
										                                   
                                 <!-- <tr>
                                            <td><?php echo $certificate_no; ?></td>
											<td><?php echo $reg_date; ?></td>
                                            <td><?php echo $client_name; ?></td>
											<td><?php echo $certificate_type; ?></td>
											<td><?php echo $contact_person; ?></td>
                                            <td><?php echo $city; ?></td>
   										   <td><?php echo $status; ?></td>

                                         <td> 
										 <a href="all_clients.php?status=delete&abcd=<?php echo $certificate_no; ?>"  class="btn btn-sm btn-danger glyphicon glyphicon-trash">Delete</a> 
										
										 <a href="edit_clients.php?id=<?php echo $clients_id; ?>"  class="btn btn-sm btn-primary glyphicon glyphicon-edit">Edit</a>
										 <a href="add_clients.php"  class="btn btn-sm btn-success glyphicon glyphicon-plus"  >Add Client</a> </td>
										   
                                  </tr>-->
                                        <?php } ?> 
										
										<?php
				/*$resc = mysql_query("select * from city order by cityname ASC") or die(mysql_error());*/
	 			$num_rec_per_page=15;
					if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 
					$start_from = ($page-1) * $num_rec_per_page; 
					$sql = "SELECT * FROM clients order by client_name ASC LIMIT $start_from, $num_rec_per_page"; 
					$resc = mysql_query ($sql); //run the query
				if($start_from != 0) { $csr = 1 * ($start_from+1); }
				else { $csr = 1; }
				//$csr = 1;
				while($rowc = mysql_fetch_array($resc))
				{
				extract($rowc);
					
			  ?>
			  		<tr>
                                            <td><?php echo $certificate_no; ?></td>
											<td><?php echo $reg_date; ?></td>
                                            <td><?php echo $client_name; ?></td>
											<td><?php echo $certificate_type; ?></td>
											<td><?php echo $contact_person; ?></td>
                                            <td><?php echo $city; ?></td>
   										   <td><?php echo $status; ?></td>
 <td> 
										 <a href="all_clients.php?status=delete&abcd=<?php echo $certificate_no; ?>"  class="btn btn-sm btn-danger glyphicon glyphicon-trash">Delete</a> 
										
										 <a href="edit_clients.php?id=<?php echo $clients_id; ?>"  class="btn btn-sm btn-primary glyphicon glyphicon-edit">Edit</a>
										                                        </td></tr>
			  <?php $csr++; } ?>
			  <tr><td colspan="3" align="center">
					<?php
						$sql = "SELECT * FROM clients"; 
						$rs_result = mysql_query($sql); //run the query
						$total_records = mysql_num_rows($rs_result);  //count number of records
						$total_pages = ceil($total_records / $num_rec_per_page); 
						echo "<a href='admin_panel.php?page=1' style='border:1px #CCC solid; padding:5px 6px; border-radius:3px;'>".'|<'."</a> "; // Goto 1st page  
						for ($i=1; $i<=$total_pages; $i++) { 
							echo "<a href='admin_panel.php?page=".$i."' style='border:1px #CCC solid; padding:5px 6px; border-radius:3px;'>".$i."</a> "; 
						}; 
						echo "<a href='admin_panel.php?page=$total_pages' style='border:1px #CCC solid; padding:5px 6px; border-radius:3px;'>".'>|'."</a> "; // Goto last page
					?>
				 
										 
										      </table>
								
          </div>
                </div>
</div>
 </div>
	<div>
                                <a href="admin_panel.php" class="btn btn-default btn-block"> <i class="glyphicon glyphicon-backward"></i> Go Back</a>
                            </div>

	</div>
	
</body>
</html>
<?php } ?>