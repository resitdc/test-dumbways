<?php
/*
 * Backend PHP CRUD PDO
 * Database With Mysql
 * Created by Restu Dwi Cahyo
 */
require_once './models/provinsi.php';
require_once './helper.php';

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
$provinsi 		= new Provinsi();
$file_name 		= 'provinsi.php';
$uri 			= str_replace(basename($_SERVER['SCRIPT_NAME']),"",$_SERVER['SCRIPT_NAME']).$file_name.'/';
$get_uri 		= explode('/',str_replace($uri,'',$_SERVER['PHP_SELF']));

$type 			= isset($get_uri[0])?$get_uri[0]:'';
$id_provinsi 	= isset($_GET['id'])?$_GET['id']:'';

switch ($type){
	case 'detail':
		$hasil['status'] 			= false;
		$hasil['pesan'] 			= 'tidak ada request';
		$hasil['data'] 				= array();

		if($id_provinsi != null){
			$eksekusi_query 		= $provinsi->detail_data($id_provinsi);
			if($eksekusi_query != false){
				$hasil['status'] 	= true;
				$hasil['pesan'] 	= 'Data berhasil diambil';
				$hasil['data'] 		= $eksekusi_query;
			}else{
				$hasil['pesan'] 	= 'Tidak ada data dengan id '.$id_provinsi;
			}
		}
		echo_api($hasil);
		break;
	case 'save':
		$hasil['status'] 			= false;
		$hasil['pesan'] 			= 'tidak ada request';

		$id 						= isset($_POST['id'])?$_POST['id']:''; 
		$nama 						= isset($_POST['nama'])?$_POST['nama']:''; 
		$diresmikan 				= isset($_POST['diresmikan'])?$_POST['diresmikan']:'';
		$pulau 						= isset($_POST['pulau'])?$_POST['pulau']:''; 
		$photo 						= isset($_POST['photo'])?$_POST['photo']:''; 

		if($id != null){
			$eksekusi_query 		= $provinsi->update($id,$nama,$diresmikan,$photo,$pulau);
			if ($eksekusi_query != false){
				$hasil['status'] 	= true;
				$hasil['pesan'] 	= 'Data berhasil di update';
			}else{
				$hasil['pesan'] 	= 'Terjadi kesalahan saat update data';
			}
		}else{
			$eksekusi_query 		= $provinsi->add_data($nama,$diresmikan,$photo,$pulau);
			if ($eksekusi_query != false){
				$hasil['status'] 	= true;
				$hasil['pesan'] 	= 'Data berhasil di buat';
			}else{
				$hasil['pesan'] 	= 'Terjadi kesalahan saat membuat data';
			}
		}
		echo_api($hasil);
		break;
	case 'delete':
		$hasil['status'] 			= false;
		$hasil['pesan'] 			= 'tidak ada request';

		if($id_provinsi != null){
			$eksekusi_query 		= $provinsi->delete($id_provinsi);
			if($eksekusi_query != false){
				$hasil['status'] 	= true;
				$hasil['pesan'] 	= 'Data berhasil dihapus';
			}else{
				$hasil['pesan'] 	= 'Tidak ada data dengan id '.$id_provinsi;
			}
		}
		echo_api($hasil);
		break;
	default:
	 	$limit 				= -1;
	 	$offset 			= 1;
		$hasil['status'] 	= true;
		$hasil['pesan'] 	= 'Data berhasil diambil';
		$eksekusi_query 	= $provinsi->select_data();
		$hasil['data'] 		= $eksekusi_query;
		echo_api($hasil);
		break;
}
?>