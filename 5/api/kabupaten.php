<?php
/*
 * Backend PHP CRUD PDO
 * Database With Mysql
 * Created by Restu Dwi Cahyo
 */
require_once './models/kabupaten.php';
require_once './helper.php';

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
$kabupaten 		= new Kabupaten();
$file_name 		= 'kabupaten.php';
$uri 			= str_replace(basename($_SERVER['SCRIPT_NAME']),"",$_SERVER['SCRIPT_NAME']).$file_name.'/';
$get_uri 		= explode('/',str_replace($uri,'',$_SERVER['PHP_SELF']));

$type 			= isset($get_uri[0])?$get_uri[0]:'';
$id_provinsi 	= isset($_GET['id'])?$_GET['id']:'';
$id_kabupaten 	= isset($_GET['id'])?$_GET['id']:'';

echo $type;
switch ($type){
	case 'detail':
		$hasil['status'] 			= false;
		$hasil['pesan'] 			= 'tidak ada request';
		$hasil['data'] 				= array();

		if($id_kabupaten != null){
			$eksekusi_query 		= $kabupaten->detail_data($id_kabupaten);
			if($eksekusi_query != false){
				$hasil['status'] 	= true;
				$hasil['pesan'] 	= 'Data berhasil diambil';
				$hasil['data'] 		= $eksekusi_query;
			}else{
				$hasil['pesan'] 	= 'Tidak ada data dengan id '.$id_kabupaten;
			}
		}
		echo_api($hasil);
		break;
	case 'save':
		$hasil['status'] 			= false;
		$hasil['pesan'] 			= 'tidak ada request';

		$id_kabupaten 				= isset($_POST['id_kabupaten'])?$_POST['id_kabupaten']:''; 
		$id_provinsi 				= isset($_POST['id_provinsi'])?$_POST['id_provinsi']:''; 
		$nama 						= isset($_POST['nama'])?$_POST['nama']:''; 
		$diresmikan 				= isset($_POST['diresmikan'])?$_POST['diresmikan']:'';
		$photo 						= isset($_POST['photo'])?$_POST['photo']:''; 

		if($id != null){
			$eksekusi_query 		= $kabupaten->update($nama,$diresmikan,$photo,$id_provinsi);
			if ($eksekusi_query != false){
				$hasil['status'] 	= true;
				$hasil['pesan'] 	= 'Data berhasil di update';
			}else{
				$hasil['pesan'] 	= 'Terjadi kesalahan saat update data';
			}
		}else{
			$eksekusi_query 		= $kabupaten->update($id_kabupaten,$id_provinsi,$nama,$diresmikan,$photo);
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

		if($id_kabupaten != null){
			$eksekusi_query 		= $kabupaten->delete($id_kabupaten);
			if($eksekusi_query != false){
				$hasil['status'] 	= true;
				$hasil['pesan'] 	= 'Data berhasil dihapus';
			}else{
				$hasil['pesan'] 	= 'Tidak ada data dengan id '.$id_kabupaten;
			}
		}
		echo_api($hasil);
		break;
	default:
	 	$limit 						= -1;
	 	$offset 					= 1;
		$hasil['status'] 			= false;
		$hasil['pesan'] 			= 'Mohon masukan id provinsi, agar menampilkan Kabupaten dengan provinsi tertentu';
		$hasil['data'] 				= array();
		if($id_provinsi != null){
			$eksekusi_query 		= $kabupaten->select_data($id_provinsi);
			if(empty($eksekusi_query)){
				$hasil['pesan'] 	= 'Data kosong';
			}else{
				$hasil['status'] 	= true;
				$hasil['pesan'] 	= 'Data berhasil diambil';
			}
			$hasil['data'] 			= $eksekusi_query;
		}
		echo_api($hasil);
		break;
}
?>