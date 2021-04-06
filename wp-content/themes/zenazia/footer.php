<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package zenazia
 */

?>

<footer id="colophon" class="site-footer">
	<button id="scrollToTop">^</button>
	<div class="site-info">
		<div class="upperFooter">
			<div class="leftUpperFooter">
				<div class="menu-footer">
					<h3>Menu</h3>
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'footer-menu',
						)
					);
					?>
				</div>
				<?php if (is_active_sidebar('footer_left_1')) : ?>
					<?php dynamic_sidebar('footer_left_1'); ?>
				<?php endif; ?>
			</div>
			<div class="rightUpperFooter">
				<?php if (is_active_sidebar('footer_right_1')) : ?>
					<?php dynamic_sidebar('footer_right_1'); ?>
				<?php endif; ?>
			</div>
		</div>
		<!-- <div class="socialMedia">
			<a href="https://www.facebook.com/Zenazia-Toulouse-Balma-152493081450568">
				<svg width="25" height="25" viewBox="0 0 25 25">
					<path d="M13.353 25H1.38A1.38 1.38 0 010 23.62V1.38C0 .618.618 0 1.38 0h22.24C24.382 0 25 .618 25 1.38v22.24A1.38 1.38 0 0123.62 25h-6.37v-9.681h3.25l.486-3.773H17.25v-2.41c0-1.092.303-1.836 1.87-1.836h1.997V3.924c-.345-.046-1.531-.15-2.911-.15-2.88 0-4.853 1.76-4.853 4.988v2.783h-3.258v3.773h3.258V25z" fill="#FFF" fill-rule="evenodd"></path>
				</svg>
				<span>Balma</span>
			</a>
			<a href="https://www.facebook.com/Zenazia-Quint-1811265022491883/">
				<svg width="25" height="25" viewBox="0 0 25 25">
					<path d="M13.353 25H1.38A1.38 1.38 0 010 23.62V1.38C0 .618.618 0 1.38 0h22.24C24.382 0 25 .618 25 1.38v22.24A1.38 1.38 0 0123.62 25h-6.37v-9.681h3.25l.486-3.773H17.25v-2.41c0-1.092.303-1.836 1.87-1.836h1.997V3.924c-.345-.046-1.531-.15-2.911-.15-2.88 0-4.853 1.76-4.853 4.988v2.783h-3.258v3.773h3.258V25z" fill="#FFF" fill-rule="evenodd"></path>
				</svg>
				<span>Quint-Fonsegrives</span>
			</a>
		</div>-->
		<svg class="logoKSE" id="Lines" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 143.73 285.58">
			<defs>
				<style>
					.cls-1 {
						fill: none;
						stroke: #FFF;
						stroke-linecap: round;
						stroke-miterlimit: 10;
						stroke-width: 10px;
					}
				</style>
			</defs>
			<title>KSE_A2</title>
			<line class="cls-1" x1="1" y1="142.85" x2="142.73" y2="1.12" />
			<line class="cls-1" x1="1" y1="1.12" x2="1" y2="284.58" />
			<line class="cls-1" x1="142.73" y1="284.58" x2="1" y2="142.85" />
			<path class="cls-1" d="M470.87,158.27c-14.54.36-26.43.21-34.71,0-6.84-.18-16.61-.14-36.16,0a71.33,71.33,0,0,0-13.22,1.23,70.83,70.83,0,0,0-28.33,12.22A71.08,71.08,0,0,0,334,203.3a71,71,0,0,0,2.59,57.48,71.83,71.83,0,0,0,22.58,26.27,70.9,70.9,0,0,0,18.6,9.39,61.93,61.93,0,0,0,13,3c.75.08,3.59.26,9.26.6,8.22.5,8.8.5,10.68.8,4.32.7,8.81,1.94,9.16,2,0,0,.68.17,1.29.36a70.91,70.91,0,0,1,11.28,130.7A72.67,72.67,0,0,1,400,441.73" transform="translate(-328.13 -157.15)" />
			<line class="cls-1" x1="142.73" y1="284.58" x2="1" y2="284.58" />
			<line class="cls-1" x1="142.73" y1="142.85" x2="1" y2="142.85" />
			<line class="cls-1" x1="1" y1="1.12" x2="142.73" y2="1.12" />
		</svg>
		<div class="copyright">
			<?php if (is_active_sidebar('footer_copyright_1')) : ?>
				<?php
				dynamic_sidebar('footer_copyright_1');
				?>
				<span class="yearCopyright"><?= current_time('Y') . ' – '; ?></span>
				<a href="">KSE</a>
			<?php endif; ?>
		</div>
	</div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->
<script>
	let scrollTopBtn = document.getElementById("scrollToTop");
	let rootElement = document.documentElement;

	function scrollToTop() {
		rootElement.scrollTo({
			top: 0,
			behavior: "smooth"
		})
	}
	scrollTopBtn.addEventListener("click", scrollToTop);
</script>
<?php wp_footer(); ?>

</body>

</html>