<?php
get_header();
?>

<section class="not-found">
    <div class="section-holder">
        <h2>
            <?php echo __("We couldn't find page you're looking for", 'ssw-wp-theme'); ?>
        </h2>
        <div class="btn-holder">
            <a class="main-btn" href="<?php echo home_url(); ?>" title="<?php echo __('404', 'ssw-wp-theme'); ?>"><?php echo __('Go home', 'ssw-wp-theme'); ?></a>
        </div>
    </div>
</section>

<?php
get_footer();
