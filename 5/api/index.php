<?php
/*
 * Backend PHP CRUD PDO
 * Database With Mysql
 * Created by Restu Dwi Cahyo
 */
require_once './helper.php';
header('Content-Type: application/json');
$hasil['status'] 	= true;
$hasil['pesan'] 	= 'Maaf index ini kosong, silahkan coba Provinsi atau Kabupaten';
echo_api($hasil);
?>