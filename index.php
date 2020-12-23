<?php
		use PHPMailer\PHPMailer\PHPMailer;
		use PHPMailer\PHPMailer\Exception;

		require 'Exception.php';		
		require 'PHPMailer.php';
		require 'vendor/autoload.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Shiksha Ek Abhiyaan Trust</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
<!-- gallery -->
<link href="css/lsb.css" rel="stylesheet" type="text/css">
<!-- //gallery -->
<!-- font-awesome-icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome-icons -->
<link href="//fonts.googleapis.com/css?family=Prompt:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext,thai,vietnamese" rel="stylesheet"></head>
<?php
ob_start(); //Turns on output buffering 
session_start();

$timezone = date_default_timezone_set("Asia/Kolkata");

$con = mysqli_connect("localhost", "root", "", "shiksha"); //Connection variable

if(mysqli_connect_errno()) 
{
	echo "Failed to connect: " . mysqli_connect_errno();
}

?>
<body>
<!-- banner -->
	<div class="banner">
		<nav class="navbar navbar-default">
			<div class="navbar-header navbar-left">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<h1><a class="navbar-brand" href="index.html"><span>S</span>hiksha Ek Abhiyaan Trust</a></h1>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
				<nav class="link-effect-2" id="link-effect-2">
					<ul class="nav navbar-nav">
						<li><a href="index.html"><span data-hover="Home">Home</span></a></li>
						<li><a href="vision.html"><span data-hover="Vision">Vision</span></a></li>
						<li><a href="about.html"><span data-hover="About">About</span></a></li>
						<li><a href="gallery.html"><span data-hover="Gallery">Gallery</span></a></li>
						<li><a href="contact.html"><span data-hover="Contact Us">Contact Us</span></a></li>
					</ul>
				</nav>
			</div>
			
		</nav>
		<div class="container">
			<div class="agile_banner_info">
				<div class="agile_banner_info1">
					<h3>Education at its <span>best</span></h3>
					<div id="typed-strings" class="agileits_w3layouts_strings">
						<p>Shiksha <i>EK Abhiyaan</i></p>
						<p>Padhega India, Tabhi to badhega <i>India</i></p>
					</div>
					<span id="typed" style="white-space:pre;"></span>
				</div>
			</div>
			
			<div class="w3_agile_social_icons">
				<ul class="agileinfo_social_icons">
					<li><a href="https://www.facebook.com/shikshaekabhiyaan" class="w3_agileits_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<!-- Add for twitter page -->
					<!-- <li><a href="#" class="wthree_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li> -->
				</ul>
			</div>
			<div class="w3_banner_color">
				<span></span>
			</div>
			<div class="w3_scroll_arrow">
			  <a href="#team" class="scroll scroll-down"><span class="dot"> </span></a>
			</div>
		</div>
	</div>
<!-- //banner -->	
<!-- banner-bottom -->	
	<div class="banner-bottom">
		<div class="container">
			<div class="col-md-6 w3ls_banner_bottom_left">
				<div class="w3ls_banner_bottom_left1">
					<p>01</p>
					<span class="glyphicon glyphicon-arrow-down" aria-hidden="true"></span>
				</div>
				<div class="w3ls_banner_bottom_right1">
					<h2>the whole purpose of <span>education</span> is to turn mirrors into windows</h2>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="col-md-6 w3ls_banner_bottom_right">
				<section class="slider">
					<div class="flexslider">
						<ul class="slides">
							<li>	
								<div class="agileits_w3layouts_banner_bottom_grid">
									<img src="images/1.jpg" alt=" " class="img-responsive" />
								</div>
							</li>
							<li>	
								<div class="agileits_w3layouts_banner_bottom_grid">
									<img src="images/2.jpg" alt=" " class="img-responsive" />
								</div>
							</li>
							<li>	
								<div class="agileits_w3layouts_banner_bottom_grid">
									<img src="images/3.jpg" alt=" " class="img-responsive" />
								</div>
							</li>
						</ul>
					</div>
				</section>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //banner-bottom -->	
