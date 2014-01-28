<?php get_header(); ?>
<?php $mainoptions = get_option('main_theme_options'); ?>
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
               <iframe width="95" height="50" src="//www.youtube.com/embed/<?php echo $mainoptions['featuredvideoid1']; ?>?hd=1&rel=0&autohide=1&showinfo=0" frameborder="0" allowfullscreen></iframe>
               <p><?php echo $mainoptions['featuredvideoname1']; ?></p>
           </li>
           <li>
               <iframe width="95" height="50" src="//www.youtube.com/embed/<?php echo $mainoptions['featuredvideoid2']; ?>?hd=1&rel=0&autohide=1&showinfo=0" frameborder="0" allowfullscreen></iframe>
               <p><?php echo $mainoptions['featuredvideoname2']; ?></p>
           </li>
           <li>
               <iframe width="95" height="50" src="//www.youtube.com/embed/<?php echo $mainoptions['featuredvideoid3']; ?>?hd=1&rel=0&autohide=1&showinfo=0" frameborder="0" allowfullscreen></iframe>
               <p><?php echo $mainoptions['featuredvideoname3']; ?></p>
           </li>
           <li>
               <iframe width="95" height="50" src="//www.youtube.com/embed/<?php echo $mainoptions['featuredvideoid4']; ?>?hd=1&rel=0&autohide=1&showinfo=0" frameborder="0" allowfullscreen></iframe>
               <p><?php echo $mainoptions['featuredvideoname4']; ?></p>
           </li>
           <li>
               <iframe width="95" height="50" src="//www.youtube.com/embed/<?php echo $mainoptions['featuredvideoid5']; ?>?hd=1&rel=0&autohide=1&showinfo=0" frameborder="0" allowfullscreen></iframe>
               <p><?php echo $mainoptions['featuredvideoname5']; ?></p>
           </li>
           <li>
               <iframe width="95" height="50" src="//www.youtube.com/embed/<?php echo $mainoptions['featuredvideoid6']; ?>?hd=1&rel=0&autohide=1&showinfo=0" frameborder="0" allowfullscreen></iframe>
               <p><?php echo $mainoptions['featuredvideoname6']; ?></p>
           </li>
       </ul>
   </div>
   <div class="main-video-module">
    <iframe width="550" height="306" src="//www.youtube.com/embed/<?php echo $mainoptions['homepagevideo']; ?>" frameborder="0" allowfullscreen></iframe>
</div>
<div class="sponsors-module">
    <h3>Proud Sponsors</h4>
        <ul>
            <?php
            $sliderPosts = new WP_Query();
            $sliderPosts->query(array('post_type' => 'partners', 'posts_per_page' => 3));
            while ($sliderPosts->have_posts()) : $sliderPosts->the_post();
            ?>
            <li><a href="<?php the_permalink(); ?>"><?php autoc_get_img('partnerimage') ?></a></li>
        <?php endwhile; ?>
    </ul>
</div>
<div class="channels-module">
    <h4>KoniTV Channels</h4>
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