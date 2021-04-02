<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    <link rel="stylesheet" href="styles.css">
    
</head>
<body>
    <div class="container">
        <header>
            <div class="logo">
                <img src="images/LogoFInalisedFullWhiteText.svg" alt="">
            </div>
            <nav>
                <div class="dropdown">
                 <a class="drpdwn">MEN</a>
                 <div class="dropdown-content">
                   <a href="#">Full Sleeve TShirts</a>
                   <a href="#">Polo Tees</a>
                 </div>
               
                </div>
                <div class="dropdown">
                 <a class="drpdwn">WOMEN</a>
                 <div class="dropdown-content">
                   <a href="womenscheck.html">Crop Tops</a>
                     <a href="womenscheck.html">Women's Crop Hoodies</a>
                 </div>
               
                </div>
                <div class="dropdown">
                 <a class="drpdwn">UNISEX</a>
                 <div class="dropdown-content">
                   <a href="unisexcheck.html">Couple Tees</a>
                     <a href="unisexcheck.html">printed Tees</a>
                     <a href="unisexcheck.html">Plain Tees</a>
                 </div>
                </div>
                <div class="dropdown">
                 <a class="drpdwn">MASKS</a>
                 <div class="dropdown-content">
                   <a href="#printed-masks">Printed Masks</a>
                   <a href="#plain-masks">Plain Masks</a>
                 </div>
                </div>
                <div class="dropdown">
                 <a class="drpdwn">WINTER</a>
                 <div class="dropdown-content">
                   <a href="seasonalcheck.html">Hoodies</a>
                     <a href="seasonalcheck.html">Couple Hoodies</a>
                 </div>
                </div>
                <div class="dropdown">
                 <a class="drpdwn">KIDS</a>
                 <div class="dropdown-content">
                   <a href="kidscheck.html">Printed Baby Rompers</a>
                     <a href="kidscheck.html">Printed Tees</a>
                 </div>
                </div>
                <div class="dropdown">
                    <a class="drpdwn" href="custom.php">CUSTOM</a>
                    
                   </div>
     
     
             </nav> 
            <div class="aboutButton">
                <div class="abt">
                    <a href="#">About</a>
                </div>
                
                <div class="signinbtn">
                    <button class="signin-btn">Sign In</button>
                </div>
                
            </div>
    
    
           </header>
    <form id="getUserInfo" action="" method="post">
    <div class="user-info-get">
        <div class="form-input-var">
        <h2>Name</h2>
        <input id="userName" type="text" name="name">
        </div>
        <div class="form-input-var">
        <h2>Phone Number</h2>
        <input type="text" id="phoneNumber" name="phno">
        </div>
        <div class="form-input-var">
        <h2>Shipping Address</h2>
        <textarea  form="getUserInfo" placeholder="Enter Shipping Address" name="shpadd"></textarea>
       
        </div>
        <div class="submit-form-button">
        <input onclick ="setUID()" type="submit" name="submit" value="Submit" class="prod-desc-add">
        </div>
        
    
    </div>
    </form>
    </div>    <!-- Container end -->
    
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
             $name = $_POST['name'];
            $phno = $_POST['phno'];
            $shp__add = $_POST['shpadd'];
            $q="INSERT INTO `customer_details`( `phone_number`,`customer_name`,`shp_add`) VALUES ('$phno','$name','$shp__add')";
            $query = mysqli_query($conn,$q);
            $sql = "SELECT `sno` FROM '$phno'";
            $query = mysqli_query($conn,$sql);
            if($query !== FALSE){
              echo("This table exists");
            }
            else{
             $phno  = $_POST['phno'];
            $sql="CREATE TABLE `displayupload`.`{$phno}`( `sno` INT(250) NOT NULL AUTO_INCREMENT ,  `product_name` VARCHAR(250) NOT NULL ,  `product_qty` INT(250) NOT NULL ,  `product_price` INT(250) NOT NULL ,  `product_shipping_status` VARCHAR(250) NOT NULL DEFAULT 'NotShipped' ,    PRIMARY KEY  (`sno`))";
            $query = mysqli_query($conn,$sql);
            }

             header("Location: indx.php");
      }
      
      

     

    
?>  



<script src="uidcheck.js"></script>
</body>
</html>