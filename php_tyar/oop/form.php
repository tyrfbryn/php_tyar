<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Form Pendaftaran!!!</title>
    <style>
        .navbar-brand img {
            margin-right: 25px; 
        }
    </style>
</head>
<body>

<!--Navbar -->
<nav <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><h3>Navbar</h3></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="form.php">Pendaftaran<span class="sr-only">(current)</span></a>
    </li>
    </ul>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    <li class="nav-item active">
        <a class="nav-link" href="form2.php">Data Ortu<span class="sr-only">(current)</span></a>
    </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<!--/Navbar -->
<!--Content -->
<div class="card mt-5 ml-5 mr-5">
    <div class="card-header">
        Form Pendaftaran
    </div>
    <div class="card-body">
        <form action="" method="post">
            <div class="form-group">
                <label for="exampleInputName1">Nama Depan</label>
                <input type="name" class="form-control" name="nama_depan" id="exampleInputName1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputName2">Nama Belakang</label>
                <input type="name" class="form-control" name="nama_belakang" id="exampleInputName2">
            </div>
            <div class="form-group">
                <label for="exampleInputDate">Tanggal lahir</label>
                <input type="date" class="form-control" name="tanggal" id="exampleInputDate">
            </div>
            <div class="form-group">
                <label for="exampleInputName2">Tempat Lahir</label>
                <input type="name" class="form-control" name="tempat" id="exampleInputName2">
            </div>
            <div class="form-group">
                <label for="exampleRadios1">Jenis Kelamin</label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="jenis" id="exampleRadios1" value="laki laki" checked>
                    <label class="form-check-label" for="exampleRadios1">Laki-laki</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="jenis" id="exampleRadios2" value="perempuan">
                    <label class="form-check-label" for="exampleRadios2">Perempuan</label>
                </div>
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Agama</label>
                <select class="form-control" name="agama" id="exampleFormControlSelect1">
                    <option>Islam</option>
                    <option>Kristen</option>
                    <option>Katolik</option>
                    <option>Hindu</option>
                    <option>Buddha</option>
                    <option>Konghucu</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Alamat</label>
                <textarea class="form-control" name="alamat" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="exampleInputName2">Asal Sekolah</label>
                <input type="name" class="form-control" name="asal" id="exampleInputName2">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect2">Jurusan</label>
                <select class="form-control" name="jurusan" id="exampleFormControlSelect2">
                    <option>RPL</option>
                    <option>TBSM</option>
                    <option>TKRO</option>
                    <option>TATABOGA</option>
                    <option>AKUTANSI</option>
                    <option>MARKETING</option>
                    <option>JURNALISTRIK</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary" name="daftar">Daftar</button>
        </form>
    </div>
</div>
<!--/Content -->

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
-->
</body>
</html>



<?php
if(isset($_POST['daftar'])){

$nama_depan = $_POST['nama_depan'];
$nama_belakang = $_POST['nama_belakang'];
$tanggal = $_POST['tanggal'];
$jenis = $_POST['jenis'];
$agama = $_POST['agama'];
$alamat = $_POST['alamat'];
$asal = $_POST['asal'];
$jurusan = $_POST['jurusan'];



class hasil{

    public function Pendaftaran($nama_depan2,$nama_belakang2,$tanggal2,$jenis2,$agama2,$alamat2,$asal2,$jurusan2){

?>
        <center>
        <div class="card border-warning mb-3 mt-5" style="max-width: 30rem;">
          <div class="card-header"><h3>Hasil Pendaftaran</h3></div>
          <div class="card-body text-warning">
            <h5 class="card-title">Pendaftaran Sukses!</h5>
            <table>
              <tr>
                <td>Nama Depan </td>
                <td>:</td>
                <td><?php echo $nama_depan2 ?></td>
              </tr>
              <tr>
                <td>Nama Belakang </td>
                <td>:</td>
                <td><?php echo $nama_belakang2 ?></td>
              </tr>
              <tr>
                <td>Taggal Lahir </td>
                <td>:</td>
                <td><?php echo $tanggal2 ?></td>
              </tr>
              <tr>
                <td>Jenis Kelamin </td>
                <td>:</td>
                <td><?php echo $jenis2 ?></td>
              </tr>
              <tr>
                <td>Agama </td>
                <td>:</td>
                <td><?php echo $agama2 ?></td>
              </tr>
              <tr>
                <td>Alamat </td>
                <td>:</td>
                <td><?php echo $alamat2 ?></td>
              </tr>
              <tr>
                <td>Asal Sekolah </td>
                <td>:</td>
                <td><?php echo $asal2 ?></td>
              </tr>
              <tr>
                <td>Jurusan </td>
                <td>:</td>
                <td><?php echo $jurusan2 ?></td>
              </tr>
          </div>
        </div>
              </center>

<?php
    }
}

$cetak = new hasil();

echo $cetak->Pendaftaran($nama_depan,$nama_belakang,$tanggal,$jenis,$agama,$alamat,$asal,$jurusan);
}
?>