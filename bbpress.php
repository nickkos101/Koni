<?php get_header(); ?>
<div class="content-wrap">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="forum-col">
		<h2><?php the_title(); ?></h2>
		<?php the_content(); ?>
	</div>
<?php endwhile; endif; ?>
<?php include 'sidebar.php'; ?>
</div>
<?php get_footer(); ?>