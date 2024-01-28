<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="css/style.css" type="text/css" />
    <link rel="stylesheet" href="css/style2.css" type="text/css" />
	<link rel="stylesheet" href="style3.css" type="text/css" />
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

	<!-- Document Title
	============================================= -->
	<title>ContactUs</title>

</head>

<body class="stretched">

		<?php include"inc/header.php";?>

<div align="center">
<img src="images/contact-us.jpg" width="100%" height="300"/>

</div>
<!-- Contact -->
<hr/>

    
<style>

	input[type="text"],input[type="email"],textarea{width:296px; padding:5px; font-weight:bold; font-family: "Palatino Linotype"; font-size:14px;}

	input[type="submit"]{ width:100px; padding:5px; cursor:pointer; margin-left:113px;}
	strong a{ color:#E81717;}

</style>
    	
   <div class="center_content">
 <div class="col-md-12">
     <div class="col-md-5">
	<div class="home_section_left">

		<table align="left" width="100%">

			<tr>

				<td style="padding:10px 20px 42px 20px; border-radius:5px; alignment-adjust:central;">
<center>
					<h2 class="home_title" style="color:#800600">Enquiry&nbsp;Form</h2>
</center>
<center>
<form method="post">
					<input type="text" name="name" placeholder="Name" /><br />
					</center>
<center>
					<input type="email" name="email" placeholder="Email" /><br /><br />
					</center>
					<center>

					<input type="text" name="cno" placeholder="Contact No." /><br /><br />
                    </center>
					<center>

					<textarea name="msg" cols="3" rows="3" placeholder="Query" style="resize:none;"></textarea><br /><br />
					</center>
					<center>

					<input type="submit" name="submit" value="Submit" />
</center>
			</form>
            <?php
			   if(isset($_POST['submit']))
			   {
				   $name= $_POST['name'];
				   $email= $_POST['email'];
				   $cno= $_POST['cno'];
				   $msg= $_POST['msg'];
				   
				  $emsg = "
	 <html>
		<head>
		</head>
		<body>
		<center><h3>Congratulations!!!</h3></center><br>
		<p>
		Dear Ankit Mathur,
		
		Congratulation, your Service Enquiry is ".date("Y-m-d h:i:s")." Has Been Created.
        
		<br>
		<strong>Your Enquiry Detail Us :</strong>
		<br/><br/>
          <strong><h4>Name :</h4></strong>&nbsp;&nbsp;".$name."<br/><br/>
		  <strong><h4>Email :</h4></strong>&nbsp;&nbsp;".$email."<br/><br/>
		  <strong><h4>Mobile :</h4></strong>&nbsp;&nbsp;".$cno."<br/><br/>
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

				</td>

			</tr>

		</table>

  	</div>
  	</div>
  	<div class="col-md-7">

    <div class="home_section_left_new">

		<table align="left" width="100%" cellspacing="3">

			<tr>

				<td style="padding:10px 0px; border-radius:5px;">

           			<h2 class="home_title" style="color:#000000; padding:0;">Contact Us</h2>

					<p style="padding:20px 5px 10px 5px;">We will be available at the address below. Feel free to contacts us for ISO certification, ISO training, documentation and implementation using the given feedback form or visit us at the below mentioned office address or, dial the telephone nos. provided.</p>

					<p style="padding:0 5px; font-weight:bold;">Head Office</p>

					<p style="padding:10px 5px;">

						<span style="color:#E81717; font-size:16px; font-style:bold;">Geneses Incorporation</span><br />

						401,Plot No.239 Sunny Palace,
3rd Floor,<br/>Near Rajpal Honda Showroom,
Zone-1,M.P. Nagar, Bhopal<br />

						<strong>Telephone :</strong> +91 0755-4931337<br />

						<strong>Mobile :</strong> +91 99779 95823,  88399 71962<br />

						<strong>Email :</strong> 
						  <a style="color:#E81717;" href="mailto:admin@genesesinc.com" style="color:#00336a;">admin@genesesinc.com</a>,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						   <a style="color:#E81717;" href="mailto:admin@genesesinc.com" style="color:#00336a;">ankit82rr@gmail.com</a><br /><br />
                        <span style="color:#E81717; font-size:13px;">Ankit Mathur</span><br />

						Director<br />

						<strong>Mobile :</strong> +91 99779 95823<br /><br />
                        
                        <span style="color:#E81717; font-size:13px;">Arvind Rajput</span><br />

						Branch Manager(B.M.)<br />

						<strong>Mobile :</strong> +91 8234038996<br/><br/>
                        <span style="color:#E81717; font-size:13px;">Rinku Mevada</span><br />

						Relationship Manager(R.M.)<br />

						<strong>Mobile :</strong> +91 9109133374<br />

					</p>

		   		</td>

			</tr>

		   </table>

        </div>
        </div>
        </div>

        <div class="clear"></div>

     </div>
<!-- /Contact -->
<?php include"inc/footer.php" ?>
<!-- js for portfolio popup -->
<script>
						$(document).ready(function() {
						$('.popup-with-zoom-anim').magnificPopup({
							type: 'inline',
							fixedContentPos: false,
							fixedBgPos: true,
							overflowY: 'auto',
							closeBtnInside: true,
							preloader: false,
							midClick: true,
							removalDelay: 300,
							mainClass: 'my-mfp-zoom-in'
						});
																						
						});
		</script>
		<script src="js/owl.carousel.js"></script>
		<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
		<!-- /js for portfolio popup -->
		
		<!-- carousel -->
		<script>
$(document).ready(function(){
    // Activate Carousel
    $("#myCarousel").carousel({interval: 1700, pause: "hover"});
    
    // Enable Carousel Indicators
    $(".item1").click(function(){
        $("#myCarousel").carousel(0);
    });
    $(".item2").click(function(){
        $("#myCarousel").carousel(1);
    });
    $(".item3").click(function(){
        $("#myCarousel").carousel(2);
    });
    $(".item4").click(function(){
        $("#myCarousel").carousel(3);
    });
    
    // Enable Carousel Controls
    $(".left").click(function(){
        $("#myCarousel").carousel("prev");
    });
    $(".right").click(function(){
        $("#myCarousel").carousel("next");
    });
});
</script>
<!-- /carousel -->
<!-- nav sliding -->
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

  // Store hash
  var hash = this.hash;

  // Using jQuery's animate() method to add smooth page scroll
  // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
  $('html, body').animate({
    scrollTop: $(hash).offset().top
  }, 900, function(){

    // Add hash (#) to URL when done scrolling (default click behavior)
    window.location.hash = hash;
    });
  });
})
</script>		
<!-- /nav sliding -->
<!-- js for slideanim -->
<script>
$(window).scroll(function() {
  $(".slideanim").each(function(){
    var pos = $(this).offset().top;

    var winTop = $(window).scrollTop();
    if (pos < winTop + 600) {
      $(this).addClass("slide");
    }
  });
});
</script>
<!-- /js for slideanim -->
</body>

<!-- Mirrored from genesesinc.com/contact.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 23 Nov 2017 13:06:40 GMT -->
</html>