<!Doctype html>
<?php 

include('../shared/sendmail.php');


$nom=  $_POST['nom'];
$email = $_POST["email"];
$message = $_POST['message'];


if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    // invalid emailaddress
    echo "adresse invalide ";
}

if(
    
    preg_match("/^[a-zA-Z-' ]*$/",$nom) && !empty($nom) &&
    filter_var($email, FILTER_VALIDATE_EMAIL) &&  !empty($email) &&
    !empty($message)  
)
{
  
//
  //  echo "<div style='display:none'>";
    $title = "Nouveau message de ". $nom;
    $message_for_ayhan =  $nom ." vous a écrit :  <br/><br/>". "'".$message."' <br/><br/> Son email: ".$email ;
  
    $back1 = sendmail("safinazyilmaz54@gmail.com", $title , $message_for_ayhan, $title );
   
    
    $message_Reception ="Nous avons bien reçu votre message. Nous mettons tout en oeuvre pour vous répondre dans les plus brefs délais. Si toutefois, votre requête est laissée sans réponse, nous vous encourageons à nous contacter par téléphone au <a href='tel:0768259414'>07 68 25 94 14</a>.";

    $back2 = sendmail("safinazyilmaz54@gmail.com" , "Message reçu" , $message_Reception , "Message reçu" );
    
   // echo "</div>";
     
}

echo $back1. " " . $back2;

if($back1 == 'Successfully sent' && $back2 == 'Successfully sent'){
        echo "<script> document.location.href='index.php?sent=ok';</script>";
}else{
     echo "<script> document.location.href='index.php?sent=error';</script>";
}

?>

<script>
    
</script>