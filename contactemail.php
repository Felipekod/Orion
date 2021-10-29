<?php
require_once("Fonctions/fonctions.php");
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/phpmailer/src/Exception.php';
require 'vendor/phpmailer/phpmailer/src/OAuth.php';
require 'vendor/phpmailer/phpmailer/src/POP3.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php';
create_entete_html();
create_entete_page();

$nomComplet = isset($_POST['txNom'])?$_POST['txNom']:'';
$txEmail = isset($_POST['txEmail'])?$_POST['txEmail']:'';
$tel = isset($_POST['txTel'])?$_POST['txTel']:'';
$message = isset($_POST['txMessage'])?$_POST['txMessage']:'';


try{
    $mail = new PHPMailer\PHPMailer\PHPMailer();
    $mail -> Host = "smtp.gmail.com"; 
    $mail -> Port = 587;
    $mail -> SMTPAuth = true;
    $mail -> SMTPSecure = 'tls';
    $mail->CharSet="UTF-8";
    $mail -> Username = 'votregmail@gmail.com';
    $mail -> Password = 'votreMotPasse';
    $mail -> setFrom('felipe.kodorna@gmail.com', 'Teste');
    $mail->addAddress("felipe.kod@gmail.com", "Teu amor");
    $mail -> IsSMTP(true);
    $mail->isHTML(true);
    $mail->AllowEmpty = true;
    $mail -> SMTPDebug = 3;
    $mail -> Subject = "This is test message.";
    $mail->AltBody    = "To view the message, please use an HTML compatible email viewer!";
    $mail -> Body = 'Client:' . $nomComplet . '<br> Message : ' . $message . '<br> Telephone: ' . $tel . ' <br> Email: '. $txEmail;

}
catch (phpmailerException $e) 
{
    echo $e->errorMessage(); //Error messages from PHPMailer
} 



if (!$mail -> send())
{

    echo "Error -- Message not send!";
    
}
else{
    echo '<p id="emailEnvoye"> Message envoyé: </p>';
    echo 'Client:' . $nomComplet . '<br> Message : ' . $message . '<br> Telephone: ' . $tel . ' <br> Email: '. $txEmail;
}

?>


<?php
create_footer_page();
?>