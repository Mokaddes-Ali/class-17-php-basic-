<?php

//how to write the php script
echo "Hello PHP!";
echo "<h2>Hello World</h2>";
echo '<br>';

print('Hello Php Developer');
echo '<br>';
$a = 2;
$b = 5;
if($a > $b) {
    echo '<strong>This is True</strong>';
} else {
    echo '<strong> This is false</strong>';
}
echo '<br>';
echo "<br>";
$a = 2;
$b = 5;
echo $a ."<br>";
echo $b;

//Php Variabe 
$a = 2000;
$a_long_name = 'Mokaddes';
$variable_123 = 'myvariable';
$camelcaseVariableName = 'this is my variable';
echo $a .'<br>';
echo $a_long_name .'<br>';
echo $variable_123 .'<br>';
echo $camelcaseVariableName;

//Daynamic variable

$a = 'myvariable';
$$a = 'This is my same second variable';

echo $a .'<br>';
echo $$a .'<br>';
echo $myvariable .'<br>';
echo '<br>';
// define Constant
define('Country', 'Bangladesh');
print Country;
echo '<br>';
echo '<br>';
define('PI', '3.1416');
print PI; 

?>