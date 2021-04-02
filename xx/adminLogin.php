<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="styles.css ?v=<?php echo time(); ?>">
</head>
<body>
    <div class="container">
        <div class="admin-login-box">
        <form action="adminLogin.php" method="post">
            <div class="admin-login-form-box">
                 <div class="admin-login-form-group">
            <input type="text"  placeholder="Username" id="username" name="username">
            </div>
            <div class="admin-login-form-group">
            <input type="password" placeholder="Password" id="password" name="password">
            </div>
            <div class="admin-login-submit">
            <input type="submit" name="submit" value="submit" class="">
            </div>
            </div>
           
        
        
        
        </form>
        </div>
    </div>
</body>
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
    $usern = $_POST['username'];
    $password = $_POST['password'];
    $query=mysqli_query($conn,"SELECT * FROM admin_login WHERE username='".$usern."' AND password='".$password."'");  
    $numrows=mysqli_num_rows($query);  
    if($numrows!=0)  
    {  
    while($row=mysql_fetch_assoc($query))  
    {  
    $dbusername=$row['username'];  
    $dbpassword=$row['password'];  
    }  
  
    if($user == $dbusername && $pass == $dbpassword)  
    {  
    
  

    header("Location: admin.php");  
    }  
    } else {  
    echo "Invalid username or password!";  
    }  

}



?>
</html>