<?php 

include("db.php");
$id = $_GET['id'];
$stmt = "DELETE from product where id = '$id'";

if($conn->query($stmt)){
    
    header("location:select.php");
}
else{
    echo "connection error";
}



?>