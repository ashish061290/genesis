<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Admin-Students Records</title>
</head>
<?php
require"header.php";
?>
<body>
 <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">View Full Records....</h4>

                </div>
				
            </div>
			
<!--View Records-->
<div>
<table class="table" border="2px" style="border-color:#F0677C">
	<th>First Name</th>
	<th>Last Name</th>
	<th>DOB</th>
	<th>Gender</th>
	<th>Address</th>
	<th>City</th>
	<th>State</th>
	<th>Pin Code</th>
	<th>Contact No.</th>
	<th>Alternative No.</th>
	<th>Email ID</th>
	<th>Highest Qualification</th>
	<th>Year Of Passing</th>
	<th>Position</th>

<!--value fetch from db..-->
<?php
									require"gcon.php";
									$qry="select * from stud1";
									$res=mysqli_query($con,$qry) or die(mysqli_error());
									while($row=mysqli_fetch_array($res))
									{
										extract($row);
									
?>
<tr>
	<td><?php echo $f_name;  ?></td>
	<td><?php echo $l_name;  ?></td>
	<td><?php echo $dob;  ?></td>
	<td><?php echo $gender;  ?></td>
	<td><?php echo $add;  ?></td>
	<td><?php echo $city;  ?></td>
	<td><?php echo $state;  ?></td>
	<td><?php echo $pinc;  ?></td>
	<td><?php echo $phno;  ?></td>
	<td><?php echo $altno;  ?></td>
	<td><?php echo $email;  ?></td>
	<td><?php echo $highq;  ?></td>
	<td><?php echo $yearop;  ?></td>
	<td<?php echo $pos;  ?>></td>
	
</tr>

<?php  } ?>						
</table>
 </div> 
 </div>
				</div> 
</body>
</html>
