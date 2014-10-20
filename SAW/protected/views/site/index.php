<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h1>Bienvenido A <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<p>¡Enhorabuena! Ha creado su aplicación Yii.</p>

<p>Usted puede cambiar el contenido de esta página modificando los siguientes dos archivos:</p>
<ul>
  <li>Ver archivo: <code><?php echo __FILE__; ?></code></li>
	<li>archivo de layout: <code><?php echo $this->getLayoutFile('main'); ?></code></li>
</ul>

<p>Para más detalles sobre cómo desarrollar aún más esta aplicación, por favor, lea la <a href="http://www.yiiframework.com/doc/">documentation</a>.No dude en preguntar en el <a href="http://www.yiiframework.com/forum/">forum</a>,
si tiene alguna pregunta.</p>
