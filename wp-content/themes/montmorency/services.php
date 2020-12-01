<?php
/**
 * Template Name: Services
 */

// Appel le fichier header.php
get_header(); 

// Avons-nous des articles à afficher ?
if ( have_posts() ) : 
	// Si oui, bouclons au travers les articles (logiquement, il n'y en aura qu'un)
	while ( have_posts() ) : the_post(); 
?>

	<article>
		<h2 class= "titreprincipal">
			<?php the_title(); 
			/* Titre de l'article */ ?>
		</h2>

		<div class= "lignetitre"> </div>
		
		<?php the_content(); 
		/* Affiche le contenu principal de l'article */ ?>

			<p class="intro"><?php the_field('paragrapheprincipal'); ?></p>

			<div class= "petiteLigne"> </div>

			<div class="section">
			<div class="imageService">
				<img src="<?php the_field('imageecoute'); ?>" />
			</div>
			<div class="contenuServices">
				<h2 class= "titreService"> <a href="<?php the_field("lienecoute"); ?>" class="lienEcoute"> <?php the_field('titreecoute'); ?> </a></h2>
				<p class= "descriptionService"><?php the_field('descriptionecoute'); ?></p>
			</div>
			</div>

			<div class="section">
			<div class="imageService">
			<img src="<?php the_field('imagehebergement'); ?>" />
			</div>
			<div class="contenuServices">
				<h2 class= "titreService"><a href="<?php the_field("lienherbergement"); ?>" class="lienHebergement"><?php the_field('titrehebergement'); ?> </a></h2>
				<p class= "descriptionService"><?php the_field('descriptionhebergement'); ?></p>
			</div>
			</div>

			<div class="section">
			<div class="imageService">
			<img src="<?php the_field('imagepost'); ?>" />
			</div>
			<div class="contenuServices">
				<h2 class= "titreService"><a href="<?php the_field("lienpost"); ?>" class="lienPost"><?php the_field('titrepost'); ?> </a></h2>
				<p class= "descriptionService"><?php the_field('descriptionpost'); ?></p>
			</div>
			</div>

			<div class="section">
			<div class="imageService">
			<img src="<?php the_field('imagesoutien'); ?>" />
			</div>
			<div class="contenuServices">
				<h2 class= "titreService"><a href="<?php the_field("liensoutien"); ?>" class="lienSoutien"><?php the_field('titresoutien'); ?> </a></h2>
				<p class= "descriptionService"><?php the_field('descriptionsoutien'); ?></p>
			</div>
			</div>

		<?php get_template_part( 'partials/metas' ); 
		// Appel le fichier metas.php dans le dossier partials ?>
	</article>
<?php endwhile; // Fermeture de la boucle ?>
		
<?php
	/* comments_open() valide si nous authorisons les commentaires 
		 '0' != get_comments_number() valide si il y a au moins un commentaire
		 Si l'une des précédentes conditions est vraie, nous affichons le template de commentaires par défaut de Wordpress
	*/ 
	if ( comments_open() || '0' != get_comments_number() ) {
		comments_template( '', true );
	}
?>

<?php else : // Si aucun article correspondant n'a été trouvé ?>
	<h2>Oh oh, aucun article n'a été trouvé</h2>
	<img src="https://media.giphy.com/media/ZYX2ZNBPHmlmfc7Fcj/giphy.gif" alt="Aucun billet trouvé">
<?php endif; 

// Appel le fichier footer.php
get_footer(); ?>
