<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package main-theme
 */

use App\Helper\Helper;

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="image/x-icon">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="image/x-icon">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<header id="Header" class="header">
        <?php
        $site_logo = get_field('option_header_logo', 'options');
        if ($site_logo): ?>
            <div class="logo">
                <a href="<?php echo esc_url(home_url()); ?>" rel="home">
                    <img src="<?php echo !empty($site_logo['url']) ? $site_logo['url'] : ''; ?>"
                         alt="logo img">
                </a>
            </div>
        <?php endif; ?>

        <?php wp_nav_menu([ 'theme_location'  => 'header_menu',]); ?>

	</header>
<div class="wrapper">
