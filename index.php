<!DOCTYPE html>
<html lang="en">
	
	<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Surekha Bhugeloo</title>
		
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Personal website and educational resource" />
	<meta name="keywords" content="html5, bootstrap, html5, css3, business, finance, youtube, responsive" />
	<meta name="author" content="Surekha Bhugeloo" />

  <!-- 
	//////////////////////////////////////////////////////

		 		
	Email: 			surekhabhugeloo@gmail.com
	Twitter: 		https://twitter.com/SurekhaB_
	Instagram: 		https://instagram.com/surekha_bhugeloo/

	//////////////////////////////////////////////////////
	 -->

  	<!-- Instagram and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content="https://instagram.com/surekha_bhugeloo/"/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="https://twitter.com/SurekhaB_" />
	<meta name="twitter:card" content="" />

	
	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<!-- <link href='https://fonts.googleapis.com/css?family=Roboto/:400,100,300,700' rel='stylesheet' type='text/css'> -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
		
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<link rel="stylesheet" href="css/style.css">


	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
	<header>
		
<?php
// use this instagram access token generator http://instagram.pixelunion.net/
$access_token="1425223806.1677ed0.2aea26d4c6c74e119de8c59aed5c05e6";
$photo_count=3;
     
$json_link="https://www.instagram.com/surekha_bhugeloo/";
$json_link.="access_token={$access_token}&count={$photo_count}";
?>
		
	$json = file_get_contents($json_link);
