<?php
$this->breadcrumbs=array(
	$this->module->id,
);
?>

<div class="prepend-1 span-8"> 
<?php $this->beginWidget('zii.widgets.CPortlet', array('title' => Yii::t('ShopModule.shop', 'Categorias'))); ?>
<?php $this->renderPartial('/category/index'); ?>
<?php $this->endWidget(); ?>

<?php $this->beginWidget('zii.widgets.CPortlet', array('title' => Yii::t('ShopModule.shop', 'Tu Carrito de Compra'))); ?>
<?php $this->renderPartial('/shoppingCart/index', array()); ?>
<?php $this->endWidget(); ?>
</div>


<div id="shopcontent" class="span-14 last"> 
<h1> <?php echo Yii::t('ShopModule.shop', 'Bienvenido a tu tienda en Línea PRIMAR'); ?> </h1>

<?php $this->renderPartial('/shop/welcome'); ?>
</div>


<div class="clear"> </div>

