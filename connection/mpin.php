<?php

$con = mysqli_connect("localhost", "id912018_abcd", "123456789", "id912018_webappdb");

$expin=$_POST["expin"];
$nwpin=$_POST["nwpin"];
$accno=$_POST["accno"];

   
   $flag=0;  
   $result=mysqli_query($con,"select * from user_info where accno='$accno'");
    if(mysqli_num_rows($result)>0) 
    {
	  $row=mysqli_fetch_assoc($result); 
	    $mpin=$row["mpin"];
		
		
		if($expin==$mpin)
		{
		 
		$mpin=$nwpin;
	    $sql=mysqli_query($con,"UPDATE user_info SET mpin='$mpin' WHERE accno='$accno'");
	    if($sql==true)
         { $flag=1;}
		}
	  
    }
   
   
   
   if($flag==1)
   {
	   $statement=mysqli_prepare($con, "SELECT * FROM user_info WHERE accno=?");
       mysqli_stmt_bind_param($statement,"s",$accno);
       mysqli_stmt_execute($statement);
	 
   
   mysqli_stmt_store_result($statement);
   mysqli_stmt_bind_result($statement,$accno,$ifcscode,$branchname,$username,$mpin,$balance,$mobile,$email,$custname,
$acctype);
   
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
		 $response["mobile"]=$mobile;
               $response["email"]=$email;
               $response["custname"]=$custname;
              $response["acctype"]=$acctype;
	}
	
	echo json_encode($response);
	}
else{
	 
	 $response=array();
   $response["success"]=false;
   echo json_encode($response);
	
}
?>