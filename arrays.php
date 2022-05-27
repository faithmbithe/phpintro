<?php


echo "<h3>Indexed Array</h3>";

$language = array("Javascript","Ruby","PHP","Kotlin","Java");

print_r($language);

echo "<br>";

foreach ($language as $value){
    echo "$value <hr>";
}

//sorting array in descending order

sort($array: $language);
print_r($language);

echo "<br>"


r_sort($array: $language);
print_r($language);

$marks =array("Peter"=>67,"Jane=>78","Henry=>56","June=>59");

print_r($marks);

echo <"hr">

foreach ($marks as $key=> $value){

    echo "Your Marks $key is $value <br>";
}

echo "<br>";

#sorting array ascending order
asort($array: $marks);
print_r($marks);

echo "<br>";

#sorting array descending order by value
asort($array: $marks);
print_r($marks);


echo "<br>";

#sorting array ascending order by key
ksort($array: $marks);
print_r($marks);

echo "<br>";

#sorting array descending order by key
krsort($array: $marks);
print_r($marks);


echo "<h3>Multidimentional Arrays</h3>";

$contact = array(
    array(
        "name" => "Mary Jane",
        "email" => "mj@gmail.com",
        "age" => 34,
        "phone number" => "0765436764",
    ),
    array(
        "name" => "John Kamau",
        "email" => "kj@gmail.com",
        "age" => 34,
        "phone number" => "0700000067",
    ),
    array(
        "name" => "Judy Hope",
        "email" => "jh@gmail.com",
        "age"=> 34,
        "phone number" =>"0724638236",
    ), 
);


echo "The email address for Judy is ".$contact[2]["email"];

//access phone number for Mary;