<!-- bootstrap-pop-up -->
	<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					Edifying
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<img src="images/10.jpg" alt=" " class="img-responsive" />
						<p>Ut enim ad minima veniam, quis nostrum 
							exercitationem ullam corporis suscipit laboriosam, 
							nisi ut aliquid ex ea commodi consequatur? Quis autem 
							vel eum iure reprehenderit qui in ea voluptate velit 
							esse quam nihil molestiae consequatur, vel illum qui 
							dolorem eum fugiat quo voluptas nulla pariatur.
							<i>" Quis autem vel eum iure reprehenderit qui in ea voluptate velit 
								esse quam nihil molestiae consequatur.</i></p>
					</div>
				</section>
			</div>
		</div>
	</div>
<!-- //bootstrap-pop-up -->
<!-- register -->

	<?php

		if(isset($_POST['send'])){
			$fname = strip_tags($_POST['fname']); //Remove html tags
			$fname = str_replace(' ', '', $fname); //remove spaces
			$fname = ucfirst(strtolower($fname)); //Uppercase first letter

			//Last name
			$lname = strip_tags($_POST['lname']); //Remove html tags
			$lname = str_replace(' ', '', $lname); //remove spaces
			$lname = ucfirst(strtolower($lname)); //Uppercase first letter

			//email
			$em = strip_tags($_POST['email']); //Remove html tags
			$em = str_replace(' ', '', $em); //remove spaces

			//Contact Number
			$cno = strip_tags($_POST['cno']); //Remove html tags


			$query = mysqli_query($con, "INSERT INTO user VALUES ('$fname', '$lname', '$em', '$cno')");


			$mail = new PHPMailer(true); 
  
		try { 
		    $mail->SMTPDebug = 2;                                        
		    $mail->isSMTP();                                             
		    $mail->Host       = 'smtp.gmail.com;';                     
		    $mail->SMTPAuth   = true;                              
		    $mail->Username   = 'shikshaekabhiyaantrust@gmail.com';                  
		    $mail->Password   = 'sahilsahil';                         
		    $mail->SMTPSecure = 'tls';                               
		    $mail->Port       = 25;   

		    $mail->setFrom('shikshaekabhiyaantrust@gmail.com', 'Shiksha Ek Abhiyaan');
			$mail->addAddress('tarun.bhati11111@gmail.com', 'Tarun Bhati');
		       
		    $mail->isHTML(true);                                   
		    $mail->Subject = 'Subject'; 
		    $mail->Body    = 'HTML message body in <b>bold</b> '; 
		    $mail->AltBody = 'Body in plain text for non-HTML mail clients'; 
		    $mail->send(); 
		    echo "Mail has been sent successfully!"; 
		} catch (Exception $e) { 
		    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}"; 
		} 

	}
 



	?>
	<div class="register">
		<div class="container">
			<div class="col-md-6 w3layouts_register_right">
				<form action="index.php" method="post">	
					<input name="fname" placeholder="First Name" type="text" required="">
					<input name="lname" placeholder="Last Name" type="text" required="">
					<input name="email" placeholder="Email" type="email" required="">
					<input name="cno" placeholder="Contact" type="text" required="">
					<input name = "send" type="submit" value="Send">
				</form>
			</div>
			<div class="col-md-6 w3layouts_register_left">
				<h3><span>Register</span> now</h3>
				
		}


				<p>If you want to sponsor one or many students and deposit their fees in school, Register and We will Contact You Shortly!!</p>";

			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //register -->
<!-- gallery-top -->
	<div class="gallery-top">
		<div class="agileinfo_gallery_top">
			<h3><span>Education</span> is the most powerful weapon which you can use to change 
				the world</h3>
		</div>
	</div>
