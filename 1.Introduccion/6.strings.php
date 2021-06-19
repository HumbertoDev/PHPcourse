<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings</title>
    <style>
        body{
            margin: 10px;
            background-color:rgba(52,168,83,0.10);
        }

        h1,h2{
            margin-top:50px;
            color:#515151;
        }

        .example{
            margin:40px 0 50px 20px;
        }
        .enfasis{
            color:white;
            background-color:#013243;
            font-weight:700;
            padding:10px 24px;
            border:none;
            border-radius:10px;
            box-shadow:5px 5px 20px black;
        }
    
    </style>
</head>
<body>

        <h1>Strings</h1>
        <h2>Printing Variables</h2>
        <p>We know that using print or echo we can add something to the html <br> but we must enphatize a little big detail: <b>''</b> and <b>""</b> are diferent.</p>
            <h3>Double Cuotes</h3>
            <p class="enfasis">The printing with "" is flexible and accept variable inside</p>
            <?php
                //using ""
                $text = "I'm a text and I want to be great!";
                print "We are print a variable using double Cuotes \"\" <br><br>";
                print "Result: $text <br>";
            ?>
            <h3>Single Cuotes</h3>
            <p>The printing with single cuotes is literal. It does't accept any variable inside</p>
            <?php
                //using ''
                print 'We are printing a variable using single cuotes \' \' <br><br>';
                print 'Result: $text';
            ?>

        <h2>Appliying Styles</h2>
        <p>We can apply styles using php. In this case, we created 2 classes> enfasis and example.</p>
        
        <?php
            echo "<p class='example'><span class=\"enfasis\">$text</span></p>", '<p class="example"><span class="enfasis">$text</span></p>';
        ?>

        <h2>Comparing 2 Strings</h2>
        <h3>strcmp</h3>
        <?php
            $str1 = "Soy un Texto Sexy";
            $str2 = "Soy un texto sexy Carajo";
            $compareCmp = strcmp($str1,$str2);
            print "$compareCmp";
        ?>
        <h3>strcasecmp</h3>
        <?php
            $str3 = 'Me Llamo Juan';
            $str4 = 'Me Llamo Juan Humberto Diaz';
            $compareCaseCmp = strcasecmp($str3,$str4);
            echo "$compareCaseCmp";
        
        ?>
</body>
</html>