$obj = json_decode($json, true, 512, JSON_BIGINT_AS_STRING);

		
		<div class="container text-center">
			<div class="fh5co-navbar-brand">
				<a class="fh5co-logo" href="index.html">Surekha Bhugeloo</a>
			</div>
			<nav id="fh5co-main-nav" role="navigation">
				<ul>
					<li><a href="index.html" class="active">Home</a></li>
					<li><a href="projects.html">Projects</a></li>
					<li><a href="https://goo.gl/eEDSCN" target="_blank">YouTube</a></li>
					<li><a href="resume.html">Resume</a></li>
					<li><a href="contact.html">Contact</a></li>
				</ul>
			</nav>
		</div>
	</header>
	
		

	<div id="fh5co-intro-section">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<h3>Who am I? </h3> </br>
					<p>I'm currently completing my Bachelor of Business Science degree in Finance (Honours), Accounting and Economics at the University of Cape Town (UCT). 
					   This website serves as a platform to collectivise and showcase the creative and technical work that I have done. Watch this space...</p>
				</div>
			</div>
		</div>
	</div><!-- end fh5co-intro-section -->
	
	<div id="fh5co-common-section">
		<div class="container">
			<div class="heading-section text-center">
				<h2> </h2>
				<img class="img-center" src="images/Portrait.jpg" alt="Portrait">
			</div>
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="col-md-6 col-sm-6 services-num services-num-text-left">
						<span class="number-holder"> </span>
						<div class="desc">
							<h3>These are but a few of my favourite things...</h3>
						<p><small>I'm interested in the makings of successful orgnizations and societies - problem solving and solutionist thinking. I also enjoy learning and sharing information that is pivotal to personal growth.
							</small></p>
						</div>
						
					</div>
					<div class="col-md-6 col-sm-6 services-num">
						<span class="number-holder"> </span>
						<div class="desc">
							<h3>Interested? Let's create value together</h3>
							<p><small>If you would like to collaborate, please feel free to <a href="http://surekhabhugeloo.com/contact.html" target="_blank">contact</a> me.</
								</small></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div><!-- end fh5co-common-section -->
	
	<div class="fh5co-parallax" style="background-image: url(images/library.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
					<div class="fh5co-intro fh5co-table-cell">
						<h1 class="text-center">My Personal Library</h1> </br>
						<p> View what I am <a href="https://www.goodreads.com/review/list/63119862-surekha?shelf=currently-reading" target="_blank"> currently reading. </a> </br></br>
				                  My <a href= "https://www.goodreads.com/user/show/63119862-surekha-bhugeloo" target="_blank"> Goodreads profile. </a> </p>  
						
					</div>
				</div>
			</div>
		</div>
	</div><!-- end: fh5co-parallax -->

	<div id="fh5co-services-section">
		<div class="container">
			<div class="heading-section text-center">
				<h2>My Content</h2>
			</div>
			
			<div class="row">
				<div class="col-md-4 col-sm-6">
					<div class="fh5co-services-right">
						<div class="fh5co-table2 text-center">
							<div class="fh5co-table-cell2">
								<i class="fa fa-briefcase"></i>
							</div>
						</div>
						<div class="holder-section">
							<h3>Services</h3>
							<p>Coming soon!</p>
						</div>
					</div>
					
					<div class="fh5co-services-right">
						<div class="fh5co-table2 fh5co-table2-color-2 text-center">
							<div class="fh5co-table-cell2">
								<i class="fa fa-medium"></i>
							</div>
						</div>
						<div class="holder-section">
							<h3><a href="https://medium.com/@surekhabhugeloo" target="_blank">Medium Publications</a></h3>
							<p>Share in the discussions that move me 💬</p>
						</div>
					</div>
					
					<div class="fh5co-services-right">
						<div class="fh5co-table2 fh5co-table2-color-3 text-center">
							<div class="fh5co-table-cell2">
								<i class="fa fa-youtube"></i>
							</div>
						</div>
						<div class="holder-section">
							<h3><a href="https://goo.gl/eEDSCN" target="_blank">YouTube</a></h3>
							<p>Learn something new 💡</p>
						</div>
					</div>
				</div>

				<div class="col-md-4 text-center">
					<div class="fhco-hero2">
						<img class="img-responsive" src="images/descriptive.jpg" alt="Self-driven. Creative. Life-long learner">
					</div>
				</div>

				<div class="col-md-4 col-sm-6">
					<div class="fh5co-services">
						<div class="fh5co-table2 fh5co-table2-color-4 text-center">
							<div class="fh5co-table-cell2">
								<i class="fa fa-linkedin"></i>
							</div>
						</div>
						<div class="holder-section">
							<h3><a href="https://www.linkedin.com/in/surekhabhugeloo/" target="_blank"> LinkedIn </a></h3>
							<p>Let's grab a cup of tea and network ☕</p>
						</div>
					</div>
					
					<div class="fh5co-services">
						<div class="fh5co-table2 fh5co-table2-color-5 text-center">
							<div class="fh5co-table-cell2">
								<i class="fa fa-twitter"></i>
							</div>
						</div>
						<div class="holder-section">
							<h3><a href="https://twitter.com/SurekhaB_" target="_blank"> Twitter </a></h3>
							<p>Tweet me your thoughts 🐤</p>
						</div>
					</div>
					
					<div class="fh5co-services">
						<div class="fh5co-table2 fh5co-table2-color-6 text-center">
							<div class="fh5co-table-cell2">
								<i class="fa fa-instagram"></i>
							</div>
						</div>
						<div class="holder-section">
							<h3><a href="https://www.instagram.com/surekha_bhugeloo/" target="_blank"> Instagram </a></h3>
							<p>Follow my adventures 📸</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div><!-- end: fh5co-services-section -->

	<div id="fh5co-featured-work-section">
		<div class="container-fluid">
			<div class="heading-section text-center">
				<h2>Latest IG Posts</h2>
			</div>
			
			foreach ($obj['data'] as $post) {
     
    $pic_text=$post['caption']['text'];
    $pic_link=$post['link'];
    $pic_like_count=$post['likes']['count'];
    $pic_comment_count=$post['comments']['count'];
    $pic_src=str_replace("http://", "https://", $post['images']['standard_resolution']['url']);
    $pic_created_time=date("F j, Y", $post['caption']['created_time']);
    $pic_created_time=date("F j, Y", strtotime($pic_created_time . " +1 days"));
     
    echo "<div class='col-md-4 col-sm-6 col-xs-12 item_box'>";        
        echo "<a href='{$pic_link}' target='_blank'>";
            echo "<img class='img-responsive photo-thumb' src='{$pic_src}' alt='{$pic_text}'>";
        echo "</a>";
        echo "<p>";
            echo "<p>";
                echo "<div style='color:#888;'>";
                    echo "<a href='{$pic_link}' target='_blank'>{$pic_created_time}</a>";
                echo "</div>";
            echo "</p>";
            echo "<p>{$pic_text}</p>";
        echo "</p>";
    echo "</div>";
}
				
		</div>
	</div><!-- end fh5co-featured-work-section -->

	<div id="fh5co-blog-section">
		<div class="container">
			<div class="heading-section text-center">
				<h2>Recent Medium Posts</h2>
			</div>
			<div class="row">
				<div class="col-md-4 blog-section">
					<span>05 <small>July 2018</small></span>
					<h3><a href="#"> Post coming soon </a></h3>
					<p> </p>
					<a class="btn btn-primary" href="#">Read More</a>
				</div>
				<div class="col-md-4 blog-section">
					<span>25 <small>June 2018</small></span>
					<h3><a href="https://medium.com/@surekhabhugeloo/know-your-worth-8bd8a9ff880f" target="_blank">Know your worth </a></h3>
					<p>A phrase that always resonated with me... </p>
					<a class="btn btn-primary" href="https://medium.com/@surekhabhugeloo/know-your-worth-8bd8a9ff880f" target="_blank">Read More</a>
				</div>
				<div class="col-md-4 blog-section">
					<span>19 <small>June 2018</small></span>
					<h3><a href="https://medium.com/@surekhabhugeloo/the-true-meaning-of-self-care-1329b1636b89" target="_blank">The true meaning of Self-Care</a></h3>
					<p>Self-care has become a bit of a buzz word in recent times due to...</p>
					<a class="btn btn-primary" href="https://medium.com/@surekhabhugeloo/the-true-meaning-of-self-care-1329b1636b89" target="_blank">Read More</a>
				</div>
			</div>
		</div>
	</div><!-- end: fh5co-blog-section -->

	<div class="fh5co-parallax" style="background-image: url(images/nightsky.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
					<div class="fh5co-intro fh5co-table-cell">
						<h1 class="text-center">Phrase I'm currently resonating with:</h1> </br>
						<p font="14"> "Energy and persistence conquer all things." - Benjamin Franklin </p>
					</div>
				</div>
			</div>
		</div>
	</div><!-- end: fh5co-parallax -->

	<footer>
		<div id="footer" class="fh5co-border-line">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center">
						<p><small>&copy; 2018 Surekha Bhugeloo. All Rights Reserved.<br>Made with <a href="https://freehtml5.co/" target="_blank">Freehtml5.co</a> </small></p>
						<p><small>I'm hosted with GitHub Pages.</small></p>
						
	                                        <p class="fh5co-social-icons">
							<a href="https://twitter.com/SurekhaB_" target="_blank"><i class="fa fa-twitter"></i></a>
							<a href="https://instagram.com/surekha_bhugeloo/" target="_blank"><i class="fa fa-instagram"></i></a>
						        <a href="https://www.linkedin.com/in/surekhabhugeloo/" target="_blank"><i class="fa fa-linkedin"></i></a>	
						</p>
					</div>
				</div>
			</div>
		</div>
	</footer>

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Owl carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Stellar -->
	<script src="js/jquery.stellar.min.js"></script>

	<!-- Main JS (Do not remove) -->
	<script src="js/main.js"></script>

	</body>
</html>

