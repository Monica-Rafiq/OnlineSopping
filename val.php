<?php
include ('config.php');
$id=$_GET['id'];
$up = mysqli_query($con, "select* from products where id = $id" );
$data = mysqli_fetch_array($up);

?>
<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>confirm to buy products</title>
</head>
<body>
    <center>
        <dev class="main">
        <form action="insertt.php" method="post">
        <h2>Do you really want to buy this product ?</h2>
        <input type="text" name="id" value= "">
        <input type="text" name="name" value= "">
        <input type="text" name="price" value= "">
        <button name="add" type="submit" calss="btn btn-warning"> ADD this product to my card</button>
        <br>
        <a href="shop.php">To shop page</a>
        </form>
        </dev>
    </center>
</body>
</html>