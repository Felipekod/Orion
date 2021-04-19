<?php
require_once("Fonctions/fonctions.php");
create_entete_html();
create_entete_page();
?>
    <main>

            <form class="contact" action="horoscopeDujour.php" method="post">
				
				<label for="prenom">Prenom</label>
				<input type="text" id="prenom" name="txPrenom" class="input" required placeholder="Voulez saisir votre prenom ici">

				<label for="nom">Nom</label>
				<input type="text" id="nom" name="txNom" class="input" required placeholder="Voulez saisir votre nom ici">

				<label for="naissance">Date de naissance</label>
				<input type="date" id="naissance" name="dtNaissance" required>

				<fieldset>
					<legend>Voulez selectionner votre signe:</legend>
					<select name="signe">
						<option>Belier</option>
						<option>Taureau</option>
						<option>Gémeaux</option>
						<option>Cancer</option>
						<option>Lion</option>
						<option>Vierge</option>
						<option>Balance</option>
						<option>Scorpion</option>
						<option>Sagittaire</option>
						<option>Verseau</option>
						<option>Poisson</option>
						<option>Capricorne</option>
					</select>
				</fieldset>

				<input type="submit" value="Envoyer formulaire" class="enviar">

			</form>
	</main>


<?php
create_footer_page();
?>