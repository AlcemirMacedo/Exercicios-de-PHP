<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fomulários com PHP</title>
</head>
<body>

<?php
session_start();
require_once('header.php');

if($_SESSION['aviso']){
    echo $_SESSION['aviso'];
    $_SESSION['aviso'] = '';
}


?>

<form method="POST" action="recebe-form.php">
    <div>
        <label for="nome">Nome</label>
        <input type="text" id="nome" name="nome"/>
    </div>
    <br>
    <div>
        <label for="email">Email</label>
        <input type="text" id="email" name="email"/>
    </div>
    <br>
    <div>
        <label for="idade">Idade</label>
        <input type="text" id="idade" name="idade"/>
    </div>
    <br>    
    <div>        
        <input type="submit" value="Enviar"/>
    </div>
</form>
    
</body>
</html>