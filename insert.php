<?php

include ("config.php");

if(isset($_POST["upload"])){
    $Name = $_POST["Name"];
    $Price = $_POST["Price"];
    $image = $_FILES["image"];
    $image_location = $_FILES["image"]["tmp_name"]; 
    $image_name = $_FILES["image"]["name"];
    $image_up = "images/".$image_name;
    $insert = "INSERT INTO products(name, price,image) VALUES('$Name','$Price','$image_up')";
    mysqli_query($con,$insert);
    if(move_uploaded_file($image_location, "images/" . $image_name)){ 
        echo "<script>alert('Upload is successful')</script>";
    } else {
        echo "<script>alert('Upload failed')</script>";
    }
    header('location:OnlineShop.php');
}

?>
