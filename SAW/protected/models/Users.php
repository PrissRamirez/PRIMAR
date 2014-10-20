<?php


class Users extends CActiveRecord
{
	
	public function tableName()
	{
		return 'tbl_user';
	}

	public function rules()
	{
	
		return array(
			array('username, password, email', 'required'),
			array('username, password, email', 'length', 'max'=>128),
			array('id, username, password, email', 'safe', 'on'=>'search'),
		);
	}

	public function relations()
	{
		
		return array(
		);
	}


	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'username' => 'Username',
			'password' => 'Password',
			'email' => 'Email',
		);
	}

	public function search()
	{


		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('email',$this->email,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
