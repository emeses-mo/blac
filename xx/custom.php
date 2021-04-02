<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl.css">
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
                 <img src="images/custom.jpg" alt="">
             </div>
             <div class="product-desc-text">
                <div class="custom-head">
                                     <h2>Custom Orders</h2>

                </div>
                <form action="upload.php" method ="post" enctype="multipart/form-data">
                 
                 
                  
                

                  <div class="custom-upload">
                    <label for ="file"> Upload Custom Design </label> <br>
                  <input type ="file" name="file" id ="file" class="form-control">
                  </div>

                



                  <div class="custom-submit">
                    <input type="submit" name="submit" value="Submit" class="btn btn-success">
                 </div>
                  <div class="invisible-input">
                  <input type="text" name="uid" value="">
                  </div>

                  


                </form>

                        
                    </div>
                  
                 
             </div>
         </div>
        <!-- container end -->
        </div>
</body>
</html>