// Exercício: Laços de repetição
// Objetivo: Trabalhar com loops para executar repetições.

<?php

$latencia = 50;
switch ($latencia) {
    case $latencia == 0:
        echo "CRITICO: Equipamento inacesssível.";
        break;
    case $latencia <= 50:
        echo "OK: Conexão excelente.";
        break;
    case $latencia > 50:
        echo "Conexão Aceitavel, mas requer atenção.";
        break;
    case $latencia <= 150:
        echo " conexão Aceitavel, mas requer atenção.";
        break; 
    case $latencia > 150:
        echo "ERRO: Latência ALTA! Verifique o item.";
        break;
}