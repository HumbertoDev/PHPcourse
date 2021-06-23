<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Response</title>
</head>
<body>

<?php

$name = $_POST["name"];
$lastName = $_POST["lastName"];
$number1 = $_POST["number1"];
$number2 = $_POST["number2"];
$select = $_POST["select"];
$result = 0;
if($select == "Sum"){
    $result = $number2 + $number1;
}elseif($select=="Rest"){
    $result = $number2 - $number1;
}elseif($select=="Multiplication"){
    $result = $number2 * $number1;
}elseif($select=="Divition"){
    $result = $number2 / $number1;
}

echo "<h1>Hi $name $lastName. You're Welcome!</h1> <br> 
<span style='color:red;'> Your Result is: $result </span>";

?>
</body>
</html>
