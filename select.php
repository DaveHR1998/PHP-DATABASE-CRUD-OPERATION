<?php 
    include("db.php");

    $stmt = "SELECT * from product";
    $result = $conn->query($stmt);
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
  
<div class="container">

    <a class="i" href="insert.php">Add Product</a>
    <table>
    
        <tr>
            <th>id</th>
            <th>Image</th>
            <th>Name</th>
            <th>Price</th>
            <th>Status</th>
            <th></th>
        </tr>
        
            <?php
            
            while( $row = $result->fetch_assoc()){ ?>
            <tr>
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['image'] ?></td>
                <td><?php echo $row['name'] ?></td>
                <td><?php echo $row['price'] ?></td>
                <td>
                    <a href="update.php?id=<?php echo $row['id'] ?>">Update</a>
                    <a class="del" href="delete.php?id=<?php echo $row['id'] ?>">Delete</a>
                </td>
                
            </tr>
        <?php   
           }

            ?>
            
        
    </table>
</div>
    
</body>
</html>