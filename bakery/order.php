<?php

$first_name = "Sydney";
$second_name = "Abuya";

echo "My first name is".$first_name." and second name is ".$second_name;
echo  " <br>";

function add_numbers(int $x,int $y){
	return $x + $y;
}

//index array
$fruits = array('apple','banana','orange','watermelon');

echo "<pre>";
print_r($fruits);
echo "</pre>";

$cars=['benz','toyota','bmw','volvo'];
echo "<pre>";
print_r($cars);
echo "</pre>";

//Associative array
$food= array('Matumbo mix'=>'ugali mix','cereals'=>'rice','meat'=>'beef');
echo "<pre>";
print_r($food);
echo "</pre>";

echo add_numbers(30,20);
?>