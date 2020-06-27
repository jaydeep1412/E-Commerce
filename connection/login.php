<?php
   $con = mysqli_connect("localhost", "root", "", "shoppingcart");
  

 $username=$_POST["username"];
  $password=$_POST["password"]; 
  $login=$_POST["login_btn"];
if($con)
{
 if($login=="login"){
   $result=mysqli_query($con, "SELECT * FROM account WHERE username='$username' AND password='$password'");
   
  if($result==true){
	  echo "login Successful ";
	 $_SESSION["name"]=$name;
	 $_SESSION["username"]=$username;
	 $_SESSION["password"]=$password;
	 
	 header("Location:http:../web/Homepage.html");
     exit();
  }
  else{
	  
	  echo "Your password or UserName Invalid";
  }
 }
}else{
	
	echo "connection Failed";
}

?>