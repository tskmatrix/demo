<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'My Web Application',
	//'defaultController'=>'site',

	// preloading 'log' component
	'preload'=>array('log'),

	// path aliases
    'aliases' => array(
        'bootstrap' => realpath(__DIR__ . '/../extensions/bootstrap'), // change this if necessary
		'yiiwheels' => realpath(__DIR__ . '/../extensions/yiiwheels'),
	),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
		'ext.usercounter.*',
		'ext.esearch.*',
		'bootstrap.helpers.TbHtml',
		'bootstrap.helpers.TbArray',
		'bootstrap.behaviors.TbWidget',
		'bootstrap.widgets.TbDataColumn',

	),

	'modules'=>array(
	     /**
		 * download and install the usr module from https://github.com/nineinchnick/yii-usr
		 */
		'usr'=>array(
               'userIdentityClass' => 'UserIdentity',
        ),
		// uncomment the following to enable the Gii tool

		'gii'=>array(
			'class'=>'system.gii.GiiModule',
		    'generatorPaths'=>array('bootstrap.gii'),
			'password'=>'r0cK5tar',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),
			//'administration',

		    'forum'=>array(
		        'class'=>'application.modules.bbii.BbiiModule',
		        'adminId'=>3,
		        'userClass'=>'User',
		        'userIdColumn'=>'id',
		        'userNameColumn'=>'username',
		        'userMailColumn' => 'email',
		        //'topicsPerpage' => 20,
		        'postsPerPage' => 25,
		        'purifierOptions' => array(
					'HTML.SafeIframe' => true,
					'URI.SafeIframeRegexp' => '%^http://(www.youtube.com/embed/|player.vimeo.com/video/)%',
					),
				'avatarStorage'=>'/avatar',
				'forumTitle'=>'Demo Forum',
				'editorToolbar'=>array(
						array('Cut','Copy','Paste','PasteText','PasteFromWord','-','Undo','Redo'),
						array('Find','Replace','-','SelectAll'),
						array('Bold', 'Italic','Underline','Strike','Subscript','Superscript','-','RemoveFormat'),
						'-',
						array('NumberedList','BulletedList','-','Outdent','Indent','-','Blockquote','CreateDiv',
						'-','JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock'),
						array('Link', 'Unlink','Image','Iframe','Preview'),
						array('/'),
						array('Styles','Format','Font','FontSize'),
						array('TextColor','BGColor'),
						array('HorizontalRule','Smiley','SpecialChar','-','ShowBlocks')
						),
				//'cssFile'=>'',
		    ),
	),

	// application components
	'components'=>array(
		'bootstrap' => array(
            'class' => 'bootstrap.components.TbApi',
        ),
		// yiiwheels configuration
        'yiiwheels' => array(
            'class' => 'yiiwheels.YiiWheels',
        ),
        'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
            // UserCounter
            'counter' => array(
                'class' => 'UserCounter',
            ),

		// uncomment the following to enable URLs in path-format

		'urlManager'=>array(
			'urlFormat'=>'path',
		     'showScriptName'=>false,
		     'caseSensitive'=>false,
			'rules'=>array(
                'post/<id:\d+>/<title:.*?>'=>'post/view',
        		'posts/<tag:.*?>'=>'post/index',
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),

		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=demo',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
            //'tablePrefix' => 'tbl_',
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
	'params'=>require(dirname(__FILE__).'/params.php'),
);