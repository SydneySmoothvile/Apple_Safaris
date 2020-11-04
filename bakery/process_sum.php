<?php

if(isset($_POST['submit'])) 
{
function add_number(){
	$num1=$_POST["num1"];
	$num2=$_POST["num2"];
	$sum=$num1+$num2;
	
	echo $num1."+".$num2. "=". $sum."<br>";
}
echo $add_number() ;
}
?>