<?php 
include '../db.php';
if (isset($_GET["id"]) && strlen($_GET["id"])>0)  {
	$id = $_GET["id"];	
	
	$connection->query("DELETE FROM models WHERE id='$id'");
	header("Location: ../index.php?page=0");
}