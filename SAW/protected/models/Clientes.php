<?php
class Clientes extends CActiveRecord
{
	public static function model($ClassName=__CLASS__)
	{
		return parent::model($ClassName);

	}
	
	public function tablename()	
	{
		return "clientes";
	}
	
	public function rules()	
	{
		return array(
			array("name,description","required"),
			);
	}
}