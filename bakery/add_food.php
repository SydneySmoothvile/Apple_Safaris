<html>
    <head>
        <title>Food</title>
        <style>
            .menu{
                box-shadow: 0 0 9px 0 rgba(0, 0, 0, 0.3);
                margin:100px ;
                padding: 20px;
            }
        </style>
    </head>
    <body>
        <form action="process_food.php" method="post" enctype="multipart/form-data">
            <div class="menu">
                <h1>Add Food</h1><br>
            <label for="">Food Item</label>
            <input type="text" name="foot_item" id="food_item" class="form-control"><br><br>

            <label for="">Food Price</label>
            <input type="text" name="food_price" id="food_price"><br><br>

            <label for="">Upload Image</label>
            <input type="file" name="food_image" id="food_image"><br><br>

            <input type="submit" class="btn btn-primary" name="SubmitImage" value="Add Food">
            </div>
        </form>
    </body>
</html>