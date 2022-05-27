<?php

echo "<h3>Computer Studies Marks</h3>";

$marks =65;

if ($marks>=90 and $marks<=100){
    echo "A Excellent";
}elseif ($marks >80 and $marks<=89){
    echo "A- Very Good";
}elseif ($marks>=70 and $marks<=79){
    echo "B+ Good Job";
}elseif ($marks>=60 and $marks<=69){
    echo " B Average";
}elseif ($marks>=50 and $marks<=59){
    echo "B- Below Average";
}elseif ($marks>=40 and $marks<=49){
    echo "C+ Nice Trial";
}elseif ($marks>=30 and $marks<=39){
    echo "Redo exam";
}