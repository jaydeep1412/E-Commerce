<?php

$con = mysqli_connect("localhost", "id912018_abcd", "123456789", "id912018_webappdb");

$accno=$_POST["accno"];
$raccno=$_POST["raccno"];
$amount=$_POST["money"];
   
    $flag=0;  
   $result=mysqli_query($con,"select * from user_info where accno='$accno'");
    $result1=mysqli_query($con,"select * from user_info where accno='$raccno'");

    if(mysqli_num_rows($result)>0&&mysqli_num_rows($result1)>0) 
    {
	  $row=mysqli_fetch_assoc($result); 
          $row1=mysqli_fetch_assoc($result1); 
          $balance=($row['balance']-$amount);
          $balance1=($row1['balance']+$amount);
	  $sql=mysqli_query($con,"UPDATE user_info SET balance='$balance' WHERE accno='$accno'");
          $sql1=mysqli_query($con,"UPDATE user_info SET balance='$balance1' WHERE accno='$raccno'");
	 if($sql==true&&$sql1==true)
         { $flag=1;}
	  
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