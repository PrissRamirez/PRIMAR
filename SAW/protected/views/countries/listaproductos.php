<table>
	<tr>	

		<th style="background-color: #555;color: #fff">ID</th>
		<th style="background-color: #555;color: #fff">NOMBRE</th>
		<th style="background-color: #555;color: #fff">DESCRIPCION</th>
		<th style="background-color: #555;color: #fff">MODELO</th>
		<th style="background-color: #555;color: #fff">STATUS</th>
		<th style="background-color: #555;color: #fff">PRECIO</th>

	</tr>


<?php foreach($model as $data):?>
	<tr>	

		<td><?php echo $data->id?></td>
		<td><?php echo $data->name?></td>
		<td><?php echo $data->description?></td>
		<td><?php echo $data->model?></td>
		<td><?php echo $data->status?></td>
		<td><?php echo $data->price?></td>>

	</tr>

<?php endforeach;?>
</table>