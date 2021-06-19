<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variable Scope</title>
</head>
<body>
    <h1>Variable Scope</h1>
    <p>In php the function scope is a little bit different than in other lenguages.</p>
    <p>In this page, we are going to try different methods to proof this statement.</p>

    <?php
        //example
        $name = "Humberto Diaz Grieve";
        function changeName(){
            $name = "Esteban Diaz Grieve";
            echo "Variable Created inside the Function: $name";
        }

        echo "Global Scope Variable: $name <br><br>";
        changeName();
    ?>

    <p>In <b>PHP</b> when we create a variable inside </p>
</body>
</html>