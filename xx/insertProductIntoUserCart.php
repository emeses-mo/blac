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

        
        mysqli_select_db($conn,'displayupload');
        if(isset($_POST['submit'])){
          $user = $_POST['uid'];
          $productname = $_POST['name'];
          $productsize = $_POST['size'];
          $productqty = $_POST['quantity'];
          $productprice = $_POST['price'];
          $q="INSERT INTO `products_ordered`( `userid`, `product-name`,`qty-ordered`,`product-size`,`price`) VALUES ('$user','$productname','$productqty','$productsize','$productprice')";
        $query=mysqli_query($conn,$q);
         
        }
        if(isset($_POST['submit'])){
            $user = $_POST['uid'];
          $productname = $_POST['name'];
          $productsize = $_POST['size'];
          $productqty = $_POST['quantity'];
          $productprice = $_POST['price'];
          $sq="INSERT INTO `displayupload`.`{$user}`(`product_name`,`product_qty`,`product_price`) VALUES ('$productname','$productqty','$productprice')";
          $query = mysqli_query($conn,$sq);
          
        }
        ?>