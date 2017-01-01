<?php 
include_once('mainconnection.php');
if(isset($_POST['submit']))
{
$name= $_POST['name'];
$username= $_POST['username'];
$password= $_POST['password'];
$pass_len=strlen($password);
$email= $_POST['email'];
$mobile= $_POST['mobile'];
$phone_len=strlen($mobile);
$city= $_POST['city'];
$address= $_POST['address'];
$state= $_POST['state'];
$gender= $_POST['sex'];
$time = isset($_POST['time']) ? $_POST['time'] : '';
//$time= $_POST['time'];
$dob=$_POST['date'];
$information= $_POST['information'];
$query = "SELECT username FROM record WHERE username ='$username'";
  $run = mysqli_query($link,$query);
   // Mysql_num_row is counting table row
    $count = mysqli_num_rows($run);
    if($count == 1){
        echo "<script>alert('username already exists, try another!')</script>";
    }
else{


if (empty($name)) {
     $msg= "<script>alert('Please enter name....')</script>"; 
}
else if (empty($username)) {
    $msg="<script>alert('Please enter username....')</script>"; 
}
else if(empty($password)) {
    $msg= "<script>alert('Please enter password....')</script>";     
}
else if($pass_len<=6) {
    $msg= "<script>alert('Please enter valid password....')</script>"; 
}
else if(empty($email)) {
    $msg= "<script>alert('Please enter password....')</script>";
}
else if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
    $msg= "<script>alert('Please enter valid email....')</script>";
}
else if(empty($mobile)) {
    $msg= "<script>alert('Please enter mobile number....')</script>";  
}
else if(empty($city)) {
    $msg= "<script>alert('Please enter city....')</script>";  
}
else if(empty($address)) {
    $msg= "<script>alert('Please enter address....')</script>"; 
}
else if(empty($state)) {
    $msg= "<script>alert('Please enter state....')</script>";  
}
else if($phone_len!=10) {
    $msg= "<script>alert('Please enter valid mobile number....')</script>"; 
}
else{
    $cmsg= "Successfully submitted...";
    
    if(mysqli_query($link, "insert into record (name,username,password,email,mobile,city,address,state,date,gender,time,information) VALUES('$name','$username','$password','$email','$mobile','$city','$address','$state','$dob','$gender','$time','$information')"))
    {
      //echo "submitted";
    }

 
}
}
}
 ?>

<!doctype html>
<html>
    <head>
          <title> registration</title>
        <link href="1.css" rel="stylesheet">
    <link rel="icon" href="image/logo.ico" type="image" size="32x32">
    <link href="font-awesome-4.5.0/css/font-awesome.min.css" rel="stylesheet">
          <style>
#frm { margin: 0 100px;
        float: left;
        height: 850px;  }      
#vid { float: left;
        margin-top: 10px; }   
body{  background: darkslategray; }
    </style>
    </head>
   <body>
          <div id="div1">
          <div id="frm">      
          <form action="" method="post">
              <fieldset>
<legend><spam class="fa fa-spinner fa-fw fa-spin fa-pulse"></spam>Your Personal Info<spam class="fa fa-spinner fa-fw fa-spin fa-pulse"></spam></legend>
        Name&ensp; <i class="fa fa-user"></i>&ensp;:-<br>
         <input type="text" name="name" placeholder="Ankit"size="40" ><br><br>
        UserName&ensp;<i class="fa fa-user"></i>&ensp;:-<br>      
        <input type="text" name="username" placeholder="Rajpoot" size="40"> <br><br>
        Password&ensp;<i class="fa fa-key"></i>&ensp; :-<br>
         <input type="password" name="password"  placeholder="8-12 characters" size="40"><br><br>
        Re-Enter Password&ensp;<i class="fa fa-key"></i>&ensp; :-<br>
         <input type="password" name="rpassword"  placeholder="********" size="40"><br><br>
        Email Id&ensp; <i class="fa fa-envelope-o"></i>&ensp; :-<br>
         <input type="text" name="email" placeholder="rajputankit22@gmail.com" size="40" ><br><br>
        Mobile No&ensp; <i class="fa fa-mobile"></i>&ensp; :-<br>
         <input type="text" name="mobile" placeholder="+918109522305" size="40"><br><br>
         City&ensp; <i class="fa fa-home"></i>&ensp;:-<br>
         <input type="text" name="city" placeholder="Durgapur"size="40" ><br><br>
         Address&ensp; <i class="fa fa-map-marker"></i>&ensp;:-<br>
         <input type="text" name="address" placeholder="Durgapur"size="40" ><br><br>
         State&ensp; <i class="fa fa-home"></i>&ensp;:-<br>
         <input type="text" name="state" placeholder="West Bangal"size="40" ><br><br>
         Gender  :-
        &ensp;&ensp;&ensp;&ensp;&ensp;<input type="radio" name="sex" value="male" checked><i class="fa fa-male"></i>&ensp;Male
        &ensp;&ensp;&ensp;<input type="radio" name="sex" value="female"><i class="fa fa-female"></i>&ensp;Female <br><br>
        <i class="fa fa-graduation-cap"></i> :-&ensp;&ensp;&ensp;&ensp;&ensp;              
        <input type="checkbox" name="time" value="school">School
        &nbsp&nbsp<input type="checkbox" name="time" value="graduation">Ug
        &nbsp&nbsp<input type="checkbox" name="time" value="post_graduation">Pg <br><br>
        DOB&ensp;<i class="fa fa-calendar"></i>&ensp;:-&ensp;&ensp;<input type="date" name="date">          
        
                  <br><br>               
        About You&ensp;<i class="fa fa-info-circle"></i>&ensp;:-<br>
        <textarea name="information" value="about" rows="5" cols="42"></textarea><br><br>
        &ensp;
       <input type="submit" name="submit" value="Sign Up" />
&ensp;&ensp;&ensp;  
                  
                  <button type="reset" onclick="location.href='index.php';" name="reset">Reset</button>
        <p style="color:red;">
<?php 
       if(isset($msg))
       {
          echo $msg;
       }
 ?>
 </p>
 <p style="color:green;">
<?php 
       if(isset($cmsg))
       {
          echo "<script>alert('$cmsg')</script>"; 
       }
 ?>
 </p>      
          
                </fieldset>
         </form>
          </div>          
         <div id="vid">
        <iframe src="pgimg/air.mp4" height="300" width="500"> </iframe>     
             
         </div>               
        </div>      
    
   </body>
</html>