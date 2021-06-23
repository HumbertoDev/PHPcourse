<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contants</title>
</head>
<body>
<h1>CONSTANTS</h1>
<p>Son variables que NO pueden cambiar. Existen algunas reglas para las variables:</p>
<ul>
<li>Siempre deben ir en mayusculas</li>
<li>NO cambian</li>
<li>Se definen con DEFINE()</li>
<li>No se pueden concatenar dentro de un texto</li>
</ul>
<?php
define("AUTOR", "Humberto");
echo AUTOR;
?>
<br><br>
<?php
echo "El autor es: " . AUTOR;
?>
<br><br>
<?php
define("INSENSIBLE","Ya no hay constantes case insensitive");
echo INSENSIBLE;
print "<h2>Estas son Variables Constantes predefinidas:</h2>";
echo "Imprime la ubicacion del archivo: " . __FILE__;
echo "Imprime la linea del codigo: " . __LINE__;
?>
    
</body>
</html>