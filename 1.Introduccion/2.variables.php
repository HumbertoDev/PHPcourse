<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables</title>
    <style>
        body{padding:25px;}
        h1{font-family:Verdana, roboto;font-size:50px;background:linear-gradient(to right top, #00ffe9,#4ee8ff);-webkit-background-clip:text;color:transparent;"}
        p{font-family:Verdana, roboto;font-size:32px}
    </style>
</head>
<body>
    <h1>Variables numericas</h1>
    <?php 
        # siempre se crean con el $ adelante
        $variable1 = 5;

        #se puede tener una variable dentro de una cadena de texto SIN concatenar
        ## Sin embargo,solo sirve con ""
        echo "Esto es una variable igual a $variable1",'<br><br>';
        # con comillas simples  no funciona ''
        print 'Esto es una variable igual a $variable1';
    ?>
    <br>
    <h1>Variables String y Bool</h1>
    <?php
        #creamos variables
        $letras = "Humberto";
        $boleano = True;
        $boleanoF = False;
        print "<h2>Ejemplo con Boleano True</h2>";
        #Cuando el valor del booleano es true, se pinta como 1
        echo "Mi nombre es $letras";
        echo "<p>Y tengo $boleano pelota de futbol</p>";
        print "<h2>Ejemplo con Boleano False</h2>";
        #Cuando el valor del booleano es false, se pinta vacio
        echo "<p>Mi nombre no es $letras</p>";
        echo "<p>Y me siento hasta la $boleanoF</p>";
    ?>
    <h1>Variable Array</h1>
    <?php
        $frutas = array('Manzana','Pera','Banana');
        
        echo "<p>Me gusta la $frutas[2]</p>";
        echo "<p>Mi Otra fruta favorita es la $frutas[0]</p>"
    ?>
</body>
</html>
<!-- las variables en php se empiezan con $ -->


