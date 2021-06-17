<?php
include('config.php');
?>
<?php
$id = $_GET['id'];

if(!empty($id)){
    $sql = "SELECT * FROM `books` WHERE `id`=$id";
    $result = mysqli_query($conn, $sql);

    $row = $result->fetch_assoc();
    $bookName = $row['bookName'];
    $authorName = $row['authorName'];
    $publisherName = $row['publisherName'];
    $noOfPages = $row['noOfPages'];
    $cost = $row['costPrice'];
    echo $cost.$noOfPages.$publisherName.$authorName.$bookName ;

    $sql2= "INSERT INTO `cart` (`bookName`, `authorName`, `publisherName`,`noOfPages`,`costPricee`) VALUES ('$bookName',' $authorName', '$publisherName',' $noOfPages','$cost')";
    if(mysqli_query($conn,$sql2)){
        header("Location:details.php");
    }
    else{
        echo "no";
    }
}
?>