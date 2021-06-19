<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
    <style>
        body{
            margin:0;
        }
    </style>
</head>
<body>
    
    <h1 class="heading"> Functions with PHP </h1>

    <p>The php function syntaxis is the same as the JavaScript syntaxis. </p>

    <p>All the logic is the same BUT it is important to keep in mind that our PHP code wont work is we dont use the semi colon <b>;</b></p>

    
    
    <h2>Writting the functionin here</h2>
    <p>The function below allows me to print something.</p>
    <p>In this case, I write the function in this document.</p>
    <?php  
    
    function writeName(){
        echo "<span style='background-color:#4285f4;color:white;font-weight:700;padding:10px 24px; border-radius:20px;'>I born here.</span>";
    }
    writeName();
    ?>

    <p>This is usfull when it is a non reusable peace of code... like a very specific conditional.</p>

    <h2>Writing the function in other archive: <b>Include</b></h2>
    <p>If you have a very reusable peace of code that maybe you will want to sent along all your site, you MUST use "include"</p>

    <?php
    include ("3.1.include.php");

    writeCode();
    ?>

    <p>It is important to use the right sintaxis in order to get the righgt results.</p>

    <p>include ('<i>archiveName.php</i>')</p>

    <h2>Writing the function in other archive: <b>Require</b></h2>
    <p>Is as powerfull as include but have some functionalities that diferentiates it from the first one.</p>   
    <p>When we use require we are telling the browser that we NEED this archive in order to execute the rest of the code.</p>
    <p>On the other hand, when we use include, we are telling the browser that this archive is important but NO imperative.</p>
    <p>So the code bellow the function can be executable.</p>
    <?php
        require ('3.2.require.php');
        requiredCode();
    ?>

    <p>When we use require the code we write bellow the inexisting function wont be parsed.</p>

    <h2>Calling Variables</h2>

    <p>In this case, we are calling different variables from other archive.</p>
    <p>In this archive, que are saving all our variables. Its like lego. We use diferent functions and archives to built our page.</p>
    <?php
        include ('3.3.variables.php');
        echo "mi nombre es $name y mi hermano se llama $name2", "<br><br>", "Nuestra edad suma ", "Yo tengo $edad anios y mi hermano tiene $age anios"; 
    ?>

</body>
</html>