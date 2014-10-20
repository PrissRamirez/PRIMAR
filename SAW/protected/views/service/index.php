<h1> Nuestros Servicios</h1>

	<br>
		<div>PRIMAR cuenta con varios servicios, a continuación se muestran algunos de los servicios que la empresa Implementaciones
	Tecnologicas PRIMAR cuenta.</div>
	<br>

<?php foreach ($service as $data):?>
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

		<div>
			Si deseas tener una lista de los servicios, a continuación da click abajo en la línea.
		</div>	
	<br>
		<?php echo CHtml::link("Lista de Servicios",array("index","listservice"=>1),array("class"=>"btn"));?> 

	<br>