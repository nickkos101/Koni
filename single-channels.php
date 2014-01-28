<?php get_header(); ?>
<div class="featured-banner-module">
    <div class="banner">
        <img src="<?php echo get_template_directory_uri(); ?>/images/content-images/banner.jpg">
    </div>
</div>
<div class="content-wrap">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <h2><?php the_title(); ?></h2>
    <div class="channel-video">
        <iframe width="100%" height="315" src="//www.youtube.com/embed/<?php autoc_get_postdata('videolink'); ?>" frameborder="0" allowfullscreen></iframe>
        <?php the_content(); ?>
    </div>
<?php endwhile; endif; ?>
<div class="channels-module">
    <ul>
        <li>
            <img vid="//www.youtube.com/embed/<?php echo autoc_get_postdata('relatedvideoid1'); ?>" src="http://img.youtube.com/vi/<?php echo autoc_get_postdata('relatedvideoid1'); ?>/1.jpg">
            <p><?php echo autoc_get_postdata('relatedvideoname1'); ?></p>
        </li>
         <li>
            <img vid="//www.youtube.com/embed/<?php echo autoc_get_postdata('relatedvideoid2'); ?>" src="http://img.youtube.com/vi/<?php echo autoc_get_postdata('relatedvideoid2'); ?>/1.jpg">
            <p><a href="<?php the_permalink(); ?>"><?php echo autoc_get_postdata('relatedvideoname2'); ?></a></p>
        </li>
         <li>
            <img vid="//www.youtube.com/embed/<?php echo autoc_get_postdata('relatedvideoid3'); ?>" src="http://img.youtube.com/vi/<?php echo autoc_get_postdata('relatedvideoid3'); ?>/1.jpg">
            <p><a href="<?php the_permalink(); ?>"><?php echo autoc_get_postdata('relatedvideoname3'); ?></a></p>
        </li>
         <li>
            <img vid="//www.youtube.com/embed/<?php echo autoc_get_postdata('relatedvideoid4'); ?>" src="http://img.youtube.com/vi/<?php echo autoc_get_postdata('relatedvideoid4'); ?>/1.jpg">
            <p><a href="<?php the_permalink(); ?>"><?php echo autoc_get_postdata('relatedvideoname4'); ?></a></p>
        </li>
         <li>
            <img vid="//www.youtube.com/embed/<?php echo autoc_get_postdata('relatedvideoid5'); ?>" src="http://img.youtube.com/vi/<?php echo autoc_get_postdata('relatedvideoid5'); ?>/1.jpg">
            <p><a href="<?php the_permalink(); ?>"><?php echo autoc_get_postdata('relatedvideoname5'); ?></a></p>
        </li>
    </ul>
</div>
<div class="channels-module">
    <h4>Channels</h4>
    <ul>
        <?php
        $sliderPosts = new WP_Query();
        $sliderPosts->query(array('post_type' => 'channels'));
        while ($sliderPosts->have_posts()) : $sliderPosts->the_post();
        ?>
        <li>
            <?php autoc_get_img('channelimage') ?>
            <p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
        </li>
    <?php endwhile; ?>
</ul>
</div>
</div>
<?php get_footer(); ?>