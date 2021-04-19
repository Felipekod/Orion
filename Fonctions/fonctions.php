<?php

function ConnectionBD()
{
    
        // creation de la connexion à MySQL
        $db = mysqli_connect('localhost', 'root');
        $ok = mysqli_select_db($db, 'orion');
        if(! $ok)
        {
            //S'il est impossible de selectionner la base de données
            $ok = mysqli_close($connection);
        }
        else
        {
            //Initialisation du "charset"
            mysqli_set_charset($db, 'utf8');

            //retour de la chaine de connexion à la fonction appelante
            return $db;
        }
        
}


function create_entete_html()
{
?>
<!DOCTYPE html>
<html lang="fr-CA">
    <head>
        <meta charset="utf-8">
        <title>Astrologie Orion</title>
        <link rel="stylesheet" href="CSS/style.css">
        <link rel="stylesheet" href="CSS/reset.css">
        <link href="https://fonts.googleapis.com/css2?family=Kranky&display=swap" rel="stylesheet">
    </head>
<?php
}

function create_entete_page()
{
?>
<body>
		<header>
			<div class="boite">
			<img src="images/zodiac.jpg">
			<h1>Astrologie Orion</h1>
			<nav>
				<ul>
					<li><a href="index.php">Accueil</a></li>
					<li><a href="contact.php">Contact</a></li>
					<li><a href="horoscope.php">Horoscope du jour</a></li>
					<li><a href="#">Les signes &#11206;</a>
						<ul>
							<li class="submenu"><a href="signes.php">Les dates du zodiaque</a></li>
							<li class="submenu"><a href="caracteristiques.php">Les caracteristiques</a></li>
							<li class="submenu"><a href="traits.php">Les traits</a></li>
						</ul>
					</li>
			    </ul>
			</nav>
			

			</div>
		</header>

<?php
}

function create_footer_page()
{
?>
    <footer>
			<p class="copyright">&copy; Copyright Astrologie Orion</p>
	</footer>
</body>
</html>
<?php
}


function recupererHoroscopeJour ($signe) 
{
	$connection = ConnectionBD();
	//On recupere le jour de la semaine
	$jourSemaine = date('w');

	if(! $connection)
	{
		//Creation d'un message qui averti l'utilisateur de l'erreur
		echo "Il est actuellement impossible de se connecter à la BD";
	}
	else {
		//Creation de la requete de selection
		$requete = mysqli_query($connection, "SELECT horoscopeJour FROM horoscopejoursemaine AS A INNER JOIN signes AS B ON A.signeId = B.idSigne Where B.signe = '$signe' and A.jourSemaine = $jourSemaine");

		if(mysqli_num_rows($requete) != 0)
		{
			$horoscope = mysqli_fetch_assoc($requete);
			return $horoscope;
		}
		else
		{
			echo "Erreur";
		}
		
		
	}

}

function print_r2($val){
	echo '<pre>';
	print_r($val);
	echo  '</pre>';
}


?>