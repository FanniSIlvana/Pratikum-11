<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

  <title>Form Pendaftaran Siswa Baru</title>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-4"></div>
      <div class="col-md-4" style="margin-top:50px;">
        <div class="card">
          <div class="card-header bg-primary text-white">
            Form Pendaftaran Siswa Baru
          </div>
          <div class="card-body">
            <form action="formpendaftaran_aksi.php" method="POST">
              <div class="form-group">
                <label for="nama">Nama Siswa</label>
                <input type="text" class="form-control" name="nama">
              </div>
               <div class="form-group">
                <label for="tempat_lahir">Tempat Lahir</label>
                <input type="text" class="form-control" name="tempat_lahir">
              </div>
               <div class="form-group">
                <label for="asal_sekolah">Asal Sekolah</label>
                <input type="text" class="form-control" name="asal_sekolah">
              </div>
              <div class="form-group">
                <label for="no_hp">No. HP</label>
                <input type="text" class="form-control" name="no_hp">
              </div>
               <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea class="form-control" name="alamat"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Kirim</button>
              <a href="pendaftaran.php" class="btn btn-success">Kembali</a>
            </form>
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