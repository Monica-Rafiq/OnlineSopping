<?php
include("config.php");

if (isset($_POST["update"])) {
    $id = $_POST["id"];
    $Name = $_POST["Name"];
    $Price = $_POST["Price"];
    $image = $_FILES["image"];
    $image_location = $_FILES["image"]["tmp_name"];
    $image_name = $_FILES["image"]["name"];
    $image_up = "images/" . $image_name;
    $update = "UPDATE products SET name='$Name', price='$Price', image='$image_up' WHERE id=$id";
    mysqli_query($con, $update);
    if (move_uploaded_file($image_location, "images/" . $image_name)) {
        echo "<script>alert('Update is successful')</script>";
    } else {
        echo "<script>alert('Update failed')</script>";
    }
    header('location: items.php');
}

?>
