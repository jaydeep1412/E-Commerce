<?php
session_start();
include('config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Shopping Cart</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
<style>

#cartb
{
text-align:center:
color:white;
background-color:rgba(0,0,255,0.5);

}
.navbar navbar-inverse
{
	background-color:MediumSlateBlue;
	
}
.nav navbar-nav navbar-right
{
	
}
#submit,.cancelbtn{
color:white;
border:none;
border-radius:8px;
}

#submit:hover,.cancelbtn:hover{ 
box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}
#submit{

width: auto;
padding: 10px 18px;
text-align:center:
color:white;
background-color:rgba(0,0,255,0.5);

}

body{
margin-bottom:300px;

}
input[type=text], input[type=password] {
    width:70%;
    padding: 12px 20px;
    margin: 8px 0;
	border-radius:8px;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button1 {
    background-color: #4CAF50;
    color: white;
    padding: 20px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.9;
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
    border-radius: 50%;
}

.modal .container {
    margin-left:65px;
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position:fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow:hidden; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: auto;
	
	
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin:20px auto auto auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
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
@media screen and (max-width: 250px) {
    span.psw {
       display: block;
       float: none;
	   
    }
    .cancelbtn {
       width: 100%;
    }
}
.carousel-caption {
  width: 100%;
}
.carousel-inner{
  width:100%;
  max-height: 250px !important;
}
.card
{
	box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
	height:450px;
	weight:350px;
    border-radius: 5px;
	padding: 2px 10px;
	margin-bottom:30px;
	
}
.card:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.cardimg{
margin:auto;
margin-top:10px;
width:80%;
height:70%;



}
img {
    border-radius: 5px 5px 0 0;
	width:100%;
	height:100%;
	
	
}

dropdown-menu{
display:hidden;
}

caret:hover dropdown-menu{
display:block;
}

</style>
</head>

<body>
<div name="navigation">
<nav class="navbar navbar-inverse">
  <div class="container-fluid" >
    <ul class="nav navbar-nav" Style="margin-left:150px">
      <li><a href="#">Home</a></li>
	   <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Electronics<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li ><a class="dropdown-submenu "href="#">Mobile<span class="caret"></span></a>
		  <ul class="dropdown-menu">
		    <li><a href="#">Samsung</a></li>
		    <li><a href="#">Apple</a></li>
			<li><a href="#">Nokia</a></li>
			<li><a href="#">Vivo</a></li>
		  </ul>
	     </li>

          <li><a class="dropdown-submenu "href="#">Laptop & PCs<span class="caret"></span></a>
		  <ul class="dropdown-menu">
		    <li><a href="#">Dell</a></li>
		    <li><a href="#">Hp</a></li>
			<li><a href="#">Asus</a></li>
			<li><a href="#">Apple</a></li>
		  </ul>
		  </li>

          <li><a class="dropdown-submenu "href="#">Video & Audio<span class="caret"></span></a>
		  <ul class="dropdown-menu">
		    <li><a href="#">JBL</a></li>
		    <li><a href="#">Sony</a></li>
			<li><a href="#">i-ball</a></li>
			
		  </ul>
		  </li>
  
        </ul>
		</li>
		
		 <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Fashion<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li ><a class="dropdown-submenu "href="#">Men's<span class="caret"></span></a>
		  <ul class="dropdown-menu">
		    <li><a href="#">Clothig</a></li>
		    <li><a href="#">T-shirts</a></li>
			<li><a href="#">Shirts</a></li>
			<li><a href="#">jeans</a></li>
		  </ul>
	     </li>

          <li><a class="dropdown-submenu "href="#">Women's<span class="caret"></span></a>
		  <ul class="dropdown-menu">
		    <li><a href="#">Clothig</a></li>
		    <li><a href="#">Western Wear</a></li>
			<li><a href="#">Jewellery</a></li>
			<li><a href="#">Shandals</a></li>
		  </ul>
		  </li>

    
  
        </ul>
		</li>
		
		 <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Baby & kids<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li ><a class="dropdown-submenu "href="#">Footwear<span class="caret"></span></a>
		  <ul class="dropdown-menu">
		    <li><a href="#">Kids's Footwear</a></li>
		    <li><a href="#">boys's Footwear</a></li>
			<li><a href="#">girls's Footwear</a></li>
			
		  </ul>
	     </li>

          <li><a class="dropdown-submenu "href="#">Clothing<span class="caret"></span></a>
		  <ul class="dropdown-menu">
		    <li><a href="#">Kids's Clothing</a></li>
		    <li><a href="#">boys's Clothing</a></li>
			<li><a href="#">girls's clothing </a></li>
			
		  </ul>
		  </li>

   

  
        </ul>
		</li>

		
		 <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Books<span class="caret"></span></a>
        <ul class="dropdown-menu">
      
		    <li><a href="#">Entrance Exam</a></li>
		    <li><a href="#">Academic</a></li>
			<li><a href="#">Bussiness</a></li>

   

  
        </ul>
		</li>
	
    </ul>
   <ul class="nav navbar-nav navbar-right" >
        <li style="margin-right:10px ">
		<button type="button" onclick="document.getElementById('id01').style.display='block'" style="width:auto;margin-right:10px;margin-top:10px;" class="btn btn-default btn-sm">
          <span class="glyphicon glyphicon-user" ></span> Sign Up
        </button>
	
<div id="id01" class="modal">
  
  <form class="modal-content animate" method="post">
    
    <div class="container">
      <br><b style="color:black" align="left">Name</b><br>
      <input type="text" placeholder="Enter name" name="name" required>
	  <br><br>
	  <b style="color:black" align="left">Username</b><br>
      <input type="text" placeholder="Enter User Name" name="username" required>
	  <br><br>
      <b style="color:black" align="left">Password</b><br>
      <input type="password" placeholder="Enter Password" name="password" required>
	  <br><br>
	  <b style="color:black" align="left">Confirm Password</b><br>
      <input type="password" placeholder="Enter Confirm Password" name="cpassword" required>
	  <br><br>  
      <button style="width:70%"; type="submit" value="signup" name="signup_btn" id="submit">SignUp</button><br>
      <br><b style="color:black" align="left"><input type="checkbox" checked="checked"> Remember me</b>
    </div>

    <div class="container" style="background-color:#f1f1f1;width:100%;margin-left:0px">
      <button style="margin-left:65px;width:150px";type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw" style="margin-right:60px;"><a href="#">Forgot password?</a></span>
    </div>
    <br> 
 </form>
<?php
if($_POST['signup_btn']=="signup")
{
if($_SERVER["REQUEST_METHOD"] == "POST")
{

$name=mysqli_real_escape_string($db,$_POST['name']);
$username=mysqli_real_escape_string($db,$_POST['username']); 
$password=mysqli_real_escape_string($db,$_POST['password']); 
$cpassword=mysqli_real_escape_string($db,$_POST['cpassword']); 
$signup=mysqli_real_escape_string($db,$_POST['signup_btn']); 
if($signup == "signup")	{
	if($password!=$cpassword){  
       echo ("<SCRIPT LANGUAGE='JavaScript'>
          window.alert('Passwords should be same')
            window.location.href='Homepage.php';
            </SCRIPT>");
		}
    else	{
	$query = "SELECT * FROM account WHERE username='$username' AND password='$password'";
	$result = mysqli_query($db,$query);
	$row=mysqli_fetch_array($result,MYSQLI_ASSOC);

	$count=mysqli_num_rows($result);
	if($count>0)	{	
		echo ("<SCRIPT LANGUAGE='JavaScript'>
            window.alert('Username already registered. Try using different username.')
            </SCRIPT>");
		}
	else	{
		$data=mysqli_query($db,"insert into account (name,username,password) VALUES ('$name','$username','$password')");
      	if($data)	{
			echo ("<SCRIPT LANGUAGE='JavaScript'>
                window.alert('Your Accouct is Successfully Created. try Login! ')
                </SCRIPT>");
		}
	}
}
}
}
}
?>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

	  </li>
        <li style="margin-right:60px"><button type="button" onclick="document.getElementById('id02').style.display='block'"
		style="width:auto;margin-right:10px;margin-top:10px;" 
		class="btn btn-default btn-sm">
          <span class="glyphicon glyphicon-log-in"></span> Log in
        </button>
		<!--this is for login pop-up-->
		<div id="id02" class="modal" style="margin-top:50px;">
  
  <form class="modal-content animate" method="post">
    
    <div class="container">
      <br><b style="color:black" align="left">Username</b><br>
      <input type="text" placeholder="Enter Username" name="l_username" required>
	  <br><br>
	  <b style="color:black" align="left">Password</b><br>
      <input type="password" placeholder="Enter Password" name="l_password" required>
	  <br><br>
	  <button id="submit" style="width:70%"; type="submit" value="login" name="login_btn">Login</button>
	  <br><br>
	  <b style="color:black" align="left"><input type="checkbox" checked="checked"> Remember me</b><br>
    </div>

    <div class="container" style="background-color:#f1f1f1;width:100%;margin-left:0px"">
      <button style="margin-left:65px;width:150px"; type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw"  style="margin-right:60px;"><a href="#">Forgot password?</a></span>
    </div>
	<br>
  </form>
 
<?php

if(isset($_POST['login_btn'])=="login")
{	
if($_SERVER["REQUEST_METHOD"] == "POST")
{
	
$uname=mysqli_real_escape_string($db,$_POST['l_username']); 
$pwd=mysqli_real_escape_string($db,$_POST['l_password']);  
$lgn=mysqli_real_escape_string($db,$_POST['login_btn']); 
if($lgn=="login"){
	$query = "SELECT * FROM account WHERE username='$uname' AND password='$pwd'";
	$result = mysqli_query($db,$query);
	$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
	$count=mysqli_num_rows($result);
	if($count==1){	
	
	    
        $_SESSION['id']=$row['id'];
        $_SESSION['username']=$row['username'];
		
		echo ("<SCRIPT LANGUAGE='JavaScript'>
            window.alert('You are Loggined in! ')
			    window.location.href='Home.php';  
            </SCRIPT>");
		   }
	else {
	
			echo ("<SCRIPT LANGUAGE='JavaScript'>
                window.alert('Your Username or Password is Incorrect. Try again!')
                window.location.href='Homepage.php';               
			   </SCRIPT>");
		
	}
}
}
}
?>
</div>
<script>
// Get the modal
var modal = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
</li>
</ul>  
</div>
</nav>
</div>
<!--navbar over-->

<div name="Homepage">
<div class="container-fluid">
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
           <?php 
  $q=mysqli_query($db,"select * from offerbar");	
        while($r=mysqli_fetch_array($q,MYSQLI_ASSOC))
		{		
		if($r['ofid']=='1'){
			echo "<div class=\"item active\">";
			echo"<img src=".$r['ofpath']." alt=\"browser not supported\"
			width=\"100%\" height=\"100px\"></div>";
			}
			else{
		    echo "<div class=\"item\">";
		    echo"<img src=".$r['ofpath']." alt=\"browser not supported\"
 			width=\"100%\" height=\"100px\"></div>";
			}
		}
	     ?>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
</div>
<br>
<br>
<!--this is for product-->
<div class="container">

<div class="row" >
  <?php
    $i=0;
   $result1=mysqli_query($db,"Select * from product");
    while($row1=mysqli_fetch_array($result1,MYSQLI_ASSOC))
	{
    echo "<div class=\"col-sm-3\"><div class=\"card\">";
	if($row1["pid"])
	{
    echo "<div class=\"cardimg\"><img src=".$row1['ppath']." alt=\"oreo\"></div>";
	echo "<div class=\"container\" style=\"width:250px; align:justify\">";
	echo "<h5>".$row1['pname']."</h5>";	
	echo "<p style=\"color:blue;word-spacing:10px;\">";
	echo "<i class=\"fa fa-inr\"></i>";
	echo $row1['pcurrentprice'];
	echo "<del  class=\"fa fa-inr\" style=\"color:red;margin:0px 10px 0 10px;\">".$row1['pactulprice']."</del>";
	echo $row1['pdiscount'];
	echo "</p></div>";
	echo "<button type=\"button\" onclick=\"productAdd()\" id=\"cartb\" style=\"margin-left:20px;margin-top:10px;width:70px;color:white\" class=\"btn btn-default btn-sm cartb\">Add Cart</button>
	
	<button type=\"button\" onclick=\"productDetail()\" id=\"cartb\" style=\"margin-left:60px;margin-top:10px;width:70px;color:white\" class=\"btn btn-default btn-sm\">Buy Now</button></div></div>";
	$i++;
	}
	}
	?>
</div>
</div>

<script>
$(document).ready(function(){
  $('.dropdown a.dropdown-submenu').on("click", function(e){
    $(this).next('ul').toggle();
    e.stopPropagation();
    e.preventDefault();

  });
});
</script>
</body>
</html>

