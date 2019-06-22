



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


/////////////////////////////

body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  max-width: 500px; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
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
          <p><a href='edit.php?id=$id'><button type="submit" onclick="document.getElementById(\'id01\').style.display=\'block\'" id="'. $row["id"].'">Edit info</button></a></p></div>
           </div></div>';
       // echo "<br> id: ". $row["uname"]. " - Name: ". $row["fname"]. " " . $row["lname"] . "<br>";
    }
} else {
    echo "0 results";
}


function edit($string)
{
    //document.getElementById('id01').style.display='block';
    echo "fuckkkkkkkkkkkkkkkkkk";
    echo $string;
}
//if(isset(var))
echo '<div id="id01" class="modal">
  
  <form class="modal-content animate" action="/action_page.php">
    <div class="imgcontainer">
      <span onclick="document.getElementById(\'id01\').style.display=\'none\'" class="close" title="Close Modal">&times;</span>
      <img src="img_avatar2.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
    <label for="id"><b>Item id</b></label>
    <input type="text" placeholder="Enter item id" name="id" value="'. $row["id"].'" required>

    <label for="itempic"><b>Image of item</b></label>
    <input type="file" placeholder="Enter Last name" name="image" required>

    <label for="Description"><b>Description</b></label>
    <textarea name="text" cols="30" rows="10" placeholder="Description about item....." value="'. $row["description"].'" required></textarea> 

    <label for="price"><b>Price</b></label>
    <input type="text" placeholder="Enter Price" name="price" value="'. $row["value"].'" required>

    <label for="Item name"><b>Item name</b></label>
    <input type="text" placeholder="Enter Price" name="Iname" required>
    
        
    <button type="submit" name="upload">Save</button>
    <button type="submit" name="Cancel">Save</button>
  </div>

    
  </form>
</div>';

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


<script type="text/javascript">
  function edit() {
  document.getElementById("demo").innerHTML = "Hello World";
}
</script>
</body>
</html>
