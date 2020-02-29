<?php
/*
 * Backend PHP CRUD PDO
 * Database With Mysql
 * Created by Restu Dwi Cahyo
 */
require_once './config/database.php';
class Kabupaten extends database{
    public function add_data($nama_provinsi,$diresmikan,$photo,$pulau){
        $input = $this->db->prepare('INSERT INTO provinsi_tb (nama,diresmikan,photo,pulau) VALUES (?, ?, ?, ?)');
        
        $input->bindParam(1, $nama_provinsi);
        $input->bindParam(2, $diresmikan);
        $input->bindParam(3, $photo);
        $input->bindParam(4, $pulau);

        $input->execute();
        return $input->rowCount();
    }
    public function select_data($limit = 10,$offset = 0){
        $query = $this->db->prepare('SELECT * FROM provinsi_tb LIMIT '.$limit.' OFFSET'.$offset);
        $query->execute();
        $data = $query->fetchAll();
        return $data;
    }
    public function detail_data($id_provinsi){
        $query = $this->db->prepare("SELECT * FROM provinsi_tb where id=?");
        $query->bindParam(1, $id_provinsi);
        $query->execute();
        return $query->fetch();
    }
    public function update($nama_provinsi,$diresmikan,$photo,$pulau){
        $query = $this->db->prepare('UPDATE provinsi_tb set nama=?,diresmikan=?,photo=? where pulau=?');
        
        $input->bindParam(1, $nama_provinsi);
        $input->bindParam(2, $diresmikan);
        $input->bindParam(3, $photo);
        $input->bindParam(4, $pulau);

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