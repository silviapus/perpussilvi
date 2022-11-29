<?php
require_once('lib/lib.php');
$get = $buku->getData();
?>


<!DOCTYPE html>
<html>
<head>
    <title>PerpusSILVIA</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <center><h2>Data Buku</h2></center>
            <form action="lib/process/tambah.php" method="post">
               <label>Judul</label>
               <input type="text" name="judul" class="form-control">
               <br>
               <label>Pengarang</label>
               <input type="text" name="pengarang" class="form-control">
               <br>
               <label>Penerbit</label>
               <input type="text" name="penerbit" class="form-control">
               <br>
               <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>
            <br><br>
            <table class="table">
                <tr>
                    <td>No</td>
                    <td>Judul</td>
                    <td>Pengarang</td>
                    <td>Penerbit</td>
                    <td>Action</td>
                </tr>
                <?php
                   foreach ($get as $data) {
                    @$no++;
                ?>
                <tr>
                    <td><?php echo $no?></td>
                    <td><?php echo $data['judul']?></td>
                    <td><?php echo $data['pengarang']?></td>
                    <td><?php echo $data['penerbit']?></td>
                    <td>
                        <div class="btn-group">
                            <a href="lib/process/delete.php?id=<?php echo $data['id']?>" class="btn btn-danger">Hapus</a>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#editModal" class="btn btn-warning bt-ubah" data-id="<?php echo $data['id']?>" data-judul="<?php echo $data['judul']?>" data-pengarang="<?php echo $data['pengarang']?>" data-penerbit="<?php echo $data['penerbit']?>">Ubah</a>
                   </div>           
                   </td>
                </tr>

                <?php
                   }
                ?>
           </table>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>


<!-- modal edit data -->
<div class="modal" tabindex="-1" id="editModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit Data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form action="lib/process/edit.php" method="post"> 
      <div class="modal-body">
        <label>Judul</label>
        <input type="text" name="judul" id="judul" class="form-control">
        <br>
        <label>Pengarang</label>
        <input type="text" name="pengarang" id="pengarang" class="form-control">
        <br>
        <label>Penerbit</label>
        <input type="text" name="penerbit" id="penerbit" class="form-control">
        <input type="hidden" id="id_buku" class="form-control" name="id_buku">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Simpan Data</button>
      </div>
    </div>
  </div>
</form>
</div>
<!-- end of modal edit data -->

<script type="text/javascript" src="assets/js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.bundle.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('.bt-ubah').click(function(){
            var id_buku = $(this).data('id');
           var judul = $(this).data('judul');
           var penerbit = $(this).data('penerbit');
           var pengarang = $(this).data('pengarang');
           
       
       $("#judul").val(judul);
       $("#pengarang").val(pengarang); 
       $("#penerbit").val(penerbit);  
       $("#id_buku").val(id_buku);
        });
    });
    </script>
</body>
</html>
