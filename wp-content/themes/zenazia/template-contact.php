<?php
/* Template Name: Contact */
get_header();
?>

<main id="primary" class="site-main">
        <div class="menu-header">
                <div class="logoSmall">
                        <a href="<?= get_home_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/images/logoZenaziaSmall.png" /></a>
                </div>
                <nav id="site-navigation" class="main-navigation">
                        <?php
                        wp_nav_menu(
                                array(
                                        'theme_location' => 'menu-1',
                                        'menu_id'        => 'primary-menu',
                                )
                        );
                        ?>
                </nav>
        </div>
        <div class="container">
        <h1><?=get_the_title(); ?></h1>
        <p class="contactIntro"><?= the_field('contact_introduction'); ?></p>
        <?=do_shortcode('[contact-form-7 id="29" title="Formulaire de contact"]', false);?>
        </div>

</main><!-- #main -->

<?php
get_footer();
