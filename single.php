<?php get_header(); ?>
<div class="content-wrap blog">
	<div class="blog-wrap">
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
						<?php comments_number( '0 comments', '1 comment', '% comments' ); ?>.
					</div>
				</div>
				<?php comments_template(); ?>
			</div>
		</div>
	<?php endwhile; endif; ?>
</div>
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>