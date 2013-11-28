<?php
/*
Template Name: Contact Us Page
*/
?>
<?php get_header(); ?>
<div class="content-wrap">
    <h2><?php the_title(); ?></h2>
    <div class="col">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile; endif; ?>
</div>
<div class="col">
    <h3>Leave Us a Message</h3>
    <form>
        <input placeholder="name" type="text">
        <input placeholder="email" type="text">
        <textarea placeholder="message"></textarea>
        <input type="submit">
    </form>
</div>
</div>
<?php get_footer(); ?>