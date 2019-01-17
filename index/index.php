<!DOCTYPE html>
<html lang="en">
<title>Zadatak 1</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    body {font-family: "Lato", sans-serif ; color: crimson}
    p {color: blue; background-color: brown}
</style>
<body>
    <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band">
        <h2 class="w3-wide">Prvi zadatak</h2>
        <p class="w3-opacity"><i>Html i CSS</i></p>
    </div>
    <h1>
    <?php

    $a=1;
    $b=1;
    echo '1. operator: 1+1=',$c=$a+$b;
    echo "<hr />";

    $a=5;
    $b=2;
    echo '2. operator: 5-2=',$c=$a-$b;
    echo "<hr />";

    $a=5;
    $b=5; //6
    echo '3. operator: 5*5=',$c=$a*$b;
    echo "<hr />";

    $a=100;
    $b=2; //6
    echo '4. operator: 100/2=',$c=$a/$b;
    echo "<hr />";

    echo "<hr />";

    $a=100;
    $b=33; //6
    echo '5. operator: 100%33=',$c=$a%$b;
    echo "<hr />";

    $a=100;
    $a+=5; //6
    echo '6. operator: 100+5=',$a;
    echo "<hr />";

    $a=100;
    $a-=5; //6
    echo '7. operator: 100-5=',$a;
    echo "<hr />";

    $a=100;
    $a*=5; //6
    echo '8. operator: 100*5=',$a;
    echo "<hr />";

    $a=100;
    $a/=5; //6
    echo '9. operator: 100/5=',$a;
    echo "<hr />";

    $a=100;
    $a%=55; //6
    echo '10. operator: 100%55=',$a;
    echo "<hr />";

    $broj="3";
    echo '11. operator: 3==3 ?', $broj==3, ' "True"';
    echo "<hr />";

    $a = 3;
    $b = "3";
    echo '12. operator: 3==="3" ?', $a===$b, ' "False"';
    echo "<hr />";

    ?>

    </h1>
</body>
</html>