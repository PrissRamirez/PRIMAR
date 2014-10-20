<?php
class Service extends CActiveRecord
{
	public static function model($ClassName=__CLASS__)
	{
		return parent::model($ClassName);

	}
	
	public function tablename()	
	{
		return "service";
	}
	
	public function rules()	
	{
		return array(
			array("name,description","required"),
			);
	}
}