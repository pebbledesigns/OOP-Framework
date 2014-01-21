<?php
session_start();

$GLOBALS['config'] = array(
			'mysql' => array(
				'host' => 'localhost',
				'username' => 'root',
				'password' => 'root',
				'db' => 'pd_framework2014'
			),
			'url' => array(
				'absolute' => '/Applications/MAMP/htdocs/frames/',
				'baseurl' => 'http://www.localhost:8888/frames/',
			),
			'session' => array(
			)
);

// Set config  to use the following: config::get('urls/absolute')
class config {
	public static function get($path = null) {
		if($path) {
			$config = $GLOBALS['config'];
			$path = explode('/', $path);

			foreach ($path as $bit) {
				if(isset($config[$bit])) {
					$config = $config[$bit];
				}
			}
			return $config;
		}
		return false;
	}

}

// register the use of not using 'new object()' e.g.
spl_autoload_register(function($class) {
	require_once config::get('url/absolute') . '/classes/' . $class . '.php'; 
});




?>