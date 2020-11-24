<?php 
/**
 * 	Template Name: Page événement individuel
 * 	Template Post Type: evenement_individuel
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
        <div class="sc_titre"><?php the_field('titre'); ?></div>

<div class="sc_ligne_titre"> </div>

<div class="sc_titre_evenement_individuel"><?php the_field('nom_evenement_individuel'); ?> 
</div>
<div class="sc_date_evenement_individuel"><?php the_field('date_evenement_individuel'); ?>
</div>
<div class="sc_lieu_evenement_individuel"><?php the_field('lieu_evenement_individuel'); ?>
</div>

<div class = "sc_section_evenement_individuel"> 
  <img class="sc_img_evenement_individuel" src="<?php the_field('image_evenement_individuel'); ?>"><div class= "<?php the_field('texte_evenement_individuel'); ?>">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
</div> 
</div>

<div class="sc_fleches">
    <span class="sc_fleche_precedent"> ←
</span>
<span class="sc_fleche_suivant"> →
</span>
</div>
	</article>
<?php endwhile; // Fermeture de la boucle ?>

<?php else : // Si aucune page correspondante n'a été trouvée ?>
	<h2>Oh oh, nous n'arrivons pas à voir la page demandée</h2>
	<img src="https://i.giphy.com/media/l0HU20BZ6LbSEITza/giphy.webp" alt="Page invisible">
<?php endif; ?>


<?php
// Appel le fichier footer.php
get_footer(); ?>