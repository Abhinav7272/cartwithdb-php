<?php
include('config.php');
?>

<?php
if(isset($_POST['submit'])){
    $bookName = $_POST['bookName'];
    $authorName = $_POST['authorName'];
    $publisherName = $_POST['publisherName'];
    $noOfPages = $_POST['noOfPages'];
    $cost = $_POST['cost'];
    $sql = "INSERT INTO `books` (`bookName`, `authorName`, `publisherName`,`noOfPages`,`costPrice`) VALUES ('$bookName',' $authorName', '$publisherName',' $noOfPages','$cost')";
    mysqli_query($conn, $sql);
}
?>

<html>
    <head>
        <title>book store</title>
    </head>
<body>
<form method="POST" action="addbook.php">
    bookName <input type="text" name="bookName" placeholder="Type book name" required><br>
    Authorname <input type="text" name="authorName" placeholder="Type your authorname" required><br>
    publisherName <input type="text" name="publisherName" placeholder="Type book name" required><br>
    noofpage <input type="number" name="noOfPages" placeholder="Type book name" required><br>
    cost <input type="text" name="cost" placeholder="000" required><br>
    <input type="submit" name="submit" value="Click">
</form>
</body>
</html>
