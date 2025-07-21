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

<?php
$ticker        = get_field('ticker', 'options');
$header_button = get_field('header_button', 'options');
?>
<div id="page" class="site">
	<header id="Header" class="header">
        <div class="top-banner">
            <div class="banner-holder">
                '<?php if (!empty($ticker)): ?>
                    <div class="ticker-wrapper">
                        <div class="ticker-collection-1">
                            <?php foreach ($ticker as $item): ?>
                                <div class="item">
                                    <img src="<?php echo get_template_directory_uri() ?>/src/img/circle-icon.svg" alt="Icon">
                                    <?php echo !empty($item['title']) ? $item['title'] : ''; ?>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <div class="ticker-collection-2">
                            <?php foreach ($ticker as $item): ?>
                                <div class="item">
                                    <img src="<?php echo get_template_directory_uri() ?>/src/img/circle-icon.svg" alt="Icon">
                                    <?php echo !empty($item['title']) ? $item['title'] : ''; ?>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endif; ?>

            </div>
        </div>

        <div class="main-header-block">
            <div class="container">
                <div class="header-holder">
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

                    <div class="menu">
                        <ul>
                            <li class="has-children">
                                <a href="/" title="">All Treatments
                                    <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.3281 8.5L8.4997 11.3284L5.67127 8.5" stroke="#454545" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a>
                                <div class="submenu-block">
                                    <div class="container">
                                        <div class="submenu-holder">
                                            <ul class="submenu">
                                                <li class="submenu-l2 show-menu">
                                                    <a href="/" title="">General Health</a>
                                                    <div class="child-block-holder">
                                                        <ul class="submenu-child">
                                                            <li>
                                                                <a href="/" title="">Weight loss</a>
                                                            </li>
                                                            <li>
                                                                <a href="/" title="">Cold Sores</a>
                                                            </li>
                                                            <li>
                                                                <a href="/" title="">Reflux</a>
                                                            </li>
                                                            <li>
                                                                <a href="/" title="">Sleep</a>
                                                            </li>
                                                            <li>
                                                                <a href="/" title="">Blood Pressure</a>
                                                            </li>
                                                            <li>
                                                                <a href="/" title="">Smoking</a>
                                                            </li>
                                                            <li>
                                                                <a href="/" title="">Vaping</a>
                                                            </li>
                                                        </ul>
                                                        <div class="secondary-menu-block">
                                                            <a href="/" title="" class="general-link">All general health treatments
                                                                <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M6.00004 11.7558L16.793 11.7558L14.4649 9.4277C14.2696 9.23243 14.2696 8.91593 14.4649 8.72067C14.6601 8.5254 14.9767 8.5254 15.1719 8.72067L18.3536 11.9023C18.5488 12.0976 18.5488 12.4141 18.3536 12.6093L15.1719 15.791C14.9767 15.9862 14.6601 15.9862 14.4649 15.791C14.2696 15.5957 14.2696 15.2792 14.4649 15.0839L16.793 12.7558L6.00004 12.7558C5.7239 12.7558 5.50004 12.532 5.50004 12.2558C5.50004 11.9797 5.7239 11.7558 6.00004 11.7558Z" fill="#5D5D5D"/>
                                                                </svg>
                                                            </a>
                                                            <div class="posts">
                                                                <a href="/" title="">
                                                                    <img src="<?php echo get_template_directory_uri() ?>/src/img/post-img1.webp" alt="Image">
                                                                    <div class="label">Weight loss</div>
                                                                </a>
                                                                <a href="/" title="">
                                                                    <img src="<?php echo get_template_directory_uri() ?>/src/img/post-img2.webp" alt="Image">
                                                                    <div class="label">Sleep</div>
                                                                </a>
                                                            </div>
                                                            <ul class="secondary-menu">
                                                                <li>
                                                                    <a href="/" title="">General Telehealth</a>
                                                                </li>
                                                                <li>
                                                                    <a href="/" title="">Medical Certificates</a>
                                                                </li>
                                                                <li>
                                                                    <a href="/" title="">Prescriptions</a>
                                                                </li>
                                                                <li>
                                                                    <a href="/" title="">Hubpass</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="submenu-l2">
                                                    <a href="/" title="">Her Health</a>
                                                    <div class="child-block-holder">
                                                        <ul class="submenu-child">
                                                            <li>
                                                                <a href="/" title="">Weight loss</a>
                                                            </li>
                                                            <li>
                                                                <a href="/" title="">Contraception</a>
                                                            </li>
                                                            <li>
                                                                <a href="/" title="">UTI</a>
                                                            </li>
                                                            <li>
                                                                <a href="/" title="">Morning After Pill</a>
                                                            </li>
                                                            <li>
                                                                <a href="/" title="">Thrush</a>
                                                            </li>
                                                            <li>
                                                                <a href="/" title="">Menopause</a>
                                                            </li>
                                                            <li>
                                                                <a href="/" title="">Vaginal Ring</a>
                                                            </li>
                                                        </ul>
                                                        <div class="secondary-menu-block">
                                                            <a href="/" title="" class="general-link">All women’s health treatments
                                                                <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M6.00004 11.7558L16.793 11.7558L14.4649 9.4277C14.2696 9.23243 14.2696 8.91593 14.4649 8.72067C14.6601 8.5254 14.9767 8.5254 15.1719 8.72067L18.3536 11.9023C18.5488 12.0976 18.5488 12.4141 18.3536 12.6093L15.1719 15.791C14.9767 15.9862 14.6601 15.9862 14.4649 15.791C14.2696 15.5957 14.2696 15.2792 14.4649 15.0839L16.793 12.7558L6.00004 12.7558C5.7239 12.7558 5.50004 12.532 5.50004 12.2558C5.50004 11.9797 5.7239 11.7558 6.00004 11.7558Z" fill="#5D5D5D"/>
                                                                </svg>
                                                            </a>
                                                            <div class="posts">
                                                                <a href="/" title="">
                                                                    <img src="<?php echo get_template_directory_uri() ?>/src/img/post-img1.webp" alt="Image">
                                                                    <div class="label">Weight loss</div>
                                                                </a>
                                                                <a href="/" title="">
                                                                    <img src="<?php echo get_template_directory_uri() ?>/src/img/post-img2.webp" alt="Image">
                                                                    <div class="label">Morning After Pill</div>
                                                                </a>
                                                            </div>
                                                            <ul class="secondary-menu">
                                                                <li>
                                                                    <a href="/" title="">General Telehealth</a>
                                                                </li>
                                                                <li>
                                                                    <a href="/" title="">Medical Certificates</a>
                                                                </li>
                                                                <li>
                                                                    <a href="/" title="">Prescriptions</a>
                                                                </li>
                                                                <li>
                                                                    <a href="/" title="">Hubpass</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="submenu-l2">
                                                    <a href="/" title="">His Health</a>
                                                    <div class="child-block-holder">
                                                        <ul class="submenu-child">
                                                            <li>
                                                                <a href="/" title="">Weight loss</a>
                                                            </li>
                                                            <li>
                                                                <a href="/" title="">Men’s Hair Loss</a>
                                                            </li>
                                                            <li>
                                                                <a href="/" title="">Erectile Dysfunction</a>
                                                            </li>
                                                            <li>
                                                                <a href="/" title="">Premature Ejaculation</a>
                                                            </li>
                                                        </ul>
                                                        <div class="secondary-menu-block">
                                                            <a href="/" title="" class="general-link">All men’s health treatments
                                                                <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M6.00004 11.7558L16.793 11.7558L14.4649 9.4277C14.2696 9.23243 14.2696 8.91593 14.4649 8.72067C14.6601 8.5254 14.9767 8.5254 15.1719 8.72067L18.3536 11.9023C18.5488 12.0976 18.5488 12.4141 18.3536 12.6093L15.1719 15.791C14.9767 15.9862 14.6601 15.9862 14.4649 15.791C14.2696 15.5957 14.2696 15.2792 14.4649 15.0839L16.793 12.7558L6.00004 12.7558C5.7239 12.7558 5.50004 12.532 5.50004 12.2558C5.50004 11.9797 5.7239 11.7558 6.00004 11.7558Z" fill="#5D5D5D"/>
                                                                </svg>
                                                            </a>
                                                            <div class="posts">
                                                                <a href="/" title="">
                                                                    <img src="<?php echo get_template_directory_uri() ?>/src/img/post-img1.webp" alt="Image">
                                                                    <div class="label">Weight loss</div>
                                                                </a>
                                                                <a href="/" title="">
                                                                    <img src="<?php echo get_template_directory_uri() ?>/src/img/post-img2.webp" alt="Image">
                                                                    <div class="label">Men’s hair loss</div>
                                                                </a>
                                                            </div>
                                                            <ul class="secondary-menu">
                                                                <li>
                                                                    <a href="/" title="">General Telehealth</a>
                                                                </li>
                                                                <li>
                                                                    <a href="/" title="">Medical Certificates</a>
                                                                </li>
                                                                <li>
                                                                    <a href="/" title="">Prescriptions</a>
                                                                </li>
                                                                <li>
                                                                    <a href="/" title="">Hubpass</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="submenu-l2">
                                                    <a href="/" title="">Skincare</a>
                                                    <div class="child-block-holder">
                                                        <ul class="submenu-child">
                                                            <li>
                                                                <a href="/" title="">Acne</a>
                                                            </li>
                                                            <li>
                                                                <a href="/" title="">Eczema</a>
                                                            </li>
                                                            <li>
                                                                <a href="/" title="">Rosacea</a>
                                                            </li>
                                                            <li>
                                                                <a href="/" title="">Uneven Skin Tone</a>
                                                            </li>
                                                            <li>
                                                                <a href="/" title="">Wrinkles and Fine Lines</a>
                                                            </li>
                                                        </ul>
                                                        <div class="secondary-menu-block">
                                                            <a href="/" title="" class="general-link">All skincare treatments
                                                                <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M6.00004 11.7558L16.793 11.7558L14.4649 9.4277C14.2696 9.23243 14.2696 8.91593 14.4649 8.72067C14.6601 8.5254 14.9767 8.5254 15.1719 8.72067L18.3536 11.9023C18.5488 12.0976 18.5488 12.4141 18.3536 12.6093L15.1719 15.791C14.9767 15.9862 14.6601 15.9862 14.4649 15.791C14.2696 15.5957 14.2696 15.2792 14.4649 15.0839L16.793 12.7558L6.00004 12.7558C5.7239 12.7558 5.50004 12.532 5.50004 12.2558C5.50004 11.9797 5.7239 11.7558 6.00004 11.7558Z" fill="#5D5D5D"/>
                                                                </svg>
                                                            </a>
                                                            <div class="posts">
                                                                <a href="/" title="">
                                                                    <img src="<?php echo get_template_directory_uri() ?>/src/img/post-img1.webp" alt="Image">
                                                                    <div class="label">Acne</div>
                                                                </a>
                                                                <a href="/" title="">
                                                                    <img src="<?php echo get_template_directory_uri() ?>/src/img/post-img2.webp" alt="Image">
                                                                    <div class="label">Rosacea</div>
                                                                </a>
                                                            </div>
                                                            <ul class="secondary-menu">
                                                                <li>
                                                                    <a href="/" title="">General Telehealth</a>
                                                                </li>
                                                                <li>
                                                                    <a href="/" title="">Medical Certificates</a>
                                                                </li>
                                                                <li>
                                                                    <a href="/" title="">Prescriptions</a>
                                                                </li>
                                                                <li>
                                                                    <a href="/" title="">Hubpass</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="/" title="">Her Health</a>
                            </li>
                            <li>
                                <a href="/" title="">His Health</a>
                            </li>
                        </ul>
                    </div>

                    <?php if (!empty($header_button['title'])):
                        $url   = !empty($header_button['url'])? $header_button['url'] : '';
                        $target = !empty($header_button['target'])? '_blank' : '_self';
                        ?>
                        <a href="<?php echo $url; ?>" target="<?php echo $target; ?>" class="login-btn"><?php echo $header_button['title']; ?></a>
                    <?php endif; ?>

                    <div class="mobile-menu-btn">
                        <div class="mobile-menu-btn-holder">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mobile-menu">
            <div class="mobile-menu-holder">
                <div class="main-menu">
                    <ul>
                        <li class="has-children">
                            <a href="/" title="">General Health</a>
                            <ul>
                                <li>
                                    <a href="/" title="">Weight loss</a>
                                </li>
                                <li>
                                    <a href="/" title="">Cold Sores</a>
                                </li>
                                <li>
                                    <a href="/" title="">Reflux</a>
                                </li>
                                <li>
                                    <a href="/" title="">Sleep</a>
                                </li>
                                <li>
                                    <a href="/" title="">Blood Pressure</a>
                                </li>
                                <li>
                                    <a href="/" title="">Smoking</a>
                                </li>
                                <li>
                                    <a href="/" title="">Vaping</a>
                                </li>
                            </ul>
                            <a href="/" title="" class="general-link">All general health treatments
                                <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.00004 11.7558L16.793 11.7558L14.4649 9.4277C14.2696 9.23243 14.2696 8.91593 14.4649 8.72067C14.6601 8.5254 14.9767 8.5254 15.1719 8.72067L18.3536 11.9023C18.5488 12.0976 18.5488 12.4141 18.3536 12.6093L15.1719 15.791C14.9767 15.9862 14.6601 15.9862 14.4649 15.791C14.2696 15.5957 14.2696 15.2792 14.4649 15.0839L16.793 12.7558L6.00004 12.7558C5.7239 12.7558 5.50004 12.532 5.50004 12.2558C5.50004 11.9797 5.7239 11.7558 6.00004 11.7558Z" fill="#9C6743"/>
                                </svg>
                            </a>
                        </li>
                        <li class="has-children">
                            <a href="/" title="">Her Health</a>
                            <ul>
                                <li>
                                    <a href="/" title="">Weight loss</a>
                                </li>
                                <li>
                                    <a href="/" title="">Cold Sores</a>
                                </li>
                                <li>
                                    <a href="/" title="">Reflux</a>
                                </li>
                                <li>
                                    <a href="/" title="">Sleep</a>
                                </li>
                                <li>
                                    <a href="/" title="">Blood Pressure</a>
                                </li>
                                <li>
                                    <a href="/" title="">Smoking</a>
                                </li>
                                <li>
                                    <a href="/" title="">Vaping</a>
                                </li>
                            </ul>
                            <a href="/" title="" class="general-link">All general health treatments
                                <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.00004 11.7558L16.793 11.7558L14.4649 9.4277C14.2696 9.23243 14.2696 8.91593 14.4649 8.72067C14.6601 8.5254 14.9767 8.5254 15.1719 8.72067L18.3536 11.9023C18.5488 12.0976 18.5488 12.4141 18.3536 12.6093L15.1719 15.791C14.9767 15.9862 14.6601 15.9862 14.4649 15.791C14.2696 15.5957 14.2696 15.2792 14.4649 15.0839L16.793 12.7558L6.00004 12.7558C5.7239 12.7558 5.50004 12.532 5.50004 12.2558C5.50004 11.9797 5.7239 11.7558 6.00004 11.7558Z" fill="#9C6743"/>
                                </svg>
                            </a>
                        </li>
                        <li class="has-children">
                            <a href="/" title="">His Health</a>
                            <ul>
                                <li>
                                    <a href="/" title="">Weight loss</a>
                                </li>
                                <li>
                                    <a href="/" title="">Cold Sores</a>
                                </li>
                                <li>
                                    <a href="/" title="">Reflux</a>
                                </li>
                                <li>
                                    <a href="/" title="">Sleep</a>
                                </li>
                                <li>
                                    <a href="/" title="">Blood Pressure</a>
                                </li>
                                <li>
                                    <a href="/" title="">Smoking</a>
                                </li>
                                <li>
                                    <a href="/" title="">Vaping</a>
                                </li>
                            </ul>
                            <a href="/" title="" class="general-link">All general health treatments
                                <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.00004 11.7558L16.793 11.7558L14.4649 9.4277C14.2696 9.23243 14.2696 8.91593 14.4649 8.72067C14.6601 8.5254 14.9767 8.5254 15.1719 8.72067L18.3536 11.9023C18.5488 12.0976 18.5488 12.4141 18.3536 12.6093L15.1719 15.791C14.9767 15.9862 14.6601 15.9862 14.4649 15.791C14.2696 15.5957 14.2696 15.2792 14.4649 15.0839L16.793 12.7558L6.00004 12.7558C5.7239 12.7558 5.50004 12.532 5.50004 12.2558C5.50004 11.9797 5.7239 11.7558 6.00004 11.7558Z" fill="#9C6743"/>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="secondary-menu">
                    <ul>
                        <li>
                            <a href="/" title="">General Telehealth</a>
                        </li>
                        <li>
                            <a href="/" title="">Medical Certificates</a>
                        </li>
                        <li>
                            <a href="/" title="">Prescriptions</a>
                        </li>
                        <li>
                            <a href="/" title="">Hubpass</a>
                        </li>
                    </ul>
                </div>
                <div class="btn-holder">
                    <a href="/" class="main-btn" title="">Log In</a>
                </div>
            </div>
        </div>
	</header>
<div class="wrapper">
