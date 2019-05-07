<?php
$nome= filter_input(INPUT_POST, "nome");
$email=filter_input(INPUT_POST, "email");
$fone=filter_input(INPUT_POST, "fone");
$descricao=filter_input(INPUT_POST, "descricao");
echo "Nome: " . $nome;
echo "<br>E-mail: " . $email;
echo "<br>Descrição: " . $descricao;
echo "<br>Fone: " . $fone;

?>