<?php 
$connect_error = 'sorry, server is down';
$con=mysqli_connect('localhost', 'root', '');
mysqli_select_db($con,'lr') or die($connect_error);


?>