<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShopOnline</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    ?>
    <center>
        <div class="main">
            <form action="insert.php" method="post" enctype="multipart/form-data">
                <img src="https://th.bing.com/th/id/OIP.wZKdNJLC9kq2W0OAjAcgQwHaE8?rs=1&pid=ImgDetMain" alt="logo">
                <input type="text" name="Name"> <br>
                <input type="text" name="Price"><br>
                <input type="file" name="image" id="file" style="display:none;"><br>
                <label for="file">chose the image</label><br>
                <button name="upload">Upload</button>
                <br><br>
                <a href="items.php">All products</a>

            </form>
        </div>
    </center>
</body>
</html>