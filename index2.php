<?php

$hostname = "sql201.unaux.com";
$username = "unaux_32256482";
$spassword = "3Cq!Nf@5";
$database = "unaux_32256482_form";

$conn = mysqli_connect($hostname, $username, $spassword,$database);

$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['password'];

$sql = "INSERT INTO `form`.`form` (`username`, `email`, `password`) VALUES ('$name', '$email', '$pass');";



if($conn)  {
    $insert = true;
    echo "<script>console.log('Database Connected !');</script>";
}
else {
    echo "Error !!!";
}
?>
<!DOCTYPE html>
<html>
<head>
<style>
* {
    margin: 0;
    padding: 0;
}
    body {
    background-color: black;
}
h1 {
    color: blue;
    text-align: center;
    padding: 40px;
    font-size: 40px;
    left: 80px;
    top: 20px;  
    font-family: cursive;
}
h2 {
    color: red;
    text-align: center;
    font-size: 40px;
    padding: 10px;
    left: 80px;
    top: 20px;
    font-family: cursive;
}
img {
    border-radius: 50%;
}
header {
background-color: #333;
position: fixed;
padding: 10px;
left: 0;
right: 0;
top: 5px;
height: 30px;
display: flex;
align-items: center;
box-shadow: 0 0 50px 0 black;
}
/*Navigation Page starts from here*/
* {

margin: 0px;

padding: 10px;

box-sizing: border-box;

}

.body-text {

display: flex;

font-family: "Montserrat", sans-serif;

align-items: center;

justify-content: center;

margin-top: 250px;

}

nav {

display: flex;

justify-content: space-around;

align-items: center;

min-height: 8vh;

background-color: #333;

font-family: "Montserrat", sans-serif;

}

.heading {

color: yellow;

text-transform: uppercase;

letter-spacing: 5px;

font-size: 20px;

}

.nav-links {

display: flex;

justify-content: space-around;

width: 20%;

}

.nav-links li {

list-style: none;

}

.nav-links a {

color: white;

text-decoration: none;

letter-spacing: 4px;

font-weight: bold;

font-size: 14px;

padding: 14px 16px;

}

.nav-links a:hover:not(.active) {

background-color: blue;

}

.nav-links li a.active {

background-color: #4caf50;

}
/*Navigation Code ends here*/
</style>
<link rel="icon" type="image/x-icon" href="Silent.jpg">
</head>
<!--Our Website code starts from here.................................................-->

<body>
<!--Navigation Page -->
<nav>
<div class="heading">
<h4>Sarthak Website</h4>
</div>
<ul class="nav-links">
<li><a href = "#">Home</a></li>
<li><a href="python.html">Python</a></li>
<li><a href="contact1.html">Contact</a></li> 
<li><a class = "active" href = "index.html">Logout</a></li>
</ul>
</nav>
<!--Navigation Page ends here-->
<h1>Hi ! <?php echo $name;?><br><h2>What would you do today ?</h2></h1>
<img src = "Silent.jpg" >
</body>
</html>
