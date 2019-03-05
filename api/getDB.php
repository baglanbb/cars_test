<?php 
	include 'db.php';
	
	if (isset($_GET["page"])) {
		$pageNum = $_GET["page"];
	}

	$result = $connection->query("SELECT count(*) as total from brands");
	$data=mysqli_fetch_assoc($result);
	$pages = ceil($data['total']/50);
	$startLim = $pageNum*50;


	$query= $connection->query("
		SELECT
		  *
		FROM brands			 
		ORDER BY brands.brand	
		LIMIT $startLim, 50	
	");	
	
	
	

	
?> 