<?php


class template {
	
	public function header($title = 'test') { 
		return '<!DOCTYPE html>
		<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
		<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"> <![endif]-->
		<!--[if IE 8]><html class="no-js lt-ie9"> <![endif]-->
		<!--[if gt IE 8]><!--><html class="no-js"> <!--<![endif]-->
		<head>
	        <meta charset="utf-8">
	        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	        <title>'. language::getlang('title')  .'</title>
	        <meta name="description" content="">
	        <meta name="viewport" content="width=device-width">

	        <link rel="stylesheet" href="'. config::get('url/baseurl') .'css/normalize.min.css">
	        <link rel="stylesheet" href="'. config::get('url/baseurl') .'css/main.css">

	        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
	    </head>
	    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
	    ';
	
	}




	public function footer($scripts=null) {
		// Load any custom scripts
		if(isset($scripts)){
			echo $scripts;
		}

		return '
		<div class="footer-container">
            <footer class="wrapper">
                <h3>footer</h3>
            </footer>
        </div>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script>window.jQuery || document.write(\'<script src="js/vendor/jquery-1.10.1.min.js"><\/script>\')</script>

        <script src="js/main.js"></script>

        <script>
            var _gaq=[[\'_setAccount\',\'UA-XXXXX-X\'],[\'_trackPageview\']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=\'//www.google-analytics.com/ga.js\';
            s.parentNode.insertBefore(g,s)}(document,\'script\'));
        </script>
		';
	}


}