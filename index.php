<?php ob_start();
session_start(); ?>
<!DOCTYPE html">
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="css/style.css" type="text/css" />
    <link rel="stylesheet" href="css/style2.css" type="text/css" />
    <link rel="stylesheet" href="css/style3.css" type="text/css" />
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

<!--new slide-->
<script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
<!--<script type="text/javascript" src="js/jquery.min.js"></script>-->
<link rel="stylesheet" type="text/css" href="css/style2.css" media="all" />
    <script type="text/javascript" charset="utf-8">
    var $ = jQuery.noConflict();
    $(window).load(function() {
    $('.flexslider').flexslider({
          animation: "fade"
    });
	
	$(function() {
		$('.show_menu').click(function(){
				$('.menu').fadeIn();
				$('.show_menu').fadeOut();
				$('.hide_menu').fadeIn();
		});
		$('.hide_menu').click(function(){
				$('.menu').fadeOut();
				$('.show_menu').fadeIn();
				$('.hide_menu').fadeOut();
		});
	});
  });
</script>

<!-- end-->



	<!-- Document Title
	============================================= -->
	<title>Home</title>

</head>

<body class="stretched">

		<?php include"inc/header.php";?>

	<!-- Document Wrapper
	============================================= -->
    <div class="container-fluid">
       <div class="row">
        <div class="col-md-12 col-sm-12 col-lg-12">
	<div id="wrapper" class="clearfix">

		<div id="home" class="page-section" 
        style="position:absolute;top:0;left:0;width:100%;height:200px;z-index:-2;"></div>

        <div class="slider_container">
		<div class="flexslider">
	      <ul class="slides">
	    	<li >
	    		<a href="#"><img src="images/img01.png" alt="" title="" style="min-height:250px; width:100%;" /></a>
	    		<div class="flex-caption clearfix">
                   <div class="container clearfix">
							<div class="slider-caption slider-caption-center">
								<h2 data-caption-animate="fadeInUp">Welcome to Geneses Incorporation</h2>
								<p style="display:inline; top:300%;">Want to download our sample quotation</p>
		<a href="docx/quotation.docx" class="btn btn-danger btn-lg">Download Now</a> 
							</div>
						</div>
                
                     <!--<div class="caption_title_line"><h2>Party Hairstyles</h2><p>Find the perfect hairstyle a la Lauren Conrad for every type of festive fête.</p></div>-->
                </div>
	    	</li>
	    	<li>
	    		<a href="#"><img src="images/img7.jpg" alt="" title="" style="min-height:250px; width:100%;" /></a>
	    		<div class="flex-caption">
                     <!--<div class="caption_title_line"><h2>Beautiful Hairstyle</h2><p>The latest hairstyles and instructions on how to create them here. Total Beauty has your complete hairstyles guide</p></div>-->
                </div>
	    	</li>
	    	<li>
	    		<a href="#"><img src="images/img6.jpg" alt="" title="" style="min-height:250px;width:100%;" /></a>
	    		<div class="flex-caption">
                     <!--<div class="caption_title_line"><h2>Party Dresses</h2><p>If you are looking for something a little special for your big night out, check out Rare London's collection of stunning party dresses</p></div>-->
                </div>
	    	</li>
	    	
	    </ul>
	  </div>
   </div>
   </div>
   </div>
<!--End New Slider-->

        
        
        
        

		<!-- Content
		============================================= -->
		<div class="row">
        <div class="col-md-12 col-xs-12 col-lg-12">
        <section id="content">

			<div class="content-wrap">

				<section id="section-about" class="page-section">

					<div class="container clearfix">

						<div class="heading-block center">
							<h2>We are <span>Geneses Incorporation
                            </span></h2>
                            <!--
							<span>One of the most Versatile Theme on Themeforest</span>
                           -->
						</div>

						<div class="col-md-4 nobottommargin">
							<div class="feature-box media-box">
								<div class="fbox-media">
									<img src="images/services/service1.png" alt="Why choose Us?">
								</div>
								<div class="fbox-desc">
									<h3>Why choose Us.<span class="subtitle">Because we are Reliable.</span></h3>
									<p>Geneses incorporation follow an appropriate methodology for certification through reliable techniques. From our end.</p>
								</div>
							</div>
						</div>

						<div class="col-md-4 nobottommargin">
							<div class="feature-box media-box">
								<div class="fbox-media">
									<img src="images/services/service3.png" alt="Why choose Us?">
								</div>
								<div class="fbox-desc">
									<h3>Our Mission.<span class="subtitle">To Redefine your Brand.</span></h3>
									<p>The main objective of Geneses Services as described in Memorandum of association is 'To carry on the business of providing certification & Consultant Services....</p></div>
							</div>
						</div>

						<div class="col-md-4 nobottommargin col_last">
							<div class="feature-box media-box">
								<div class="fbox-media">
									<img src="images/services/service2.png" alt="Why choose Us?">
								</div>
								<div class="fbox-desc">
									<h3>What we Do.<span class="subtitle">Make our Customers Happy.</span></h3>
									<p>Geneses Services reviews the threats to impartiality arising out of its certification activities vity of certification activity...</p>
								</div>
							</div>
						</div>

						<div class="clear"></div>
