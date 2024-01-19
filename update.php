<?php
include("db.php");
if(isset($_GET['id'])){
    $id = $_GET['id'];
}

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
    <link rel="stylesheet" href="style/style.css">
    <title>Document</title>
</head>
<body>
    
    <form action="update.php" method="post">
        <h1>Update Data</h1>
        <input type="text]==" name="image" id="" placeholder="image">
        
        <input type="text" name="name" id="" placeholder="product name">
       
        <input type="text" name="price" id="" placeholder="price">
        <input type="submit" value="Update">
    </form>
</body>
</html>