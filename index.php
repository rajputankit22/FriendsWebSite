<!DOCTYPE html>
<?php 
include_once('mainconnection.php');
if(isset($_POST['submit']))
{
 $username= $_POST['username'];
 $password= $_POST['password'];
 $qry = "SELECT username,password FROM record WHERE username ='$username' AND password='$password'";
  $result = mysqli_query($link,$qry);
   // Mysql_num_row is counting table row
    $count = mysqli_num_rows($result);
    if($count == 0){
        echo "<script>alert('Password was probably incorrect!')</script>";
    }
    // If result matched $myusername and $mypassword, table row must be 1 row
    elseif($count == 1){

       echo "<script>window.open('practical.html','_self')</script>";
    }
    else {
        die("Password was probably incorrect!");
    }
}
 ?>
<html>

<head>

  <meta charset="UTF-8">

  <title>Login Form</title>
  <link rel="icon" href="image/logo.ico" type="image" size="32x32">
    <link href="font-awesome-4.5.0/css/font-awesome.min.css" rel="stylesheet">

     <link href="2.css" rel="stylesheet">
</head>

<body>
  
  <div class="body"></div>
		<div class="grad"></div>
		<div class="header">
            <div><spam class="fa fa-spinner fa-spin fa-pulse"></spam><b>Friends</b><span><b>Forever</b></span></div>
		</div>
		<br>
		<form action="" method="post">
		<div class="login">
		 
				<input type="text"   placeholder="Username" name="username"><br>
				<input type="password" placeholder="Password" name="password"><br>
				 <input id="sub" type="submit" name="submit" value="Login" />
                <a href="faltu.php"> <input type="button" value="Sign Up"></a>
                
		</div>
       </form>
  <script src='http://codepen.io/assets/libs/fullpage/jquery.js'></script>

</body>

</html>