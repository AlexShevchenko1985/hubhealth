<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package main-theme
 */

?>
</div>
<?php wp_nav_menu([ 'theme_location'  => 'footer_menu',]); ?>
</div>

<?php get_template_part('template-parts/popup'); ?>

<?php wp_footer(); ?>

</body>
</html>
