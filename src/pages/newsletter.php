<?php

if(isset($_POST[email]) && !empty($_POST[email])) {
  
  $nome = addslashes($_POST[name]);
  $email = addslashes($_POST[email]);

  $to = "contato@allcursoonline.com";
  $subject = "Newsletter - Confeitaria Lucrativa";
  $body = "Name".$nome. "\r\n".
          "Email ".$email. "\r\n".
          "Mensagem: Desejo receber novidades nesse email.";
  $header = "From:contato@allcursoonline.com"."\r\n".
            "Reply-to:".$email."\r\n".
            "X-Mailer:PHP/".phpversion();

  if(mail($to, $subject, $body, $header)) {
    echo("Cadastro efetuado com sucesso!");
  } else {
    echo("Falaha ao cadastrar, tente novamente!");
  }
};
?>
