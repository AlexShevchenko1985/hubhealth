<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package aitech
 */

get_header();
?>

<?php if (have_posts()): ?>
    <?php while (have_posts()):
        the_post();
        the_content();

        //code here

    endwhile; ?>
<?php endif; ?>

<?php
get_footer();
