<?php
$this->breadcrumbs=array(
	Yii::t('ShopModule.shop', 'Products')=>array('index'),
	$model->title,
);

?>

<div class="prepend-8 span-8" id="shopcontent">
<p> <?php echo Yii::t('ShopModule.shop', 'Propiedades del Producto'); ?> </p>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'product_id',
		'title',
		'description',
		'price',
		'color',
		'weight',
		'material',
		'size',
		'unit',
		'Category.title',
	),
)); ?>
<hr />
</div>

<div class="span-8 last" id="shopcontent">

<h7><?php echo $model->title; ?></h7>

<h2><?php echo $model->description; ?></h2>





<?php $this->renderPartial('/products/addToCart', array('model' => $model)); ?>

</div>

<div class="clear"> </div>


