<?php
/**
 * Template Name: Nouvelle
 */

// Appel le fichier header.php
get_header(); 

// Est-ce que nous avons des pages à afficher ?
if ( have_posts() ) : 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post(); 
?>

	<article>
		<h2><?php the_field('titre'); ?></h2>
		<div class="sc_ligne_titre"></div>
		<div class="sc_titre_evenement_individuel"><?php the_field('nom_nouvelle'); ?></div>
		<div class="sc_date_evenement_individuel"><?php the_field('date_nouvelle'); ?></div>
		<div class="sc_section_evenement_individuel">
			<img class="sc_img_evenement_individuel" src="<?php the_field('image_nouvelle'); ?>">
			<div class="sc_texte_evenement_individuel"><?php the_field('texte_nouvelle'); ?></div>
		</div>
		<div class="sc_fleches">
			<span class="sc_fleche_precedent"> ←</span>
			<span class="sc_fleche_suivant"> →</span>
		</div>
	</article>
<?php endwhile; // Fermeture de la boucle ?>

<?php else : // Si aucune page correspondante n'a été trouvée ?>
	<h2>Oh oh, la page recherchée est disparue</h2>
	<img src="https://i.giphy.com/media/3o8doR2qGIXQDGCVoY/giphy.webp" alt="Page disparue">
<?php endif; 

// Appel le fichier footer.php
get_footer(); ?>