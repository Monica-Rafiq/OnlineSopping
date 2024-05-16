<?php
include("config.php");
$id = $_GET['id'];
mysqli_query($con, "DELETE FROM products WHERE id=$id");
header('Location: items.php');
?>
