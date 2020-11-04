<?php

require_once("db_connect.php");

echo "<pre>";
print_r($_POST);
echo "</pre>";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Menu</title>
	<style type="text/css">

		table{
			
			border-collapse: collapse;
			width: 30%;
			font-family: monospace;
			background-color: grey;
			text-align: left;
		}
		th{
			background-color: #588c7e;
			color: white;
			
		}
		tr:nth-child(even){
			background-color: #f2f2f2;
		}
		.omg{
			box-sizing: border-box;

		}
		

	</style>
</head>
<body>
	<div class="omg">
	    <table>
		    <h1>DATA ON USERS</h1>
		        <tr>
			        <th>Food_id</th>
			        <th>food_item</th>
			        <th>food_image</th>
                    <th>food_price</th>
		        </tr>


            <?php
            $sql = "SELECT food_id, food_item,food_image,food_price FROM food";

            $result = mysqli_query($link, $sql);

            if(! $result ) {
            die("Could not get data: ".mysqli_error($link));
            }
   
             while($row = mysqli_fetch_assoc($result)) {
            echo "
      		<tr>
      			<td>".$row["food_id"]. "</td>
      			<td>" .$row["food_item"]. "</td>
                  <td>".$row["food_image"] . "</td>
                  <td>".$row["food_price"] . "</td> 
      		</tr>" ;
             }
   
            echo "Fetched data successfully\n";
   
            mysqli_close($link);
            ?>
		</table>
    </div>

    <div class="time">
        <p>Pizza Burrito</p>
        <img src="<?php echo $row["food_image"];?>" height="100" width="100">
    </div>
	</body>
</html>