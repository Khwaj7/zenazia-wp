<?php
/* Template Name: Menu */
get_header();
?>

	<main id="primary" class="site-main">
        <h1><?php echo esc_html( get_the_title() ); ?></h1>
        <div class="container">
            <div class="menu">
            <?php
                if(have_rows('entrees')) :
                    while( have_rows('entrees') ) : the_row();
                        $nom_entree = get_sub_field('nom_de_lentree');
                        $prix_entree = get_sub_field('prix_de_lentree');
                        $img_entree = get_sub_field('image_de_lentree');
                        echo $nom_entree . ' ------- ' . $prix_entree . '<br>';
                        //echo '<img src="' . $img_entree['url'] . '"/>';
                    endwhile;
                else :
                    echo "Pas de menu";
                endif;
             ?>
            <?php
                if(have_rows('entrees_vapeur')) :
                    while( have_rows('entrees_vapeur') ) : the_row();
                        $nom_entree = get_sub_field('nom_de_lentree');
                        $prix_entree = get_sub_field('prix_de_lentree');
                        echo $nom_entree . ' ------- ' . $prix_entree . '<br>';
                    endwhile;
                else :
                    echo "Pas de menu";
                endif;
             ?>
            <?php
                if(have_rows('salades')) :
                    while( have_rows('salades') ) : the_row();
                        $nom_entree = get_sub_field('nom_de_lentree');
                        $prix_entree = get_sub_field('prix_de_lentree');
                        echo $nom_entree . ' ------- ' . $prix_entree . '<br>';
                    endwhile;
                else :
                    echo "Pas de menu";
                endif;
             ?>
            <?php
                if(have_rows('plats_cuisines')) :
                    while( have_rows('plats_cuisines') ) : the_row();
                        $nom_entree = get_sub_field('nom_de_lentree');
                        $prix_entree = get_sub_field('prix_de_lentree');
                        echo $nom_entree . ' ------- ' . $prix_entree . '<br>';
                    endwhile;
                else :
                    echo "Pas de menu";
                endif;
             ?>
            <?php
                if(have_rows('mi_xao')) :
                    while( have_rows('mi_xao') ) : the_row();
                        $nom_entree = get_sub_field('nom_de_lentree');
                        $prix_entree = get_sub_field('prix_de_lentree');
                        echo $nom_entree . ' ------- ' . $prix_entree . '<br>';
                    endwhile;
                else :
                    echo "Pas de menu";
                endif;
             ?>
            </div>
        </div>
	</main>

<?php
get_footer();
