<?php
    $num = -5;
    if ($num < 0){
        echo ("$num is less then 0");
    }

    echo("<br>");

    $age = 15;
    if (($age > 12) && ($age < 20)) {
        echo("You are a teenager");
    }

    echo("<br>");

    if($age < 20) {
        echo"you are under 18";
    }
    else{
        echo"you are an adult";
    }

    echo("<br>");

    if($num < 0) {
        echo"The value of $num is negative";
    }
    else if($num == 0) {
        echo"The value of $num is 0";
    }
    else {
        echo"The value of $num is positive";
    }

    echo("<br>");

    $a=50;
    $b=10;

    if($a==$b){
        echo("True");
    }   else{
        echo("False");
    }

?>