<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>
<body>
<h2>Primer ejercicio</h2> <br>
<h3> Mostrar los números del 1 al 100.</h3>

<?php

$i = 0;
do {
    print "<p>$i</p>\n";
    $i++;
} while ($i < 101);

?>

<h2>Segundo ejercicio</h2> <br>
<h3> Mostrar los números del 100 al 1.</h3>

<?php

$i = 100;
while ($i > 0) {
    print "<p>$i</p>\n";
    $i--;
} 

?>

<h2>Tercer ejercicio</h2> <br>
<h3> Mostrar los números pares del 1 al 100.</h3>

<?php

function es_par($numero) {
    return $numero % 2 == 0;
}

$i = 1;
for($i = 1; $i <= 100; $i++){
    if(es_par($i)){
        print "<p>$i<p>\n";  
    }
}
?>

<h2>Cuarto ejercicio</h2> <br>
<h3> Mostrar los números impares del 1 al 100.</h3>

<?php

function es_impar($numero) {
    return $numero % 2 != 0;
}

$i = 1;

for($i = 1; $i <= 100; $i++){
    if(es_impar($i)){
        print "<p>$i<p>\n";  
    }
}

?>

<h2>Quinto ejercicio</h2> <br>
<h3> Mostrar la suma de los números de 1 a 20.</h3>

<?php

$suma = 0;

for ($i =1; $i <= 20; $i++){
    $suma += $i;
}

print "La suma de los números del 1 al 20 es: " . $suma;

?>

<h2>Sexto ejercicio</h2> <br>
<h3> Mostrar la suma de números pares de 1 a 20.</h3>

<?php

$suma = 0;

for ($i =1; $i <= 20; $i++){
    if ($i % 2 == 0){
    $suma += $i;
    }
}

print "La suma de los números pares del 1 al 20 es: " . $suma;

?>
</body>
</html>