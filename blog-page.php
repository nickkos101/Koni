<?php
/*
Template Name: Blog Page
*/
?>
<?php get_header(); ?>
<div class="content-wrap blog">
	<div class="blog-wrap">
		<?php
		$sliderPosts = new WP_Query();
		$sliderPosts->query(array('post_type' => 'post'));
		while ($sliderPosts->have_posts()) : $sliderPosts->the_post();
		?>
		<div class="blog-post">
			<h2><?php the_title(); ?></h2>
			<div class="blog-post-wrap">
				<?php the_content(); ?>
				<div class="meta-bar">
					<p class="share-this">Share This:</p>
					<ul class="socialmedia">
						<li><img src="<?php echo get_template_directory_uri(); ?>/images/facebook.png"></li>
						<li><img src="<?php echo get_template_directory_uri(); ?>/images/linkedin.png"></li>
						<li><img src="<?php echo get_template_directory_uri(); ?>/images/pinterest.png"></li>
						<li><img src="<?php echo get_template_directory_uri(); ?>/images/twitter.png"></li>
						<li><img src="<?php echo get_template_directory_uri(); ?>/images/instagram.png"></li>
						<li><img src="<?php echo get_template_directory_uri(); ?>/images/blogger.png"></li>
					</ul>
					<div class="read-more">
						<a href="<?php the_permalink(); ?>">Read More</a>
					</div>
				</div>
			</div>
		</div>
	<?php endwhile; ?>
</div>
<?php include 'sidebar.php'; ?>
</div>
<?php get_footer(); ?>