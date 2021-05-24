<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

  <title>Data Pendaftaran Siswa Baru</title>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-8" style="margin-top:50px;">
        <div class="card">
          <div class="card-header bg-primary text-white">
            Data Pendaftaran Siswa Baru
          </div>
          <div class="card-body">
            <a href="formpendaftaran.php" class="btn btn-success mb-3"><i class="fas fa-plus"></i> Tambah Data</a>
            <a href="reportpdf.php" class="btn btn-secondary mb-3"><i class="fas fa-file-pdf"></i> Export ke PDF</a>
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>Nama</th>
                  <th>Tempat Lahir</th>
                  <th>Asal Sekolah</th>
                  <th>No. HP</th>
                  <th>Alamat</th>
                </tr>
              </thead>
              <tbody>
                <?php

                include 'koneksi.php';
                $query="select * from pendaftaran";

                $query_r = mysqli_query($koneksi, $query);

                if (!$query_r){
                printf("eror: %s\n", mysqli_error($connect));
                exit();}
                while ($result = mysqli_fetch_array($query_r)) 
                {

                  ?>

                  <tr>
                    <td><?php echo $result ['nama'];?></td>
                    <td><?php echo $result ['tempat_lahir'];?></td>
                    <td><?php echo $result ['asal_sekolah'];?></td>
                    <td><?php echo $result ['no_hp'];?></td>
                    <td><?php echo $result ['alamat'];?></td>
                  </tr>
                  <?php
                }
                ?>
              </tbody>
            </table>
          </div>
        </div>


      </div>
    </div>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>