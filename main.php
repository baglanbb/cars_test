<?php include 'api/getDBmodels.php' ?>

<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <form method="POST" action="api/newCar.php" enctype="multipart/form-data">
		      <div class="modal-body">
		        <div class="input-group">
		        	<!-- <input type="text" class="form-control mr-1" placeholder="Марка" name="brand_id"> -->
		        	<select name="brand_id" id="">
		        		<?php 
							if ($queryBrand->num_rows > 0) {
								while ($rowSearch = $queryBrand->fetch_object()) {
						?>
							    <option value="<?php echo $rowSearch->id; ?>"><?php echo $rowSearch->brand; ?></option>	
					    <?php 
								}
							}
						?>
		        	</select>
		        	<input type="text" class="form-control" placeholder="Модель" name="model">
		        </div>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
		        <button type="submit" class="btn btn-primary">Сохранить</button>
		      </div>
			</form>
	    </div>
	  </div>
	</div>





	<!-- add car -->
	<div style="position: fixed; bottom: 6rem; right: 2rem;">
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">	Добавить	</button>				
	</div>

	<!-- home -->
	<div style="position: fixed; bottom: 6rem; right: 9rem;">
		<a href="index.php?page=0">	<button type="button" class="btn btn-danger">	Домой	</button>	</a>	
	</div>


	<!-- head -->
	<div class="container">
		<form method="POST" action="selectedModel.php" enctype="multipart/form-data">
			<div class="row mt-4">
				<div class="input-group col-5 mb-3">
				  <div class="input-group-prepend">
				    <label class="input-group-text" for="inputGroupSelect01">Марка</label>
				  </div>
				  <select class="custom-select" name="brand" id="brand" onchange="selected()">
			  		<?php 
						if ($queryBrandSearch->num_rows > 0) {
							while ($rowBrandSearch = $queryBrandSearch->fetch_object()) {
					?>
						    <option value="<?php echo $rowBrandSearch->id; ?>"><?php echo $rowBrandSearch->brand; ?></option>	
				    <?php 
							}
						}
					?>	
				  </select>
				</div>
				<div class="input-group col-5 mb-3">
				  <div class="input-group-prepend">
				    <label class="input-group-text" for="inputGroupSelect02">Модель</label>
				  </div>
				  <select class="custom-select" name="model" id="model">
				  	
				  </select>
				</div>
				<div class="col-2">
					<button type="submit" class="col-12 btn btn-primary">Найти</button>
				</div>
			</div>
		</form>
