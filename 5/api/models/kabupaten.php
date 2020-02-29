<?php
/*
 * Backend PHP CRUD PDO
 * Database With Mysql
 * Created by Restu Dwi Cahyo
 */
require_once './config/database.php';
class Kabupaten extends database{
    public function add_data($nama_kabupaten,$diresmikan,$photo,$provinsi_id){
        $input = $this->db->prepare('INSERT INTO kabupaten_tb (nama,diresmikan,photo,provinsi_id) VALUES (?, ?, ?, ?)');
        
        $input->bindParam(1, $nama_kabupaten);
        $input->bindParam(2, $diresmikan);
        $input->bindParam(3, $photo);
        $input->bindParam(4, $provinsi_id);

        $input->execute();
        return $input->rowCount();
    }
    public function select_data($id_provinsi){
        $query = $this->db->prepare('SELECT * FROM kabupaten_tb WHERE provinsi_id=?');
        $query->bindParam(1, $id_provinsi);
        $query->execute();
        $data = $query->fetchAll(PDO::FETCH_OBJ);
        return $data;
    }
    public function detail_data($id_kabupaten){
        $query = $this->db->prepare("SELECT * FROM kabupaten_tb WHERE id=?");
        $query->bindParam(1, $id_kabupaten);
        $query->execute();
        return $query->fetch(PDO::FETCH_OBJ);
    }
    public function update($id_kabupaten,$id_provinsi,$nama_kabupaten,$diresmikan,$photo,$pulau){
        $query = $this->db->prepare('UPDATE kabupaten_tb set nama=?,diresmikan=?,photo=?,provinsi_id=? WHERE id=?');
        
        $input->bindParam(1, $nama_kabupaten);
        $input->bindParam(2, $diresmikan);
        $input->bindParam(3, $photo);
        $input->bindParam(4, $id_provinsi);
        $input->bindParam(5, $id_kabupaten);

        $query->execute();
        return $query->rowCount();
    }
    public function delete($id_kabupaten){
        $query = $this->db->prepare("DELETE FROM kabupaten_tb WHERE id=?");

        $query->bindParam(1, $id_kabupaten);

        $query->execute();
        return $query->rowCount();
    }
}
?>