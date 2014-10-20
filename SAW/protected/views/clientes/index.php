<h1> Nuestros Clientes</h1>

	<br>
		<div>Implementaciones Tecnologicas PRIMAR cuenta con clientes importantes, a continuación se moestrará
			alguno de ellos.
		</div>
	<br>

<?php foreach ($clientes as $data):?>
<br>
<h4><?php echo $data->name?> 	
</h4>
<?php

if(Yii::app()->user->id){
	?>
	<label class="badge badge-info"><?php echo $data->id;?></label>
	<?php echo CHtml::link("Crear",array("create"));?> |
	<?php echo CHtml:: link("Actualizar",array("update","id"=>$data->id)); ?> |
	<?php echo CHtml:: link("Borrar",array("delete","id"=>$data->id),array("confirm"=>"¿Estas seguro que desea borrar?"))?>|
	<?php echo CHtml::link("Ver",array("view","id"=>$data->id));?>

	<hr>

<?php
}
else {
?>
	<?php echo CHtml::link("Ver",array("view","id"=>$data->id));?>
	<hr>
	<?php
	}
	?>


<?php endforeach;?>

