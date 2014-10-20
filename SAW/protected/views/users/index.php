<?php
/* @var $this UsersController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Users',
);

$this->menu=array(
	array('label'=>'Crear Usuarios', 'url'=>array('create')),
	array('label'=>'Administrar Usuarios', 'url'=>array('admin')),
);
?>

<h1>Lista de Administradores</h1>
<br>
<br>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
	'pager'=>array("htmlOptions"=>array("class"=>"pagination"))
)); ?>

