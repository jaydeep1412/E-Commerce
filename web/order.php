<?php include('config.php');
// first thing is to start session 
session_start();
if(!$_SESSION['username'])
{  header('location:Homepage.php');
}
if(!$_SESSION['total'])
{  header('location:checkout.php');
}
$id=$_SESSION['id'];
$addrid=$_SESSION['addrid'];
$total=$_SESSION['total'];
$count=$_SESSION['count'];

if(isset($_POST['remove'])) {
    $submitValue = array_pop($_REQUEST['remove']);
	$result2= mysqli_query($db,"DELETE FROM address WHERE  id='$id' and addrid='$submitValue'");
    if($result2){	
	
		echo ("<SCRIPT LANGUAGE='JavaScript'>
            window.alert('Address removel successfuly. Shopping Continue...')
            window.location.href='checkoutpay.php';  
            </SCRIPT>");
    }	
    }
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Shopping Cart</title>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<script src="js/bootstrap.min.js"></script>
		<style>

	#in{
		
		
	height:40px;
	}	
		
#cartb
{
text-align:center;
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
    overflow:auto; /* Enable scroll if needed */
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

<nav class="navbar navbar-inverse">
  <div class="container-fluid" >
    <ul class="nav navbar-nav">
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
	
	
   <ul class="nav navbar-nav navbar-right" id="navbar-right" >
   
        <li><a style="color:white;margin-right:10px;" href="checkout.php" ><span class="glyphicon glyphicon-shopping-cart"></span>Cart<span class="badge" style="margin-left:5px;"><?php 
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
        <li style="margin-right:20px "><span><a href="logout.php"><button type="button" style="width:auto;margin-right:30px;margin-top:10px;" class="btn btn-default btn-sm">
          <span class="glyphicon glyphicon-off"style="margin-right:5px;" ></span >Logout
        </button></a></span>
		</li>
	</ul>

</nav>
	<p><br/></p>

<div class="container-fluid">
	
<!--customer info start-->		
<div class="row">
<div class="col-md-1"></div>
<div class="col-md-10">
<div class="panel panel-primary">
<div class="panel-heading">Customer Information</div>
<div class="panel-body">
						  
							<div class="col-md-2" style=" color: #428bca;font-size: 20px;"><b>
							Name</b>
							</div>
							<div  class="col-md-1" style=" color: #428bca;font-size: 20px;"><b>:</b></div>
							<div class="col-md-9" style=" color: #428bca;font-size: 20px;"><b>
							<?php echo $row1['fullname']?></b>
							</div><br><hr>
												
</div>					
</div>				
</div>
<div class="col-md-1"></div>
</div>
<!--Customer Info over-->
<!--address start-->			
<div class="row">
<div class="col-md-1"></div>
<div class="col-md-10">
<div class="panel panel-primary">
<div class="panel-heading">Delivery Address</div>
<div class="panel-body">

               
  <div class="col-md-2"style=" color: #428bca;font-size: 20px;">
							<b>Address</b>
							</div>     
   <div  class="col-md-1" style=" color: #428bca;font-size: 20px;"><b>:</b></div>							
							
 <?php

 $addr=mysqli_query($db,"select * from address where id='$id' and addrid='$addrid'");
 $row=mysqli_fetch_array($addr,MYSQLI_ASSOC);
 
 
echo "
    <div class=\"col-md-9\" style=\"color: #428bca;font-size:18px;\" >
	
    <div id=\"row\">
	<b>
    <div class=\"col-md-12\">".$row['street']."</div>
	</div>
	<div id=\"row\">
	<div class=\"col-md-4\">".$row['city']."</div>
    <div class=\"col-md-4\">".$row['taluko']."</div>
	<div class=\"col-md-4\">".$row['dist']."</div>
    <div class=\"col-md-4\">".$row['pinno']."</div>
	</div>
    <div id=\"row\"><div  class=\"col-md-12\">Mobile No. :".$row['mobileno']."</div>
	</div></b>
	<br><br><br><hr>
	</div>";
						
	?>															
</div>			
</div>
</div>
<div class="col-md-1"></div>			
</div>
<!--address over-->		

<!--payment-->		
<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-10">
				<div class="panel panel-primary">
					<div class="panel-heading">Payment Option</div>
					
	                   <div class="panel-body">
						<b><div class="col-md-10"  style=" color: #428bca;font-size: 18px;">
						<?php echo $_SESSION['payoption'];?>
						</div></b>
					
						</div><br>				
				</div>			
			</div>

<div class="col-md-1"></div>
</div>
<!--payment-->
<!--product strat-->
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-10">
				<div class="panel panel-primary">
					<div class="panel-heading">Cart Checkout</div>
					<div class="panel-body" style=" color: #428bca;font-size: 18px;" >				
						<div class="row"  >
							<div class="col-md-1"></div>
							<div class="col-md-2 col-xs-2"><b>Product Image</b></div>
							<div class="col-md-2 col-xs-2"><b>Product Name</b></div>
							<div class="col-md-2 col-xs-2"><b>Quantity</b></div>
							<div class="col-md-2 col-xs-2"><b>Product Price</b></div>
							<div class="col-md-2 col-xs-2"><b>Price in Rs.</b></div>
						</div><br>
						
						<div id="cart_checkout"></div>
						
						
<?php

$result=mysqli_query($db,"select * from cart natural join product where id='$id'");
$product_id = array();
$i=1;
$total=0;
$count=0;
while($row1=mysqli_fetch_array($result,MYSQLI_ASSOC))
{	
	if($row1["pid"])
	{
   $product_id[$i]=$row1["pid"];		
    $total=$total+$row1["pcurrentprice"]*$row1["qty"];
	$count=$count+$row1["qty"];
    
echo "
      <div class=\"row\">
	  <div class=\"col-md-1\"></div>
	  
    	  
							<div class=\"col-md-2\"><img src=".$row1['ppath']."></div>
							<div class=\"col-md-2\">".$row1['pname']."</div>
							<div class=\"col-md-2 qty\"><input type='text' name=\"qty1\" class='form-control qty'  id=\"in\" value=".$row1['qty']." disabled></div>
							<div class=\"col-md-2\"><input type='text'id=\"in\" class='form-control' value=".$row1['pcurrentprice']." disabled></div>
							<div class=\"col-md-2\"><input id=\"in\" type='text' class='form-control' value=".$row1['pcurrentprice']*$row1['qty']."  disabled></div>
						</div><br> 
						
						
						
						";
	$i++;			
    }
	
	
}
echo "
<div class=\"row\">
							<div class=\"col-md-7 col-xs-2\"></div>
							<div class=\"col-md-3\" style=\"margin-top:10px; color: #428bca;font-size: 25px;\";><b>
							Total Price :</b>&nbsp&nbsp <b>Rs.</b></div>
							<div class=\"col-md-2\"><input type='text'  id=\"in\" class='form-control' value=".$total." disabled></div>
</div><br>";							
				
?>			
						</div> 
					</div>
			</div>
			<div class="col-md-1"></div>
			
</div>
<!--product end-->
		
<!--cartsub total start-->		
<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-10">
				<div class="panel panel-primary">
					<div class="panel-heading">Porduct Total </div>
<div class="panel-body">
						 
<div class="row">
							<div class="col-md-1"></div>
							<div class="col-md-5" style=" color: #428bca;font-size: 18px;"><b>
							Total Price :</b>
							</div>
							<div class="col-md-1"></div>
							<div class="col-md-5" style=" color: #428bca;font-size: 18px;"><b>
							Total Item :</b>
							</div><br><hr>
</div>							
<div class="row">			
                           <div class="col-md-1" 
						   style="margin-top:2px; color: #428bca;">
						   <b>Rs.</b>
							</div>				
							<div class="col-md-5" ><input type='text' id="in" class='form-control' value="<?php echo $total?>.00" disabled></div>
							<div class="col-md-1"></div>
							
							<div class="col-md-5"><input type='text'  id="in" class='form-control' value="<?php echo $count ?>" disabled>
							</div>
<br><hr>
</div>							
</div>					
</div>				
</div>
<div class="col-md-1"></div>
</div>

<!--cartsub total end-->

<div class="panel-footer"></div>
</body>	
</html>
















		