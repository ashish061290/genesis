<!DOCTYPE html>
<?php ob_start();
  	session_start();
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    		<link rel="shortcut icon" href="fev_icon.png" type="image/x-icon"/>   
    		<title>Admin_Panel</title>
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
</head>
<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                                   </div>

            </div>
        </div>
    </header>
    <!-- HEADER END-->
   <!-- <div class="navbar navbar-inverse set-radius-zero">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">

                    <img src="assets/img/admin.gif" />
                </a>

            </div>

            <div class="left-div">
                <div class="user-settings-wrapper">
                    <ul class="nav">

                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                                <span class="glyphicon glyphicon-user" style="font-size: 25px;"></span>
                            </a>
                            <div class="dropdown-menu dropdown-settings">
                                <div class="media">
                                    <a class="media-left" href="#">-->
                                        <!--<img src="assets/img/me.jpg" alt="" class="img-rounded" />
                                    </a>-->
                                   <!-- <div class="media-body">
                                        <h4 class="media-heading">Juhi Shrivastava</h4>
                                        <h5>Developer & Designer</h5>

                                    </div>
                                </div>
                                <hr />
                                <h5><strong>Personal Bio : </strong></h5>
                                PHP Developer(World Soft technology)
                                <hr />
                                <a href="#" class="btn btn-info btn-sm">Full Profile</a>&nbsp; <a href="login.html" class="btn btn-danger btn-sm">Logout</a>-->

                            <!--</div>
                        </li>


                    </ul>
                </div>
            </div>
        </div>
    </div>-->
    <!-- LOGO HEADER END-->
    <!--<section class="menu-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                            <!--<li><a class="menu-top-active" href="#">Home</a></li>
                             <li><a href="#">Clients</a></li>
							 						     <li><a href="admin_login.php">Logout</a></li>


                        </ul>-->
                    <!--</div>
                </div>

            </div>
        </div>
    </section>-->
    <!-- MENU SECTION END-->
	<div class="container">
	<h3 align="center" style="background-color:#333; color:#FFFFFF; font-size:30px;"><b>Addministrator Login</b></h3>
	<div class="row">
                <div class="col-md-3">&nbsp;
    
	</div>
                <div class="col-md-6">
            
	<div class="panel panel-default">
  <div class="panel-heading"></div>
  <div class="panel-body">
  
  
 <form class="form-horizontal" role="form" method="post">
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Email:</label>
	
    <div class="col-sm-7">
	
      <input type="email" name="email" class="form-control" id="email" placeholder="Enter email" required"">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Password:</label>
    <div class="col-sm-7"> 
      <input type="password" name="pass" class="form-control" id="pwd" placeholder="Enter password" required>
    </div>
  </div>
  <!--<div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label><input type="checkbox" > Remember me</label>
      </div>
    </div>
  </div>-->
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="submit" class="btn btn-primary">SUBMIT</button>
    </div>
  </div>
  
  <?php
 
				if(isset($_POST["submit"]))
				{
				    
				
					$username = trim($_POST["email"]);
					$password = trim($_POST["pass"]);
					require"gcon.php";
					$res = mysqli_query($con,"select * from login where email='$username' and password='$password'") or die(mysqli_error());
					if($row = mysqli_fetch_array($res))
					{
					    //echo $row["name"];
				     	$_SESSION["sess_user"] = $row["email"];
						$_SESSION["sess_desi"] = $row["desi"];
						//echo $row['name'];
						
						echo"<p align='center'><img src='load.gif'/></p>";
						echo "<p style='color:green; font-size:20px;' align='center'><b>login Succesfully...</b></p>";
					//	echo "<meta http-equiv='refresh' content='1, URL=admin_panel.php' />";
					}
					else
					{
					    echo"aaaa";
						echo "<p style='color:red; font-size:18px;' align='center'>Invalid Username or Password!</p>";
	//						echo "<meta http-equiv='refresh' content='1, URL=index.php' />";

					}
				}
				
			?>
  
</form> 
  
  </div>
</div>
</div>
</div>
	
	</div>
	</body>
	</html>