<hr/>
					</div>
                    </div>
                    </div>

				
                <div class="clear"></div>
                <div class="row">
                <div class="col-md-12 col-xs-12 col-lg-12">
				<section id="section-services" class="page-section">

					<div class="heading-block center bottommargin-lg">
						<h2>Services</h2>
						<span>List of some services included in Geneses Incorporation.</span>
					</div>

					<div class="container clearfix">

						<div class="col_one_third">
							<div class="feature-box fbox-center fbox-effect nobottomborder" data-animate="fadeIn">
								<div class="fbox-icon">
									<a href="#"><i class="icon-plus"></i></a>
								</div>
								<h3>Paramedical Jobs</h3>
								
								<p>We Are Provide A job And Placement In All Types Of Medical Fields..</p>
							</div>
						</div>

						<div class="col_one_third">
							<div class="feature-box fbox-center fbox-effect nobottomborder" data-animate="fadeIn" data-delay="200">
								<div class="fbox-icon">
									<a href="#"><i class="icon-certificate"></i></a>
								</div>
								<h3>ISO Certification</h3>
								<p>Geneses Incorporation Provide ISO certification.</p>
							</div>
						</div>

						<div class="col_one_third col_last">
							<div class="feature-box fbox-center fbox-effect nobottomborder" data-animate="fadeIn" data-delay="400">
								<div class="fbox-icon">
									<a href="#"><i class="icon-user"></i></a>
								</div>
								<h3>Bank Jobs</h3>
							<p>We Are Provide A job And Placement In Banking Sector..</p>
							</div>
						</div>

						<div class="clear"></div>

						<div class="col_one_third">
							<div class="feature-box fbox-center fbox-effect nobottomborder" data-animate="fadeIn" data-delay="600">
								<div class="fbox-icon">
									<a href="#"><i class="icon-book"></i></a>
								</div>
								<h3>Marketing Jobs</h3>
								<p>We Are Provide A job And Placement In All Types Of Marketing Field Jobs..</p>
							</div>
						</div>

						<div class="col_one_third">
							<div class="feature-box fbox-center fbox-effect nobottomborder" data-animate="fadeIn" data-delay="800">
								<div class="fbox-icon">
									<a href="#"><i class="icon-group"></i></a>
								</div>
								<h3>Insurance Jobs</h3>
								<p>We Are Provide A job And Placement In Banking And Accountion Or Insurance Jobs..</p>
							</div>
						</div>

						<div class="col_one_third col_last">
							<div class="feature-box fbox-center fbox-effect nobottomborder" data-animate="fadeIn" data-delay="1000">
								<div class="fbox-icon">
									<a href="#"><i class="icon-note"></i></a>
								</div>
								<h3>Customer Service</h3>
								<p>We Are Provide And Hire A Hghtly Recommented TeleServices And Communication Jobs.</p>
							</div>
						</div>
						<div class="clear"></div>
<hr/>

</section>
						
                      </div>
                      </div>
                      
                     						<!-- Contact Form
						============================================= -->
						<div class="container clearfix">
						<div class="col-md-6 col-lg-6 col-sm-12">

							<div class="fancy-title title-dotted-border">
								<h3>Send us an Email</h3>
							</div>

							<div id="contact-form-result" data-notify-type="success" data-notify-msg="<i class=icon-ok-sign></i> Message Sent Successfully!"></div>

							<form class="nobottommargin" id="template-contactform" name="template-contactform" action="inc/sendemail.php" method="post">

							<div class="form-process"></div>

							<div class="col_one_third">
								<label for="template-contactform-name">Name <small>*</small></label>
								<input type="text" id="template-contactform-name" name="name" value="" class="sm-form-control required" />
							</div>

							<div class="col_one_third">
								<label for="template-contactform-email">Email <small>*</small></label>
								<input type="email" id="template-contactform-email" name="email" value="" class="required email sm-form-control" />
							</div>

							<div class="col_one_third col_last">
								<label for="template-contactform-phone">Phone</label>
								<input type="text" id="template-contactform-phone" name="template-contactform-phone" value="" class="sm-form-control" />
							</div>

							<div class="clear"></div>

							<div class="col_two_third">
								<label for="template-contactform-subject">Subject <small>*</small></label>
								<input type="text" id="template-contactform-subject" name="subject" value="" class="required sm-form-control" />
							</div>

							<div class="col_one_third col_last">
								<label for="template-contactform-service">Services</label>
								<select id="template-contactform-service" name="service" class="sm-form-control">
									<option value="">-- Select One --</option>
									<option value="Wordpress">Wordpress</option>
									<option value="PHP / MySQL">PHP / MySQL</option>
									<option value="HTML5 / CSS3">HTML5 / CSS3</option>
									<option value="Graphic Design">Graphic Design</option>
								</select>
							</div>

							<div class="clear"></div>

							<div class="col_full">
								<label for="template-contactform-message">Message <small>*</small></label>
								<textarea class="required sm-form-control" id="template-contactform-message" name="message" rows="6" cols="30"></textarea>
							</div>

							

							<div class="col_full">
								<button class="button button-3d nomargin" type="submit" id="template-contactform-submit" name="submit" value="submit">Send Message</button>
							</div>

						</form>
