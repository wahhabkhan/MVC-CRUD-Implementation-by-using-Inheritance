<?php
include_once( 'config.php' );

$url = $_SERVER[ 'REQUEST_URI' ];
// Get the current URL
$path = parse_url( $url, PHP_URL_PATH );
// Get the path component of the URL
$segments = explode( '/', $path );
// Split the path into segments

$controllerId = isset( $segments[ 2 ] ) ? $segments[ 2 ] : '';
// Get the first segment ( abc )
$pageId = isset( $segments[ 3 ] )?$segments[ 3 ]:'index';


$controllerModel = new ( '\controllers\\'.ucwords( $controllerId ).'Controller' );
$controllerModel->setControllerId($controllerId);
$data = $controllerModel->{$pageId}();

//$content = file_get_contents( 'views/'.$controllerId.'.php' );
ob_start();
// start output buffering
include 'views/'.$controllerId.'/'.$pageId.'.php';
// include the PHP file
$content = ob_get_clean();

$layout = $controllerModel->layout;

//check login
$publicPages = $controllerModel->publicPages;
//end check login

include_once( 'views/'.$layout.'.php' );
//include_once();

