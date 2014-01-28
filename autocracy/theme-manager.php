<?php
/* Creates the Theme Options Page */

function main_theme_options_do_page() {
    wp_enqueue_style( 'style-name', get_template_directory_uri().'/autocracy/admin.css' );
    wp_enqueue_style( 'style-font', 'http://fonts.googleapis.com/css?family=Rokkitt' );
    ?>
    <div class="wrap">
        <?php
        screen_icon();
        echo "<h2>" . get_current_theme() . __(' Theme Manager', 'sampletheme') . "</h2>";
        ?>
        <?php if (false !== $_REQUEST['settings-updated']) : ?>
        <div class="updated fade"><p><strong><?php _e('Options saved', 'sampletheme'); ?></strong></p></div>
    <?php endif; ?>

    <form method="post" action="options.php">
        <?php
        settings_fields('main_options');
        $optionname= 'main_theme_options';
        $mainoptions = get_option($optionname);
        ?>
        <div class="module-fullwidth">
            <h2>Homepage Content</h2>
            <label>Homepage Video ID</label>
            <?php autoc_def_textfield($optionname, 'homepagevideo'); ?>
            <h3>Featured Videos</h3>
            <label>Featured Video Name</label>
            <?php autoc_def_textfield($optionname, 'featuredvideoname1'); ?>
            <label>Featured Video ID</label>
            <?php autoc_def_textfield($optionname, 'featuredvideoid1'); ?>
            <label>Featured Video Name</label>
            <?php autoc_def_textfield($optionname, 'featuredvideoname2'); ?>
            <label>Featured Video ID</label>
            <?php autoc_def_textfield($optionname, 'featuredvideoid2'); ?>
            <label>Featured Video Name</label>
            <?php autoc_def_textfield($optionname, 'featuredvideoname3'); ?>
            <label>Featured Video ID</label>
            <?php autoc_def_textfield($optionname, 'featuredvideoid3'); ?>
            <label>Featured Video Name</label>
            <?php autoc_def_textfield($optionname, 'featuredvideoname4'); ?>
            <label>Featured Video ID</label>
            <?php autoc_def_textfield($optionname, 'featuredvideoid4'); ?>
            <label>Featured Video Name</label>
            <?php autoc_def_textfield($optionname, 'featuredvideoname5'); ?>
            <label>Featured Video ID</label>
            <?php autoc_def_textfield($optionname, 'featuredvideoid5'); ?>
            <label>Featured Video Name</label>
            <?php autoc_def_textfield($optionname, 'featuredvideoname6'); ?>
            <label>Featured Video ID</label>
            <?php autoc_def_textfield($optionname, 'featuredvideoid6'); ?>
        </div>
        <h2>Contact Information</h2>
        <label>Address</label>
        <?php autoc_def_textfield($optionname, 'address'); ?>
        <label>Phone</label>
        <?php autoc_def_textfield($optionname, 'phone'); ?>
        <label>Mobile</label>
        <?php autoc_def_textfield($optionname, 'mobile'); ?>
        <label>Contact Email</label>
        <?php autoc_def_textfield($optionname, 'email'); ?>
        <p class="submit">
            <input type="submit" class="button-primary" value="<?php _e('Save Options', 'sampletheme'); ?>" />
        </p>
    </form>

</div>
<?php
}

function main_theme_options_validate($input) {
    global $select_options, $radio_options;
    // Our checkbox value is either 0 or 1
    if (!isset($input['option1']))
        $input['option1'] = null;
    $input['option1'] = ( $input['option1'] == 1 ? 1 : 0 );
    // Say our text option must be safe text with no HTML tags
    $input['sometext'] = wp_filter_nohtml_kses($input['sometext']);
    // Our select option must actually be in our array of select options
    // Say our textarea option must be safe text with the allowed tags for posts
    $input['sometextarea'] = wp_filter_post_kses($input['sometextarea']);
    return $input;
}
?>