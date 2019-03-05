<?php 
include '../db.php';
	if (isset($_POST["brand_id"]) && strlen($_POST["brand_id"])>0 && isset($_POST["model"]) && strlen($_POST["model"])>0)  {
		$brand_id = $_POST["brand_id"];
		$model = $_POST["model"];	
		
		$connection->query("INSERT INTO models (id, model, brand_id)	VALUES (NULL, '$model', '$brand_id')");
		header("Location: ../index.php?page=0");
	}