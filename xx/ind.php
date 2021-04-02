<!DOCTYPE html>
<html>
<head>

<title></title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</head>
<body>
 
<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="/__/firebase/8.3.1/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="/__/firebase/8.3.1/firebase-analytics.js"></script>

<!-- Initialize Firebase -->
<script src="/__/firebase/init.js"></script>



<div class ="container">
<br>
<h1 clss="text-white bg-dark text-center">
Custom Page
</h1>
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