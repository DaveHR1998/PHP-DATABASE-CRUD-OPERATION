<?php
include("db.php");

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $image = $_POST['image'];
    $name = $_POST['name'];
    $price = $_POST['price'];

    $stmt = "INSERT into product(image,name,price) values('$image','$name','$price')";

    if($conn->query($stmt)){
        echo "Database inserted!";
    }
    else{
        echo "connection error";
    }


}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Document</title>
</head>
<body>
    <form action="insert.php" method="post">
        <h1>Update Data</h1>
        <input type="text]==" name="image" id="" placeholder="image">
        
        <input type="text" name="name" id="" placeholder="product name">
       
        <input type="text" name="price" id="" placeholder="price">
        <input type="submit" value="Insert">
    </form>
</body>
</html>