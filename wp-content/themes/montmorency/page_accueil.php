<?php

/**
 * 	Template Name: Page accueil
 */

// Appel le fichier header.php
get_header();

// Est-ce que nous avons des pages à afficher ?
if (have_posts()) :
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while (have_posts()) : the_post();
?>

		<article>
			<div class="sc_titre"><?php the_field('sc_titre_01'); ?></div>
			<div class="sc_ligne_titre"></div>
			<div class="sc_carres_services">
				<div class="sc_service">
					<div class="sc_texte_service"> <?php the_field('sc_service_01'); ?></div>
				</div>
				<div class="service">
					<div class="sc_texte_service"> <?php the_field('sc_service_02'); ?></div>
				</div>
				<div class="service">
					<div class="sc_texte_service"> <?php the_field('sc_service_03'); ?> </div>
				</div>
				<div class="service">
					<div class="sc_texte_service"> <?php the_field('sc_service_04'); ?></div>
				</div>
			</div>

			<div class="sc_titre"><?php the_field('sc_titre_02'); ?></div>

			<div class="sc_ligne_titre"> </div>

			<div class="sc_carres_nouvelles">

				<div class="sc_nouvelle">
					<div class="sc_texte_nouvelle"><?php the_field('sc_texte_nouvelle_01'); ?></div>
					<img src="<?php the_field('sc_nouvelle_01'); ?>">
					<button class="sc_bouton_nouvelle">Lire plus </button>
				</div>

				<div class="sc_nouvelle">
					<div class="sc_texte_nouvelle"> <?php the_field('sc_texte_nouvelle_02'); ?></div>
					<img src="<?php the_field('sc_nouvelle_02'); ?>">
					<button class="sc_bouton_nouvelle">Lire plus </button>
				</div>

				<div class="sc_nouvelle">
					<div class="sc_texte_nouvelle"> <?php the_field('sc_texte_nouvelle_03'); ?></div>
					<img src="<?php the_field('sc_nouvelle_03'); ?>">
					<button class="sc_bouton_nouvelle">Lire plus </button>
				</div>

			</div>
		</article>
	<?php endwhile; // Fermeture de la boucle 
	?>

<?php else : // Si aucune page correspondante n'a été trouvée 
?>
	<h2>Oh oh, nous n'arrivons pas à voir la page demandée</h2>
	<img src="https://i.giphy.com/media/l0HU20BZ6LbSEITza/giphy.webp" alt="Page invisible">
<?php endif; 
// Appel le fichier footer.php
get_footer(); ?>