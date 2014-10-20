<h1> Create Countries </h1>
<br>
<?php $form=$this->beginWidget("CActiveForm");?>

<b>Nombre</b><br>
<?php echo $form->textField($model,"name");?>
<?php echo $form->error($model,"name");?>
<br>

<b>Descripción</b><br>
<?php echo $form->textField($model,"description");?>
<?php echo $form->error($model,"description");?>
<br>

<b>Modelo</b><br>
<?php echo $form->textField($model,"model");?>
<?php echo $form->error($model,"model");?>
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
<?php echo CHtml::submitButton ("Crear",array("class"=>"btn btn-primary btn-large"));?>
<?php $this->endWidget();?>