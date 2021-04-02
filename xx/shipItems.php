<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin |Ship Items</title>
    <link rel="stylesheet" href="styles.css ?v=<?php echo time(); ?>">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300&display=swap" rel="stylesheet">

</head>
<body>
    <div class="container">
    <div class="shipitems-header">
        <h3>Admin Console </h3>
        <h2>Ship Items</h2>
    </div>
    <div class="subcontainer">
        
            <form id="ship-form" action="" method="post">
                <input type="text" name="getuid" id="getuid" placeholder="Enter Customer ID" value="">
                <input type="submit" value="Search" name="submit" >
            
            <div class="ship-user-details">
                <table>
                    <div class="ship-table-head">
                        <th>Sno</th>
                        <th>Product Name</th>
                        <th>Quantity</th>
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
                          
                          if(isset($_POST['submit'])){
                              
                            $user = $_POST['getuid'];
                            $q="SELECT * FROM `$user` where `product_shipping_status` = 'NotShipped' ";
                           
                            $query = mysqli_query($conn,$q);
                            if(!$query){
                                die('Could not fetch Data: ');
                            }
                            while($result = mysqli_fetch_array($query)){
                                ?>
                                <tr>
                                    <td><?php echo $result['sno']; ?></td>
                                    <td><?php echo $result['product_name']; ?></td>
                                    <td><?php echo $result['product_qty']; ?></td>
                                    <td><?php echo $result['product_price']; ?></td>
                                    <td><?php echo $result['product_shipping_status']; ?></td>
                                </tr>
                               
                                <?php
                            }
                          } 
                          if(isset($_POST['ship'])){
                            $user = $_POST['getuid'];
                            $sql ="UPDATE `$user` set `product_shipping_status` = 'Shipped'";
                            $query = mysqli_query($conn,$sql);
                            $sq = "UPDATE `products_ordered` set `product_shipping_status` = 'Shipped' where userid ='$user'";
                            $qq = mysqli_query($conn,$sq);
                            if(!$query){
                                die('Could not update Data: ');
                            }
                            echo 'running';
                        }



                          
                        ?>  
                         

                       
                    </tbody>
                </table>
                
                <div class="shipped-button">
                    <input type="submit" name="ship" value="Ship">
                    </div>
                </form>
                <form action="" method="post">
                     
                
                <div class="invisible-input">
                <input type="text" id="uidt" name="uidd" value="">
                
                </div>
                </form>
                <?php 
                require_once 'sqlconfig.php';
                 
                
                ?>
            </div>
    </div>
        
    </div>
    
</body>
</html>