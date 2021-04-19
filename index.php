<?php
require_once("Fonctions/fonctions.php");
create_entete_html();
create_entete_page();
?>

<main>
	<section class="banner">
		<img src="Images/signezodiaque.jpg">
	</section>
	<div class="background">
		<section class="about">
            <h2>L'astrologie</h2>
            <img src="Images/astrologie.jpg">
            <p>L'astrologie est un ensemble de croyances et de pratiques fondées sur l'interprétation symbolique des correspondances supposées entre les configurations célestes (la position et le mouvement des planètes du système solaire) et les affaires humaines, collectives ou individuelles.</p>
	    </section>
	    <section class="video">
		    <iframe width="560" height="315" src="https://www.youtube.com/embed/xySfvsY2eiw" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	    </section>
		
	</div>
			
</main>

<?php

create_footer_page();

?>
