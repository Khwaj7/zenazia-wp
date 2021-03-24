<?php
/* Template Name: Contact */
get_header();
?>

	<main id="primary" class="site-main">
        <h1><?php echo esc_html( get_the_title() ); ?></h1>
        <?php echo do_shortcode( '[contact-form-7 id="29" title="Formulaire de contact"]' ); ?>
	</main>

<?php
get_footer();
