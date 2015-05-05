<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'My Web Application',
    'defaultController' => 'main',
    'language'=>'en',
	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
        'application.models.forms.*',
        'application.models.orm.*',
		'application.components.*',
        'application.helpers.*',
        'application.validators.*',
		'application.helpers.YiiMailer',
		'application.messages.*',
		'application.messages.ru.*',

	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
		
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'1234',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),
		
	),

	// application components
	'components'=>array(

		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),

		// uncomment the following to enable URLs in path-format
		
		'urlManager'=>array(
			'urlFormat'=>'path',
            'showScriptName'=>false,

			'rules'=>array(

//				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
//				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
//				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',

                /**
                 * Basic site routes
                 */
                '<language:\w{2}>/<controller:\w+>'=>'<controller>/index',
                '<language:\w{2}>/<controller:\w+>/<id:\d+>'=>'<controller>/view',
                '<language:\w{2}>/<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
                '<language:\w{2}>/<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
                '<language:\w{2}>/pay/error/<id:\w+>'=>'pay/error',
			),
		),
		

		// database settings are configured in database.php
		'db'=>require(dirname(__FILE__).'/database.php'),

		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'main/error',
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
        // RegiTitle
		'regTitle'=>'Registration',
        // payment form
        'payUrl'=>'https://test.ctpe.net/frontend/payment.prc',
        'payMerchantUrl'=>'http://inlusion.eu',
        'payLogin'=>'8a8294174406c1f2014416ccece406dd',
        'payPwd'=>'9prrhkqb',
        'payMode'=>'INTEGRATOR_TEST',
        'payChannel'=>'8a8294174406c1f2014416cd1ed006df',
        'paySender'=>'8a8294174406c1f2014416ccece306d9',
        'payToken'=>'c5dWcFsFkWca3MQF',
        'payCurrency'=>'EUR',
	),
);
