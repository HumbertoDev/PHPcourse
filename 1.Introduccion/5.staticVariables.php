<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Static Variables</title>
</head>
<body>
    <h1>Static Variables</h1>
    <p>This type of variables are usefull when we want to create variables that change <br>with every interaction</p>
    <h2>Global Way</h2>
    <p>adding `Global` to the functon and creating the variable outside the functon</p>
    <?php
    $count = 0;
    
    function counter(){
        global $count;
        $count++;
        echo "$count <br>";
    } 
    
    counter();
    counter();
    counter();
    counter();
    
    ?>

    <h2>The stacic Way - Lesscode Way</h2>
    <p>Creating a variable inside the function using the prefix `static`</p>
    <?php
        function counter2(){
            static $count2 = 0;
            $count2++;
            echo "$count2 <br>";
        }

        counter2();
        counter2();
        counter2();
        counter2();
    ?>
</body>
</html>