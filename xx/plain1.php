<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
   
    <title>Product Desc</title> 
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
                 <img class="item-image" src="Product images/Masks/Plain-1.jpg" alt="">
             </div>
             
             <div class="product-desc-snq">
               <div class="product-desc-text">
                <h3>  <span class="item-title">WHITE COTTON FACE MASK</span> </h3>
               </div>
              <form action="plain1.php" method ="post" enctype="multipart/form-data">
              <div class="product-desc-size">
                   <h3>Size</h3>
                   <select name="size" id="">
                    <option value="small">S</option>
                    <option value="medium">M</option>
                    <option value="large">L</option>
                    <option value="xl">XL</option>
                  </select>
                 </div>
              <div class="product-desc-qty">
                   <h3>Quantity</h3>
                   <input class="item-qty-rec" type="number" id="quantity" name="quantity" min="1" max="5" >
                 </div>
                 <div class="product-desc-price">
                   <h3>Price $<span class="item-price">50</span></h3>
                 </div>
                 <div class="product-desc-addCartBtn">
                   
                   <input type="submit" name="submit" value="Submit" onclick="checkUID()" class="prod-desc-add">

                 </div>
                 <div class="invisible-input">
                   <input name="name" id="title" type="text" value="">
                   <input name="price" type="text" id="prc" value="">
                   <input name="uid" type="text" id="uid" value="" >
                 </div>
              </form>
                 
                 
                 
                 
             </div>
         </div>
        <!-- container end -->
        </div>
        <?php
        require_once 'insertProductIntoUserCart.php';
        
  ?>


        <script src="desctoCart.js"></script>
</body>
</html>