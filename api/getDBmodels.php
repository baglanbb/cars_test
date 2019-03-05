<?php 
$queryBrand = $connection->query("
	SELECT
	  *
	FROM brands			 
	ORDER BY brands.brand
");

$queryBrandSearch = $connection->query("
	SELECT
	  *
	FROM brands			 
	ORDER BY brands.brand
");