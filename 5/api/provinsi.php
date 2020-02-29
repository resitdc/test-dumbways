<?php
/*
 * Backend PHP CRUD PDO
 * Database With Mysql
 * Created by Restu Dwi Cahyo
 */
require_once './models/provinsi.php';
require_once './helper.php';

header('Content-Type: application/json');

$file_name 		= 'provinsi';
$uri 			= str_replace(basename($_SERVER['SCRIPT_NAME']),"",$_SERVER['SCRIPT_NAME']).$file_name.'/';
$get_uri 		= explode('/',str_replace($uri,'',$_SERVER['REQUEST_URI']));

$type 			= isset($get_uri[0])?$get_uri[0]:'';


switch ($type){
	case 'detail':
		echo 'Detail Data';
		break;
	case 'save':
		echo 'Save Data';
		break;
	case 'delete':
		echo 'Delete Data';
		break;
	default:
		echo 'All Data';
		break;
}
?>