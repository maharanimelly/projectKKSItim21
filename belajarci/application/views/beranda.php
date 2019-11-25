<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>

<body background="bb2.jpg">
  <!-- Just an image -->
<nav class="navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="#">
    <img src="smk.jpg" width="100" height="50" alt="">
  </a>

  <ul class="nav justify-content-end">
  <li class="nav-item">
    <a class="nav-link active"style="color:hotpink" href="beranda.php">Beranda</a>
  </li>
  <li class="nav-item">
    <a class="nav-link "style="color:hotpink" href="pinjam.php">Pinjam</a>
  </li>
  <li class="nav-item">
    <a class="nav-link "style="color:hotpink" href="data_peminjaman.php">Data Peminjaman</a>
  </li>
  <li class="nav-item">
    <a class="nav-link "style="color:hotpink" href="login.php">Login</a>
  </li>
</ul>
</nav>
<div class="bd-example">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol> <br>
    <center ><h3 style="color:hotpink" class="table table-dark"> SELAMAT DATANG DIPEMINJAMAN BARANG SMK DARUSSA'ADAH </h3></center>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="perpus.jpg" width="1400" height="550" alt="">
        <div class="carousel-caption d-none d-md-block">
          <h2 style="color:hotpink" class="table table-dark">BUKU</h2>
          <p></p>
        </div>
      </div>
      <div class="carousel-item">
        <<img src="a1.jpg" width="1400" height="500" alt="">
        <div class="carousel-caption d-none d-md-block">
          <h2 style="color:hotpink" class="table table-dark">PROYEKTOR</h2>
          <p></p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="a3.jpg" width="1400" height="550" alt="">
        <div class="carousel-caption d-none d-md-block">
          <h2 style="color:hotpink" class="table table-dark">TERMINAL</h2>
          <p></p>
        </div>
      </div>
  </div>
</div>
</body>
</html>
