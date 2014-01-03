<?php get_header(); ?>
<div class="featured-banner-module">
    <div class="banner">
        <img src="<?php echo get_template_directory_uri(); ?>/images/content-images/banner.jpg">
    </div>
</div>
<div class="content-wrap">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="channel-video">
            <iframe width="100%" height="315" src="//www.youtube.com/embed/<?php autoc_get_postdata('videolink'); ?>" frameborder="0" allowfullscreen></iframe>
        </div>
    <?php endwhile; endif; ?>
    <div class="channels-module">
        <ul>
            <li>
                <?php autoc_get_img('partnerimage') ?>
                <p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
            </li>
             <li>
                <?php autoc_get_img('partnerimage') ?>
                <p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
            </li>
             <li>
                <?php autoc_get_img('partnerimage') ?>
                <p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
            </li>
             <li>
                <?php autoc_get_img('partnerimage') ?>
                <p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
            </li>
             <li>
                <?php autoc_get_img('partnerimage') ?>
                <p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
            </li>
        </ul>
    </div>
    <div class="channels-module">
        <h5>Partners</h5>
        <ul>
            <?php
            $sliderPosts = new WP_Query();
            $sliderPosts->query(array('post_type' => 'partners'));
            while ($sliderPosts->have_posts()) : $sliderPosts->the_post();
            ?>
            <li>
                <?php autoc_get_img('partnerimage') ?>
                <p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
            </li>
        <?php endwhile; ?>
    </ul>
</div>
</div>
<?php get_footer(); ?>