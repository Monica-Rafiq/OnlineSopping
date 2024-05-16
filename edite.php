<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    include("config.php");
    $id = $_GET['id'];
    $update= mysqli_query($con, "select  * from products where id=$id");
    $data=   mysqli_fetch_array($update);
    
    ?>
    <center>
        <div class="main">
            <form action="up.php" method="post" enctype="multipart/form-data">
                <input type="text" name="id" value="<?php  echo $data['id']?>"> <br>
                <input type="text" name="Name" value="<?php  echo $data['name']?>"> <br>
                <input type="text" name="Price" value="<?php  echo $data['price']?>"><br>
                <input type="file" name="image" id="file" style="display:none;"><br>
                <label for="file">chose the image</label><br>
                <button name="update" type = "submit">Update</button>
                <br><br>
                <a href="items.php">All products</a>

            </form>
        </div>
    </center>
</body>
</html>