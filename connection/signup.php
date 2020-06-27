<?php
   $con = mysqli_connect("localhost","root","", "shoppingcart");
if($con==true)
{
	
  $name=$_POST["name"];
  $username=$_POST["username"];
  $password=$_POST["password"];
  $cpassword=$_POST["cpassword"];
  $signup=$_POST["signup_btn"];
  
 if($signup=="signup")
{
if($password!=$cpassword){ 
  echo "Passwords should be same"; 
       
	   }
    else{

	$query = mysqli_query($con,"SELECT * FROM account WHERE username='$username' AND password='$password'");

	if(mysqli_num_rows($query)>0)
	{
		
		echo "SORRY...YOU ARE ALREADY REGISTERED USER...";
		
	 }
	else
	{
		$query = "INSERT INTO  account (name,username,password) VALUES ('$name','$username','$password')";
		
	    $data = mysqli_query ($con,$query);
      	if($data)
	     {
	      echo "YOUR REGISTRATION IS COMPLETED...";
		  
		  
	     }
		 	 
	 $_SESSION["name"]=$name;
	 $_SESSION["username"]=$username;
	 $_SESSION["password"]=$password;
	 
	 header("Location:http:../web/Homepage.html");
     exit();
	}

}
}
}
else{
	
	echo"connection_aborted or connection_timeout";
	
}

?>