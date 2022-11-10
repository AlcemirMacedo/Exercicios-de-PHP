<?php

//CONDICIONAL IF
$idade = 17;

if ($idade < 18){
    echo "Menor de idade";
}else{
    echo "Maior de idade";
}

//OPERADOR TERNÁRIO
//(Copndição) ? RESULTADO POSITIVO : RESULTADO NEGATIVO;

echo "<br/>";
echo ($idade > 18) ? "Maior de idade" : "Menor de idade";

$menorDeIdade = ($idade < 18)? true : false;
if($menorDeIdade){
    echo "<br/>Menor";
}else {
    echo "<br/>Maior";
}

?>