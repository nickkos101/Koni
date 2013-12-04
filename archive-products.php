<?php get_header(); ?>
<div class="content-wrap">
	<div class="page-wrap fullwidth">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="product">
			<h2><?php the_title(); ?></h2>
			<div class="whitespace">
				<?php 
				if ( has_post_thumbnail() ) {
					the_post_thumbnail();
				}  
				?>
				<div class="product-info">
					<?php the_excerpt(); ?>
				</div>
				<a href="<?php the_permalink(); ?>"><button>Find out More</button></a>
			</div>
		</div>
	<?php endwhile; endif; ?>
</div>
</div>
<?php get_footer(); ?>