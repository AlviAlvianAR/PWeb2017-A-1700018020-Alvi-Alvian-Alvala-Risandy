<?php 
$user = $_POST['inputemail'];
$password = $_POST['inputpassword'];
if ($user=="admin" and $password=="admin") {
	include 'profdiler.php';
}
else{
	echo "<script>alert('User dan Password Salah')</script>";
	include 'login.php';
}
?>
