<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>products</title>
    <style>
      .card{
        float:right;
        margin-top: 20px;
        margin-left: 10px;
        margin-right: 10px;
      }
      .card img{
        width:100%;
        height: 200px;
      }
      main{
        width:60%;
      }
      .navbar-brand{
        margin-left: 70px;
      }
    </style>
</head>
<body>
    
<nav class= "navbar navbar-dark bg-dark">
<a href='card.php' class='navbar-brand'>My card</a>
</nav>

<center>
    <h1>Available Products<h1>
 </center>

<?php
include ("config.php");
$result= mysqli_query($con, 'SELECT * FROM products');
while($row = mysqli_fetch_array($result)){
  echo "
      <center>
      <main>
 <div class='card' style='width: 14rem;'>
  <img src='$row[image]' class='card-img-top'>
  <div class='card-body'>
    <h5 class='card-title'>$row[name]</h5>
    <p class='card-text'>$row[price]</p>
    <a href='val.php? id=$row[id]' class='btn btn-success'>Add to card</a>
  </div>
</div>
</main>
      <center>
  ";
}
?>

</body>
</html>