



<!DOCTYPE html>
<html>
<head>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" type="text/css" href="textAnimation.css">
    <link rel="stylesheet" type="text/css" href="navigation.css">
    <link rel="stylesheet" type="text/css" href="slideshowContainer.css">
    <link rel="stylesheet" type="text/css" href="textStyle.css">
    <link rel="stylesheet" type="text/css" href="searcBar.css">
    <title>ARTgallery</title>
<style>
div.gallery {
  border: 1px solid #ccc;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
}

* {
  box-sizing: border-box;
}

.responsive {
  padding: 0 6px;
  float: left;
  width: 33.33333%;
}

@media only screen and (max-width: 1000px) {
  .responsive {
    width: 49.99999%;
    margin: 6px 0;
  }
}

@media only screen and (max-width: 700px) {
  .responsive {
    width: 100%;
  }
}

.clearfix:after {
  content: "";
  display: table;
  clear: both;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 600px;
  margin: auto;
  padding-top: 10px;
  text-align: center;
  font-family: arial;
}

.price {
  color: grey;
  font-size: 22px;
}

.card button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.card button:hover {
  opacity: 0.7;
}
</style>
</head>
<body>

  <ul class="sidenav">
  
  <li><a class="active" href="#home">Home</a></li>
  <li><a href="#news">Shopping</a></li>
  <li><a href="#contact">Cart</a></li>
  <li><a href="#about">Account</a></li>
</ul>


<div class="content">

  

<div style=" position: relative; text-align: center; color: white;"><img src="pictures\main\abc.jpg" style="max-width: 100%;opacity: 0.7;" >

  <div style="position: absolute;top: 50%;left: 50%;transform: translate(-50%,-50%);">
    <h1 style="font-size:10vw; text-shadow: 4px 4px #0d0d0d;" class="animation1">ARTgallery</h1></div>
    
</div>

<div class="topnav">
  <a  href="#home">Login</a>
  <a href="#about">Signin</a>
  <a href="#contact">Help</a> 
  <input type="text" placeholder="Search..">
  <button ><img src="pictures\icon\search.png" style="max-width: 30px;max-height: 30px;"></button>
  
  


</div>


<h2 style="font-size: 3vw;text-align: center;">Abstract art</h2>
<hr>

<?php
//session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "userreg";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT*FROM iterm";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo '<div class="responsive">
            <div class="gallery card">
              <a target="_blank" href="img_lights.jpg">
              <img src="images\\'. $row["image"].'" alt="Northern Lights" width="600" height="400">
              </a>
            <div class="desc"><h1>'. $row["name"].'</h1>
          <p class="price">'. $row["value"].'</p>
          <p>'. $row["description"].'</p>
          <p><button>Add to Cart</button></p></div>
           </div></div>';
       // echo "<br> id: ". $row["uname"]. " - Name: ". $row["fname"]. " " . $row["lname"] . "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
/* <?php
$msg="";
if(isset($_POST['upload'])){
  $target = "images/".basename($_FILES['image']['name']);
  $db = mysqli_connect("localhost","root","","userreg");
  $image = $_FILES['image']['name'];
  $text = $_POST['text'];
  $name = $_POST['Iname'];
  $price = $_POST['price'];
  $id = $_POST['id'];
  $sql = "INSERT INTO iterm(id,image,description,value,name) VALUES('$id','$image','$text ','$price','$name')";
  if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
    mysqli_query($db,$sql);
    $msg = "Image upload successfully";

  }else{
    $msg = "There was a problem uploading"; 
  }
  
}

?>*/
?> 










<div style="padding:6px;">
  <p>This example use media queries to re-arrange the images on different screen sizes: for screens larger than 700px wide, it will show four images side by side, for screens smaller than 700px, it will show two images side by side. For screens smaller than 500px, the images will stack vertically (100%).</p>
  <p>You will learn more about media queries and responsive web design later in our CSS Tutorial.</p>
</div>
</div>
</body>
</html>
