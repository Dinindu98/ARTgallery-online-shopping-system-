
<!DOCTYPE html>
<html>
<HEAD>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" type="text/css" href="textAnimation.css">
    <link rel="stylesheet" type="text/css" href="navigation.css">
    <link rel="stylesheet" type="text/css" href="slideshowContainer.css">
    <link rel="stylesheet" type="text/css" href="textStyle.css">
    <link rel="stylesheet" type="text/css" href="searcBar.css">
    <title>ARTgallery</title></HEAD>
<body>
	
	

    

   



 
<ul class="sidenav">
  
  <li><a class="active" href="#home">Home</a></li>
  <li><a href="#news">Shopping</a></li>
  <li><a href="#contact">Cart</a></li>
  <li><a href="#about">Account</a></li>
</ul>


<div class="content">

	

<div style=" position: relative; text-align: center; color: white;"><img src="pictures\main\abc.jpg" style="max-width: 100%;" >

	<div style="position: absolute;top: 50%;left: 50%;transform: translate(-50%,-50%);">
		<h1 style="font-size:10vw; text-shadow: 4px 4px #0d0d0d;" class="animation1">ARTgallery</h1></div>
		
</div>

<div class="topnav">
  <a  href="login.php">Login</a>
  <a href="signin.php">Signin</a>
  <a href="#contact">Help</a> 
  <input type="text" placeholder="Search..">
  <button ><img src="pictures\icon\search.png" style="max-width: 30px;max-height: 30px;"></button>
  
</div>

<br>



</div>
<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "userreg";
$uname = $_SESSION['username'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT*FROM user WHERE uname ='$uname'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<H2> id: ". $row["uname"]. " - Name: ". $row["fname"]. " " . $row["lname"] . "</H2>";
    }
} else {
    echo "0 results";
}

$conn->close();

// VIEW CART
?> 

</body>
</html>


