<!-- //gallery-top -->
<!-- gallery -->
	<div class="gallery">
		<ul id="flexiselDemo1">	
			<li>
				<div class="wthree_gallery_grid">
					<a href="images/8.jpg" class="lsb-preview" data-lsb-group="header">
						<div class="view second-effect">
							<img src="images/8.jpg" alt="" class="img-responsive" />
							<div class="mask">
								<p>Edifying</p>
							</div>
						</div>	
					</a>
				</div>
			</li>
			<li>
				<div class="wthree_gallery_grid">
					<a href="images/9.jpg" class="lsb-preview" data-lsb-group="header">
						<div class="view second-effect">
							<img src="images/9.jpg" alt="" class="img-responsive" />
							<div class="mask">
								<p>Edifying</p>
							</div>
						</div>	
					</a>
				</div>
			</li>
			<li>
				<div class="wthree_gallery_grid">
					<a href="images/10.jpg" class="lsb-preview" data-lsb-group="header">
						<div class="view second-effect">
							<img src="images/10.jpg" alt="" class="img-responsive" />
							<div class="mask">
								<p>Edifying</p>
							</div>
						</div>	
					</a>
				</div>
			</li>
			<li>
				<div class="wthree_gallery_grid">
					<a href="images/11.jpg" class="lsb-preview" data-lsb-group="header">
						<div class="view second-effect">
							<img src="images/11.jpg" alt="" class="img-responsive" />
							<div class="mask">
								<p>Edifying</p>
							</div>
						</div>	
					</a>
				</div>
			</li>
			<li>
				<div class="wthree_gallery_grid">
					<a href="images/12.jpg" class="lsb-preview" data-lsb-group="header">
						<div class="view second-effect">
							<img src="images/12.jpg" alt="" class="img-responsive" />
							<div class="mask">
								<p>Edifying</p>
							</div>
						</div>	
					</a>
				</div>
			</li>
		</ul>
	</div>
<!-- //gallery -->
<!-- testimonials -->
	<div class="testimonials">
		<div class="container">
			<div class="w3_agile_team_grid">
				<div class="w3_agile_team_grid_left">
					<p>05</p>
					<span class="glyphicon glyphicon-arrow-down" aria-hidden="true"></span>
				</div>
				<div class="w3_agile_team_grid_right">
					<h3>What Our <span>Students</span> Says</h3>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="w3ls_testimonials_grids">
				 <section class="center slider">
						<div class="agileits_testimonial_grid">
							<div class="w3l_testimonial_grid">
								<p>In eu auctor felis, id eleifend dolor. Integer bibendum dictum erat, 
									non laoreet dolor.</p>
								<h4>Rosy Crisp</h4>
								<h5>Student</h5>
								<div class="w3l_testimonial_grid_pos">
									<img src="images/1.png" alt=" " class="img-responsive" />
								</div>
							</div>
						</div>
						<div class="agileits_testimonial_grid">
							<div class="w3l_testimonial_grid">
								<p>In eu auctor felis, id eleifend dolor. Integer bibendum dictum erat, 
									non laoreet dolor.</p>
								<h4>Laura Paul</h4>
								<h5>Student</h5>
								<div class="w3l_testimonial_grid_pos">
									<img src="images/2.png" alt=" " class="img-responsive" />
								</div>
							</div>
						</div>
						<div class="agileits_testimonial_grid">
							<div class="w3l_testimonial_grid">
								<p>In eu auctor felis, id eleifend dolor. Integer bibendum dictum erat, 
									non laoreet dolor.</p>
								<h4>Roshni</h4>
								<h5>Class 5 Student</h5>
								<div class="w3l_testimonial_grid_pos">
									<img src="images/3.png" alt=" " class="img-responsive" />
								</div>
							</div>
						</div>
				</section>
			</div>
		</div>
	</div>
