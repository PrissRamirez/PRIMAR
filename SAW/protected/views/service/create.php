<h1> Crear Servicio </h1>
<?php $form=$this->beginWidget("CActiveForm");?>

<b>Nombre</b><br>
<?php echo $form->textField($model,"name");?>
<?php echo $form->error($model,"name");?>
<br>

<b>Descripción</b><br>
<?php echo $form->textField($model,"description");?>
<?php echo $form->error($model,"description");?>
<br>

<?php echo CHtml::submitButton ("Crear",array("class"=>"btn btn-primary btn-large"));?>
<?php $this->endWidget();?>