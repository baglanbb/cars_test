// function getmodels(){
// 	$.get('../api/getModels.php',{brand:id},
// 		(data)=>{$.map(data,function(item){$('select [name=model]').append($('<option/>',
// 			{value:item.id,html:item.name}))})},'json')
// }

function selected(){
	var id = document.getElementById("brand").value;
	$.post('api/getModels.php',{brand_id: id},function(data){
		var result = jQuery.parseJSON(data);
		$("#model").empty();
		result.forEach(function(item,i,result){
			$("#model").append("<option value='"+item.id+"'>"+item.model+"</option>");
		});
	});
	// addOption(id);

}

function addOption(id){
	select = document.getElementById('model');

	// var length = select.options.length;
	// for (i = 0; i < length; i++) {
	//   select.options[i] = null;
	// }

 //    var opt = document.createElement('option');
 //    opt.value = id;
 //    opt.innerHTML = id;
 //    select.appendChild(opt);
}



