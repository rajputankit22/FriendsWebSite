<?php 
$host='mysql.hostinger.in';
$username='u859935784_ankit';
$password='password';
//$dbname='record';

$link=mysqli_connect($host,$username,$password) or die('ckeck username and password') ;
mysqli_select_db($link,'u859935784_ar') or die('not connected to database');


 ?>