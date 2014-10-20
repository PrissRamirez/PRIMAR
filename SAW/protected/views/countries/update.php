<h1> Actualiza el Producto #<?php echo $model->id?></h1>
<br>
<?php $form=$this->beginWidget("CActiveForm");?>

<b>Nombre</b><br>
<?php echo $form->textField($model,"name");?>
<?php echo $form->error($model,"name");?>
<br>

<b>Descripcion</b><br>
<?php echo $form->textField($model,"description");?>
<?php echo $form->error($model,"description");?>
<br>

<b>Status</b><br>
<?php echo $form->textField($model,"status");?>
<?php echo $form->error($model,"status");?>
<br>
<b>Precio</b>
<br>
<?php echo $form->textField($model,"price");?>
<?php echo $form->error($model,"price");?>
<br>
<?php echo CHtml::submitButton ("Actualizar",array("class"=>"btn btn-primary btn-large"));?>
<?php $this->endWidget();?>