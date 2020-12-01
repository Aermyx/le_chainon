<?php
/**
 * Template Name: Nouvelles / Évènements
 */

// Appel le fichier header.php
get_header(); 

// Est-ce que nous avons des pages à afficher ?
if ( have_posts() ) : 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post(); 
?>

	<article>
		<h2 class="titrePage"><?php the_field("titre_page"); ?></h2>
		<div class="wrapperNetE">
			<div class="boiteImageVedette">
				<img src="<?php the_field("image_vedette"); ?>" alt="">
			</div>
			<div class="zoneTexteVedette">
				<h3 class="titreVedette"><?php the_field("titre_vedette"); ?></h3>
				<p class="texteVedette"><?php the_field("texte_vedette"); ?></p>
				<div class="lirePlus">Lire Plus</div>
			</div>
			<div class="ligneSeparation"></div>
			<div class="sectionExtra">
				<div class="extra01">
					<img src="<?php the_field("image_extra_1"); ?>" alt="" srcset="">
					<h4 class="titreExtra"><?php the_field("titre_extra_1"); ?></h4>
					<div class="lirePlus">Lire Plus</div>
				</div>
				<div class="extra02">
					<img src="<?php the_field("image_extra_2"); ?>" alt="" srcset="">
					<h4 class="titreExtra"><?php the_field("titre_extra_2"); ?></h4>
					<div class="lirePlus">Lire Plus</div>
				</div>
				<div class="extra03">
					<img src="<?php the_field("image_extra_3"); ?>" alt="" srcset="">
					<h4 class="titreExtra"><?php the_field("titre_extra_3"); ?></h4>
					<div class="lirePlus">Lire Plus</div>
				</div>
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