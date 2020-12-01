<?php

/**
 * 	Template Name: Page contact
 */

// Appel le fichier header.php
get_header();

// Est-ce que nous avons des pages à afficher ?
if (have_posts()) :
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while (have_posts()) : the_post();
?>

		<article>
			<?php if (!is_front_page()) :
				/* Affiche le code suivant uniquement si nous ne sommes PAS sur la page d'accueil */ ?> <?php endif; ?> <h2 class="sc_titre_page"><?php the_field('titre'); ?></h2>
			
			<h2 class="sc_titre_page"><?php the_field('titre'); ?></h2>

			<div class="sc_ligne_titre"></div>

			<?php the_content();
			/* Affiche le contenu principal de la page */
			?>

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