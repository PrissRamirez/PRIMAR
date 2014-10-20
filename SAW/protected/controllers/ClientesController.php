<?php
Class ClientesController extends Controller
{
		public function actionIndex()
		{

			$clientes=Clientes::model()->findAll();
			$this->render("index",array("clientes"=>$clientes));
		}
		public function actionCreate()
		{
			$model=new Clientes();
			if(isset($_POST["clientes"]))
			{
				$model->attributes=$_POST["Clientes"];
				if($model->save())
				{
					Yii::app()->user->setFlash("Success","Cliente Creado Correctamente");
					$this->redirect(array("index"));
				} 
			}
			$this->render("create",array("model"=>$model));
		}

		public function actionUpdate ($id)
		{
			$model=Clientes::model()->findByPk($id);
			if(isset($_POST["Clientes"]))
			{
				$model->attributes=$_POST["Clientes"];
				if($model->save())
				{
					Yii::app()->user->setFlash("Success","Cliente Actualizado");
					$this->redirect(array("index"));
				}
				else
				Yii::app()->user->setFlash("Error","No se Actualizo :(");
			}

			$this->render("update",array("model"=>$model));
		}
		public function actionDelete($id)
		{
			$model=Clientes::model()->deleteByPk($id);
			$this->redirect(array("index"));
		}

		public function actionView($id)
		{
			$model=Clientes
			::model()->findByPk($id);
			$this->render("view",array("model"=>$model));
		}

		
}

