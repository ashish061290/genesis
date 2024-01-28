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
	<title>Placement </title>

</head>

<body class="stretched">

		<?php include"inc/header.php";?>


<div class="center">
   <img src="images/slide5.png" width="100%" height="auto" />
</div>

	<!-- Document Wrapper
	============================================= 
	<div id="wrapper" class="clearfix">

		<div id="home" class="page-section" 
        style="position:absolute;top:0;left:0;width:100%;height:200px;z-index:-2;"></div>

		<section id="slider" class="slider-parallax full-screen with-header swiper_wrapper clearfix">

			<div class="swiper-container swiper-parent">
				<div class="swiper-wrapper">
					<div class="swiper-slide dark" style="background-image: url('images/01.jpg');">
						<div class="container clearfix">
							<div class="slider-caption slider-caption-center">
								<!--<h2 data-caption-animate="fadeInUp">Welcome to Geneses Incorporation</h2>-->
								<!--<p style="display:inline; top:300%;">Want to download our sample quotation</p>
		<a href="docx/quotation.docx" class="btn btn-danger btn-lg">Download Now</a>
							</div>
						</div>
					</div>
					<div class="swiper-slide dark" style="background-image: url('images/slider/swiper/img10.png'">
						<div class="container clearfix">
							<div class="slider-caption slider-caption-center">
								<h2 data-caption-animate="fadeInUp">Job Consultancy And Placement</h2>
								<p data-caption-animate="fadeInUp" data-caption-delay="200">Looks beautiful &amp; ultra-sharp on Retina Screen Displays. Powerful Layout with Responsive functionality that can be adapted to any screen size.</p>
							</div>
						</div>
						
					</div>
					<div class="swiper-slide dark" style="background-image: url('images/slider/swiper/img12.png'); background-position: center top;">
						<div class="container clearfix">
							<div class="slider-caption slider-caption-center">
								<h2 data-caption-animate="fadeInUp">Best Education Service</h2>
								<p data-caption-animate="fadeInUp" data-caption-delay="200">You'll be surprised to see the Final Results of your Creation &amp; would crave for more.</p>
							</div>
						</div>
					</div>
				</div>
				<div id="slider-arrow-left"><i class="icon-angle-left"></i></div>
				<div id="slider-arrow-right"><i class="icon-angle-right"></i></div>
				<div id="slide-number"><div id="slide-number-current"></div><span>/</span><div id="slide-number-total"></div></div>
			</div>

			<script>
				jQuery(document).ready(function($){
					var swiperSlider = new Swiper('.swiper-parent',{
						paginationClickable: false,
						slidesPerView: 1,
						grabCursor: true,
						
						onSwiperCreated: function(swiper){
							$('[data-caption-animate]').each(function(){
								var $toAnimateElement = $(this);
								var toAnimateDelay = $(this).attr('data-caption-delay');
								var toAnimateDelayTime = 0;
								if( toAnimateDelay ) { toAnimateDelayTime = Number( toAnimateDelay ) + 750; } else { toAnimateDelayTime = 750; }
								if( !$toAnimateElement.hasClass('animated') ) {
									$toAnimateElement.addClass('not-animated');
									var elementAnimation = $toAnimateElement.attr('data-caption-animate');
									setTimeout(function() {
										$toAnimateElement.removeClass('not-animated').addClass( elementAnimation + ' animated');
									}, toAnimateDelayTime);
								}
							});
						},
						onSlideChangeStart: function(swiper){
							$('#slide-number-current').html(swiper.activeIndex + 1);
							$('[data-caption-animate]').each(function(){
								var $toAnimateElement = $(this);
								var elementAnimation = $toAnimateElement.attr('data-caption-animate');
								$toAnimateElement.removeClass('animated').removeClass(elementAnimation).addClass('not-animated');
							});
						},
						onSlideChangeEnd: function(swiper){
							$('#slider .swiper-slide').each(function(){
								if($(this).find('video').length > 0) { $(this).find('video').get(0).pause(); }
							});
							$('#slider .swiper-slide:not(".swiper-slide-active")').each(function(){
								if($(this).find('video').length > 0) {
									if($(this).find('video').get(0).currentTime != 0 ) $(this).find('video').get(0).currentTime = 0;
								}
							});
							if( $('#slider .swiper-slide.swiper-slide-active').find('video').length > 0 ) { $('#slider .swiper-slide.swiper-slide-active').find('video').get(0).play(); }

							$('#slider .swiper-slide.swiper-slide-active [data-caption-animate]').each(function(){
								var $toAnimateElement = $(this);
								var toAnimateDelay = $(this).attr('data-caption-delay');
								var toAnimateDelayTime = 0;
								if( toAnimateDelay ) { toAnimateDelayTime = Number( toAnimateDelay ) + 300; } else { toAnimateDelayTime = 300; }
								if( !$toAnimateElement.hasClass('animated') ) {
									$toAnimateElement.addClass('not-animated');
									var elementAnimation = $toAnimateElement.attr('data-caption-animate');
									setTimeout(function() {
										$toAnimateElement.removeClass('not-animated').addClass( elementAnimation + ' animated');
									}, toAnimateDelayTime);
								}
							});
						}
					});

					$('#slider-arrow-left').on('click', function(e){
						e.preventDefault();
						swiperSlider.swipePrev();
					});

					$('#slider-arrow-right').on('click', function(e){
						e.preventDefault();
						swiperSlider.swipeNext();
					});

					$('#slide-number-current').html(swiperSlider.activeIndex + 1);
					$('#slide-number-total').html(swiperSlider.slides.length);
				});
			</script>

	  
    	</section>
     
		<!-- Content
		============================================= -->
		<section id="content">
    <br/>
    <hr/>
			<div class="content-wrap">

				<section id="section-about" class="page-section">

					<div class="container clearfix">

						<div class="heading-block center">
							<h4> are You <span>Are you unsatisfied with your present job?
