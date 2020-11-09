<?php
/**
 * Template Name: Histoire
 */

// Appel le fichier header.php
get_header(); 

// Est-ce que nous avons des pages à afficher ?
if ( have_posts() ) : 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post(); 
?>
	<article>
		<h2>
			<?php the_title(); 
			/* Titre de la page */ ?>
		</h2>

        <div class="wrapper histoire">
            <div class="wrapper resume">
                <h3 class="titre resume">Résumé</h3>
                <p class="resume">
                <strong>Le Chaînon, une organisation forgée dans la détermination tissée de solidarité</strong>
                La fondatrice, Yvonne Maisonneuve a mis sa détermination au service d’une cause qu’elle croyait 
                juste et importante, celle des femmes en difficulté. Par la suite, de fidèles collaboratrices 
                viennent prêter main forte et se joignent à l’œuvre d’Yvonne Maisonneuve à titre bénévole. Ces 
                missionnaires urbaines ont forgé les bases du Chaînon, aujourd’hui devenue la principale maison 
                d’hébergement pour femmes en difficulté au Québec. Depuis quatre-vingt-cinq ans, des gens de 
                cœur contribuent à son épanouissement.
                </p>
            </div>
            <div class="wrapper datesImportantes">
                <h3 class="titre datesImportantes">Dates Importantes</h3>
                <div class="blocDate">
                    <div class="collumnOne">
                        <p class="date">1932</p>
                    </div>
                    <div class="collumnTwo">
                        <p class="infoDate">
                            Yvonne Maisonneuve ouvre un premier foyer d’accueil pour jeunes filles, rue 
                            Fairmount à Montréal.
                        </p>
                    </div>
                </div>
                <div class="blocDate">
                    <div class="collumnOne">
                        <p class="date">1940</p>
                    </div>
                    <div class="collumnTwo">
                        <p class="infoDate">
                        Déménagement au 101, rue de la Gauchetière.
                        </p>
                    </div>
                </div>
                <div class="blocDate">
                    <div class="collumnOne">
                        <p class="date">1946</p>
                    </div>
                    <div class="collumnTwo">
                        <p class="infoDate">
                        Ajout du service d’accueil de mères avec enfants qui sera offert pendant trente-trois 
                        ans.
                        </p>
                    </div>
                </div>
                <div class="blocDate">
                    <div class="collumnOne">
                        <p class="date">1947</p>
                    </div>
                    <div class="collumnTwo">
                        <p class="infoDate">
                        Installation d’une unité d’accueil pour fillettes en opération durant vingt ans.
                        </p>
                    </div>
                </div>
                <div class="blocDate">
                    <div class="collumnOne">
                        <p class="date">1950</p>
                    </div>
                    <div class="collumnTwo">
                        <p class="infoDate">
                        L’institut Notre-Dame de la Protection est structuré en association dont les membres 
                        qui font œuvre de missionnariat urbain seront appelées « associées ».
                        </p>
                    </div>
                </div>
                <div class="blocDate">
                    <div class="collumnOne">
                        <p class="date">1971</p>
                    </div>
                    <div class="collumnTwo">
                        <p class="infoDate">
                        Yvon Deschamps devient porte-parole. Il parlera du Chaînon durant 30 ans.
                        </p>
                    </div>
                </div>
                <div class="blocDate">
                    <div class="collumnOne">
                        <p class="date">1974</p>
                    </div>
                    <div class="collumnTwo">
                        <p class="infoDate">
                        Une expropriation force la fermeture temporaire de la maison.  
                        </p>
                    </div>
                </div>
                <div class="blocDate">
                    <div class="collumnOne">
                        <p class="date">1975</p>
                    </div>
                    <div class="collumnTwo">
                        <p class="infoDate">
                        Installation avenue de l’Esplanade dans un immeuble prêté par les Prêtres de 
                        Saint-Sulpice. Salariées et bénévoles commencent à grossir les rangs.
                        </p>
                    </div>
                </div>
                <div class="blocDate">
                    <div class="collumnOne">
                        <p class="date">1978</p>
                    </div>
                    <div class="collumnTwo">
                        <p class="infoDate">
                        Adoption de l’appellation Association d’entraide Le Chaînon.
                        </p>
                    </div>
                </div>
                <div class="blocDate">
                    <div class="collumnOne">
                        <p class="date">1979</p>
                    </div>
                    <div class="collumnTwo">
                        <p class="infoDate">
                        Tous les services d’hébergement sont désormais dédiés à des femmes seules.  
                        </p>
                    </div>
                </div>
                <div class="blocDate">
                    <div class="collumnOne">
                        <p class="date">1980</p>
                    </div>
                    <div class="collumnTwo">
                        <p class="infoDate">
                        Yvonne Maisonneuve s’éteint le jour de Noël.
                        </p>
                    </div>
                </div>
                <div class="blocDate">
                    <div class="collumnOne">
                        <p class="date">1984</p>
                    </div>
                    <div class="collumnTwo">
                        <p class="infoDate">
                        Réorganisation du service et ajout de places pour des séjours plus longs.
                        </p>
                    </div>
                </div>
                <div class="blocDate">
                    <div class="collumnOne">
                        <p class="date">1987</p>
                    </div>
                    <div class="collumnTwo">
                        <p class="infoDate">
                        Réaménagement des unités d’hébergement et ouverture de l’accueil de nuit comptant 12 
                        places et quatre autres places d’urgence.
                        </p>
                    </div>
                </div>
                <div class="blocDate">
                    <div class="collumnOne">
                        <p class="date">1993</p>
                    </div>
                    <div class="collumnTwo">
                        <p class="infoDate">
                        Ouverture de la première Maison Yvonne-Maisonneuve offrant 14 places à des femmes 
                        âgées ayant séjourné au Chaînon.
                        </p>
                    </div>
                </div>
                <div class="blocDate">
                    <div class="collumnOne">
                        <p class="date">2000</p>
                    </div>
                    <div class="collumnTwo">
                        <p class="infoDate">
                        Un incendie cause la perte totale du magasin Le Coffre aux trésors du Chaînon qui 
                        rouvre le 13 septembre à son emplacement actuel, boulevard Saint-Laurent.  
                        </p>
                    </div>
                </div>
                <div class="blocDate">
                    <div class="collumnOne">
                        <p class="date">2003</p>
                    </div>
                    <div class="collumnTwo">
                        <p class="infoDate">
                        Inauguration de la nouvelle Maison Yvonne-Maisonneuve, mieux adaptée aux besoins des 
                        résidantes.
                        </p>
                    </div>
                </div>
                <div class="blocDate">
                    <div class="collumnOne">
                        <p class="date">2011</p>
                    </div>
                    <div class="collumnTwo">
                        <p class="infoDate">
                        Grâce à une campagne majeure de financement, Le Chaînon devient propriétaire de la 
                        bâtisse qu’il occupe depuis 36 ans.
                        </p>
                    </div>
                </div>
                <div class="blocDate">
                    <div class="collumnOne">
                        <p class="date">2013</p>
                    </div>
                    <div class="collumnTwo">
                        <p class="infoDate">
                        Célébrations des 80 ans du Chaînon, devenu la principale ressource d’hébergement pour 
                        femmes en difficulté au Québec. La campagne promotionnelle Maillon à maillon. Le 
                        Chaînon est largement diffusé.
                        </p>
                    </div>
                </div>
                <div class="blocDate">
                    <div class="collumnOne">
                        <p class="date">2014</p>
                    </div>
                    <div class="collumnTwo">
                        <p class="infoDate">
                        Mise sur pied de La Fondation Le Chaînon vouée exclusivement à soutenir financièrement 
                        Le Chaînon. 
                        </p>
                    </div>
                </div>
                <div class="blocDate">
                    <div class="collumnOne">
                        <p class="date">2015</p>
                    </div>
                    <div class="collumnTwo">
                        <p class="infoDate">
                        La maison principale fait peau neuve suite à un imposant chantier de mise aux normes.
                        </p>
                    </div>
                </div>
                <div class="blocDate">
                    <div class="collumnOne">
                        <p class="date">2017</p>
                    </div>
                    <div class="collumnTwo">
                        <p class="infoDate">
                        Inauguration du Parc Yvonne-Maisonneuve.
                        </p>
                    </div>
                </div>
                <div class="blocDate">
                    <div class="collumnOne">
                        <p class="date">2018</p>
                    </div>
                    <div class="collumnTwo">
                        <p class="infoDate">
                        Le Chaînon célèbre ses 86 ans.
                        </p>
                    </div>
                </div>
            </div>
            <div class="wrapper chainonChiffres">
                <h3 class="titre chainonChiffres">Le Chaînon en Chiffres</h3>
                <div class="contenu samuel chainonChiffres">
                    <div class="carres1">
                        <div class="carre">
                        <div class="texteCarre"> 1932 : </br> Année de la construction </div>
                        </div>
                        <div class="carre">
                        <div class="texteCarre"> 66 : </br>Nombre de femmes hébergées pour plus d'une nuit</div>
                        </div>
                        <div class="carre">
                        <div class="texteCarre">105 : </br>Nombre d'employés</div>
                        </div>
                    </div>

                    <div class="carres2">
                        <div class="carre">
                        <div class="texteCarre">200 : </br> Nombre de bénévoles</div>
                        </div>
                        <div class="carre">
                        <div class="texteCarre">50 000 : </br> Nombre de repas servis par année</div>
                        </div>
                    </div>

                    <div class="carres3">
                        <div class="carre">
                        <div class="texteCarre">38𝇍 : </br>Coût de chacun des repas servis grâce aux dons de nourriture</div>
                        </div>
                        <div class="carre">
                        <div class="texteCarre">100% </br>de l'année nous affichons complet</div>
                        </div>
                        <div class="carre">
                        <div class="texteCarre">15% </br>du budget va à l'administration</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</article>
<?php endwhile; // Fermeture de la boucle ?>

<?php else : // Si aucune page correspondante n'a été trouvée ?>
	<h2>Oh oh, la page recherchée est disparue</h2>
<?php endif; 

// Appel le fichier footer.php
get_footer(); ?>