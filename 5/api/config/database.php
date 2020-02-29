<?php
/*
 * Backend PHP CRUD PDO
 * Database With Mysql
 * Created by Restu Dwi Cahyo
 */
class database{
    public function __construct(){
    	$host 			= 'localhost';
    	$username 		= 'root';
    	$password 		= '';
    	$db 			= 'db_dumbways';
        $this->db 		= new PDO('mysql:host='.$host.';dbname='.$db, $username, $password);
    }
}
?>