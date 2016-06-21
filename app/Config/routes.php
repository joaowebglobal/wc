<?php

	Router::connect('/', array('controller' => 'pages', 'action' => 'home'));

	//Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'home'));

	Router::mapResources(array('webservice'));
	Router::parseExtensions();

	CakePlugin::routes();

	require CAKE . 'Config' . DS . 'routes.php';
