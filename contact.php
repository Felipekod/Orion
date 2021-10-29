<?php
require_once("Fonctions/fonctions.php");
create_entete_html();
create_entete_page();
?>

<main>
		<form class="contact" method="post" action="contactemail.php">
				
				<label for="nom">Nom complet</label>
				<input name="txNom" type="text" id="nomcomplet" class="input" required placeholder="Voulez saisir votre nom complet ici">

				<label for="email">Email</label>
				<input name="txEmail" type="email" id="email" class="input" required placeholder="votre@email.com">

				<label for="telephone">Telephone</label>
				<input name="txTel" type="tel" id="telephone" class="input" placeholder="(XXX) XXX-XXXX">

				<label for="mensage">Message</label>
				<textarea name="txMessage" id="mensage" cols="70" rows="15" required> </textarea>

				<fieldset>
					<legend class="teste" id="teste">Comment préférez vous être contacté?</legend>

					<label for="radio-email"><input name="contact" id="radio-email" type="radio" value="email" checked>Email</label>
					

					<label for="radio-telefone"><input name="contact" type="radio" value="telephone" id="radio-telefone">Telephone</label>
					
					
				</fielset>
				

				<label class="checkbox"><input type="checkbox" checked> Voulez vous recevoir nos nouveautés par e-mail? </label>

				<input name="sendMail" type="submit" value="Envoyer formulaire" class="enviar">

			</form>
	</main>


<?php
create_footer_page();
?>