<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
    <h2>Order Details</h2>
    <div class="all-products-table">
         <table>
        <div class="thead">
            <th>Sno.</th>
            <th>User ID</th>
            <th>Product Name</th>
            <th>Quantity</th>
            <th>Size</th>
            <th>Price</th>
            <th>Shipping Status</th>
        </div>
<tbody>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "displayupload";
  
// Create connection
$conn = new mysqli($servername, 
    $username, $password, $dbname);

    if ($conn->connect_error) {
      die("Connection failed: " 
          .$conn->connect_error);
  }

    $displayquery="select * from products_ordered where product_shipping_status = 'NotShipped'";
    $querydisplay=mysqli_query($conn,$displayquery);
    if(!$querydisplay ) {
        die('Could not get data: ' );
     }
    while($result = mysqli_fetch_array($querydisplay)){
        ?>
        <tr>
        <td> <?php echo $result['Sno']; ?> </td>
        <td> <?php echo $result['userid']; ?> </td>
        <td>  <?php echo $result['product-name']; ?></td>
        <td>  <?php echo $result['qty-ordered']; ?></td>
        <td>  <?php echo $result['product-size']; ?></td>
        <td>  <?php echo $result['price']; ?></td>
        <td>  <?php echo $result['product_shipping_status']; ?></td>
        </tr>
        <?php


}




?>





</tbody>




    </table>
    </div>
   




    </div>
</body>
</html>