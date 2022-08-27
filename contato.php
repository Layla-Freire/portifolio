<?php
$para = "layla_freire@yahoo.com.br";
$name = $_POST['name'];
$email = $_POST['email'];
$assunto = $_POST['assunto'];
$mensagem = "<strong>Nome: </strong>".$name;
$mensagem .= "<br> <strong>Mensagem: </strong>"
.$_POST['mensagem'];
$headers =  "Content-Type:text/html; charset=UTF-8\n";
$headers .= "From:  dominio.com.br<sistema@dominio.com.br>\n";
$headers .= "X-Sender:  <sistema@dominio.com.br>\n";
$headers .= "X-Mailer: PHP  v".phpversion()."\n";
$headers .= "X-IP:  ".$_SERVER['REMOTE_ADDR']."\n";
$headers .= "Return-Path:  <sistema@dominio.com.br>\n";
$headers .= "MIME-Version: 1.0\n";

mail($para, $assunto, $mensagem, $headers);
?>