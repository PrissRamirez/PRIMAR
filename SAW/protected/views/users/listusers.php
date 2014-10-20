<table>
	<tr>	

		<th style="background-color: #555;color: #fff">ID</th>
		<th style="background-color: #555;color: #fff">Nombre</th>
		<th style="background-color: #555;color: #fff">Descripción</th>
		

	</tr>


<?php foreach($model as $data):?>
	<tr>	

		<td><?php echo $data->id?></td>
		<td><?php echo $data->username?></td>
		<td><?php echo $data->description?></td>

	</tr>

<?php endforeach;?>
</table>