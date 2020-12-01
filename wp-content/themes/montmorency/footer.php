<?php
	/*-----------------------------------------------------------------------------------*/
	/* Affiche le pied de page (Footer) sur toutes vos pages
	/*-----------------------------------------------------------------------------------*/
?>

</main><!-- Fermeture de la zone de contenu principale -->

<footer>
	<div class="wrapper footer">
		<div class="wrapper don">
            <h3 class="titre don">Faites un don</h3>
            <div class="contenu don">
                <div class="temps don">
                    <a href="https://www.lechainon.org/fr/faites-un-don"><button class="bouton don">Don en Temps</button></a>
                    <div class="rond don"></div>
                </div>
                <div class="argent don">
                    <a href="https://www.lechainon.org/fr/faites-un-don"><button class="bouton don">Don en Argent</button></a>
                    <div class="rond don"></div>
                </div> 
            </div>
        </div>
		<div class="infosLeChainon">
			<p class="telephone">
				<span class="numTel"><?php the_field("numero_de_telephone"); ?></span>
			</p>
			<p class="adresseComplete">
				<span class="ligneAdresse"><?php the_field("ligne_dadresse"); ?></span><br>
				<span class="ville"><?php the_field("ville"); ?>, </span>
				<span class="pays"><?php the_field("pays"); ?></span><br>
				<span class="codePostal"><?php the_field("code_postal"); ?></span>
			</p>
		</div>
		<div class="lienReseauxSociaux">
			<div class="ligneReseauxSociaux"></div>
			<a href="https://www.facebook.com/lechainonmontreal">
				<div class="facebook">
					<img src="https://imgur.com/u8ZHNgI.png" alt="" srcset="">
				</div>
			</a>
			<a href="https://www.instagram.com/lechainon_mtl/?hl=fr-ca">
				<div class="instagram">
					<img src="https://imgur.com/Kdxpp3J.png" alt="" srcset="">
				</div>
			</a>
			<a href="https://twitter.com/lechainonmtl?lang=fr">
				<div class="twitter">
					<img src="https://imgur.com/FI5UgE7.png" alt="" srcset="">
				</div>
			</a>
		</div>
		<div class="piedFooter">
			<div class="mentionsLegales">
				<p>- ©<span class="date mentionsLegales"><?php get_template_part('partials/year'); ?></span>, Le Chaînon, Tous droits réservé -</p>
				<p><span class="nomEquipe"><?php the_field("equipe"); ?></span></p>
			</div>
			<div class="retourTop">
				<a href="#"><img src="https://imgur.com/t5Ge4Qo.png" alt="" srcset=""></a>
			</div>
			<div class="logoBasPage">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 792 90.26" class="logoWillSvg">
					<defs>
					<style>
						.cls-1{fill:#99c;}
					</style>
					</defs>
					<path id="L" d="M0 .26h18v72h54v18H0v-90z"/>
					<path id="E" d="M81 .26v90h72v-18H99v-18h45v-18H99v-18h54v-18H81z"/>
					<path id="C" d="M349.12 77.55L360 66.67S349.51 54 329 54a36.58 36.58 0 00-27.45 10.84c-8.46 7-13.54 22.93-13.54 35.21a46.85 46.85 0 0015.73 35.24c6.16 5.77 16 8.67 25.26 8.67 20.59 0 31-12.63 31-12.63l-10.87-10.69s-6.36 6.88-20.14 6.88-25.12-12.34-25.26-27.48C303.63 84.66 314.85 72 329 71.52c14.25.01 20.12 6.03 20.12 6.03z" transform="translate(-72 -53.74)"/>
					<path id="H" d="M297 .26h18v36h36v-36h18v90h-18v-36h-36v36h-18v-90z"/>
					<path id="A" class="cls-1" d="M450 90.26v-54l-36-36-36 36v54h18v-45l18-18 18 18v45h18z"/>
					<path id="Nuage" class="cls-1" d="M587.57 60.17a15.33 15.33 0 00-9.33 3.16 16.69 16.69 0 00-30.5.64A11.55 11.55 0 00531 74.31a11.92 11.92 0 00.12 1.6v.14a16.23 16.23 0 0016.18 15h40.26a15.43 15.43 0 000-30.86z" transform="translate(-72 -53.74)"/>
					<path id="I" d="M486 45.26h18v45h-18z"/>
					<path id="N" d="M540 90.26v-90h18l36 54v-54h18v90h-18l-36-54v54h-18z"/>
					<path id="O" d="M738 54a45 45 0 1045 45 45 45 0 00-45-45zm0 72c-12.43 0-22.5-12.09-22.5-27s10.07-27 22.5-27 22.5 12.09 22.5 27-10.07 27-22.5 27z" transform="translate(-72 -53.74)"/>
					<path id="N-2" d="M720 90.26v-90h18l36 54v-54h18v90h-18l-36-54v54h-18z" data-name="N"/>
				</svg>
			</div>
		</div>
	</div>
</footer>

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.3.3/ScrollTrigger.min.js"></script>

<?php wp_footer(); 
/* Espace où Wordpress peut insérer de fichiers .js et autres pour des plugiciels (plugins) par exemple. 
	 Si vous enlever cette fonction, vous désactiverez du même coups tous vos plugins 🤷. 
	 Vous pouvez toujorus la déplacer, mais garder là */
?>

</body>
</html>
