<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="custom.css">
    <!-- <link rel="stylesheet" href="styles.css"> -->
    <title>Custom </title> 
</head>
<body>
    <div class="container">
        <header>
 
          <div class="logo">
            <a href="index.html"><img src="images/LogoFInalisedFullWhiteText.svg" alt=""></a>
              
          </div>
             
         
         <nav>
            <div class="dropdown">
             <button class="drpdwn">MEN</button>
             <div class="dropdown-content">
               <a href="#">Full Sleeve TShirts</a>
               <a href="#">Polo Tees</a>
             </div>
           
            </div>
            <div class="dropdown">
             <button class="drpdwn">WOMEN</button>
             <div class="dropdown-content">
               <a href="#">Crop Tops</a>
               <a href="#">Women's Crop Hoodies</a>
             </div>
           
            </div>
            <div class="dropdown">
             <button class="drpdwn">UNISEX</button>
             <div class="dropdown-content">
               <a href="#">printed Tees</a>
               <a href="#">Plain Tees</a>
               <a href="#">District Name Tees</a>
               <a href="#">Couple Tees</a>
             </div>
            </div>
            <div class="dropdown">
             <button class="drpdwn">MASKS</button>
             <div class="dropdown-content">
               <a href="#printed-masks">Printed Masks</a>
               <a href="#plain-masks">Plain Masks</a>
             </div>
            </div>
            <div class="dropdown">
             <button class="drpdwn">WINTER</button>
             <div class="dropdown-content">
               <a href="#">Hoodies</a>
               <a href="#">Couple Hoodies</a>
             </div>
            </div>
            <div class="dropdown">
             <button class="drpdwn">KIDS</button>
             <div class="dropdown-content">
               <a href="#">Printed Tees</a>
               <a href="#">Plain Tees</a>
               <a href="#">Printed Baby Rompers</a>
               <a href="#">Plain Baby Rompers</a>
             </div>
            </div>

         </nav>
         
 
        </header> 
        <div class="addressNav">
          <h1 >Store / Product</h1>
        </div>
        
        <div class="product-desc-box">
            
             <div class="product-desc-image">
                 <img src="images/custom.jpg" alt="">
             </div>
             <div class="product-desc-text">
                <div class="custom-head">
                                     <h2>Custom Orders</h2>

                </div>
                <form action="custom1.php" method ="post" enctype="multipart/form-data">
                 
                 
                <div class="custom-block">
                   <h3>Price $<span class="item-price">50</span></h3>
                 </div>
                 <div class="custom-block csb-qty">
                   <h3>Quantity</h3>
                   <input class="item-qty-rec" type="number" id="quantity" name="quantity" min="1" max="5" >
                 </div>
                

                  <div class="custom-upload">
                    <label for ="file"> Upload Custom Design </label> <br>
                  <input type ="file" name="file" id ="file" class="form-control">
                  </div>
                  <div class="custom-block csb-size">
                   <h3>Size</h3>
                   <select name="size" id="">
                    <option value="small">S</option>
                    <option value="medium">M</option>
                    <option value="large">L</option>
                    <option value="xl">XL</option>
                  </select>
                 </div>
                



                  <div class="custom-submit">
                    <input type="submit" name="submit" value="Submit" class="btn btn-success">
                 </div>
                  <div class="invisible-input">
                  <input id="uid" type="text" name="uid" value="">
                  <input id="price" type="text" name="price" value="">
                  </div>
                <script>
                  let u = document.getElementById('uid').value;
                  console.log("uiddd",u);
                </script>
                  


                </form>

                        
                    </div>
                  
                 
             </div>
         </div>
        <!-- container end -->
        </div>

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
if(isset($_POST['submit']))
{
   
  $user =$_POST['uid'];
  $price = $_POST['price'];
  $size = $_POST['size'];
  $qty= $_POST['quantity'];
  $files= $_FILES['file'];

  print_r($username);
  echo"<br>";
  $filename = $files['name'];
  $fileerror = $files['error'];
  $filetmp = $files['tmp_name'];

  $fileext = explode('.',$filename);
  $filecheck = strtolower(end($fileext));

  $fileextstored = array('png','jpg','jpeg');
  if(in_array($filecheck,$fileextstored))
  {
      $destinationfile='upload/'.$filename;
      move_uploaded_file($filetmp,$destinationfile);
      $q="INSERT INTO `custom_orders`( `userid`, `image`,`custom-qty`,`custom-size`,`custom-price` ) VALUES ('$username','$destinationfile','$qty','$size','$price')";
      $query=mysqli_query($conn,$q);
      $displayquery="select * from custom_orders";
      $querydisplay=mysqli_query($conn,$displayquery);
      // $row = mysqli_num_rows($querydisplay);
      while($result = mysqli_fetch_array($querydisplay)){
          ?>
          <tr>
          <td> <?php echo $result['id']; ?> </td>
          <td> <?php echo $result['username']; ?> </td>
          <td> <img src=" <?php echo $result['image']; ?>" height="100px" width="100px"></td>
          </tr>
          <?php
      }
  }
}





?>




        <script src="checkUID.js"></script>
</body>
</html>