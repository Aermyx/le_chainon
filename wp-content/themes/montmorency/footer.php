<?php
	/*-----------------------------------------------------------------------------------*/
	/* Affiche le pied de page (Footer) sur toutes vos pages
	/*-----------------------------------------------------------------------------------*/
?>

</main><!-- Fermeture de la zone de contenu principale -->

<footer>
	<div class="wrapper footer">
		<div class="infosLeChainon">
			<p class="telephone">
				<span class="numTel"><?php the_field("numero_de_telephone"); ?></span>
			</p>
			<p class="adresseComplete">
				<span class="ligneAdresse"><?php the_field("ligne_dadresse"); ?></span>
				<span class="ville"><?php the_field("ville"); ?></span>
				<span class="pays"><?php the_field("pays"); ?></span>
				<span class="codePostal"><?php the_field("code_postal"); ?></span>
			</p>
		</div>
		<div class="lienReseauxSociaux">
			<div class="facebook">
			
			</div>
			<div class="instagram">
			
			</div>
			<div class="twitter">
			
			</div>
		</div>
		<div class="mentionsLegales">
			<p>- ©<span class="date mentionsLegales"><?php get_template_part('partials/year'); ?></span>, Le Chaînon, Tous droits réservé -</p>
		</div>
		<div class="retourTop">

		</div>
	</div>
</footer>

<?php wp_footer(); 
/* Espace où Wordpress peiut insérer de fichiers .js et autres pour des plugiciels (plugins) par exemple. 
	 Si vous enlever cette fonction, vous désactiverez du même coups tous vos plugins 🤷. 
	 Vous pouvez toujorus la déplacer, mais garder là */
?>

</body>
</html>
