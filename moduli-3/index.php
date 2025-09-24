<?php

$day= 'Monday';
switch($day){
    case'Monday':
        echo "Its Monday";
    break;
    case'Tuesday':
        echo "Its Tuesday";
    break;
    case'Wednesday':
        echo "Its Wednesday";
    break;
    case'Thursday':
        echo "Its Thursday";
    break;
    case'Friday':
        echo "Its Friday";
    break;
    case'Saturday':
        echo "Its Saturday";
    break;
    case'Sunday':
        echo "Its Sunday";
    break;
    default:
    echo"Its an invalid day";
    break;

}


echo "<br>";

$x=1;
while ($x <=5){
    echo"The number is $x<br>";
    $x++;
}

echo "<br>";

$y = 1;
do{
    echo"the number is $y<br>";
    $y++;
}while($y<=5);




?>