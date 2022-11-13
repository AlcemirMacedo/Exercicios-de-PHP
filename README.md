# Exercicios-de-PHP
----------------------------
Revisando conceitos básicos para solidificar meus conhecimentos na linguagem PHP e partir para o Laravel.

~~~php
$ingredientes = [
    'Açúcar',
    'Farinha de trigo',
    'Ovo',
    'Leite',
    'Fermento em pó'
];

print_r($ingredientes);

echo "<br/><br/>foreach pegando somente o valor<br/>";
echo "<ul>";
foreach($ingredientes as $valor){
    echo "<li>Ingrediente: ".$valor.".</li>";
}
echo "</ul>";

echo "<br/><br/>foreach pegando chave => valor<br/>";
echo "<ul/>";

foreach($ingredientes as $chave => $valor){
    echo "<li>Ingrediente ".($chave + 1).": ".$valor.".</li>";
}

echo "</ul>"
~~~php

