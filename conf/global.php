<?php
		//config files
		require_once("config.php") ;
		require_once("mqtt.php")   ;
		require_once("users.php")  ;
		require_once("gapi.php")   ;
		
		//tools + autoloader
		require_once __BASEDIR__."/modules/tools/debug.php" ;
		require_once __BASEDIR__."/vendor/autoload.php" ;