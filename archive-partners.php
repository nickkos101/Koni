<?php get_header(); ?>
<div class="content-wrap blog">
    <div class="blog-wrap">
        <div class="channels-module">
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
<?php include 'sidebar.php'; ?>
</div>
<?php get_footer(); ?>