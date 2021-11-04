<?php include 'head.php';

if(isset($_POST['submit'])){
  $namab=$_POST['komp'];
  $passwordb=$_POST['biaya'];
  $repasswordb=$_POST['ket'];

      if(simpanbiaya($namab,$passwordb,$repasswordb)){
        echo "berhasil";
      }else{
        echo "gagal";
      }
  }

?>

<form method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Nama Komponen Biaya</label>
    <input type="text" class="form-control" name="komp" placeholder="Nama Komponen Biaya">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Jumlah besaran biaya</label>
    <input type="text" class="form-control" name="biaya" placeholder="Jumlah besaran biaya">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Keterangan</label>
    <input type="text" class="form-control" name="ket" placeholder="Keterangan">
  </div>

  <button type="submit" name="submit" class="btn btn-success">Tambah</button>
</form>

<?php include 'foot.php';?>
