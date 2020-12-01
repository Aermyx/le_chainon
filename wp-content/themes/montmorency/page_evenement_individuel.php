<?php

/**
 * 	Template Name: Page événement individuel
 */

// Appel le fichier header.php
get_header();

// Est-ce que nous avons des pages à afficher ?
if (have_posts()) :
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while (have_posts()) : the_post();
?>

		<article>
			<h2 class="sc_titre_page"><?php the_field('titre'); ?></h2>
			<div class="sc_ligne_titre"> </div>
			<h3 class="sc_titre_evenement_individuel"><?php the_field('nom_evenement_individuel'); ?>
			</h3>
			<div class="sc_date_evenement_individuel"><?php the_field('date_evenement_individuel'); ?>
			</div>
			<div class="sc_lieu_evenement_individuel"><?php the_field('lieu_evenement_individuel'); ?>
			</div>
			<div class="sc_section_evenement_individuel">
				<img class="sc_img_evenement_individuel" src="<?php the_field('image_evenement_individuel'); ?>">
				<div class="sc_texte_evenement_individuel"><?php the_field('texte_evenement_individuel'); ?> </div>
			</div>
			<div class="sc_fleches">
				<a href="<?php the_field('evenement_precedent'); ?>" class="sc_fleche_precedent">←</a>
				<a href="<?php the_field('evenement_precedent'); ?>" class="sc_fleche_suivant">→</a>
			</div>
		</article>
	<?php endwhile; // Fermeture de la boucle 
	?>

<?php else : // Si aucune page correspondante n'a été trouvée 
?>
	<h2>Oh oh, nous n'arrivons pas à voir la page demandée</h2>
	<img src="https://i.giphy.com/media/l0HU20BZ6LbSEITza/giphy.webp" alt="Page invisible">
<?php endif; ?>


<?php
// Appel le fichier footer.php
get_footer(); ?>