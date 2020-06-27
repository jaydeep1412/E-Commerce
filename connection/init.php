<?php

$db_name="id912018_webappdb";
$mysql_user="id912018_abcd";
$mysql_pass="123456789";
$server_name="localhost";


$con=mysqli_connect($server_name,$mysql_user,$mysql_pass,$db_name);


if(!$con){
echo"connection error";
}

?>