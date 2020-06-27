<?
include('config.php');
session_start();
if (isset($_POST["removeItemFromCart"])) {
	$remove_id = $_POST["rid"];
	if (isset($_SESSION["id"])) {
		
		$sql =mysqli_query($db,"DELETE FROM cart WHERE pid = '$remove_id' AND id = '$_SESSION[id]'");
		
		if($sql){
    header('Location:checkout.php');
		}
	}
}

?>
