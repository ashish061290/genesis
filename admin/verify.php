 <?php
 	session_start();
				if(isset($_POST["submit"]))
				{
				extract($_POST);
					require"gcon.php";
				echo	$username = trim($_POST["email"]);
				echo	$password = trim($_POST["pass"]);
				exit;
					$res = mysqli_query($con,"select * from login where email='$username' and password='$password'") or die(mysqli_error());
					if($row = mysqli_fetch_array($res))
					{
					    //echo $row["name"];
						$_SESSION["sess_user"] = $row["email"];
						$_SESSION["sess_desi"] = $row["desi"];
						//echo $row['name'];
						
						echo"<p align='center'><img src='load.gif'/></p>";
						echo "<p style='color:green; font-size:20px;' align='center'><b>login Succesfully...</b></p>";
						echo "<meta http-equiv='refresh' content='1, URL=admin_panel.php' />";
					}
					else
					{
						echo "<p style='color:red; font-size:18px;' align='center'>Invalid Username or Password!</p>";
					//							echo "<meta http-equiv='refresh' content='1, URL=index.php' />";

					}
				}
				
			?>