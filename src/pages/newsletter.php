<?php

  if(isset($_POST['email'])) {

    $name = addslashes($_POST['name']);
    $email = addslashes($_POST['email']);

  };

  $to = "contato@allcursoonline.com";
  $subject = "Inscrição de ".$name;
  $body = "Nome: ".$name."\r\n".
          "Email: ".$email."\r\n".
          "Desejo receber emails promocionais";
  $header = "From:contato@allcursoonline.com"."\r\n".
            "Reply-To :".$email."\r\n".
            "X=Mailer:PHP/".phpversion();
  if(mail($to, $subject, $body, $header)) {
    echo("Cadastro realizado com sucesso. Parabéns!");
  } else {
    echo("Falha no cadastro. Por favor, tente novamente!");
  };
?>
