<?php 
	// include '../db.php';

	// $query = $connection->query("
	// 		SELECT * FROM model_brand_car	
	// 	");


	// $brand_id = 0;
	// $brandInMem = "";
	// if ($query->num_rows > 0) {
	// 	while ($row = $query->fetch_object()) {
	// 		$brand = $row->brand;
	// 		$model = $row->model;

	// 		$brand = strtoupper($brand);

	// 		if ($brand != $brandInMem) {
	// 			$brand_id++;
	// 			$connection->query("INSERT INTO brands (id, brand)	VALUES (NULL, '$brand')");			
	// 			$brandInMem = $brand;
	// 		}

	// 		$connection->query("INSERT INTO models (id, model, brand_id) VALUES (NULL, '$model', '$brand_id')");
	// 	}
	// }


 ?>