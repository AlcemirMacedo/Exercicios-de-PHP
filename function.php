<?php
//Princípio de funções
function subsequente() {
    for($i=0;$i<10;$i++) { 
        echo $i."<br/>";
    }
    echo "<hr/>";
}

subsequente();

//Funções e parâmetros
function somar($n1, $n2){
    $total = $n1 + $n2;
    return $total;
}

$soma = somar(10, 5);
echo "Total: ".$soma;
echo "<br/><hr/>";

$x = somar(2, 5);
$y = somar(4, 5);
$w = somar($x, $y);
echo "X + Y = ".$w;

echo "<hr/>";

//Funçao sort() organiza em ordem crescente os valores do array
$lista = [3, 5, 1];
sort($lista);
print_r($lista);

?>

