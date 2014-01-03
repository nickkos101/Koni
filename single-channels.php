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