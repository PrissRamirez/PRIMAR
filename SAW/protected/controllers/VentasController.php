<?php
Class VentasController extends Controller
{
		public function actionIndex()
		{
			if(isset($_GET["listaventas"]))
			{
				$model=ventas::model()->findAll();
				$content=$this->renderPartial("listaventas",array("model"=>$model),true);
				Yii::app()->request->sendFile("Cotizacion2014.xls",$content);
	
			}

			$ventas=Ventas::model()->findAll();
			$this->render("index",array("ventas"=>$ventas));
		}
		public function actionCreate()
		{
			$model=new Ventas();
			if(isset($_POST["ventas"]))
			{
				$model->attributes=$_POST["Ventas"];
				if($model->save())
				{
					Yii::app()->user->setFlash("Success","Cotizacion Creada Correctamente");
					$this->redirect(array("index"));
				} 
			}
			$this->render("create",array("model"=>$model));
		}

		public function actionUpdate ($id)
		{
			$model=Ventas::model()->findByPk($id);
			if(isset($_POST["Ventas"]))
			{
				$model->attributes=$_POST["Ventas"];
				if($model->save())
				{
					Yii::app()->user->setFlash("Success","Cotizacion Actualizada");
					$this->redirect(array("index"));
				}
				else
				Yii::app()->user->setFlash("Error","No se Actualizo :(");
			}

			$this->render("update",array("model"=>$model));
		}
		public function actionDelete($id)
		{
			$model=Ventas::model()->deleteByPk($id);
			$this->redirect(array("index"));
		}

		public function actionView($id)
		{
			$model=Ventas::model()->findByPk($id);
			$this->render("view",array("model"=>$model));
		}

		
}

