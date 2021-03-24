<?php
 /* Template Name: Contact */
get_header();
?>

	<main id="primary" class="site-main">

		<?php 
		echo do_shortcode('[contact-form-7 id="29" title="Formulaire de contact"]', false);

		//appel de ACF pour le contenu
		?>

	</main><!-- #main -->

<?php
//get_sidebar();
//get_footer();