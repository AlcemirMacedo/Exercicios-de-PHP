<?php
// IDENTIFIQUE O ERRO

// código errado
/*$lista = [
    'nome' => 'Alcemir',
    'idade' => 40,
    'atributos' => [
        'forca' => 80,
        'inteligência' => 100
    ],
    vida = 1000,
    mana = 50
];

echo "Nome: ".$lista['nome']."<br/>";
echo "Força: ".$lista['atributos']['forca']."<br/>";
echo "Vida: ". $lista['vida'];

?>*/


// código corrigido
$lista = [
    'nome' => 'Alcemir',
    'idade' => 40,
    'atributos' => [
        'forca' => 80,
        'inteligência' => 100
    ],
    'vida' => 1000,
    'mana' => 50
];

echo "Nome: ".$lista['nome']."<br/>";
echo "Força: ".$lista['atributos']['forca']."<br/>";
echo "Vida: ". $lista['vida'];

?>