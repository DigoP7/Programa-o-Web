// Exercício: Manipulação de dados
// Objetivo: Aplicar conceitos básicos em um cenário prático.

<?php

echo "escolha a opção: 1 = Equilátero, 2 = Escaleno, 3 = isósceles.";

echo "<hr>";

$lado1 = 1;
$lado2 = 2;
$lado3 = 3;

if ($lado1 == $lado2 and $lado1 == $lado3){
    echo "você escolheu EQUILÁTERO.";
}

elseif ($lado1 != $lado2 and $lado1 != $lado3 and $lado2 != $lado3) {
    echo "Você escolheu ESCALENO";
}

else {
    echo "Você escolheu ISÓSCELES.";
}