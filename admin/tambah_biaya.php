<?php include 'head.php';

$result=tampilbiaya();
?>
<link rel="stylesheet" type="text/css" href="dt/css/dataTables.bootstrap.css">

<table class="table table-striped table-bordered">
  <thead>
  <a href="tambah1.php" class="btn btn-primary">Tambah Biaya</a>
    <tr>
      <th>No</th>
      <th>Nama Komponen Biaya</th>
      <th>Jumlah besaran biaya</th>
      <th>Keterangan</th>
      <th>Hapus</th>
    </tr>
  </thead>

    
      <tbody>
      
      <?php $no=1; while ($row=mysqli_fetch_assoc($result)) {
        
      ?>
        <tr>
        <td><?= $no; ?></td>
        <td><?= $row['komp'] ?></td>
        <td><?= $row['besar'] ?></td>
        <td><?= $row['ket'] ?></td>
        <td><a href="hapus1.php?id_biaya=<?= $row['id_biaya'] ?>" class="btn btn-danger">Hapus</a></td> 
        </tr>
        <?php $no++; }?>

      </tbody>
    
  </thead>
</table>


<script src="dt/js/jquery.dataTables.min.js"></script>
<script src="dt/js/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready( function () {
          $('#pendaftar').DataTable({
            responsive:true
          });
      } );
        </script>
</head>

<?php include 'foot.php'; ?>
  