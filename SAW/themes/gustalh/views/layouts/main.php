<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo $this->pageTitle;?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="<?php echo Yii::app()->theme->baseUrl;?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo Yii::app()->theme->baseUrl;?>/css/responsive.min.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo Yii::app()->theme->baseUrl;?>/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo Yii::app()->theme->baseUrl;?>/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo Yii::app()->theme->baseUrl;?>/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo Yii::app()->theme->baseUrl;?>/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="<?php echo Yii::app()->theme->baseUrl;?>/ico/favicon.png">
    <style type="text/css">
<!--
.style1 {
	color: #FFFFFF
}
.style2 {color: #000000}
-->
    </style>
</head>
  <body>

<div class="navbar navbar-static-top">
  <div class="navbar-inner">
    <div class="container">
      <div class="nav-collapse collapse pull-right">
        
        <?php
        
            
			     $arr_costumer=array('label'=>'Compradores', 'url'=>array('/shop/customer'));
           $arr_order= array('label'=>'Pedidos', 'url'=>array('/shop/order'));
           $arr_usuarios=array('label'=>'Administradores', 'url'=>array('/users/index'));
            if(!Yii::app()->user->id){
        
			  $arr_costumer=null;
			  $arr_order=null;
        $arr_usuarios=null;   
            }
        $this->widget('zii.widgets.CMenu',array(
          'htmlOptions'=>array("class"=>"nav"),
          'items'=>array(
            array('label'=>'Inicio', 'url'=>array('/site/index')),
            array('label'=>'Nosotros', 'url'=>array('/site/page', 'view'=>'about')),
            array('label'=>'Contáctanos', 'url'=>array('/site/contact')),
            array('label'=>'Servicios', 'url'=>array('/service/index')),
			array('label'=>'Shop', 'url'=>array('/shop/shop/index')),
            array('label'=>'Clientes', 'url'=>array('/clientes/index')),

			 $arr_costumer,
			 $arr_order,
       $arr_usuarios,
            array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
            array('label'=>'Salir ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
          ),
        )); ?>
        
      </div><!--/.nav-collapse -->
    </div>
  </div>
</div>

<?php if(!empty($this->breadcrumbs)):?>
  <div class="container" style="padding: 0">
  <div class="row-fluid">
  <div class="span12">
      <?php $this->widget('zii.widgets.CBreadcrumbs', array(
        'htmlOptions'=>array("style"=>"margin: 10px 0;"),
        'links'=>$this->breadcrumbs,
      )); ?><!-- breadcrumbs -->
  </div>
  </div> 
  </div>
<?php endif?>

  <?php if(($msgs=Yii::app()->user->getFlashes())!==null):?>
    <div class="container">
      <div class="row-fluid">
        <div class="span12">
      <?php foreach ($msgs as $type => $message):?>

        <div class="alert alert-<?php echo $type ?>">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <h4><?php echo ucfirst($type)?>!</h4>
          <?php echo $message?>
        </div>
    <?php endforeach;?>     
      </div>
    </div>
  </div>

<?php endif;?>
<?php if(($msgs=Yii::app()->user->getFlashes())!==null and $msgs!==array()):?>
  <div class="container" style="padding-top:0">
    <div class="row-fluid">
      <div class="span12">
        <?php foreach($msgs as $type => $message):?>
          <div class="alert alert-<?php echo $type?>">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <h4><?php echo ucfirst($type)?>!</h4>
            <?php echo $message?>          </div>
        <?php endforeach;?>
      </div>
    </div>
  </div>
<?php endif;?>
<?php echo $content;?>
  
<footer class="footer bg-ft clearfix pd4">
    <div class="container">
        <!--footer container-->
        <div class="row-fluid">
            <div class="span3">
              <section>
                    <h4 class="style2">&nbsp;</h4>
              </section>
            </div>
            <div class="span4">
              <section>
                    <p>                    </p>
                </section>
            </div>
            <!-- close .span4 -->
        </div>
        <!-- close .row-fluid-->
    </div>
    <!-- close footer .container-->
</footer>


 <section class="footer-credits">
   <div class="container">
       <ul class="clearfix">
           <li class="style1">© PRIMAR //PRISCILLA RAMIREZ ARCE// MARCOS SALATIEL CORONA TORRES//2014</li>
       </ul>
    </div>
    <!--close footer-credits container-->
</section>
  </body>
</html>
