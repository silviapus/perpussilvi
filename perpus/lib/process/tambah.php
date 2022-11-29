<?php
    require_once('../lib.php');

    $judul = $_POST['judul'];
    $pengarang = $_POST['pengarang'];
    $penerbit = $_POST['penerbit'];
    $tambah = $buku->addData($judul,$pengarang,$penerbit);
    if($tambah){
        header("location:../../index.php?status=sukses_tambah");
    }else{
        header("location:../../index.php?status=gagal_tambah");
    }

?> 