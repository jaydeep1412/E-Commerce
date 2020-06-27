<?php
   $con = mysqli_connect("localhost", "id912018_abcd", "123456789", "id912018_webappdb");
  

 $accno=$_POST["accno"];
 

   $statement=mysqli_prepare($con, "SELECT * FROM user_info WHERE accno=?");
   mysqli_stmt_bind_param($statement,"s",$accno);
   mysqli_stmt_execute($statement);
   
   mysqli_stmt_store_result($statement);
   mysqli_stmt_bind_result($statement,$accno,$ifcscode,$branchname,$username,$mpin,$balance);
   
   $response=array();
   $response["success"]=false;

    while(mysqli_stmt_fetch($statement))
	{
	     $response["success"]=true;
	     $response["accno"]=$accno;
	     $response["ifcscode"]=$ifcscode;
	     $response["branchname"]=$branchname;
	     $response["username"]=$username;
	     $response["mpin"]=$mpin;
	     $response["balance"]=$balance;
	}
	
	echo json_encode($response);

?>