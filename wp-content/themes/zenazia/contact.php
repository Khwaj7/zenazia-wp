<?php
 /* Template Name: Contact */
get_header();
?>

	<main id="primary" class="site-main">

		<?php 
		//appel de ACF pour le contenu
		echo do_shortcode('[contact-form-7 id="29" title="Formulaire de contact"]', false);
		?>

	</main><!-- #main -->

<?php
//get_sidebar();
//get_footer();