<?php get_header(); ?>
<?php
global $wp_query;
$total_results = $wp_query->found_posts;
?>
<div class="content-wrap blog">
	<div class="blog-wrap">
		<p>You Searched for <?php the_search_query(); ?>, we found <?php echo $total_results; ?> result(s).</p>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="blog-post">
			<h2><?php the_title(); ?></h2>
			<div class="blog-post-wrap">
				<iframe width="100%" height="315" src="//www.youtube.com/embed/YYchaxR_QXE" frameborder="0" allowfullscreen></iframe>
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
	<?php endwhile; endif; ?>
</div>
<?php include 'sidebar.php'; ?>
</div>
<?php get_footer(); ?>