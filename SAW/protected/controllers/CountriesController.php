<?php
Class CountriesController extends Controller
{
		public function actionIndex()
		{
			if(isset($_GET["excel"]))
			{
				$model=Countries::model()->findAll();
				$content=$this->renderPartial("excel",array("model"=>$model),true);
				Yii::app()->request->sendFile("Productos2014.xls",$content);
	
			}
			
			$countries=countries::model()->findAll();
			$this->render("index",array("countries"=>$countries));
		}

		public function actionCaptura()
		{
			//$model=new Countries();
			$this->render("ventas",array(
				'nombre'=>'Gustavo',
				'numeros'=>array(2,3,4,10,5)
			));
			//echo 'ok';
		}
		public function actionCreate()
		{
			$model=new Countries();
			if(isset($_POST["Countries"]))
			{
				$model->attributes=$_POST["Countries"];
				if($model->save())
				{
					Yii::app()->user->setFlash("Success","Producto Creado Correctamente");
					$this->redirect(array("index"));
				} 
			}
			$this->render("create",array("model"=>$model));
		}

		public function actionUpdate ($id)
		{
			$model=Countries::model()->findByPk($id);
			if(isset($_POST["Countries"]))
			{
				$model->attributes=$_POST["Countries"];
				if($model->save())
				{
					Yii::app()->user->setFlash("Success","Producto Actualizado");
					$this->redirect(array("index"));
				}
				else
				Yii::app()->user->setFlash("Error","No se Actualizo :(");
			}

			$this->render("update",array("model"=>$model));
		}
		public function actionDelete($id)
		{
			$model=Countries::model()->deleteByPk($id);
			$this->redirect(array("index"));
		}
		public function actionListado()
		{

			$model=Countries::model()->findAll(array("condition"=>"status=1"));
			//print_r($model);
			foreach ($model as $v) {
							$this->render("view",array("model"=>$v));
			}
	
		}
		
		public function actionView($id)
		{
			$model=Countries::model()->findByPk($id);
			$this->render("view",array("model"=>$model));
		}

		public function actionEnabled($id)
		{
			$model=Countries::model()->findByPk($id);
			if($model->status==1)
				$model->status=0;
			else
				$model->status=1;
			$model->save();
			$this->redirect(array("index"));

		}
}

