<?php 
include 'db.php';

if (isset($_POST["brand"]) && strlen($_POST["brand"])>0 && isset($_POST["model"]) && strlen($_POST["model"])>0)  {
	$brand = $_POST["brand"];
	$model = $_POST["model"];

	$query = $connection->query("
		SELECT
		  brands.brand,
		  models.model,
		  models.brand_id,
		  models.id
		FROM brands
		  INNER JOIN models
		    ON brands.id = models.brand_id
		    WHERE models.brand_id = '$brand' AND models.id = '$model'
	");
}