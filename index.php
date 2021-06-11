<?php
  session_start();
  include "koneksi.php";
  if (!isset($_SESSION['username'])){
    header ("location:login.php");
  }
  if (!isset($_SESSION['username'])){
    $username = $_SESSION['username'];
  }
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device width, initial-scale=1.0">
  <title>Tugas 1</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head>

<body background="bg.jpg">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">VALORANT</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Media <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="calc.html">Calculator </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="aksi_logout.php">Logout </a>
              </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Pemrograman Web Lab 3</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>

      <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="valorant1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>New Weapon Skin Bundle : Forsaken is Here !!</h5>
            </div>
          </div>
          <div class="carousel-item">
            <img src="valorant2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>New Map : Breeze is Here !!</h5>
            </div>
          </div>
          <div class="carousel-item">
            <img src="valorant3.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>New Agent : Astra is Here !!</h5>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <div class="container">
      <div class="card-deck mt-5 mb-5">
        <div class="card">
          <img src="pn1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Patch Notes 2.03</h5>
            <p class="card-text">Kill and race the opposition through a cycle of different weapons and abilities, advancing together as a team through 12 Escalation levels. First team to finish level 12, or the furthest along in 10 minutes, wins the Escalation.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 months ago</small></p>
          </div>
        </div>
        <div class="card">
          <img src="pn2.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Patch Notes 2.04</h5>
            <p class="card-text">She’s already got it all planned out. Harness the cosmos and control the fight as Astra, the newest Agent in VALORANT.</p>
            <p class="card-text"><small class="text-muted">Last updated 2 months ago</small></p>
          </div>
        </div>
        <div class="card">
          <img src="pn3.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Patch Notes 2.05</h5>
            <p class="card-text">This one’s about putting you on your best behavior. Our Social and Player Dynamics team is out here making sure we can better detect AFK and promote better behaviour with penalties for chat-based and AFK offenses.</p>
            <p class="card-text"><small class="text-muted">Last updated 1 months ago</small></p>
          </div>
        </div>
        </div>
      </div>

      <div class="jumbotron" id="jadwal">
        <div class="container">
        <div class="col-lg-12 text-center mt-5 mb-5">
          <h3 class="display-4">Daftar Mahasiswa</h3>
        </div>
        <table class="table table-striped" style="text-align: center">
        <thead class="table-dark">
        <th>No.</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>Alamat</th>
        <th>Opsi</th>
      </thead>

      <?php
        include_once 'koneksi.php';
        $no=1;
        $data=mysqli_query($koneksi, "select * from mahasiswa");
        while ($d=mysqli_fetch_array($data)){
      ?>
      <tr>
          <td><?php echo $no++; ?></td>
          <td><?php echo $d['nim']; ?></td>
          <td><?php echo $d['nama']; ?></td>
          <td><?php echo $d['gender']; ?></td>
          <td><?php echo $d['alamat']; ?></td>
          <td>
            <a href="edit.php ?nim=<?php echo $d['nim']; ?>">edit</a>
            <a href="">hapus</a>
      </tr>
      <?php
        }


      ?>



  <footer class="text-center mt-3 mb-3">
      <img src="logo2.png" alt="logo">
  </footer>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>