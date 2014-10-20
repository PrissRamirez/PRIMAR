<?php
class Countries extends CActiveRecord
{
	public static function model($ClassName=__CLASS__)
	{
		return parent::model($ClassName);

	}
	
	public function tablename()	
	{
		return "countries";
	}
	
	public function rules()	
	{
		return array(
			array("name,description,model,status,price","required"),
			);
	}
}