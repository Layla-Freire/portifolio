<?php
$name = $_POST['name'];
$email = $_POST['email'];
$assunto = $_POST['assunto'];
$mensagem = $_POST['mensagem'];

$seuemail = "layla_freire@yahoo.com.br";

$corpo = "<span style='font-weight: bold'>Nome:</span> $name<br>";
$corpo .= "Email: $email<br>";
$corpo .= "Assunto: $assunto<br>";
$corpo .= "Mensagem: $mensagem<br>";

/* não alterar */
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

mail($seuemail, $assunto, $corpo, $headers);
?>
<script>
    alert('Dados enviados com sucesso!');
    location.href="index.html";
</script>
