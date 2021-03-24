<?php
/* Template Name: Accueil */
get_header();
?>
	<main id="primary" class="site-main">
	<section id="accueil">
	    <div class="container">
            <div class="bigImage">
                <div class="menu">
                    <div class="logo">
                        <img src="<?php bloginfo('template_url'); ?>/images/logoZenazia.png" />
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
                <div class="introduction">
                    <div class="firstIntroText">
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
                            the_content();
                        endwhile; else: ?>
                        <p>Sorry, no posts matched your criteria.</p>
                        <?php endif; ?>
                    </div>
                    <div class="secondIntroText">
                        <?php echo get_field('decouvrir_restaurants'); ?>
                    </div>
                    <div class="discoverButtons">
                        <a href="#restaurants">Balma</a>
                        <a href="#quint">Quint</a>
                    </div>
                </div>
                <div class="dragonZenazia">
                    <img src="<?php bloginfo('template_url'); ?>/images/dragon_zenazia.png" />
                    <p class="subdragonZenazia"><?php echo get_field('subdragonzenazia'); ?></p>
                </div>
            </div>
	    </div>
	    </section>
	    <section id="restaurants" style="height: 1400px">
	        <h2>Restaurant de Balma</h2>
	        <div class="chopsticksImg"></div>
	        <section id="balma">
	        	<div class="leftContent">
	        	    <?php echo get_field('horaires_douverture'); ?>
	        	</div>
	        	<div class="rightImg"></div>
	        </section>
	        <section id="quint">
                <?php /* <div class="leftContent">
                    <?php echo get_field('horaires_douverture'); ?>
                </div> */ ?>
                <div class="rightImg"></div>
            </section>
	    </section>
	</main>
<?php
