<?php
require_once("Fonctions/fonctions.php");
create_entete_html();
create_entete_page();
?>

<main>
		<h1> Les caracteristiques des signes</h1>
		<table>
				<thead>
					<tr>
						<th>Signe</th>
						<th>Élément</th>
						<th>Mode</th>
						<th>Positive</th>
						<th>Négative</th>
						<th>Planète maître du signe</th>
					</tr>

				</thead>
				<tbody>
					<tr class="caracteristiques-lignes">
						<td>Bélier</td>
						<td>Feu</td>
						<td>Cardinal</td>
						<td>Franc</td>
						<td>Impulsive / trop instinctif</td>
						<td>Mars</td>
					</tr>
					<tr class="caracteristiques-lignes">
						<td>Taureau</td>
						<td>Terre</td>
						<td>Fixe</td>
						<td>Stable</td>
						<td>Têtu / borné</td>
						<td>Venus</td>
					</tr>
					<tr class="caracteristiques-lignes">
						<td>Gémeaux</td>
						<td>Air</td>
						<td>Mutable</td>
						<td>Adaptable</td>
						<td>Superficiel(le)</td>
						<td>Mercure</td>
					</tr>
					<tr class="caracteristiques-lignes">
						<td>Cancer</td>
						<td>Eau</td>
						<td>Cardinal</td>
						<td>Protecteur / dévouement</td>
						<td>Jaloux / capricieux</td>
						<td>Lune</td>
					</tr>
					<tr class="caracteristiques-lignes">
						<td>Léo</td>
						<td>Feu</td>
						<td>Fixe</td>
						<td>Adaptable</td>
						<td>Superficiel(le)</td>
						<td>Soleil</td>
					</tr>
					<tr class="caracteristiques-lignes">
						<td>Vierge</td>
						<td>Terre</td>
						<td>Mutable</td>
						<td>Discipliné / logique</td>
						<td>Manque de souplesse/ rancunier</td>
						<td>Mercure</td>
					</tr>
					<tr class="caracteristiques-lignes">
						<td>Balance</td>
						<td>Air</td>
						<td>Mutable</td>
						<td>Adaptable</td>
						<td>Indécise/ hésitante</td>
						<td>Venus</td>
					</tr>
					<tr class="caracteristiques-lignes">
						<td>Scorpion</td>
						<td>Eau</td>
						<td>Fixe</td>
						<td>Adaptable</td>
						<td>Superficiel(le)</td>
						<td>Mercure</td>
					</tr>
					<tr class="caracteristiques-lignes">
						<td>Sagittaire</td>
						<td>Feu</td>
						<td>Mutable</td>
						<td>Judicieux</td>
						<td>Trop moraliste / incostant</td>
						<td>Jupiter</td>
					</tr>
					<tr class="caracteristiques-lignes">
						<td>Capricorne</td>
						<td>Terre</td>
						<td>Cardinal</td>
						<td>De principle / patient</td>
						<td>Intériorisé / Trop raisonné</td>
						<td>Saturne</td>
					</tr>
					<tr class="caracteristiques-lignes">
						<td>Verseau</td>
						<td>Air</td>
						<td>Fixe</td>
						<td>Libéral / sens de l'amitié</td>
						<td>Excentrique</td>
						<td>Uranus</td>
					</tr>
					<tr class="caracteristiques-lignes">
						<td>Poisson</td>
						<td>Eau</td>
						<td>Mutable</td>
						<td>Charitable / compatissant</td>
						<td>Anxieux / irresponsable</td>
						<td>neptune</td>
					</tr>
				</tbody>
				

			</table>
		
	</main>

<?php
create_footer_page();
?>