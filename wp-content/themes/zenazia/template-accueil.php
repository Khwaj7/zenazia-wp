<?php
/* Template Name: Accueil */
get_header();
?>
<div id="leftdoor"></div>
<div id="rightdoor"></div>
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
                        <?php if (have_posts()) : while (have_posts()) : the_post();
                                the_content();
                            endwhile;
                        else : ?>
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
    <section id="restaurants">
        <div class="chopsticksImg"></div>
        <section id="balma">
            <h2>Restaurant de Balma</h2>
            <div class="balmaContent">
                <div class="leftContent">
                    <ul class="timetable">
                        <?php
                        if (have_rows('horaires_ouverture_balma')) :
                            while (have_rows('horaires_ouverture_balma')) : the_row();
                                $lettre_jour = get_sub_field('lettre_jour');
                                $horaire_matin = get_sub_field('horaires_matin');
                                $horaire_apresmidi = get_sub_field('horaires_apres_midi');
                        ?>
                                <li class="card-timetable">
                                    <span class="letter-timetable"><?php echo $lettre_jour; ?></span>
                                    <div class="hours">
                                        <span class="time-timetable"><?php echo $horaire_matin; ?></span>
                                        <span class="time-timetable"><?php echo $horaire_apresmidi; ?></span>
                                    </div>
                                </li>
                        <?php
                            endwhile;
                        else :
                            echo "Pas d'horaires";
                        endif;
                        ?>
                    </ul>
                </div>
                <div class="rightContent">
                    <div class="rightImg"></div>
                    <div class="rightTxt">
                        <p class="rightTxtIntro"><?php echo get_field("texte_sous_image_balma"); ?></p>
                        <a href="tel:<?php echo get_field("telephone_balma_reel"); ?>" class="rightTxtPhone">
                            <img src="<?php bloginfo('template_url'); ?>/images/phone.svg" width="20px" />
                            <span><?php echo get_field("telephone_balma"); ?></span>
                        </a>
                        <a target="_blank" href="https://www.google.com/maps/place/Zenazia+Toulouse+Balma/@43.6061128,1.4833313,15z/data=!4m2!3m1!1s0x0:0xfc27fd79a5a7a20c?sa=X&ved=2ahUKEwjOvrO5tdvvAhXCzIUKHdCWDnYQ_BIwEnoECC0QBQ" class="rightTxtAddress">
                            <img src="<?php bloginfo('template_url'); ?>/images/pin.svg" width="20px" />
                            <span><?php echo get_field("adresse_balma"); ?></span>
                        </a>
                        <div class="bottomRightTxt">
                            <div class="link-services">
                                <a target="_blank" href="https://www.ubereats.com/fr/toulouse/food-delivery/zenazia/rFbZ9WqgSXGgYxPnIWvHLA"><img src="<?php bloginfo('template_url'); ?>/images/logoUber.svg" width="120px" /></a>
                                <a target="_blank" href="https://deliveroo.fr/fr/menu/toulouse/roserai-juncasse-argoulets/zenazia-toulouse-balma"><img src="<?php bloginfo('template_url'); ?>/images/logoDeliveroo.svg" width="120px" /></a>
                            </div>
                            <div id="TA_cdsratingsonlynarrow907" class="TA_cdsratingsonlynarrow">
                                <ul id="8mMlRst" class="TA_links W5LYgaC9">
                                    <li id="Z5R2Qvuai" class="m8lENNOEweOe"><a target="_blank" href="https://www.tripadvisor.fr/Restaurant_Review-g187175-d967665-Reviews-Zenazia-Toulouse_Haute_Garonne_Occitanie.html"><img src="https://www.tripadvisor.fr/img/cdsi/img2/branding/v2/Tripadvisor_lockup_horizontal_secondary_registered-18034-2.svg" alt="TripAdvisor" /></a></li>
                                </ul>
                            </div>
                            <script async src="https://www.jscache.com/wejs?wtype=cdsratingsonlynarrow&amp;uniq=907&amp;locationId=967665&amp;lang=fr&amp;border=true&amp;display_version=2" data-loadtrk onload="this.loadtrk=true"></script>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="quint">
            <h2>Restaurant de Quint-Fonsegrives</h2>
            <div class="quintContent">
                <div class="leftContent">
                    <div class="leftImg"></div>
                    <div class="leftTxt">
                        <p class="leftTxtIntro"><?php echo get_field("texte_sous_image_quint"); ?></p>
                        <a href="tel:<?php echo get_field("telephone_quint_reel"); ?>" class="leftTxtPhone">
                            <img src="<?php bloginfo('template_url'); ?>/images/phone.svg" width="20px" />
                            <span><?php echo get_field("telephone_quint"); ?></span>
                        </a>
                        <a target="_blank" href="https://www.google.com/maps/place/Zenazia+Quint/@43.5830595,1.511978,17z/data=!3m1!4b1!4m5!3m4!1s0x12aebd845d4de07b:0xf185b85c048b670f!8m2!3d43.5830556!4d1.5141667" class="leftTxtAddress">
                            <img src="<?php bloginfo('template_url'); ?>/images/pin.svg" width="20px" />
                            <span><?php echo get_field("adresse_quint"); ?></span>
                        </a>
                        <div class="bottomLeftTxt">
                            <div class="link-services">
                                <a target="_blank" href="https://www.ubereats.com/fr/toulouse/food-delivery/zenazia-ii-quint/TQ7c09tFTomxMFJfFwa1cg?pl=JTdCJTIyYWRkcmVzcyUyMiUzQSUyMjMxJTIwQXZlbnVlJTIwTWVyY3VyZSUyMiUyQyUyMnJlZmVyZW5jZSUyMiUzQSUyMkNoSUoyeHVNNjRlOXJoSVJ5LW5ENkFoMzdkcyUyMiUyQyUyMnJlZmVyZW5jZVR5cGUlMjIlM0ElMjJnb29nbGVfcGxhY2VzJTIyJTJDJTIybGF0aXR1ZGUlMjIlM0E0My41ODA2ODklMkMlMjJsb25naXR1ZGUlMjIlM0ExLjUyMTg3NjglN0Q%3D&utm_campaign=place-action-link&utm_medium=organic&utm_source=google"><img src="<?php bloginfo('template_url'); ?>/images/logoUber.svg" width="120px" /></a>
                            </div>
                            <div id="TA_cdsratingsonlynarrow964" class="TA_cdsratingsonlynarrow"><ul id="5owhCA7rjvQ" class="TA_links VsLrZXSrt4h"><li id="vk7vZzj" class="eeXrO9kUDfL"><a target="_blank" href="https://www.tripadvisor.fr/Restaurant_Review-g1467813-d4297179-Reviews-Zenazia_2-Quint_Fonsegrives_Haute_Garonne_Occitanie.html"><img src="https://www.tripadvisor.fr/img/cdsi/img2/branding/v2/Tripadvisor_lockup_horizontal_secondary_registered-18034-2.svg" alt="TripAdvisor"/></a></li></ul></div><script async src="https://www.jscache.com/wejs?wtype=cdsratingsonlynarrow&amp;uniq=964&amp;locationId=4297179&amp;lang=fr&amp;border=true&amp;display_version=2" data-loadtrk onload="this.loadtrk=true"></script>
                        </div>
                    </div>
                </div>
                <div class="rightContent">
                    <div class="hatImg"></div>
                    <ul class="timetable">
                        <?php
                        if (have_rows('horaires_ouverture_quint')) :
                            while (have_rows('horaires_ouverture_quint')) : the_row();
                                $lettre_jour = get_sub_field('lettre_jour');
                                $horaire_matin = get_sub_field('horaires_matin');
                                $horaire_apresmidi = get_sub_field('horaires_apres_midi');
                        ?>
                                <li class="card-timetable">
                                    <span class="letter-timetable"><?php echo $lettre_jour; ?></span>
                                    <div class="hours">
                                        <span class="time-timetable"><?php echo $horaire_matin; ?></span>
                                        <span class="time-timetable"><?php echo $horaire_apresmidi; ?></span>
                                    </div>
                                </li>
                        <?php
                            endwhile;
                        else :
                            echo "Pas d'horaires";
                        endif;
                        ?>
                    </ul>
                </div>
            </div>
        </section>
    </section>
</main>
<?php
get_footer();