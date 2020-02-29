<?php
/*
 * Backend PHP CRUD PDO
 * Database With Mysql
 * Created by Restu Dwi Cahyo
 */
require_once './config/database.php';
class url extends database{
    public function url(){
    	$http = 'http' . ((isset($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS']) == 'on') ? 's' : '') . '://';
    	$root = $http.$_SERVER['HTTP_HOST'];
    	$root .= str_replace(basename($_SERVER['SCRIPT_NAME']),"",$_SERVER['SCRIPT_NAME']);

    	echo $root;
    	echo "<br>";
    	echo $_SERVER['SCRIPT_NAME'];
    	echo "<br>";
    	echo $_SERVER['REQUEST_URI'];
    	echo "<br>";

    }
}
?>