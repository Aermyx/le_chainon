<?php 
/**
 * 	Template Name: Page valeurs
 */

// Appel le fichier header.php
get_header(); 

// Est-ce que nous avons des pages à afficher ?
if ( have_posts() ) : 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post(); 
?>

	<article>
		<?php if (!is_front_page()) : 
			/* Affiche le code suivant uniquement si nous ne sommes PAS sur la page d'accueil */ ?>
			<h2>
				<?php the_title(); 
				/* Titre de la page */ ?>
			</h2>
		<?php endif; ?>
		
		<?php the_content(); 
        /* Affiche le contenu principal de la page */ 
        ?>
        <h2><?php the_field('titre'); ?></h2>
        

        <div class="sc_ligne_titre"></div>

        <div class="sc_sous_titre"> <?php the_field('sous_titre'); ?></div>
       
        <div class="sc_texte_principal"><?php the_field('texte_principal'); ?></div>
        
        
        <div class="sc_ligne_texte_principal"></div>

        <div class="sc_titre_valeur_01"><?php the_field('titre_valeur_01'); ?></div>
        
        <div class="sc_texte_valeur_01"><?php the_field('texte_valeur_01'); ?></div>
       

        <div class="sc_titre_valeur_02"><?php the_field('titre_valeur_02'); ?></div>
       

        <div class="sc_texte_valeur_02"><?php the_field('texte_valeur_02'); ?></div>
        

        <div class="sc_titre_valeur_03"><?php the_field('titre_valeur_03'); ?></div>
        

        <div class="sc_texte_valeur_03"><?php the_field('texte_valeur_03'); ?></div>
       

        <div class="sc_titre_valeur_04"><?php the_field('titre_valeur_04'); ?></div>
       

        <div class="sc_texte_valeur_04"><?php the_field('texte_valeur_04'); ?></div>
        

        <div class="sc_titre_valeur_05"><?php the_field('titre_valeur_05'); ?></div>
        

        <div class="sc_texte_valeur_05"><?php the_field('texte_valeur_05'); ?></div>
        
	</article>
<?php endwhile; // Fermeture de la boucle ?>

<?php else : // Si aucune page correspondante n'a été trouvée ?>
	<h2>Oh oh, nous n'arrivons pas à voir la page demandée</h2>
	<img src="https://i.giphy.com/media/l0HU20BZ6LbSEITza/giphy.webp" alt="Page invisible">
<?php endif; ?>


<?php
// Appel le fichier footer.php
get_footer(); ?>