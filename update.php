<?php
include("db.php");
$id = $_GET['id'];

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $image = $_POST['image'];
    $name = $_POST['name'];
    $price = $_POST['price'];

    $stmt = "UPDATE product SET image = '$image', name ='$name' , price = '$price' where id = '$id' ";

    if($conn->query($stmt)){
        echo "Database Updated!";
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
    <form action="" method="post">
        <label for="image">Image</label>
        <input type="text]==" name="image" id="">
        <label for="name">Name</label>
        <input type="text" name="name" id="">
        <label for="price">Price</label>
        <input type="text" name="price" id="">
        <input type="submit" value="Update">
    </form>
</body>
</html>