<?php
session_start();

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT);
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

if($nome && $idade && $email){
    echo "Nome: ".$nome;
    echo "<br/>Email: ".$email;
    echo "<br/>Idade: ".$idade;
    
}else{
    $_SESSION['aviso'] = 'Preencha todos os campos obrigatórios';

    header("Location: index.php");
    exit;
}