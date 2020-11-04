<?php

require_once("db_connect.php");

if(isset($_POST["SubmitImage"])){
    $food_item=$_POST["foot_item"];
    $food_price=$_POST["food_price"];
    $food_image=$_FILES["food_image"];

    $original_file_name=$_FILES["food_image"]["name"];
    $file_tmp_location=$_FILES["food_image"]["tmp_name"];

    $file_path="images/";

    if(move_uploaded_file($file_tmp_location, $file_path.$original_file_name)){
        $sql= "INSERT INTO food(food_id,food_item,food_image,food_price) VALUES('','$food_item','$original_file_name','$food_price')";

        if (mysqli_query($link,$sql)){
            echo "Record Added successfully";
                // Redirect to login page
                header("location: view_menu.php");
        }
        else{
            echo "Record not inserted".$link->error;
        }
  
    }

}

?>