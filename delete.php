<?php
include('config.php');
$id = $_GET['id'];
$sql = "DELETE FROM `cart` WHERE id=$id";
if(mysqli_query($conn,$sql)){
    header("Location:cart.php");
}
else{
    echo "Deletion failed...";
}
?>