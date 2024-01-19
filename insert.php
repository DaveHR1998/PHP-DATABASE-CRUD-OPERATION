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
    <title>Document</title>
</head>
<body>
    <form action="insert.php" method="post">
        <label for="image">Image</label>
        <input type="text]==" name="image" id="">
        <label for="name">Name</label>
        <input type="text" name="name" id="">
        <label for="price">Price</label>
        <input type="text" name="price" id="">
        <input type="submit" value="Insert">
    </form>
</body>
</html>