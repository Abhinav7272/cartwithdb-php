<?php
include('config.php');
?>

<?php
$sql = "SELECT * FROM `books`";
$result = mysqli_query($conn, $sql);

if($result->num_rows > 0){
?>
         <table border ="1px">
         <thead>
               <tr>
               <th>id</th>
               <th>bookName</th>
               <th>authorname</th>
               <th>publisherName</th>
               <th>noofpages</th>
               <th>costprice</th>
               <th>Add to cart</th>
               </tr>
         </thead>
         <tbody>
              <?php
              while($row =$result->fetch_assoc()){
              ?>
              <tr>
        <td><?php echo $row['id']?></td>
				<td><?php echo $row['bookName']?></td>
				<td><?php echo $row['authorName']?></td>
				<td><?php echo $row['publisherName']?></td>  
        <td><?php echo $row['noOfPages']?></td>  
        <td><?php echo $row['costPrice']?></td>  
        <td><a href="edit.php?id=<?php echo $row['id']?>"> <input type="button" value="Add to cart"> </a></td>
				<!-- <td><a href="delete.php?id=<?php echo $row['id']?>"> <input type="button" value="Delete from database"> </a></td>  -->
           </tr>
         <?php } ?>
         </tbody>
         </table>
<?php
}
?>
<html>
  <head>
   <title>
           user details
   </title>
  </head>
  <body>
  <body>
<a href="cart.php"><button>check your cart</button></a>
</body>
  </body>
</html>