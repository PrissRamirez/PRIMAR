<?php
Class ServiceController extends Controller
{
		public function actionIndex()
		{
			if(isset($_GET["listservice"]))
			{
				$model=Service::model()->findAll();
				$content=$this->renderPartial("listservice",array("model"=>$model),true);
				Yii::app()->request->sendFile("Servicios2014.xls",$content);
	
			}

			$service=service::model()->findAll();
			$this->render("index",array("service"=>$service));
		}
		public function actionCreate()
		{
			$model=new Service();
			if(isset($_POST["service"]))
			{
				$model->attributes=$_POST["Service"];
				if($model->save())
				{
					Yii::app()->user->setFlash("Success","Servicio Creado Correctamente");
					$this->redirect(array("index"));
				} 
			}
			$this->render("create",array("model"=>$model));
		}

		public function actionUpdate ($id)
		{
			$model=Service::model()->findByPk($id);
			if(isset($_POST["Service"]))
			{
				$model->attributes=$_POST["Service"];
				if($model->save())
				{
					Yii::app()->user->setFlash("Success","Servicio Actualizado");
					$this->redirect(array("index"));
				}
				else
				Yii::app()->user->setFlash("Error","No se Actualizo :(");
			}

			$this->render("update",array("model"=>$model));
		}
		public function actionDelete($id)
		{
			$model=Service::model()->deleteByPk($id);
			$this->redirect(array("index"));
		}

		public function actionView($id)
		{
			$model=Service::model()->findByPk($id);
			$this->render("view",array("model"=>$model));
		}

		
}

