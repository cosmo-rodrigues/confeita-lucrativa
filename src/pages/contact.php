<?php

if(isset($_POST[email]) && !empty($_POST[email])) {
  
  $name = addslashes($_POST[name]);
  $email = addslashes($_POST[email]);
  $telephone = addslashes($_POST[telephone]);
  $description = addslashes($_POST[description]);

  $to = "contato@allcursoonline.com";
  $subject = "Newsletter - Confeitaria Lucrativa";
  $body = "Name".$name. "\r\n".
          "Email ".$email. "\r\n".
          "Telefone".$telephone. "\r\n".
          "Mensagem: ". "\r\n";
  $header = "From:contato@allcursoonline.com"."\r\n".
            "Reply-to:".$email."\r\n".
            "X-Mailer:PHP/".phpversion();

  if(mail($to, $subject, $body, $header)) {
    echo("Email efetuado com sucesso!");
  } else {
    echo("Falaha ao enviar email, tente novamente!");
  }
};
?>
