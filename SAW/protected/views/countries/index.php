<h1> Productos</h1>
	<br>
		<div>
			A continuación, se moestrará los productos que Implementaciones Tecnológicas PRIMAR tiene a la venta al público
			que lo necesite, desde una simple compuerta hasta lo necesario para realizar un cableado estructurado.
		</div>	
	<br>
	<br>

<?php foreach ($countries as $data):?>
<br>
	<h4>
		<?php echo $data->name?> 
	</h4>
<?php


if(Yii::app()->user->id){
	?>
	<?php echo CHtml::link("Crear",array("create"));?> 
	<label class="badge badge-info"><?php echo $data->id;?></label>|
	<?php echo CHtml:: link("Actualizar",array("update","id"=>$data->id)); ?> |
	<?php echo CHtml:: link("Borrar",array("delete","id"=>$data->id),array("confirm"=>"¿Estas seguro que desea borrar?"))?>|
	<?php echo CHtml::link("Ver",array("view","id"=>$data->id));?>
	<a href="<?php echo $this->createUrl("enabled",array("id"=>$data->id));?>">
		<span class="label label-<?php echo $data->status==1?"info":"warning";?>">
			<?php echo $data->status==1?"Enable":"Disable";?>
		</span>
	</a>

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
			Si deseas tener una lista de los productos, a continuación da click abajo en la línea.
		</div>	
	<br>
		<?php echo CHtml::link("Lista de Productos",array("index","excel"=>1),array("class"=>"btn"));?> 

	<br>