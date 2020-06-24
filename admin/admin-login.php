<?php
include "../connection.php";
?>



<!doctype html>

<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Page</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

 <link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
    <link rel="stylesheet" href="assets/css/style.css">



</head>

<body class="bg-dark">


    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo" style="color:white">
                    Admin Login
                </div>
                <div class="login-form">
                    <form name="form1" action="" method="post">
                        <div class="form-group">
                            <label>UserName</label>
                            <input type="text" name="username" class="form-control" placeholder="username" required>
                        </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Password" required>
                        </div>
                               
                                <button type="submit" name="submit1" class="btn btn-success btn-flat m-b-30 m-t-30">Sign in</button>
                                <div class="alert alert-danger" id="failure" style="margin-top : 10px; display :none">
                          <strong>Invalid </strong> username OR password.
                          </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php
 if(isset($_POST["submit1"]))
 {
	 $count=0;
	 $username=mysqli_real_escape_string($conn, $_POST["username"]);
	 $password=mysqli_real_escape_string($conn, $_POST["password"]);
	 $res=mysqli_query($conn, "select *from admin where username='$_POST[username]'&& password='$_POST[password]'") or die(mysqli_error($conn));
	 $count=mysqli_num_rows($res); //<!-- it is used for check user name is exist or not -->
	 if($count==0)
	 {
		 
		?>	   
<script type="text/javascript">

	document.getElementById("failure").style.display="block";
</script> 
<?php

 }
 else
 {
 
 ?>	   
<script type="text/javascript">
window.location="admin_demo.php"
</script> 
<?php
 }
 }
 ?>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  
    <script src="assets/js/main.js"></script>
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/widgets.js"></script>


</body>

</html>
