<?php

return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'PRIMAR',
	'theme'=> "gustalh",

	'preload'=>array('log'),
	'import'=>array(
		'application.models.*',
		'application.components.*',
	),

	'modules'=>array(
		
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'123456',

			'ipFilters'=>array('127.0.0.1','::1'),
		),

 		
 			'shop' => array( 'debug' => 'true')
		
	),


	'components'=>array(
		'authManager'=>array(
			"class"=>"CDbAuthManager",
			"connectionID"=>"db",
		),
		'user'=>array(
			
			'allowAutoLogin'=>true,
		),
		
		
		'urlManager'=>array(
			'urlFormat'=>'path',
			'showScriptName'=>false,
			'urlSuffix'=>'.html',
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
		

		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=pruebas',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
		),
		
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
	),
);