<h1> Detalle del Producto </h1>
<br>
<br>
<table class="table">
	<tr>
		<td><strong>ID</strong></td>
		<td><?php echo $model->id?></td>
	</tr>
	
	<tr>
		<td><strong>Nombre</strong></td>
		<td><?php echo $model->name?></td>
	</tr>

	<tr>
		<td><strong>Descripción</strong></td>
		<td><?php echo $model->description?></td>
	</tr>


	<tr>
		<td><strong>Modelo</strong></td>
		<td><?php echo $model->model?></td>
	</tr>

	
	<tr>
		<td><strong>Precio</strong></td>
		<td><?php echo $model->price?></td>
	</tr>
	
	<tr>
		<td><strong>Status</strong></td>
		<td><span class="label label-<?php echo $model->status==1?"info":"warning";?>"><?php echo $model->status==1?"Enable":"Disable";?></span></td>
	</tr>

</table>