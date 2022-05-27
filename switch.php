<?php
$day = "Tue";

switch ($day){

    case "Mon";
    echo "Monday, Write some code";
    break;
case "Tue";
    echo "Tuesday,Learn Java script";
    break;
case "Wed";
    echo "Wednesday, Learn php";
    break;
case "Thur";
    echo "Thursay, Learn Kotlin";
    break;
dafault:
    echo "Its the weekend, take some rest";
break;

}

echo "<h1>Loops in PHP</h1>";

echo "<h3>The While loop PHP </h3>";

$a = 1;

while($a<=10){
    $a++;
    echo "The value of a is $a";
}
echo "<br>";
//a while loop tp print even numbers 0 - 20

$b = 0;
while($b<=20){
    echo "The value of b is $b <br>";
    $b+=2;
}

//a while loop that prints out odd numbers between 0 to 50.


echo "<br><hr>";

$c = 1;

while($c <=50){
    echo "The value of c is $c<br>";
    $c+=2;
}



echo "<h3>Do While Loops</h3>";

$d=10;

do{
    $d--;
    echo "The value of c is $c<br>";
}while($d>=0);


echo "<h3>For Loop</h3>";

for ($e=1; $e<=10;$e++){
    echo "The value of e is $e<br>";
}

//using a for loop ,do a loop of numbers divisible by 4 btwn 10-100;


echo "<h3>For Loop Test</h3>";

for ($f>=10; $f<=100;$f++){
    echo "The value of f is $f<br>";
}