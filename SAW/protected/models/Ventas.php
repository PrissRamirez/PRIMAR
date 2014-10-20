<?php
class Ventas extends CActiveRecord
{
	public static function model($ClassName=__CLASS__)
	{
		return parent::model($ClassName);

	}
	
	public function tablename()	
	{
		return "ventas";
	}
	
	public function rules()	
	{
		return array(
			array("nombreventa,categoria,nombrecomprador,telefono,mail","required"),
			);
	}
}