<h1> Actualiza el Servicio #<?php echo $model->id?></h1>
<?php $form=$this->beginWidget("CActiveForm");?>

<b>Nombre</b><br>
<?php echo $form->textField($model,"name");?>
<?php echo $form->error($model,"name");?>
<br>

<b>Descripcion</b><br>
<?php echo $form->textField($model,"description");?>
<?php echo $form->error($model,"description");?>
<br>

<?php echo CHtml::submitButton ("Actualizar",array("class"=>"btn btn-primary btn-large"));?>
<?php $this->endWidget();?>