Or are you a fresher wishing to explore different career options?
                            </span></h2>
                            <!--
							<span>One of the most Versatile Theme on Themeforest</span>
                           -->
						</div>
<!--
						<div class="col_one_third nobottommargin">
							<div class="feature-box media-box">
								<div class="fbox-media">
									<img src="images/services/home3.png" alt="Why choose Us?">
								</div>
								<div class="fbox-desc">
									<h3>Why choose Us.<span class="subtitle">Because we are Reliable.</span></h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi rem, facilis nobis voluptatum est voluptatem accusamus molestiae eaque perspiciatis mollitia.</p>
								</div>
							</div>
						</div>

						<div class="col_one_third nobottommargin">
							<div class="feature-box media-box">
								<div class="fbox-media">
									<img src="images/services/home7.png" alt="Why choose Us?">
								</div>
								<div class="fbox-desc">
									<h3>Our Mission.<span class="subtitle">To Redefine your Brand.</span></h3>
									<p>Quos, non, esse eligendi ab accusantium voluptatem. Maxime eligendi beatae, atque tempora ullam. Vitae delectus quia, consequuntur rerum molestias quo.</p>
								</div>
							</div>
						</div>

						<div class="col_one_third nobottommargin col_last">
							<div class="feature-box media-box">
								<div class="fbox-media">
									<img src="images/services/home9.png" alt="Why choose Us?">
								</div>
								<div class="fbox-desc">
									<h3>What we Do.<span class="subtitle">Make our Customers Happy.</span></h3>
									<p>Porro repellat vero sapiente amet vitae quibusdam necessitatibus consectetur, labore totam. Accusamus perspiciatis asperiores labore esse ab accusantium ea modi ut.</p>
								</div>
							</div>
						</div>

						<div class="clear"></div>

					</div>
