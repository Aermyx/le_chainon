<?php
/**
 * Template Name: Équipe
 */

// Appel le fichier header.php
get_header(); 

// Est-ce que nous avons des pages à afficher ?
if ( have_posts() ) : 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post(); 
?>

	<article>
		<h2 class="titreEquipe"><?php the_field("titre_equipe"); ?></h2>
		<div class="wrapperEquipe">
			<div class="boitePerso">
				<div class="nom"><?php the_field("nom_1"); ?></div>
				<div class="poste"><?php the_field("poste_1"); ?></div>
			</div>
			<div class="boitePerso">
				<div class="nom"><?php the_field("nom_2"); ?></div>
				<div class="poste"><?php the_field("poste_2"); ?></div>
			</div>
			<div class="boitePerso">
				<div class="nom"><?php the_field("nom_3"); ?></div>
				<div class="poste"><?php the_field("poste_3"); ?></div>
			</div>
			<div class="boitePerso">
				<div class="nom"><?php the_field("nom_4"); ?></div>
				<div class="poste"><?php the_field("poste_4"); ?></div>
			</div>
			<div class="boitePerso">
				<div class="nom"><?php the_field("nom_5"); ?></div>
				<div class="poste"><?php the_field("poste_5"); ?></div>
			</div>
			<div class="boitePerso">
				<div class="nom"><?php the_field("nom_6"); ?></div>
				<div class="poste"><?php the_field("poste_6"); ?></div>
			</div>
		</div>
	</article>
<?php endwhile; // Fermeture de la boucle ?>

<?php else : // Si aucune page correspondante n'a été trouvée ?>
	<h2>Oh oh, la page recherchée est disparue</h2>
	<img src="https://i.giphy.com/media/3o8doR2qGIXQDGCVoY/giphy.webp" alt="Page disparue">
<?php endif; 

// Appel le fichier footer.php
get_footer(); ?>