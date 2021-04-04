<?php
/* Template Name: Menu */
get_header();
?>

<main id="primary" class="main-menu">
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

    <div class="menu-content">
        <div class="menu-content-balma">
            <h1>Menu Restaurant Balma</h1>
            <?php
            $menu_champs = array('entrees' => 'Entrées', 'entrees_vapeur' => 'Entrées vapeur', 'salades' => 'Salades', 'plats_cuisines' => 'Plats cuisinés', 'mi_xao' => 'Mi-Xao');

            foreach ($menu_champs as $key => $champ) {
                $champ_en_cours = $key;
                print_r("<h2>" . $champ . " </h2>");
                if (have_rows($champ_en_cours)) :
                    while (have_rows($champ_en_cours)) : the_row();
                        $nom =  get_sub_field('nom_de_lentree');
                        $prix = get_sub_field('prix_de_lentree');
                        $img = get_sub_field('image_de_lentree');
                        echo "<div class='menu-line'><div class='menu-nom'>" . $nom . "</div><div class='menu-prix'>" . $prix . "</div><div class='menu-img'>" . $img . "</div></div>";
                    endwhile;
                endif;
            }
            ?>
        </div>
        <div class="chopsticksImg"></div>
        <div class="menu-content-quint">
            <h1>Menu Restaurant Quint-Fonsegrives</h1>
            <?php
            $menu_champs = array('entrees' => 'Entrées', 'entrees_vapeur' => 'Entrées vapeur', 'salades' => 'Salades', 'plats_cuisines' => 'Plats cuisinés', 'mi_xao' => 'Mi-Xao');

            foreach ($menu_champs as $key => $champ) {
                $champ_en_cours = $key;
                print_r("<h2>" . $champ . " </h2>");
                if (have_rows($champ_en_cours)) :
                    while (have_rows($champ_en_cours)) : the_row();
                        $nom =  get_sub_field('nom_de_lentree');
                        $prix = get_sub_field('prix_de_lentree');
                        $img = get_sub_field('image_de_lentree');
                        echo "<div class='menu-line'><div class='menu-nom'>" . $nom . "</div><div class='menu-prix'>" . $prix . "</div><div class='menu-img'>" . $img . "</div></div>";
                    endwhile;
                endif;
            }
            ?>
        </div>
        <div class="hatImg"></div>
    </div>
</main>

<?php
get_footer();
