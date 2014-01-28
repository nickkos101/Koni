<?php
/*
Template Name: Landing Page
*/
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
	<title>Koni TV</title>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/normalize.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/bbpress.css" type="text/css" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/function.js"></script>
	<?php wp_head(); ?>
</head>
<body>
	<div class="container">
		<div class="header clearfix">
			<div class="left">
				<img src="<?php echo get_template_directory_uri(); ?>/images/logo.jpg" class="logo">
				<h2>Inspire &#183; Educate &#183; Entertain</h2>
			</div>
			<div class="right">
				<ul class="socialmedia">
					<li><img src="<?php echo get_template_directory_uri(); ?>/images/facebook.png"></li>
					<li><img src="<?php echo get_template_directory_uri(); ?>/images/linkedin.png"></li>
					<li><img src="<?php echo get_template_directory_uri(); ?>/images/pinterest.png"></li>
					<li><img src="<?php echo get_template_directory_uri(); ?>/images/twitter.png"></li>
					<li><img src="<?php echo get_template_directory_uri(); ?>/images/instagram.png"></li>
					<li><img src="<?php echo get_template_directory_uri(); ?>/images/blogger.png"></li>
				</ul>
				<p class="metainfo">Info@KoniTV.tv - <span>619-804-3137</span></p>
			</div>
		</div>
		<div class="white-wrap">
			<div class="content-wrap">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="page-wrap fullwidth landing">
					<h1 class="center lp">Become a partner today</h1>
					<div class="module">
						<div style="width:35%;" class="left">
							<ul>
								<li>$50,000 value, no setup fees!</li>
								<li>Get a short video about your business.</li>
								<li>We produce a half hour TV segment to be syndicated to your own online TV station.</li>
								<li>Videos syndicated to KoniTV and associated networks.</li>
								<li>Syndicated video content related to your business.</li>
							</ul>
							<button>Join now</button>
						</div>
						<div style="width:65%;" class="right">
							<iframe style="float:right; margin-right:30px; border:none;" width="570" height="315" src="//www.youtube.com/embed/0ogSC6JKkrY?autohide=1&showinfo=0" frameborder="0" allowfullscreen></iframe>
						</div> 
					</div>
					<div class="quote">
						<h2>"KoniTV has dramatically improved my online presence." ~ Somebody</h2>
					</div>
					<div class="module">
						<div class="left" style="width:60%; margin-left:30px;">
							<h2 style="color:#9d6d4e;">More about KoniTV</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							</div>
							<div style="width:30%; margin-right:30px;" class="right spns">
								<h2 style="color:#9d6d4e;">Proud Sponsors</h2>								
								<img src="http://localhost/wp-server-nick/koni/wp-content/uploads/sites/12/2014/01/bdny.png">
								<img src="http://localhost/wp-server-nick/koni/wp-content/uploads/sites/12/2014/01/Bitac.png">
								<img src="http://localhost/wp-server-nick/koni/wp-content/uploads/sites/12/2014/01/h1.png">
								<img src="http://localhost/wp-server-nick/koni/wp-content/uploads/sites/12/2014/01/koha.png">
							</div>
						</div>
					</div>
				<?php endwhile; endif; ?>
			</div>
			<?php get_footer(); ?>