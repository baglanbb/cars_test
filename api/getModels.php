<?php 
include '../db.php';
if (isset($_POST["brand_id"]) && strlen($_POST["brand_id"])>0)  {
	$brand_id = $_POST["brand_id"];


	$query = $connection->query("
		SELECT
		  *
		FROM models	
		WHERE brand_id = '$brand_id'
		ORDER BY model
	");	


	$row=array();
	while ($row[] = $query->fetch_object()) {}
	echo json_encode($row);
}
// $res = json_encode($db->query('SELECT * FROM models WHERE brand_id='.filter_input(INPUT_GET,'id',FILTER_SATINIZE_INT)));