<?php

#Tipos de variables
$nombreVariable = "Hola mundo";
$Nnumero = 10;
$decimal = 10.5;
$bool = true;
$array = [1,2,3];

#Estructuras de control
#Si simpla
if (condition) {
    
}
#Si doble
if (condition) {
    echo "Si";
} else {
    echo "No";
}
#Si anidado
if (condition) {
    echo "Si";
} else if (condition) {
    echo "Si";
} else {
    echo "No.$anidar";
}
#Ciclos
#Ciclo FOR
for ($i = 0; $i < 10; $i++) { 
    echo $i;
}
#Ciclo while
$i = 0;
while ($a <= 10) {
    echo $i;
    $i++;
}
#Ciclo do while
do {
    echo $i++;
    $i++;
} while ($a < 10);
#ciclo FOREACH
$array = [1,2,3,4,5];
foreach ($array as $value) {
    echo $valor;
}
#FUNCIONES
function sumar($a, $b){
    return $a + $b;
}
echo sumar(10, 20);
?>