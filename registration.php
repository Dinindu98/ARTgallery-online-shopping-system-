<?php

session_start();
$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'userreg');

	$first =  $_POST['fname'];
	$last = $_POST['lname'];
	$uid =  $_POST['uname'];
	$email =  $_POST['email'];
	$pwd =  $_POST['pswd1'];
	$pwd2 =  $_POST['pswd2'];

	$sql = "SELECT*FROM user WHERE uname = '$uid'";
	$result = mysqli_query($con,$sql);
	$resultnum = mysqli_num_rows($result);

	if($resultnum==1){
		echo "User name already taken";
	}else{
		$reg = "INSERT INTO user(fname,lname,email,uname,pswd) VALUES('$first','$last','$uid','$email','$pwd');";
		mysqli_query($con,$reg);
		echo "Registration success";
	}
?>