<div class="view">
<h2> <?php echo CHtml::link(CHtml::encode($data->title), array('products/view', 'id' => $data->product_id)); ?> </h2>

	<p> <?php echo CHtml::encode($data->description); ?> </p>
	<br />




<div style="float:left;margin-right:10px;">
	<b><?php echo CHtml::encode($data->getAttributeLabel('Peso')); ?>:</b>
	<?php echo CHtml::encode($data->weight); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Material')); ?>:</b>
	<?php echo CHtml::encode($data->material); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Color')); ?>:</b>
	<?php echo CHtml::encode($data->color); ?>
	<br />

</div>
<div>

	<b><?php echo CHtml::encode($data->getAttributeLabel('Tamaño')); ?>:</b>
	<?php echo CHtml::encode($data->size); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Unidad')); ?>:</b>
	<?php echo CHtml::encode($data->unit); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Precio')); ?>:</b>
	<?php echo CHtml::encode($data->price) . " $"; ?>
	<br />


</div>


<hr />
<?php $this->renderPartial('/products/addToCart', array('model' => $data)); ?>
</div>
