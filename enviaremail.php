<?php
  //1 – Definimos Para quem vai ser enviado o email
  $para = "biancasaraiva@cstsaraiva.com.br";
  //$para = "agsoares@gmail.com";
  //2 - resgatar o nome digitado no formulário e  grava na variavel $nome
  $nome = $_POST['name'];
  // 3 - resgatar o assunto digitado no formulário e  grava na variavel //$assunto
  $assunto = $_POST['assunto'];
  //4 - resgatar endereco
  //$endereco = $_POST['endereco'];
  //5 - resgatar telefone
  $tel = $_POST['tel'];
  //6 - resgatar email
  $email = $_POST['email'];
  //7 - resgatar a mensagem
  $texto = $_POST['message'];
  
  
   //7 – Agora definimos a  mensagem que vai ser enviado no e-mail
  $mensagem = "<strong>Contato solicitado.</strong>";
  $mensagem .= "<br> <strong>Segue dados do contato:</strong>";
  $mensagem .= "<br> <strong>--------------------------------------------------------</strong>";
  $mensagem .= "<br> <strong>Nome:  </strong>".$nome;
  $mensagem .= "<br> <strong>E-mail: </strong>".$email;
  $mensagem .= "<br> <strong>Tel: </strong>".$tel;
  $mensagem .= "<br> <strong>Assunto: </strong>".$assunto;
  $mensagem .= "<br> <strong>Mensagem: </strong>".$texto;
  
  
  //8 – agora inserimos as codificações corretas e  tudo mais.
  $headers =  "Content-Type:text/html; charset=UTF-8\n";
  $headers .= "From: CST Saraiva<biancasaraiva@cstsaraiva.com.br>\n"; //Vai ser //mostrado que  o email partiu deste email e seguido do nome
  $headers .= "X-Sender: <biancasaraiva@cstsaraiva.com.br>\n"; //email do servidor //que enviou
  $headers .= "X-Mailer: PHP  v".phpversion()."\n";
  $headers .= "X-IP:  ".$_SERVER['REMOTE_ADDR']."\n";
  $headers .= "Return-Path: <biancasaraiva@cstsaraiva.com.br>\n"; //caso a msg //seja respondida vai para  este email.
  $headers .= "MIME-Version: 1.0\n";
mail($para, $assunto, $mensagem, $headers);  //função que faz o envio do email.
mail($email, "Contato", "Caro(a) ".$nome.", agradecemos o contato. Em breve estaremos retornando.",$headers);
header("location:contact.php");
?>