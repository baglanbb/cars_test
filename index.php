<?php include 'api/getDB.php' ?>

<html>
<head>
	<meta charset="UTF-8">
	<title>Cars</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

	<?php include 'main.php' ?>
		<!-- pages -->
		<div style="position: fixed; bottom: 1rem; right: 2rem;">
			<nav aria-label="Page navigation example">
			  <ul class="pagination">
			    <li class="page-item">
			      <a class="page-link" href="?page=0" aria-label="Previous">
			        <span aria-hidden="true">&laquo;</span>
			      </a>
			    </li>
			    <?php for ($i = 0; $i < $pages; $i++) {?>
			   	 <li class="page-item <?php if($pageNum == $i){echo "active";} ?>"><a class="page-link" href="?page=<?php echo $i; ?>"><?php echo $i+1; ?></a></li>		    	
			    <?php } ?>
			    <li class="page-item">
			      <a class="page-link" href="?page=<?php echo $pages-1; ?>" aria-label="Next">
			        <span aria-hidden="true">&raquo;</span>
			      </a>
			    </li>
			  </ul>
			</nav>
		</div>
		<!-- table -->
		<table class="table table-sm table-hover">
		  <thead>
		    <tr>
		      <!-- <th scope="col">id</th> -->
		      <th scope="col">Марка</th>
		    </tr>
		  </thead>
		  <tbody>
		  	<?php 
				if ($query->num_rows > 0) {
					while ($row = $query->fetch_object()) {
			?>
				    <tr>
				    	<td>
				    		<a style="text-decoration: none; color: #333;" href="models.php?brand_id=<?php echo $row->id; ?>"><?php echo $row->brand; ?></a>    			
			    		</td>				      					      
				    </tr>	
		    <?php 
					}
				}
			?>	  
		  </tbody>
		</table>


	</div>






	<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>

	<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="js/script.js"></script>
</body>
</html>




