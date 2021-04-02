<!DOCTYPE html>
<html>
<head>

<title></title>

<!-- Latest compiled and minified CSS -->
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="styles.css">

</head>
<body>

<div class ="container">
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




<br>
<div class="custom-header">
    <h1 clss="text-white bg-dark text-center">
Custom Orders
</h1>
</div>

<div class = "col-lg-8 m-auto d-block">
<form action="upload.php" method ="post" enctype="multipart/form-data">

<div class="form-group">
<label for ="user"> Username: </label>
<input type ="text" name="username" id ="user" class="form-control">
</div>

<div class="form-group">
<label for ="file"> Profile pic: </label>
<input type ="file" name="file" id ="file" class="form-control">
</div>

<input type="submit" name="submit" value="Submit" class="btn btn-success">

</form>
</div>
</div>

</body>
</html>