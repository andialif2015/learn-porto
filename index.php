<?php
    include "koneksi.php";
    
    if (isset($_GET['benar'])){
      $benar = $_GET['benar'];
      if ($benar=="ada_salah")
        {
        $pesan="Data berhasil di input";
        }
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans&family=Staatliches&display=swap" rel="stylesheet">
    <title>My Portofolio</title>
</head>
<body>
    
    <nav class="navbar sticky-top navbar-expand-lg ">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="img/apple-touch-icon.png" alt="" width="40">
          </a>
          <div class="collapse navbar-collapse " id="navbarScroll">
            <ul class="navbar-nav navbar-center me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                <li class="nav-item">
                  <img class="nav-link" src="img/bxs-home.svg" alt="">
                </li>
                <li class="nav-item">
                   <a class="nav-link" href="#home">Home</a>
                </li>
                <li class="nav-item">
                  <img class="nav-link" src="img/bxs-user-detail.svg" alt="">
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                </li>
                <li class="nav-item">
                  <img class="nav-link" src="img/bxs-contact.svg" alt="">
                </li>
                <li class=" nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                </li>
            </ul>
            
          </div>
        </div>
      </nav>

      <section id="home" class="d-flex  justify-content-lg-center">
        <div class="container text-center position-absolute top-50 start-50 translate-middle">
            <div class="circular_image">
                <img src="img/alif.JPG" alt="">
            </div>
            <div class="row justify-content-center">
                <h1>Andi Alif Ikhlasul Amal</h1>
                <p>I'm Beginner Programmer</p>
            </div>
        </div>
        
      </section>


      <section id="about">
        <div class="container ">
          <div class="card shadow-lg p-3 mb-5 bg-white rounded">
            <div class="card-body">
              <h2 class="text-center">ABOUT</h2>
              <p class="text-center">Informasi dibawah ini adalah data diri saya</p>
              <div class="row">
                  <div class="col-6">
                      <ul>
                          <li > <i class='bx bxs-label'></i> </box-icon> <strong>Nama Lengkap</strong> : Andi Alif Ikhlasu Amal </li>
                          <li ><i class='bx bxs-label'></i> <strong>TTL</strong> : Sapeewalie, 26 Januari 2000</li>
                          <li ><i class='bx bxs-label'></i> <strong>Alamat</strong> : Pelita Raya</li>
                          <li ><i class='bx bxs-label'></i> <strong>Asal</strong> : Wajo</li>
                          <li ><i class='bx bxs-label'></i> <strong>Agama</strong> : Islam</li>
                        </ul>
                  </div>
                  <div class="col-6">
                      <ul>
                        <li ><i class='bx bxs-label'></i> <strong>Umur</strong> : 21 Tahun</li>
                        <li ><i class='bx bxs-label'></i> <strong>Status</strong> : Punya mila</li>
                        <li ><i class='bx bxs-label'></i> <strong>Pekerjaan</strong> : Mahasiswa</li>
                        <li ><i class='bx bxs-label'></i> <strong>Agama</strong> : Islam</li>
                        <li ><i class='bx bxs-label'></i> <strong>Agama</strong> : Islam</li>
                        </ul>
                  </div>
              </div>
            </div>
          </div>
            
        </div>

      </section>

      <section id="contact">
        <div class="container">
          <div class="card shadow-lg p-3 mb-5 bg-white rounded">
            <div class="card-body">
                
             <?php if(isset($pesan)) echo  $pesan; ?>

              <h2 class="text-center">Contact</h2>
              <div class="row">
                <div class="col-3">
                   <h5> <img src="img/bx-current-location.svg" alt=""></i> Location:</h3>
                      <p>JL. Pelita Raya No. 2</p>
                    <h5> <img src="img/bx-mail-send.svg" alt=""> Email:</h5>
                      <p>andialif2015@gmail.com</p>
                    <h5> <img src="img/bxs-phone-call.svg" alt=""> Call:</h5>
                      <p>082291544744</p>
                </div>
                <div class="col-9">


                  <form action="inputData.php" method="post">
                    <div class="form-floating mb-3">
                      <input type="text" class="form-control" id="floatingInput" name="nama" placeholder="Masukkan Nama">
                      <label for="floatingInput">Nama</label>
                    </div>
                    <div class="form-floating">
                      <textarea class="form-control" placeholder="Leave a comment here" name="kritik" id="floatingTextarea2" style="height: 100px "></textarea>
                      <label for="floatingTextarea2">Kritik & Saran</label>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary mt-4">Submit</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


    
</body>
</html>