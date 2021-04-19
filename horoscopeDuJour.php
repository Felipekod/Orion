<?php
require_once("Fonctions/fonctions.php");
create_entete_html();
create_entete_page();

$prenom = isset($_POST['txPrenom'])?$_POST['txPrenom']:'';
$nom = isset($_POST['txNom'])?$_POST['txNom']:'';
$dtNaissance = isset($_POST['dtNaissance'])?$_POST['dtNaissance']:'';
$signe = isset($_POST['signe'])?$_POST['signe']:'';

$jourSemaine = date('w');

$horoscope = recupererHoroscopeJour($signe);
?>

<main>

    <div class="horoscopeJour">
        <?php echo '<h2> Bonjour, ' . $prenom . ' ' . $nom .'</h2>';  ?>
        <?php echo '<p>'. $horoscope['horoscopeJour'] .'</p>' ?>
    </div>

</main>


<?php
create_footer_page();
?>