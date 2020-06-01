<?php

  $name = $_POST['nome'];

  $email = $_POST['email'];

  $fone = $_POST['fone'];

  $message = $_POST['mensagem'];

  //$formcontent=" De: $name \n $fone \n Messagem: $message";

  $formcontent="De: $name \n Email: $email \n Telefone: $fone \n Mensagem: $message ";

  $recipient = "adm_site@metalcap.net.br";

  $subject = "Fale Conosco";

  $mailheader = "From: $email \r\n";

  mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");

  echo "Mensagem Enviada com Sucesso!" . " -" . "";

?>
