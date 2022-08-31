<?php include ('config.php'); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>HMTC Database Alumni</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Oswald:400,700|Muli:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="icon" type="image/png" href="/images/Logo HMTC Baru_Recolor-03.png" sizes="32x32">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.carousel2.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/format-style.css">
    
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    
  

  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>


  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   
    
    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">
      
      <div class="container-fluid">
        <div class="d-flex align-items-center">
          <div class="site-logo"><a href="index.html" class="text-uppercase">HMTC PROGRESIF</a></div>
          <div>
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-xl-block">
                <li><a href="#home-section" class="nav-link">Home</a></li>
                <li><a href="index.html#section2" class="nav-link">Search Alumni</a></li>
                <li><a href="#section2" class="nav-link" >Hasil Pencarian</a></li>
                
              </ul>
            </nav>
          </div>
          <div class="ml-auto">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu site-menu-dark js-clone-nav mr-auto d-none d-xl-block">
                <li class="cta"><a href="#contact-section" class="nav-link"><span class="border bg-danger rounded text-white border-red">Contact</span></a></li>
              </ul>
            </nav>
            <a href="#" class="d-inline-block d-xl-none site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a>
          </div>
        </div>
      </div>
      
    </header>
    
    <div class="intro-section custom-owl-carousel" id="home-section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-5 mr-auto" data-aos="fade-up">
            
            <div class="owl-carousel slide-one-item-alt-text">
              <div class="slide-text" style="margin-left: 10px;">
                <h1 style="position: relative;">PROAKTIF</h1>
                <p class="mb-5">Lebih Aktif</p>
              </div>
              <div class="slide-text" style="margin-left: 10px;">
                <h1 style="position: relative;">PROGRESIF</h1>
                <p class="mb-5">Ke Arah Kemajuan</p>
              </div>
              <div class="slide-text" style="margin-left: 10px;">
                <h1 style="position: relative;">PRESTATIF</h1>
                <p class="mb-5">Menunjukkan Sifat Prestasi</p>
              </div>
            </div>
            
          </div>
          <div class="col-lg-6 ml-auto"  data-aos="fade-up" data-aos-delay="100">
            
            <div class="owl-carousel slide-one-item-alt">
              <picture>
                <source media="(min-width:991.98px)" srcset="images/Logo-Full---Light-Bg.png">
                <img src="images/Logo-Full---Dark-Bg.png" alt="image">
              </picture>
            </div>
          </div>
        </div>
      </div>
    </div>
    

    <div class="site-section bg-light" id="section2" data-aos="fade">
      <div class="container">
        <div class="row text-center justify-content-center mb-5">
            <h2 class="section-title3 w-100 mx-auto">Hasil Pencarian</h2>
        </div>
        <div class="row"> 
          <div class="columnt" style="flex:100%;">
                                    <table class="table">
                                        <thead>
                                          <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">NRP</th>
                                            <th scope="col">Batch</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Pekerjaan</th>
                                            <th scope="col">Tempat Kerja</th>
                                            <th scope="col">Kontak</th>
                                            
                                          </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            $post_name = $_POST['search-name'];
                                            $post_bacth = $_POST['search-batch'];
                                            $post_job = $_POST['search-job'];
                                            $post_workplace = $_POST['search-workplace'];
                                            $addAnd = false;

                                            // echo $post_name." ".$post_bacth." ".$post_job." ".$post_workplace;
                                            $temp_text2 = "SELECT * FROM mahasiswa 
                                                          WHERE nama like '%$post_name%' AND
                                                                angkatan like '%$post_bacth%' AND
                                                                pekerjaan like '%$post_job%' AND
                                                                perusahaan_kerja like '%$post_workplace%' 
                                                         ";
                                            $temp_sql = "SELECT * FROM mahasiswa";
                                            if($post_name != "" || $post_bacth != "" || $post_job != "" || $post_workplace != "") 
                                              $temp_sql = $temp_sql." WHERE";

                                            if($post_name != ""){
                                              $temp_sql = $temp_sql." nama like '%$post_name%'";
                                              $addAnd = true;
                                            } 
                                            if($post_bacth != "") {
                                              if($addAnd) $temp_sql = $temp_sql." AND";

                                              $temp_sql = $temp_sql." angkatan like '%$post_bacth%'";
                                              $addAnd = true;
                                            }
                                            if($post_job != "") {
                                              if($addAnd) $temp_sql = $temp_sql." AND";

                                              $temp_sql = $temp_sql." pekerjaan like '%$post_job%'";
                                              $addAnd = true;
                                            }
                                            if($post_workplace != "") {
                                              if($addAnd) $temp_sql = $temp_sql." AND";

                                              $temp_sql = $temp_sql." perusahaan_kerja like '%$post_workplace%'";
                                              $addAnd = true;
                                            }
                                            // echo $temp_sql;

                                            $sql = $temp_sql;
                                            $query = mysqli_query ($conn, $sql);
                                            
                                            $i = 1;
                                            while($mahasiswa = mysqli_fetch_array($query)){
                                        ?>      
                                                <tr class="tr-data" 
                                                    onclick="window.open('detail-result.php?id=<?= $mahasiswa['id'] ?>#section2','_blank');">
                                        <?php
                                                echo "<td>".$i."</td>";
                                                echo "<td>".$mahasiswa['nrp']."</td>";
                                                echo "<td>".$mahasiswa['angkatan']."</td>";
                                                echo "<td style='text-align: left'>".$mahasiswa['nama']."</td>";

                                                if($mahasiswa['pekerjaan'] == "") echo "<td style='text-align:center'>-</td>";
                                                else echo "<td>".$mahasiswa['pekerjaan']."</td>";

                                                if($mahasiswa['perusahaan_kerja'] == "") echo "<td style='text-align:center'>-</td>";
                                                else echo "<td>".$mahasiswa['perusahaan_kerja']."</td>";

                                                echo "<td>".$mahasiswa['no_wa'];
                                        ?>      
                                        <?php
                                                echo "</td>";
                                                echo "</tr>";
                                                $i++;
                                            }
                                        ?>
                                        
                                        </tbody>
                                    </table>
          </div>
        </div>
      </div>
    </div>

    
    <footer class="footer-section bg-white">
      <div class="container" id="contact-section">
        <div class="row" style="margin-top: -1.5rem;">
          <div class="col-md-4"></div>
          <div class="col-md-4 text-center">
            <h3>About Us</h3>
            <p>Say hello... Don't be a stranger</p>
            <p>Kami suka berkomunikasi, itulah yang kami lakukan. 
              Jadi klik di sini untuk menyampaikan pesan kepada kami, 
              kami adalah kelompok yang ramah dan kami ingin mendengar pendapat Kalian.</p>
            <p>
              <i class="fa fa-envelope" aria-hidden="true"></i><t>        hmtc.if.its@gmail.com</t>
            </p>
          </div>

        </div>

        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
              <div class="container">
                <div class="row mb-5">
                  <div class="col-12">
                    <p class="mb-0">
                      <a href="https://www.facebook.com/HMTCFTEIC" target="_blank" class="p-3"><span class="icon-facebook"></span></a>
                      <a href="https://twitter.com/hmtc_its" target="_blank"  class="p-3"><span class="icon-twitter"></span></a>
                      <a href="https://www.instagram.com/hmtc_its/" target="_blank" class="p-3"><span class="icon-instagram"></span></a>
                      <a href="mailto: hmtc.if.its@gmail.com" class="p-3"><span><i class="fa fa-envelope" aria-hidden="true"></i></span></a>
                    </p>
                  </div>
                </div>
              <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
            
            </div>
          </div>
          
        </div>
      </div>
    </footer>

  
    
  </div> <!-- .site-wrap -->

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/owl.carousel2.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/main.js"></script>
    
  
  </body>
</html>