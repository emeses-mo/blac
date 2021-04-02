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
    <h2>Customer Details</h2>
    <div class="all-products-table">
         <table>
        <div class="thead">
            <th>Sno.</th>
            <th>Phone Number</th>
            <th>Customer Name</th>
            <th>Shipping Address</th>
           
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

    $displayquery="select * from customer_details ";
    $querydisplay=mysqli_query($conn,$displayquery);
    if(!$querydisplay ) {
        die('Could not get data: ' );
     }
    while($result = mysqli_fetch_array($querydisplay)){
        ?>
        <tr>
        <td> <?php echo $result['sno']; ?> </td>
        <td> <?php echo $result['phone_number']; ?> </td>
        <td>  <?php echo $result['customer_name']; ?></td>
        <td>  <?php echo $result['shp_add']; ?></td>
        
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