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
					<div class="page-wrap fullwidth">
						<h2><?php the_title(); ?></h2>
						<?php the_content(); ?>
						<iframe width="100%" height="480" src="//www.youtube.com/embed/YYchaxR_QXE" frameborder="0" allowfullscreen></iframe>
						<div class="price-tables">
							<div class="price-table landing-table">
								<h4>Partner Package</h4>
								<div class="whitespace">
									<div class="price">
										<p class="partnership">Become a partner today!</p>
									</div>
									<p class="value">$50,000 Value</p>
									<p><strong>No Setup Fee</strong></p>
									<ul>
										<li>Get a short video about your business.</li>
										<li>We produce a half hour TV segment to be syndicated to your own online TV Station</li>
										<li>Videos syndicated to KoniTV and associated networks</li>
										<li>Syndicated video content related to your business</li>
									</ul>
									<button>Contact Today</button>
								</div>
							</div>
						</div>
						<em>Offer only valid in the greater San Diego area.</em>
					</div>
				<?php endwhile; endif; ?>
			</div>
			<?php get_footer(); ?>