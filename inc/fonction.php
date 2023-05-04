<?php include 'init.php';
function executeRequest($req)
{
	$connect = Database::connect();
	$sql = $connect->query($req);

	if($sql == false){
		die("Erreur");
	}
}return $sql;

?>