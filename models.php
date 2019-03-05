<?php //include 'api/getDB.php';
	include 'db.php';
	if (isset($_GET["brand_id"]) && strlen($_GET["brand_id"])>0)  {
		$brand_id = $_GET["brand_id"];
	$queryModels= $connection->query("
		SELECT
		  *
		FROM models		
		WHERE brand_id='$brand_id'	
	");	
	}
?>

<html>
<head>
	<meta charset="UTF-8">
	<title>Cars</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

	<?php include 'main.php'; ?>

		<!-- table -->
		<table class="table table-sm table-hover">
		  <thead>
		    <tr>
		      <!-- <th scope="col">brand_id</th> -->
		      <th scope="col">Модель</th>
		      <th scope="col">Удалить</th>
		    </tr>
		  </thead>
		  <tbody>
		  	<?php 
				if ($queryModels->num_rows > 0) {
					while ($rowModels = $queryModels->fetch_object()) {
			?>
				    <tr>
				    	<td class="col-11"><?php echo $rowModels->model; ?>  </td>				      					      
				    	<td class="col-1"><a href="api/deleteCar.php?id=<?php echo $rowModels->id ?>"><img style="width: 1.5rem" src="img/delete.svg" alt=""></a></td>	      					      
				    </tr>	
		    <?php 
					}
				}
			?>
		  </tbody>
		</table>


	</div>






	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

	<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="js/script.js"></script>
</body>
</html>




