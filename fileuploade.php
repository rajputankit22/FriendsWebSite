<?php
if (isset($_POST['submit']))
 {
  $f_name=$_FILES['myfile']['name'];
  $f_tamp=$_FILES['myfile']['tmp_name'];
  
  $f_size=$_FILES['myfile']['size'];
  
  $f_extention=explode('.',$f_name);
  $f_extention=strtolower(end($f_extention));
  $f_newfile=uniqid( ).'.'.$f_extention;
  $store="Uploads/".$f_newfile;
  if ($f_extention=="jpg" || $f_extention=="png"||$f_extention=="gif") {
  	if ($f_size>=1000000 ) {
  		echo "Max size should be 1 MB";
  	}
  	else{
  		if(move_uploaded_file($f_tamp,$store))
  		{
               $con=mysqli_connect('localhost','root','')or die('ckeck username and password');
           mysqli_select_db($con,'photos') or die('not connected to database');
            $qry="insert into image (name,image) values ('$f_newfile','$f_size')";
            $result=mysqli_query($con,$qry);
            if ($result) {
              echo "<br/>Image Uploaded ";
            }
            else
            {
              echo "<br/>Image not Uploaded ";
            }
  		}
  	}
  }
  else
  {
  	echo "You can Uploads only images..";
  }
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>fileuploade</title>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
<p>Upload a picture-<input type="file" name="myfile"/></p>
<p><input type="submit" value="Upload" name="submit" /></p>
	
</form>
</body>
</html>