<!-- //testimonials -->
<!-- footer -->
	<div class="footer">
		<div class="container">
			<h2>Subscribe to our<span>updates</span></h2>
			<form action="#" method="post">
				<input type="email" name="Email" placeholder="Enter Your Email..." required="">
				<input type="submit" value="Send">
			</form>
			<div class="agile_footer_copy">
				<div class="w3agile_footer_grids">
					<div class="col-md-4 w3agile_footer_grid">
						<h3>About Us</h3>
						<p>Cause for unprivileged students</span></p>
					</div>
					<div class="col-md-4 w3agile_footer_grid">
						<h3>Contact Info</h3>
						<ul>
							<!-- <li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i> <span>Faridabad</span></li> -->
							<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:Shikksha110416@gmail.com">Shikksha110416@gmail.com</a></li>
							<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>99585 84545, 9971400500, 9811466306</li>
						</ul>
					</div>
					<div class="col-md-4 w3agile_footer_grid w3agile_footer_grid1">
						<h3>Navigation</h3>
						<ul>
							<li><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span><a href="vision.html">Vision</a></li>
							<li><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span><a href="about.html">About</a></li>
							<li><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span><a href="gallery.html">Gallery</a></li>
							<li><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span><a href="contact.html">Contact Us</a></li>
						</ul>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="w3_agileits_copy_right_social">
				<div class="col-md-6 agileits_w3layouts_copy_right">
					<p>&copy; 2016
				</div>
				<div class="col-md-6 w3_agile_copy_right">
					<ul class="agileinfo_social_icons">
						<li><a href="https://www.facebook.com/shikshaekabhiyaan" class="w3_agileits_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<!-- Add for twitter page -->
						<!-- <li><a href="#" class="wthree_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li> -->
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //footer -->
<!-- carousal -->
	<script src="js/slick.js" type="text/javascript" charset="utf-8"></script>
	<script type="text/javascript">
		$(document).on('ready', function() {
		  $(".center").slick({
			dots: true,
			infinite: true,
			centerMode: true,
			slidesToShow: 2,
			slidesToScroll: 2,
			responsive: [
				{
				  breakpoint: 768,
				  settings: {
					arrows: true,
					centerMode: false,
					slidesToShow: 2
				  }
				},
				{
				  breakpoint: 480,
				  settings: {
					arrows: true,
					centerMode: false,
					centerPadding: '40px',
					slidesToShow: 1
				  }
				}
			 ]
		  });
		});
	</script>
<!-- //carousal -->
<!-- flexisel -->
		<script type="text/javascript">
		$(window).load(function() {
			$("#flexiselDemo1").flexisel({
				visibleItems: 4,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,    		
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: { 
					portrait: { 
						changePoint:480,
						visibleItems: 1
					}, 
					landscape: { 
						changePoint:640,
						visibleItems:2
					},
					tablet: { 
						changePoint:768,
						visibleItems: 2
					}
				}
			});
			
		});
	</script>
	<script type="text/javascript" src="js/jquery.flexisel.js"></script>
<!-- //flexisel -->
<!-- gallery-pop-up -->
	<script src="js/lsb.min.js"></script>
	<script>
	$(window).load(function() {
		  $.fn.lightspeedBox();
		});
	</script>
<!-- //gallery-pop-up -->
<!-- flexSlider -->
	<script defer src="js/jquery.flexslider.js"></script>
	<script type="text/javascript">
		$(window).load(function(){
		  $('.flexslider').flexslider({
			animation: "slide",
			start: function(slider){
			  $('body').removeClass('loading');
			}
		  });
		});
	</script>
<!-- //flexSlider -->
<!-- banner-type-text -->
	<script src="js/typed.js" type="text/javascript"></script>
    <script>
		$(function(){

			$("#typed").typed({
				// strings: ["Typed.js is a <strong>jQuery</strong> plugin.", "It <em>types</em> out sentences.", "And then deletes them.", "Try it out!"],
				stringsElement: $('#typed-strings'),
				typeSpeed: 30,
				backDelay: 500,
				loop: false,
				contentType: 'html', // or text
				// defaults to false for infinite loop
				loopCount: false,
				callback: function(){ foo(); },
				resetCallback: function() { newTyped(); }
			});

			$(".reset").click(function(){
				$("#typed").typed('reset');
			});

		});

		function newTyped(){ /* A new typed object */ }

		function foo(){ console.log("Callback"); }
    </script>
<!-- //banner-type-text -->
<!-- start-smooth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smooth-scrolling -->
<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
</body>
</html>