<?php
if(isset($_POST["submit"]))
 {
	 $name = $_POST["name"];
	 $email = $_POST["email"];
	  $phone = $_POST["phone"];
	   $subject = $_POST["subject"];
	    $service = $_POST["service"];
		 $msg = $_POST["message"];
		 $emsg = "
	 <html>
		<head>
		</head>
		<body>
		<center><h3>Congratulations!!!</h3></center><br>
		<p>
		Dear Ankit Mathur,
		
		Congratulation, your Service Enquiry In Home Page Website ".date("Y-m-d h:i:s")." Has Been Created.
        
		<br>
		<strong>Your Enquiry Detail Us :</strong>
		<br/><br/>
          <strong><h4>Name :</h4></strong>&nbsp;&nbsp;".$name."<br/><br/>
		  <strong><h4>Email :</h4></strong>&nbsp;&nbsp;".$email."<br/><br/>
		  <strong><h4>Mobile :</h4></strong>&nbsp;&nbsp;".$phone."<br/><br/>
		  <strong><h4>Enquiry Detail Us :</h4></strong>&nbsp;&nbsp;".$subject."<br/><br/>
		  <strong><h4>Enquiry Detail Us :</h4></strong>&nbsp;&nbsp;".$service."<br/><br/>
		  <strong><h4>Enquiry Detail Us :</h4></strong>&nbsp;&nbsp;".$msg."<br/><br/>
   
<br>
		<p style='color:red'>Please don not reply to this email, This is system generated mail</p>      
		</body>
	  </html>";	
	  
	   $emsg2 = "
	 <html>
		<head>
		</head>
		<body>
		<center><h3>Congratulations!!!</h3></center><br>
		<p>
		Dear ".$name.",
		
		Congratulation, your Service Enquiry Form In ".date("Y-m-d h:i:s")." Has Been Succesfully Submited.
        
		<br>
		We Are Contact Us You Fastly..... If You Want Any Query In Contact Us +91 99779 95823
		<br/><br/>
		Once again thank you, if you have any queries please email on <a href='http://genesesinc.com/index.php'>admin@genesesinc.com</a>
		</p><br>
		<h3>Thank you and Stay Fit</h3><br/>
        <p>Health Is Wealth </p><br/>
        <img src='http://genesesinc.com/images/geneses.png' style='width:100px;'>
		<p style='color:red'>Please don not reply to this email, This is system generated mail</p>      
		</body>
	  </html>";
	  
	  $first = "ashish.preeminence@gmail.com";
	  $secound = "admin@genesesinc.com";
	  $mail2 ="$first,$secound";
	  $mail3 = $email;
	   $headers .= 'From: <ashish.preeminence@gmail.com>' . "\r\n";
         $headers .= 'Cc: ankit82rr@gmail.com' . "\r\n";
		  $chkMail =  mail($mail2,'Website Enquiry',$emsg,$headers);
		 $chkMail =  mail($mail3,'Website Enquiry',$emsg2,$headers);
		  header('location:index.php');
         if(!$chkMail){ echo "<script>alert('Enquiry, email not send')</script>"; 
       header('location:index.php');} 
	  	   }
  
?>

						</div><!-- Contact Form End -->
<!-- Google Map
						============================================= -->
						<div class="col-md-6 col-lg-6 col-sm-12">

							<section id="google-map" class="gmap" style="height: 410px;">
							
							<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1512.0858302441582!2d77.43064842833661!3d23.23282799370164!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1511553516933" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
							</section>

						
							

						</div><!-- Google Map End -->


					</div>
					</div>

				</section>

			</div>

		</section><!-- #content end -->
        
        
        
       <?php include"inc/footer.php"; ?>
			


	</div>
    </div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="js/functions.js"></script>

</body>
</html>