<?php
//variable check of output
/*$str = "Hello Variables";
$num = 28;
$float = 60.9;

echo "<h1>" .$str . "<h1>";
echo "<h2>" .$num . "<h2>";
echo "<h3>" .$float . "<h3>"; */ // multiple comments

//$cricket_teams = array("Sri Lanka","India","Australia","New Zeland");
//echo var_dump($cricket_teams); // this is the array use in PHP
//echo var_dump($cricket_teams[1]); // get the place of variable in the array. 

//define("laptops","HP,Lenovo,Asus");//define function use
//echo laptops;

//define("laptops",["HP","Lenovo","Asus"]);//define function called place
//echo laptops[2];

/*$var = 5; // IF use
if($var > 7){
    echo $var;
}
else{
    echo "The not correct";// use if with else
}
$var = 4; // IF use
if($var % 2 == 0 && $var % 3 == 0){
    echo "divisible by both";
}
elseif($var % 2 == 0){
    echo "divisible by 2";
}
elseif($var % 3 == 0){
    echo "divisible by 3";
}
else{
    echo "divisible is not";// use if with else
}

$level = 10; // switch statement
switch($level){
    case 1:
        echo "you are playing easy";
        break;
    case 2:
        echo "you are playing medium";
        break;
    case 3:
        echo "you are playing hard";
        break;
    default:
        echo "you are not playing";
}

$var = 1;//odds numbers
while($var <= 10){
    echo "Numbers: $var <br>";
    $var += 2;
}
echo "<br>"; // give betweens space in lines
$var = 1;//evens numbers 
while($var <= 10){
    if ($var % 2 == 0) {
        echo "Numbers: $var <br>";
    }
    $var++;
}

//do while

$var = 11;
do{
    echo "Numbers: $var <br>";
    $var++;
}while($var <= 10) // Number: 11 is the answer

for($var = 1;$var <=6;$var++){// forloop
    if($var % 2 == 0){
        echo "Numbers: $var <br>"; 
    }
}

//for loop
for ($var = 1; $var <= 4; $var++) {
    echo "$var";
    for ($var1 = $var - 1; $var1 >= 1; $var1--) {
        echo ",$var1";
    }
    echo "<br>";
}

for ($var = 1; $var <= 4; $var++) { // nested loop
    if ($var == 1) {
        echo "$var <br>";
    } else {
        echo "$var,";
        for ($var1 = $var - 1; $var1 > 0; $var1--) {
            echo "$var1";
            break;
        }
        echo "<br>";
    }
}

for ($var = 1; $var <= 5; $var++) { 
    for ($var1 = 1; $var1 <= $var; $var1++) { 
        echo "*";
    }
    echo "<br>"; 
}*/

function name(){ // function call
    for($var = 1;$var <=6;$var++){
        echo "Number: $var <br>";
    }
}

name();








?>