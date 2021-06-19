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
            echo "<span style='color:red;'>Variable Created inside the Function: $name</span>";
        }

        echo "<span style='color:blue;'>Global Scope Variable: $name</span><br><br>";
        changeName();
    ?>

    <p>In <b>PHP</b> when we create a variable inside a function, this variable <b>ONLY have a LOCAL scope action.</b></p>

    <p>Despite if the declared name is the same of other  variables outside the function, when you call the variables, each one will have it own value.</p>

    <h2>The WRONG way to change a variablewith a function</h2>
    
    <p>We created a function call <i>wrongWay</i> and inside we just reassinged the name value to <i>"Paco trismegisto de Apolea"</i></p>
        <?php
            echo "Global Variable: $name<br><br>";
            require ('4.2.wrongWay.php');
            wrongWay();
            echo "<span style='color:red;'>Changed Variable: $name</span>";
        ?>
    <p>As we can observe, the <b>name</b> varialbe didnt changed at all. This is because the function has its own <b>name</b> variable.</p>

    <h2>The RIGHT way to change a variable with a function</h2>
    <p>the right way to do it is setting the $name varible as a global variable <b>inside the function</b></p>
    <?php
        echo "Global Variable: $name<br><br>";
        include ('4.1.rightWay.php');
        rightWay();
        echo "<span style='color:green;'>Changed Variable: $name</span>";
    ?>
    <p>In this case, we said to the function that <b>name</b> is a global variable in the <b>parent archive</b> (the archive where this function will work),<br> then when we include the function in the parent arhcive, the function take <b>name</b> as global and then it can change the variable value.</p>

    <h2>The reasson why?</h2>
    <p>It's very simple. With PHP you can reuse a lot of code, but it will be a chaos if you include<br>a function with the same variables names of your document.</p>
    <p>PHP prevents you to accidentaly modify your own archive with other code variables.</p>

    <p>If you want to use other code, first set your variables as global in the imported function and everything will work <br>without any problem.</p>

</body>
</html>