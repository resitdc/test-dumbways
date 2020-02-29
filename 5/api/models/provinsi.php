<?php
/*
 * Backend PHP CRUD PDO
 * Database With Mysql
 * Created by Restu Dwi Cahyo
 */
require_once './config/database.php';
class Provinsi extends Database{
    public function add_data($nama_provinsi,$diresmikan,$photo,$pulau){
        $input = $this->db->prepare('INSERT INTO provinsi_tb (nama,diresmikan,photo,pulau) VALUES (?, ?, ?, ?)');
        
        $input->bindParam(1, $nama_provinsi);
        $input->bindParam(2, $diresmikan);
        $input->bindParam(3, $photo);
        $input->bindParam(4, $pulau);

        $input->execute();
        return $input->rowCount();
    }
    public function select_data(){
        $query = $this->db->prepare('SELECT * FROM provinsi_tb');
        $query->execute();
        $data = $query->fetchAll(PDO::FETCH_OBJ);
        return $data;
    }
    public function detail_data($id_provinsi){
        $query = $this->db->prepare("SELECT * FROM provinsi_tb WHERE id=?");
        $query->bindParam(1, $id_provinsi);
        $query->execute();
        return $query->fetch(PDO::FETCH_OBJ);
    }
    public function update($id_provinsi,$nama_provinsi,$diresmikan,$photo,$pulau){
        $query = $this->db->prepare('UPDATE provinsi_tb set nama=?,diresmikan=?,photo=?,pulau=? WHERE id=?');
        
        $query->bindParam(1, $nama_provinsi);
        $query->bindParam(2, $diresmikan);
        $query->bindParam(3, $photo);
        $query->bindParam(4, $pulau);
        $query->bindParam(5, $id_provinsi);

        $query->execute();
        return $query->rowCount();
    }
    public function delete($id_provinsi){
        $query = $this->db->prepare("DELETE FROM provinsi_tb where id=?");

        $query->bindParam(1, $id_provinsi);

        $query->execute();
        return $query->rowCount();
    }
}
?>