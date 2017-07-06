<?php

namespace Inpsyde\Codeception;

error_reporting( E_ALL );
require_once( __DIR__ . '/vendor/autoload.php' );

$config = new \stdClass();
$config->root = __FILE__;
$config->templates_dir = __DIR__ . '/templates/';
$config->site_id = ( isset( $_GET['view'] ) ) ? (int) $_GET['view'] : 0 ;

$view_rooter = new ViewRooter( $config );
$config->view_rooter = $view_rooter;

$app = new App( $config );
$app->run();

