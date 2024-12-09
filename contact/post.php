<!Doctype html>
<?php

include('../shared/sendmail.php');


$nom =  $_POST['nom'];
$email = $_POST["email"];
$message = $_POST['message'];


if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  // invalid emailaddress
  echo "adresse invalide ";
}

if (

  preg_match("/^[a-zA-Z-' ]*$/", $nom) && !empty($nom) &&
  filter_var($email, FILTER_VALIDATE_EMAIL) &&  !empty($email) &&
  !empty($message)
) {

  //
  echo "<div style='display:none'>";
  $title = "Nouveau message de " . $nom;
  $message_for_prestataire =
    "Bonjour,<br/><br/>" .
    "Nous souhaitons vous informer que nous avons reçu un message de la part de " . $nom . " et voici son mail " . $email . " <br/><br/><strong>" .
    $message . "</strong> <br/><br/><br/>" .
    "Cordialement </br> ";

  $back1 = sendmail("safinazyilmaz54@gmail.com", $title, $message_for_prestataire, $title);


  $message_for_client =
    "<div class='div-email'>" .
    "Bonjour " . $nom . ",<br/><br/>" .
    "Nous vous remercions pour votre message que nous avons bien reçu. Nous en prenons connaissance avec attention et reviendrons vers vous dans les meilleurs délais pour répondre à vos besoins.<br/><br/>" .
    "N’hésitez pas à nous contacter si vous avez d’autres précisions ou demandes en attendant.<br/><br/>" .
    "Cordialement,<br/>" .
    "Safinaz YILMAZ<br/>" .
    "Developpeuse Web Freelance" .
    "</div>" .
    "<style>.div-email{font-size:19px;}</style>";

  $back2 = sendmail($email, "Bonne reception de votre message", $message_for_client, "Bonne reception de votre message");

  echo "</div>";
}

echo $back1 . " " . $back2;

if ($back1 == 'Successfully sent' && $back2 == 'Successfully sent') {
  echo "<script> document.location.href='index.php?sent=ok';</script>";
} else {
  echo "<script> document.location.href='index.php?sent=error';</script>";
}

?>