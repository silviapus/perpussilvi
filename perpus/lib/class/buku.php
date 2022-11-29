<?php
/**
 * 
 */
class Buku extends Koneksi
{
    function getData()
    {
        $query = "SELECT * FROM buku";
        $sql = $this->db->query($query);
        return $sql;
    }

    function addData($judul,$pengarang,$penerbit){
        $query = "INSERT INTO buku VALUES(NULL,'$judul','$pengarang','$penerbit',NULL,NULL)";
        $sql   = $this->db->query($query);
        return $sql;
    }

    function deleteData($id){
        $query = "DELETE FROM buku WHERE id = '$id'";
        $sql   = $this->db->query($query);
        return $sql;
    }

    function editData($id,$judul,$pengarang,$penerbit){
        $query = "UPDATE buku SET judul = '$judul',
                pengarang = '$pengarang', penerbit = '$penerbit'
                WHERE id = '$id'";
       $sql = $this->db->query($query);
       return $sql;
    }

}

?> 