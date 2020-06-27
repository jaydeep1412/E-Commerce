<?php


$connection=mysql_connect("localhost","root","");
if(!$connection){
	
	die("Database Connection Failed:" .mysql_error());
}
else{
	$select_db=mysql_select_db("shoppingcart",$connection);
	
	if(!$select_db){
		
		die("Database Connection Failed ::" .mysql_error());
	}
	
	$site_tile='Online Shopping System';
	$page_tite='Home';
	
}


?>