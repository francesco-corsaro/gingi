

<?php
if (!empty(htmlspecialchars($_POST ['mit']))){
$mittente=$_POST ['mit'];
$destinatario='gingipc@gmail.com';
$oggetto=$_POST['ogg'];
$corpo='Nome: '.$_POST['name'].' Email: '.$_POST ['mit'].' Numero: '.$oggetto.' Messaggio: '.$_POST['corpo'];
$mail_headers = "From:$mittente " .  " <" .  $mittente . ">\r\n";
$mail_headers .= "Reply-To: " .  $mittente . "\r\n";
$mail_headers .= "X-Mailer: PHP/" . phpversion();
mail($destinatario, $oggetto, $corpo, $mail_headers);




$ok= " <p>Il messaggio è stato inviato correttamente </p>";


}
?>
