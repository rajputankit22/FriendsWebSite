<?php 
$host='localhost';
$username='root';
$password='';
$dbname='record';

$link=mysqli_connect($host,$username,$password) or die('ckeck username and password') ;
mysqli_select_db($link,'ankit') or die('not connected to database');


 ?>