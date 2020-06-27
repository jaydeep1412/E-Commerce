
<?php
include('config.php');
// first thing is to start session 
session_start();
if(!$_SESSION['username'])
{  header('location:Homepage.php');
}
if(!$_SESSION['pid'])
{  header('location:Home.php');
}
$id=$_SESSION['id'];
$p_id=$_SESSION['pid'];


$result=mysqli_query($db,"select * from product where pid='$p_id'");
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>

  <title><?php echo "$row[pid]";?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

<style>


#x{
	
color:white;
align:center;
margin:15px 15px 0px 0px;
	
}

.cartb
{
text-align:center:
border:none;
background-color:rgba(0,0,255,0.5);
color:white;
}
.navbar navbar-inverse
{
	background-color:MediumSlateBlue;
	
}
.nav navbar-nav navbar-right #lgt a{
	
	text-decoration:none;
	
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
    width:80%;
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

.carousel-inner{
  width:80%;
  height:100%;
  
}
.slide
{
	width:100%;
	height:400px;
	position:center;
}


.spe_button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.spe_button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}
.spe_button:hover span {
  padding-right: 25px;
}

.spe_button:hover span:after {
  opacity: 1;
  right: 0;
}

.spe_button {
  display: inline-block;
  border-radius: 4px;
  background-color: orange;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin-left: 20px;
}
.navbar navbar-inverse
{
	background-color:MediumSlateBlue;
	
}

 #navbar-right li a
{
	text-decoration:none;
	padding:2px 3px;
	color:black;
	text-align:center
}
#navbar-right li a:hover{
	
	text-decoration:none
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
margin-bottom:300px
overflow:hidden;
}

}
input[type=text], input[type=password] {
    width:80%;
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
    position: fixed; /* Stay in place */
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
  max-height: 500px !important;
}
.card
{
	box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
	height:350px;
	weight:350px;
    border-radius: 5px;
	padding: 2px 16px;
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
<!--navigation bar start-->
<div name="navigation">
<nav class="navbar navbar-inverse">
  <div class="container-fluid" >
    <ul class="nav navbar-nav" Style="margin-left:150px">
      <li><a href="Home.php">Home</a></li>
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
<!--nav right!--> 
<ul class="nav navbar-nav navbar-right" id="navbar-right" >
   
        <li><a style="color:white;margin-top:12px;margin-right:10px;" href="checkout.php" class="dropdown-toggle"><span class="glyphicon glyphicon-shopping-cart"></span>Cart<span class="badge" style="margin-left:5px;"><?php 
		$r1=mysqli_query($db,"SELECT count(*) as total from cart where id='$id'");
        $data=mysqli_fetch_assoc($r1); 
		echo $data['total'];?></span></a>
		</li>

      <li style="margin-right:30px;color:white;margin-top:15px;">
                        
         <span class="glyphicon glyphicon-user" style="margin-right:5px;"></span>
		 <?php
         $result1 = mysqli_query($db,"SELECT * FROM account where id = '$id'");
	     $row1=mysqli_fetch_array($result1,MYSQLI_ASSOC);
	     echo"<td>".$row1['name']."</td>";                     
         ?>
		</li>
        <li style="margin-right:20px "><button type="button" style="width:auto;margin-right:30px;margin-top:10px;" class="btn btn-default btn-sm">
          <span class="glyphicon glyphicon-off" ></span ><a href="logout.php">Logout</a>
        </button>
	  </li>
	</ul>     
<!--nav right! over--> 


</nav>
</div>
<!--navigation bar over-->

  
  
  <!--slideshow-->
<div class="row">
<div class="col-sm-4">
<div class="slide">
<div class="container-fluid">
<div id="myCarousel" class="carousel slide" data-ride="carousel" style="width:400px;height:400px;">
    <!-- Indicators -->
    <ol class="carousel-indicators">
     <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox" >
<?php 

  $q=mysqli_query($db,"select * from subproduct natural join product where pid='$p_id'");	
    while($r=mysqli_fetch_array($q,MYSQLI_ASSOC))
		{		
		if($r['subpid']=='1')
		    {	
			echo "<div class=\"item active\">";
			echo"<img src=".$r['subppath']." alt=\"browser not supported\"
			width=\"80%\" height=\"80%\"></div>";
			}
			else{
		    echo "<div class=\"item\">";
		    echo"<img src=".$r['subppath']." alt=\"browser not supported\"
 			width=\"80%\" height=\"80%\"></div>";}
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
</div>
</div>

<div class="col-sm-6" style="margin-left:40px;">
	<?php

	echo "<h3>".$row['pname']."</h3><br>";
	echo "<p style=\"color:blue;word-spacing:10px;\"><h3 margin-right=\"10px\">Price:";
	echo "<i class=\"fa fa-inr\" style=\" margin-left:20px; color:blue\">&#x20b9;";
	echo $row['pcurrentprice']."</i>";
	echo "<del class=\"fa fa-inr\" style=\"color:red;margin:0px 10px 0 10px;\">&#x20b9;".$row['pactulprice']."</del>";
	echo $row['pdiscount'];
	
	echo "</p><br>";
	echo "</h3><h2>Description:</h2>";
	echo "<pre>".$row['pdescription']."</pre>";
	

?>
</div>
</div>
<br><br>
<form method="POST" action="">
<button class="spe_button" name="buynow[1]" onclick="Buy()"Value="<?php echo $p_id ?>"><span>Buy Now</span></button>
&nbsp;
&nbsp;
<button class="spe_button" name="cart[1]" value="<?php echo $p_id;?>"><span>Cart</span></button>
</form>

<?php

if (isset($_REQUEST['cart'])) {
    $submitValue = array_pop($_REQUEST['cart']);
	$qty=1;
    $query = "SELECT * FROM cart WHERE id='$id' AND pid='$submitValue'"; 
	$result = mysqli_query($db,$query);
	$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
	$count=mysqli_num_rows($result);
	if($count>0){	
		echo ("<SCRIPT LANGUAGE='JavaScript'>
            window.alert('Product already Added to Cart. Try different...')
            </SCRIPT>");
		}  
 else
	$add=mysqli_query($db,"insert into cart (id,pid,qty) VALUES ('$id','$submitValue','$qty')");
	if($add){
		echo("<SCRIPT LANGUAGE='JavaScript'>
            window.alert('Product Added to Cart Successfuly...')
			  window.location.href='product.php'; 
            </SCRIPT>");		
		}
}

if (isset($_REQUEST['buynow'])) {
    $submitValue = array_pop($_REQUEST['buynow']);
	$qty=1;
    $query = "SELECT * FROM cart WHERE id='$id' AND pid='$submitValue'"; 
	$result = mysqli_query($db,$query);
	$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
	$count=mysqli_num_rows($result);
	if($count>0){	
		echo ("<SCRIPT LANGUAGE='JavaScript'>
            window.alert('Product already Added to Cart. Try different...')
            </SCRIPT>");
		}  
 else{
	$add=mysqli_query($db,"insert into cart (id,pid,qty) VALUES ('$id','$submitValue','$qty')");
	if(isset($add)){
		echo("<SCRIPT LANGUAGE='JavaScript'>
			window.location.href='checkout.php';
            </SCRIPT>");	
            			
		}
 }
}
?>



</body>
</html>