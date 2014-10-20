<?php
/* @var $this UsersController */
/* @var $data Users */
?>

<table class="table">
	
	<tr>
	<td><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</td>
	<td><?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?></td>
	</tr>
	
	<tr>
	<td><?php echo CHtml::encode($data->getAttributeLabel('username')); ?>:</td>
	<td><?php echo CHtml::link(CHtml::encode($data->username),array('view','username'=>$data->id)); ?></td>
	</tr>

	<tr>
	<td><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</td>
	<td><?php echo CHtml::link(CHtml::encode($data->email),array('view','email'=>$data->email)); ?></td>
	</tr>

	<tr>
	<td><?php echo CHtml::encode($data->getAttributeLabel('rol')); ?>:</td>
	<td><?php echo CHtml::link(CHtml::encode($data->rol),array('view','rol'=>$data->rol)); ?></td>
	</tr>

</table>