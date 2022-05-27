<?php

$num1 = 34; $num=70; $num=45;

echo "<h3>Arithmetic Operations </h3>";



$sum =$num1+$num2+$num3 ;

echo "The sum of $num1 and $num2  is $sum <br>";

$diff = $num3-$num1 ;


echo "The diff of $num3 and $num1 is diff <br>";

$prod =$num3 * $num2 *$num1;

echo "The product of $num1, $num2 and $num3 is $prod <br>";

$div =$num2/$num1 ;

echo "The div os $num1 and $num2 is $div <br>";

$mod =$num2%$num1 ;

echo "The mod of $num1 and $num2 is $mod <br>";

$exp ="The exp of $num3 on $num4 is $exp <br>";

echo "<h3>Assignment Operator</h3>";

$x = 10 ;

echo "The value of x is $x <br>";

$x+=20;
echo "The new value of x is $x <br>";

$x-=5;

echo "The value of x is $x <br>";

$x+=5;

echo "The value of $x <br>";

$x/=2;

echo "The value of $x is $x <br>";

echo "<h3>Increment $ Decrement Operators</h3>";


$y = 50;

$y++;

echo "The value of y is $y <br>";

++$y;

echo "The value of y is $y <br>";

$y--;

echo "The value of y is $y <br>";

--$y;

echo "The value of y is $y <br>";


echo "<h3>Comparison Operators</h3>";

$age =12;

if (age>18){
    echo "You are an adult";
}else{
    echo"You are a child";
}

echo "<hr>";

if (age>18){
    echo "You are an adult";
}else{
    echo"You are a child";
}


echo "<hr>";

if (age>18){
    echo "Give the child a toy";
}else{
    echo"Read a book please";
}


$password = 123;
$stored=123;

$a ="b123";
$b ="b123"

if password($password ==$stored){
    echo "Welcome to the system";
}else{
    echo "Wrong password detected";
}


if password(&password===$stored){
    echo "Welcome to the system";
}else{
    echo "Wrong password detected";
}


if (&a===$b){
    echo "Welcome to the system";
}else{
    echo "Wrong password detected";
}

if (&a!=$b){
    echo "There is a problem here";
}else{
    echo "No problem";
}

echo "<h3>Logical Operators</h3>";

$age = 20;

If ($age>0 and $age<10){
    echo "Your are a child";
}elseif($age>=10 and $age<17){
    echo "You are a teen";
}elseif($age>18 and $age<=48){
    echo "You are a young adult";
}elseif($age>=41 and $age<120){
    echo "A senior adult";
}else{
    echo "No such age within our range";
}

// Create a variablecalled marks. Create a php if else statement that helps u grade.

$age1 = 18 ;$gender1 ==0;

$age2 = 15 ;$gender2 = 1;


if ($age1>18 or $gender1 == 1){
echo "Allow enrty to the sports club";
}else{
    echo "Do not allow";
}
 echo "br"
 
 if ($age1>18 || $gender1 == 1){
    echo "Allow enrty to the sports club";
    }else{
        echo "Do not allow";
    }


    echo "<h3> Logical Operators XDR </h3>";
    echo "<br>";

    if ($age2>=18 xor &gender2 == 1){
        echo "Allow enrty to the sports club";
    }else{
        echo "Do not allow entry";
    }

    echo "<br>";

    if ($age1>=18 xor &gender2 == 1){
        echo "Allow enrty to the sports club";
    }else{
        echo "Do not allow entry";
    }

echo "<h3>Logical Operator NOT</h3>";

$value = true;

if (!$value){
    echo "The new value is false"
}else{
    echo"True Indeed"
}
