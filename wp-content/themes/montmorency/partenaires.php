<?php
/**
 * Template Name: Partenaires
 */

// Appel le fichier header.php
get_header(); 

// Avons-nous des articles à afficher ?
if ( have_posts() ) : 
	// Si oui, bouclons au travers les articles (logiquement, il n'y en aura qu'un)
	while ( have_posts() ) : the_post(); 
?>

	<article>
		<h2 class="titreprincipal">
			<?php the_title(); 
			/* Titre de l'article */ ?>
		</h2>

		<div class= "lignetitre"> </div>
		
		<?php the_content(); 
		/* Affiche le contenu principal de l'article */ ?>

			<p class="remerciement"><?php the_field('remerciement'); ?></p>

			<div class="paragraphePartenaires">
				<h2 class="titrePartenaire"><?php the_field('typepartenaires1'); ?></h2>
				<p class="listePartenaire"><?php the_field('listepartenaires1'); ?></p>
			</div>

			<div class="paragraphePartenaires">
				<h2 class="titrePartenaire"><?php the_field('typepartenaires2'); ?></h2>
				<p class="listePartenaire"><?php the_field('listepartenaires2'); ?></p>
			</div>

			<div class="paragraphePartenaires">
				<h2 class="titrePartenaire"><?php the_field('typepartenaires3'); ?></h2>
				<p class="listePartenaire"><?php the_field('listepartenaires3'); ?></p>
			</div>

			<div class="paragraphePartenaires">
				<h2 class="titrePartenaire"><?php the_field('typepartenaires4'); ?></h2>
				<p class="listePartenaire"><?php the_field('listepartenaires4'); ?></p>
			</div>

			<div class="paragraphePartenaires">
				<h2 class="titrePartenaire"><?php the_field('typepartenaires5'); ?></h2>
				<p class="listePartenaire"><?php the_field('listepartenaires5'); ?></p>
			</div>

			<div class="paragraphePartenaires">
				<h2 class="titrePartenaire"><?php the_field('typepartenaires6'); ?></h2>
				<p class="listePartenaire"><?php the_field('listepartenaires6'); ?></p>
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
