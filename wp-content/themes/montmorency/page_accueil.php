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
			<div class="titre"><?php the_field('sc_titre_01'); ?></div>

			<div class="ligne_titre"></div>

			<div class="carres_services">
				<div class="service">
					<div class="texte_service"> <?php the_field('sc_service_01'); ?></div>
				</div>
				<div class="service">
					<div class="texte_service"> <?php the_field('sc_service_02'); ?></div>
				</div>
				<div class="service">
					<div class="texte_service"> <?php the_field('sc_service_03'); ?> </div>
				</div>
				<div class="service">
					<div class="texte_service"> <?php the_field('sc_service_04'); ?></div>
				</div>
			</div>

			<div class="titre"><?php the_field('sc_titre_02'); ?></div>

			<div class="ligne_titre"> </div>

			<div class="carres_nouvelles">

				<div class="nouvelle">
					<div class="texte_nouvelle"><?php the_field('sc_texte_nouvelle_01'); ?></div>
					<img src="<?php the_field('sc_nouvelle_01'); ?>">
					<button class="bouton_nouvelle">Lire plus </button>
				</div>

				<div class="nouvelle">
					<div class="texte_nouvelle"> <?php the_field('sc_texte_nouvelle_02'); ?></div>
					<img src="<?php the_field('sc_nouvelle_02'); ?>">
					<button class="bouton_nouvelle">Lire plus </button>
				</div>

				<div class="nouvelle">
					<div class="texte_nouvelle"> <?php the_field('sc_texte_nouvelle_03'); ?></div>
					<img src="<?php the_field('sc_nouvelle_03'); ?>">
					<button class="bouton_nouvelle">Lire plus </button>
				</div>

			</div>
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