<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Console</title>
    <link rel="stylesheet" href="styles.css ?v=<?php echo time(); ?>">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300&display=swap" rel="stylesheet">

</head>
<body>
    <div class="container">
    <div class="logo">
            <img src="images/LogoFInalisedFullWhiteText.svg" alt="">
        </div>
        <div class="admin-console-box">
            <div class="nav-links">
            <ul>
                <li>
                    <a href="admin.php" target="content-frame">Pending Orders</a><br>        
                </li>
                <li><a href="shipItems.php" target="content-frame">Ship Orders</a><br>
                   </li>
                   <li>
                    <a href="shippedorders.php" target="content-frame">Shipped Orders</a><br>
                  
                   </li>
                   <li>
                    <a href="customerdetails.php" target="content-frame">Customer Details</a><br>
                   </li>
                   <li>
                    <a href="abtus.html" target="content-frame">Custom Orders</a><br>
                   </li>
            </ul>
        </div>
        <div class="frame">
            <iframe class="frset" name="content-frame" src="" frameborder="0"></iframe>
        </div>
        </div>
    
    </div>
</body>
</html>