-->
				
                <div class="clear"></div>
				<section id="section-services" class="page-section">

					<div class="heading-block center ">
						<h4>Find Your Dream Jobs Here<br/>We Are Offered...</h4>
						
					</div>

					<div class="container clearfix">

						<div class="col_one_third">
							<div class="feature-box fbox-center fbox-effect nobottomborder" data-animate="fadeIn">
								<div class="fbox-icon">
									<a href="#"><i class="icon-plus"></i></a>
								</div>
								<h3>Paramedical Jobs</h3>
								<!--
								<p>Powerful Layout with Responsive functionality that can be adapted to any screen size.</p>!-->
							</div>
						</div>

						<div class="col_one_third">
							<div class="feature-box fbox-center fbox-effect nobottomborder" data-animate="fadeIn" data-delay="200">
								<div class="fbox-icon">
									<a href="#"><i class="icon-home"></i></a>
								</div>
								<h3>Office Work</h3>
								<!--<p>Looks beautiful &amp; ultra-sharp on Retina Displays with Retina Icons, Fonts &amp;
								Images.</p>-->
							</div>
						</div>

						<div class="col_one_third col_last">
							<div class="feature-box fbox-center fbox-effect nobottomborder" data-animate="fadeIn" data-delay="400">
								<div class="fbox-icon">
									<a href="#"><i class="icon-user"></i></a>
								</div>
								<h3>Bank Jobs</h3>
							
							</div>
						</div>

						<div class="clear"></div>

						<div class="col_one_third">
							<div class="feature-box fbox-center fbox-effect nobottomborder" data-animate="fadeIn" data-delay="600">
								<div class="fbox-icon">
									<a href="#"><i class="icon-book"></i></a>
								</div>
								<h3>Marketing Jobs</h3>
								
							</div>
						</div>

						<div class="col_one_third">
							<div class="feature-box fbox-center fbox-effect nobottomborder" data-animate="fadeIn" data-delay="800">
								<div class="fbox-icon">
									<a href="#"><i class="icon-group"></i></a>
								</div>
								<h3>Insurance Jobs</h3>
								
							</div>
						</div>

						<div class="col_one_third col_last">
							<div class="feature-box fbox-center fbox-effect nobottomborder" data-animate="fadeIn" data-delay="1000">
								<div class="fbox-icon">
									<a href="#"><i class="icon-note"></i></a>
								</div>
								<h3>Customer Service</h3>
								
							</div>
						</div>

						<div class="clear"></div>
                      
						<!-- Contact Form
						============================================= 
						<div class="col_half">

							<div class="fancy-title title-dotted-border">
								<h3>Send us an Email</h3>
							</div>

							<div id="contact-form-result" data-notify-type="success" data-notify-msg="<i class=icon-ok-sign></i> Message Sent Successfully!"></div>

							<form class="nobottommargin" id="template-contactform" name="template-contactform" action="inc/sendemail.php" method="post">

							<div class="form-process"></div>

							<div class="col_one_third">
								<label for="template-contactform-name">Name <small>*</small></label>
								<input type="text" id="template-contactform-name" name="template-contactform-name" value="" class="sm-form-control required" />
							</div>

							<div class="col_one_third">
								<label for="template-contactform-email">Email <small>*</small></label>
								<input type="email" id="template-contactform-email" name="template-contactform-email" value="" class="required email sm-form-control" />
							</div>

							<div class="col_one_third col_last">
								<label for="template-contactform-phone">Phone</label>
								<input type="text" id="template-contactform-phone" name="template-contactform-phone" value="" class="sm-form-control" />
							</div>

							<div class="clear"></div>

							<div class="col_two_third">
								<label for="template-contactform-subject">Subject <small>*</small></label>
								<input type="text" id="template-contactform-subject" name="template-contactform-subject" value="" class="required sm-form-control" />
							</div>

							<div class="col_one_third col_last">
								<label for="template-contactform-service">Services</label>
								<select id="template-contactform-service" name="template-contactform-service" class="sm-form-control">
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
								<textarea class="required sm-form-control" id="template-contactform-message" name="template-contactform-message" rows="6" cols="30"></textarea>
							</div>

							<div class="col_full hidden">
								<input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control" />
							</div>

							<div class="col_full">
								<button class="button button-3d nomargin" type="submit" id="template-contactform-submit" name="template-contactform-submit" value="submit">Send Message</button>
							</div>

						</form>

						<script type="text/javascript">

							$("#template-contactform").validate({
								submitHandler: function(form) {
									$('.form-process').fadeIn();
									$(form).ajaxSubmit({
										target: '#contact-form-result',
										success: function() {
											$('.form-process').fadeOut();
											$('#template-contactform').find('.sm-form-control').val('');
											$('#contact-form-result').attr('data-notify-msg', $('#contact-form-result').html()).html('');
											SEMICOLON.widget.notifications($('#contact-form-result'));
										}
									});
								}
							});

						</script>

						</div><!-- Contact Form End -->

						<!-- Google Map
						============================================= 
						<div class="col_half col_last">

							<section id="google-map" class="gmap" style="height: 410px;"></section>

							<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
							<script type="text/javascript" src="js/jquery.gmap.js"></script>

							<script type="text/javascript">

								jQuery('#google-map').gMap({

									address: 'Bhopal, India',
									maptype: 'ROADMAP',
									zoom: 14,
									markers: [
										{
											address: "Bhopal, India",
											html: '<div style="width: 300px;"><h4 style="margin-bottom: 8px;">Hi, we\'re <span>Envato</span></h4><p class="nobottommargin">Our mission is to help people to <strong>earn</strong> and to <strong>learn</strong> online. We operate <strong>marketplaces</strong> where hundreds of thousands of people buy and sell digital goods every day, and a network of educational blogs where millions learn <strong>creative skills</strong>.</p></div>',
											icon: {
												image: "images/icons/map-icon-red.png",
												iconsize: [32, 39],
												iconanchor: [32,39]
											}
										}
									],
									doubleclickzoom: false,
									controls: {
										panControl: true,
										zoomControl: true,
										mapTypeControl: true,
										scaleControl: false,
										streetViewControl: false,
										overviewMapControl: false
									}

								});

							</script>

						</div><!-- Google Map End -->


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