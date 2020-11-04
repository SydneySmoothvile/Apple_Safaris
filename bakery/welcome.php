<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
		body{ font: 22px sans-serif; 
			text-align: center;
		 }
		 .menu-items{
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    margin: 0;
    padding:0;
    box-sizing: border-box;
}
.header{
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    display: flex;
    justify-content: space-between;
    padding : 1rem 2rem;
    background-color: rebeccapurple;
    overflow: hidden;
}
.menu-items{
    list-style: none;
    display: flex;
    align-items: center;
}
.menu-items li a{
    font-size: 16px;
    padding:0.5em 1em;
    text-align: center;
}
header a{
    font-size: 16px;
    color: rgb(224, 202, 235);
    text-decoration: none;
    text-align: center;
}
header a:hover{
    background-color: rgb(223, 208, 240);
}
.dropdown {
  float: left;
  overflow: hidden;
  cursor: pointer;
}
/* Dropdown button */
.dropdown .dropbtn {
  font-size: 16px;
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit; /* Important for vertical align on mobile phones */
  margin: 0; /* Important for vertical align on mobile phones */
}
/* Dropdown content (hidden by default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}
/* Links inside the dropdown */
.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}
/* Add a grey background color to dropdown links on hover */
.dropdown-content a:hover {
  background-color: #ddd;
}
/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
  display: block;
}
/* Add a red background color to navbar links on hover */
 .dropdown:hover .dropbtn {
  background-color: red;
}
    </style>
</head>
<body>
    <header class="header">
        <a href="#">APPLE SAFARIS HOTEL</a>
        <ul class="menu-items">
            
            <li><a href="#" class="menu-items">HOME</a></li>
            <li><a href="#" class="menu-items">PRODUCTS</a></li>
            <li><a href="#" class="menu-items">ABOUT</a></li>
            <li><a href="#" class="menu-items">CONTACTS</a></li>
            <li> <a><?php echo htmlspecialchars($_SESSION["username"]); ?></a></li>
            <div class="dropdown">
                    <button class="dropbtn">More
                     <i class="fa fa-caret-down"></i>
                    </button>
                <div class="dropdown-content">
                    <a href="#">Link 1</a>
                    <a href="#">Link 2</a>
                    <a href="#">Link 3</a>
                </div>
            </div>
            <li><a href="profile.php" class="menu-items">PROFILE</a></li>
            <li><a href="edituser.php" class="menu-items">UPDATE</a></li>
            <li><a href="delete.php" class="menu-items">DELETE</a></li>
            <li><a href="logout.php" class="menu-items">LOGOUT</a></li>
        </ul>
    </header>

    <div>
        <img src="images/splash6.jpg" alt="" width="100%" height="1000px">
    </div>
</body>
</html>

<?php

require_once("db_connect.php");

echo "<pre>";
print_r($_POST);
echo "</pre>";
?>

<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Table From Database</title>
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
            width: 1000px; padding: 20px;
             
  	        background-color: #ffffff;
  	       
  	        margin: 100px auto; 
		}
		

	</style>
</head>
<body>
	<div class="omg">
	    <table>
		<h1>DATA ON USERS</h1>
		<tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Second Name</th>
            <th>Email</th>
			<th>Username</th>
            <th>Password</th>
            <th>Choice</th>
		</tr>


<?php
$sql = "SELECT id,first_name,second_name,email, username, `password`,choice FROM user";

$result = mysqli_query($link, $sql);

   if(! $result ) {
      die("Could not get data: ".mysqli_error($link));
   }
   
   while($row = mysqli_fetch_assoc($result)) {
      echo "
      		<tr>
                  <td>".$row["id"]. "</td>
                  <td>".$row["first_name"]. "</td>
                  <td>".$row["second_name"]. "</td>
                  <td>".$row["email"]. "</td>
      			<td>" .$row["username"]. "</td>
                  <td>".$row["password"] . "</td>
                  <td>".$row["choice"]. "</td>
      		</tr>" ;
   }
   
   echo "Fetched data successfully\n";
   
   mysqli_close($link);
?>
		</table>
	</div>
	</body>
</html>