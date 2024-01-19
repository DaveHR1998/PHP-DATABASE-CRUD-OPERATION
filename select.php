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
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>id</th>
            <th>Image</th>
            <th>Name</th>
            <th>Price</th>
            <th>Insert</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        
            <?php
            
            while( $row = $result->fetch_assoc()){ ?>
            <tr>
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['image'] ?></td>
                <td><?php echo $row['name'] ?></td>
                <td><?php echo $row['price'] ?></td>
                <td><a href="insert.php">Insert</a></td>
                <td><a href="update.php?id=<?php echo $row['id'] ?>">Update</a></td>
                <td><a href="delete.php?id=<?php echo $row['id'] ?>">Delete</a></td>
            </tr>
        <?php   
           }

            ?>
            
        
    </table>
</body>
</html>