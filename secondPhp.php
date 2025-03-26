<?php

//====Data Type=====
//-----Boolean (true/ false, yes/no, on/off)------
$a = 5;
$b = 7;
if ( $a < $b){
    print 'The expresiion is true';
} else {
    print('The expression is false');
}
echo '<br />';
echo 'Break bolean data type' . '<br />';


//-----Integer (Whole Number)---------
$a = 7;
$b = 2100;
echo $a . '<br />';
echo $b . '<br />';
echo '<br />';
echo 'Break Integer data type' . '<br />';


//-----Float (Decimal digt)------------
$a = 2.56;
$b = 256.3450;
echo $a . '<br />';
echo $b . '<br />';
echo '<br />';
echo 'Break Float data type' . '<br />';


//-----String (Text type)----------
$a = 'This is simple string';
echo $a;
echo '<br />';
echo 'You can also have more comples strings text' . '<br />';
echo 'Break String data type' . '<br />';


//==========OPERATORS==========
//----- Arithmetic operator-----------

$a = 30;
$b = 60;

echo $a + $b . '<br />';    //addition operator
echo $a - $b . '<br />';    //substraction opeartor
echo $a * $b . '<br />';    //multiplication
echo $a / $b . '<br />';    //divition
echo $a % $b . '<br />';    //modulus


//------ Array Assignment Operator----------
$a = 15;
$b = 5;
echo $a += $b . '<br />';    
echo $a -= $b . '<br />';    
echo $a *= $b . '<br />';    
echo $a /= $b . '<br />';    
echo $a %= $b . '<br />';  

//-----Increment and Decrement Operator-----------

$a = 5;
echo $a-- . '<br />';
echo $a . '<br />';
echo --$a . '<br />';
echo 'Decrement End here ' . '<br />';

$a = 5;
echo $a++ . '<br />';
echo $a . '<br />';
echo ++$a . '<br />';
echo 'Increment End here ' . '<br />';

//if-else expression example with CGPA Grade

$marks = 38;
if ( $marks >= 80 && $marks <= 100){
    echo ' Your CGPA = A+';
}
else if ($marks >= 75 && $marks < 80 ){
    echo 'Your CGPA = A ';
}
else if ($marks >= 70 && $marks < 75 ){
    echo 'Your CGPA = A- ';
}
else if ($marks >= 65 && $marks < 70 ){
    echo 'Your CGPA = B+ ';
}

else if ($marks >= 60 && $marks < 65 ){
    echo 'Your CGPA = B ';
}

else if ($marks >= 55 && $marks < 60 ){
    echo 'Your CGPA = B- ';
}

else if ($marks >= 50 && $marks < 55 ){
    echo 'Your CGPA = C ';
}

else if ($marks >= 45 && $marks < 50 ){
    echo 'Your CGPA = C- ';
}

else if ($marks >= 40 && $marks < 45 ){
    echo 'Your CGPA = D ';
}
else{
    echo 'You are Failed';
}