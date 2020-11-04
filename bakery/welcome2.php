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
<html>
    <head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ 
            font: 14px sans-serif; text-align: center; 
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
}
.menu-items{
    list-style: none;
    display: flex;
    align-items: center;
}
.menu-items li a{
    font-size: 1rem;
    padding:0.5em 1em;
    
}
header a{
    font-size: 2rem;
    color: rgb(224, 202, 235);
    text-decoration: none;
}
header a:hover{
    background-color: rgb(223, 208, 240);
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
            <li><a href="profile.php" class="menu-items">PROFILE</a></li>
            <li> <a><?php echo htmlspecialchars($_SESSION["username"]); ?></a></li>
            <li><a href="logout.php" class="menu-items">LOGOUT</a></li>
        </ul>
    </header>
    <div>
        <img src="images/splash4.jpg" alt="" height="1000px" width="100%">
    </div>
    <div>
        <?php
            require_once("db_connect.php");

            $res= mysqli_query($link,"select * from food");
            echo "<table>";
            
            while($row=mysqli_fetch_array($res)){
                echo"<tr>";
                echo "<td>";?> <img src="<?php echo $row["food_image"];?>" height="100" width="100"><?php echo "</td>";
                echo "<td>"; echo $row["food_item"] ;echo "</td>";
                echo "<td>"; echo $row["food_price"] ;echo "</td>";
                echo"</tr>";
            }
        
            echo "</table>";
        ?>
    </div>
    </body>
</html>

