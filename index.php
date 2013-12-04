<?php get_header(); ?>
<div class="featured-banner-module">
    <div class="banner">
        <img src="<?php echo get_template_directory_uri(); ?>/images/content-images/banner.jpg">
    </div>
</div>

<div class="content-wrap">

    <div class="featured-videos-module">
        <h3>Featured Videos / LiveTV</h3>
        <ul>
            <li>
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo.jpg">
                <p>Koni Tv Insider</p>
            </li>
            <li>
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo.jpg">
                <p>Koni Tv Insider</p>
            </li>
            <li>
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo.jpg">
                <p>Koni Tv Insider</p>
            </li>
            <li>
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo.jpg">
                <p>Koni Tv Insider</p>
            </li>
            <li>
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo.jpg">
                <p>Koni Tv Insider</p>
            </li>
            <li>
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo.jpg">
                <p>Koni Tv Insider</p>
            </li>
            <li>
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo.jpg">
                <p>Koni Tv Insider</p>
            </li>
            <li>
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo.jpg">
                <p>Koni Tv Insider</p>
            </li>
        </ul>
    </div>

    <div class="main-video-module">
        <iframe width="550" height="306" src="//www.youtube.com/embed/C4JfTmhwTJw" frameborder="0" allowfullscreen></iframe>
    </div>

    <div class="sponsors-module">
        <h3>Proud Sponsors</h4>
            <ul>
                <li><img src="<?php echo get_template_directory_uri(); ?>/images/content-images/sponsor-image.jpg"></li>
                <li><img src="<?php echo get_template_directory_uri(); ?>/images/content-images/sponsor-image.jpg"></li>
                <li><img src="<?php echo get_template_directory_uri(); ?>/images/content-images/sponsor-image.jpg"></li>
            </ul>
        </div>

        <div class="channels-module">
            <h4>KoniTV Channels</h4>
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