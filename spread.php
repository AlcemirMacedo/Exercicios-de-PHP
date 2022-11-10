
<?php


$bolo1 = [
    'Trigo', 
    'Manteiga', 
    'Ovos'
];

$bolo2 = [
    'Leite Condensado',
    'Chocolate em pó',
    'Limão'
];

$bolo_pronto = [...$bolo1, ...$bolo2]; // usa 3 pontos para indicar o spread 
echo $bolo_pronto[3]; // imprime 'Leite condensado'


?>