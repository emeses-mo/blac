<!DOCTYPE html>
<html>
<head>
<title>BLAC| Custom</title>

<!-- Latest compiled and minified CSS -->
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">  -->

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="styles.css">

</head>
<body>
    
<div class = "container">
<header>

        <div class="logo">
          <a href="index.html"><img src="images/LogoFInalisedFullWhiteText.svg" alt=""></a>
            
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
           


        </nav>
          <div class="in-cart-rn">
             <a href="shoppingcart.html"> <i class="fas fa-shopping-cart"></i> </a><span></span>
           
           </div>
       </header>




    <div class="upload-h1box">
        <h1 class="upload-h1"> Order Details</h1>

    </div>
<br>
<div class="table--box">
<table class="table-box ">
<thead class="custom-table-head">
<th> Id </th>
<th> Username </th>
<th> Pic </th>
</thead>
<tbody>

<?php
$con= mysqli_connect('localhost','root');
mysqli_select_db($con,'displayupload');
if(isset($_POST['submit']))
{
    $username =$_POST['username'];
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
        $q="INSERT INTO `imgupload`( `username`, `image`) VALUES ('$username','$destinationfile')";
        $query=mysqli_query($con,$q);
        $displayquery="select * from imgupload";
        $querydisplay=mysqli_query($con,$displayquery);
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
    else{
        echo"Extension is not matching";
    }
}

?>
</tbody>
</table>
</div>
</body>
</html>


