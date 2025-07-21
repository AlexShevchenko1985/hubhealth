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

<footer id="Footer">
    <div class="container">
        <div class="top-footer">
            <div class="left-column">
                <div class="footer-logo">
                    <img src="<?php echo get_template_directory_uri() ?>/src/img/footer-logo.svg" alt="Logo">
                </div>
                <p>hub.health is operated by Midnight Health,
                    part of the nib Group</p>
                <div class="btn-holder">
                    <a href="/" title="" class="login-btn">Log in</a>
                </div>
                <div class="socials">
                    <a href="/" title="">
                        <img src="<?php echo get_template_directory_uri() ?>/src/img/instagram.svg" alt="Instagram">
                    </a>
                    <a href="/" title="">
                        <img src="<?php echo get_template_directory_uri() ?>/src/img/facebook.svg" alt="Facebook">
                    </a>
                </div>
            </div>
            <div class="right-column">
                <div class="menu-column">
                    <div class="title">Company</div>
                    <ul>
                        <li>
                            <a href="/" title="">About Us</a>
                        </li>
                        <li>
                            <a href="/" title="">Contact Us</a>
                        </li>
                        <li>
                            <a href="/" title="">Feedback</a>
                        </li>
                        <li>
                            <a href="/" title="">For Healthcare Professionals</a>
                        </li>
                        <li>
                            <a href="/" title="">Midnight Health Charter of Healthcare Rights</a>
                        </li>
                    </ul>
                </div>
                <div class="menu-column">
                    <div class="title">Skincare</div>
                    <ul>
                        <li>
                            <a href="/" title="">Acne</a>
                        </li>
                        <li>
                            <a href="/" title="">Eczema</a>
                        </li>
                        <li>
                            <a href="/" title="">Psoriasis</a>
                        </li>
                        <li>
                            <a href="/" title="">Rosacea</a>
                        </li>
                        <li>
                            <a href="/" title="">Uneven Skin Tone Treatment</a>
                        </li>
                        <li>
                            <a href="/" title="">Wrinkles and Fine Lines Treatment</a>
                        </li>
                        <li>
                            <a href="/" title="">All Skincare Treatments</a>
                        </li>
                    </ul>
                </div>
                <div class="menu-column">
                    <div class="title">General Health</div>
                    <ul>
                        <li>
                            <a href="/" title="">Weight Loss</a>
                        </li>
                        <li>
                            <a href="/" title="">Telehealth Consults</a>
                        </li>
                        <li>
                            <a href="/" title="">Medical Certificates</a>
                        </li>
                        <li>
                            <a href="/" title="">Prescriptions</a>
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
                        <li>
                            <a href="/" title="">All General Health Treatments</a>
                        </li>
                    </ul>
                </div>
                <div class="menu-column">
                    <div class="title">Women’s Health</div>
                    <ul>
                        <li>
                            <a href="/" title="">Weight Loss</a>
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
                        <li>
                            <a href="/" title="">All Women’s Health Treatments</a>
                        </li>
                    </ul>
                </div>
                <div class="menu-column">
                    <div class="title">Men’s Health</div>
                    <ul>
                        <li>
                            <a href="/" title="">Weight Loss</a>
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
                        <li>
                            <a href="/" title="">All Men’s Health Treatments</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-section-logo">
            <img src="<?php echo get_template_directory_uri() ?>/src/img/Hub-Logo.webp" alt="Logo">
        </div>
        <div class="bottom-footer">
            <div class="copy">
                <p>© <?php echo date ('Y'); ?> Copyright <?php echo date ('Y'); ?> – Midnight Health</p>
            </div>
            <div class="policy-menu">
                <ul>
                    <li>
                        <a href="/" title="">Privacy Policy</a>
                    </li>
                    <li>
                        <a href="/" title="">Terms and Conditions</a>
                    </li>
                    <li>
                        <a href="/" title="">Orders and Deliveries</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
</div>

<?php get_template_part('template-parts/popup'); ?>

<?php wp_footer(); ?>

</body>
</html>
