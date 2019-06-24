<?php

session_start();
$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'userreg');

	
	$uid =  $_POST['uname'];
	
	$pwd =  $_POST['pswd'];
	

	$sql = "SELECT*FROM user WHERE uname = '$uid' AND pswd = '$pwd'";
	$result = mysqli_query($con,$sql);
	$resultnum = mysqli_num_rows($result);

	if($resultnum==1){
		$_SESSION['username']=$uid;
		header('location:account.php');
	}else{
		header('location:login.php');
	}
?>