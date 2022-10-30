<?php include "z_db.php";?>
<!DOCTYPE html>
<html lang="en">
<?php
  $rrs=mysqli_query($con,"SELECT * FROM section_title Where id=1");
  $rs = mysqli_fetch_array($rrs);
  $web_title="$rs[web_title]";
  $contact_title="$rs[contact_title]";
  $pprofile_title="$rs[pprofile_title]";
  $pprofile_text="$rs[pprofile_text]";
  $moto_title="$rs[moto_title]";
  $moto_text="$rs[moto_text]";
  $vimi_title="$rs[vimi_title]";
  $vimi_text="$rs[vimi_text]";
?>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="author" content="Untree.co" />
    <link rel="shortcut icon" href="favicon.png" />
    <?php
      $rt=mysqli_query($con,"SELECT * FROM sitecontact where id=1");
      $tr = mysqli_fetch_array($rt);
      $phone = "$tr[phone]";
      $email = "$tr[email]";
    ?>

    <meta name="description" content="" />
    <?php
      $rr=mysqli_query($con,"SELECT * FROM profile where id=1");
      $r = mysqli_fetch_array($rr);
      $ppnew1 = "$r[ppnew1]";
      $ppnew2 = "$r[ppnew2]";
    ?>

    <?php
      $rt=mysqli_query($con,"SELECT * FROM profiletext where id=1");
      $tr = mysqli_fetch_array($rt);
      $pvtitle = "$tr[pvtitle]";
      $pvsubtitle = "$tr[pvsubtitle]";
      $pmtitle = "$tr[pmtitle]";
      $pvtext = "$tr[pvtext]";
      $pmtext = "$tr[pmtext]";
    ?>

    <meta name="keywords" content="" />
    <?php
      $rr=mysqli_query($con,"SELECT * FROM siteconfig where id=1");
      $r = mysqli_fetch_array($rr);
      $site_title = "$r[site_title]";
      $site_footer = "$r[site_footer]";
    ?>

    <!-- App favicon -->
    <?php
      $rr=mysqli_query($con,"SELECT xfile FROM logo");
      $r = mysqli_fetch_row($rr);
      $xfile = $r[0];
    ?>
    <link rel="shortcut icon" href="dashboard/uploads/logo/<?php print $xfile?>">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/owl.carousel.min.css" />
    <link rel="stylesheet" href="css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="css/jquery.fancybox.min.css" />
    <link rel="stylesheet" href="fonts/icomoon/style.css" />
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css" />
    <link rel="stylesheet" href="css/aos.css" />
    <link rel="stylesheet" href="css/style.css" />

    <title><?php print $site_title ?></title>
  </head>

  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="100">
    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close">
          <span class="icofont-close js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>

   
    <nav class="navbar site-nav dark navbar-expand-lg bg-light navbar-light">
      <div class="container-fluid">
        <div class="d-flex align-items-center">
          <img src="dashboard/uploads/logo/<?php print $xfile?>" width="70" class="img-fluid me-2">
          <div class="d-block">
            <a class="navbar-brand logo" href="home"><?php print $web_title ?></a>
          </div>
        </div>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="text-dark fw-bold">Menu</span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="home"
                >Home</a
              >
            </li>

            <li class="nav-item">
              <a class="nav-link active-link" aria-current="page" href="profile"
                >Profile Pengurus</a
              >
            </li>

            <li class="nav-item">
              <a class="nav-link" href="forum">Forum</a>
            </li>
          <li class="nav-item">
            <a class="nav-link" href="info&berita">Info & Berita</a>
          </li>
          <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle"
              href="#"
              role="button"
              data-bs-toggle="dropdown"
              aria-expanded="false"
            >
              Layanan
            </a>
            <ul class="dropdown-menu">

              <li><a class="dropdown-item" href="codigo">Codigo</a></li>
              <li><a class="dropdown-item" href="codigame">Codigame</a></li>
              <li><a class="dropdown-item" href="partnership">Partnership</a></li>
            </ul>
          </li>
        </div>
        
      </div>
    </nav>

    

    <div class="untree_co-section mt-5">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 text-center" data-aos="fade-up" data-aos-delay="0">
            <h1><?php print $pprofile_title ?></h1>
          </div>
        </div>
        <!-- /.row -->

        <div class="row mb-5 mt-2">
          <div class="col-12 text-center" data-aos="fade-up" data-aos-delay="0">
            <h1 class="text-primary"><?php print $pprofile_text ?></span></h1>
            
          </div>
        </div>
        <!-- /.row -->

        
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </div>
    <!-- /.untree_co-section -->

    <div class="untree_co-section bg-light">
      <div class="container text-center">

        <div class="row">
          <h3 class="text-primary"><?php print $moto_title ?></h3>
          <h1><?php print $moto_text ?></h1>
        </div>
        
        
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </div>
    <!-- /.untree_co-section -->

    <div class="untree_co-section bg-light">
      <div class="container">
        
        <!-- /.row -->
        <div class="row mb-4 justify-content-center">
          <div class="col-lg-3">
            <div class="pricing">
              <div class="body shadow">
                <div>
                    <h4 class="text-center">KETUA</h4>
                    <h5 class="text-center text-primary">Muhamad Arung Samudra</h5>
                </div>
                
              </div>
            </div>
            <!-- /.pricing -->
          </div>
          <!-- /.col-lg-3 -->
          <div class="col-lg-3">
            <div class="pricing">
              <div class="body shadow">
                <div class="">
                    <h4 class="text-center">WAKIL KETUA</h4>
                    <h5 class="text-center text-primary">Rivaldy bla bla siapa gatau</h5>
                </div>

              </div>
            </div>
            <!-- /.pricing -->
          </div>
          <!-- /.col-lg-3 -->
        <!-- /.col-lg-8 -->
        </div>  

        <div class="row mb-4 justify-content-center">
          <div class="col-lg-3">
            <div class="pricing">
              <div class="body shadow">
                <div>
                    <h4 class="text-center">SEKRETARIS 1</h4>
                    <h5 class="text-center text-primary">Lorem ipsum dolor sit amet.</h5>
                </div>
                
              </div>
            </div>
            <!-- /.pricing -->
          </div>
          <!-- /.col-lg-3 -->
          <div class="col-lg-3">
            <div class="pricing">
              <div class="body shadow">
                <div class="">
                    <h4 class="text-center">SEKRETARIS 2</h4>
                    <h5 class="text-center text-primary">Lorem ipsum dolor sit amet.</h5>
                </div>

              </div>
            </div>
            <!-- /.pricing -->
          </div>
          <div class="col-lg-3">
            <div class="pricing">
              <div class="body shadow">
                <div class="">
                    <h4 class="text-center">BENDAHARA 1</h4>
                    <h5 class="text-center text-primary">Lorem ipsum dolor sit amet.</h5>
                </div>

              </div>
            </div>
            <!-- /.pricing -->
          </div>
          <div class="col-lg-3">
            <div class="pricing">
              <div class="body shadow">
                <div class="">
                    <h4 class="text-center">BENDAHARA 2</h4>
                    <h5 class="text-center text-primary">Lorem ipsum dolor sit amet.</h5>
                </div>

              </div>
            </div>
            <!-- /.pricing -->
          </div>
          <!-- /.col-lg-3 -->
        <!-- /.col-lg-8 -->
          </div>
            <div class="row mb-5">
              <div class="col-lg-3">
                <div class="pricing">
                  <div class="body shadow">
                    <div>
                      <span>Departemen</h2>
                        <h4>Humas</h4>
                    </div>
                    <div class="row count-numbers">
                      <div class="col-6 col-lg-6">
                        <span class="counter d-block"
                          ><span data-number="4">0</span></span
                        >
                        <span class="caption-2">Anggota</span>
                      </div>
                      <div
                        class="col-6 col-lg-6"
                        
                        
                      >
                        <span class="counter d-block"
                          ><span data-number="2"></span><span></span
                        ></span>
                        <span class="caption-2">Divisi</span>
                      </div>
                    </div>

                  
                  </div>
                </div>
                <!-- /.pricing -->
              </div>
              <!-- /.col-lg-3 -->
              <div class="col-lg-3">
                <div class="pricing">
                  <div class="body shadow">
                    <div class="">
                      <span>Departemen</h2>
                        <h4>Organisasi</h4>
                    </div>
                    <div class="row count-numbers">
                      <div class="col-6 col-lg-6">
                        <span class="counter d-block"
                          ><span data-number="5">0</span></span
                        >
                        <span class="caption-2">Anggota</span>
                      </div>
                      <div
                        class="col-6 col-lg-6"
                        
                        
                      >
                        <span class="counter d-block"
                          ><span data-number="2"></span><span></span
                        ></span>
                        <span class="caption-2">Divisi</span>
                      </div>
                    </div>

                  
                  </div>
                </div>
                <!-- /.pricing -->
              </div>
              <!-- /.col-lg-3 -->
              <div class="col-lg-3">
                <div class="pricing">
                  <div class="body shadow">
                    <div>

                      <span>Departemen</h2>
                        <h4>PSDM</h4>
                    </div>
                    <div class="row count-numbers">
                      <div class="col-6 col-lg-6">
                        <span class="counter d-block"
                          ><span data-number="6">0</span></span
                        >
                        <span class="caption-2">Anggota</span>
                      </div>
                      <div
                        class="col-6 col-lg-6"
                        
                        
                      >
                        <span class="counter d-block"
                          ><span data-number="2"></span><span></span
                        ></span>
                        <span class="caption-2">Divisi</span>
                      </div>
                    </div>

                  
                  </div>
                </div>
                <!-- /.pricing -->
              </div>
              <!-- /.col-lg-3 -->
              <div class="col-lg-3">
                <div class="pricing">
                  <div class="body shadow">
                    <div>
                      <span>Departemen</h2>
                        <h4>Media Kreatif</h4>
                    </div>
                    <div class="row count-numbers">
                      <div class="col-6 col-lg-6">
                        <span class="counter d-block"
                          ><span data-number="6">0</span></span
                        >
                        <span class="caption-2">Anggota</span>
                      </div>
                      <div
                        class="col-6 col-lg-6"
                        
                        
                      >
                        <span class="counter d-block"
                          ><span data-number="2"></span><span></span
                        ></span>
                        <span class="caption-2">Divisi</span>
                      </div>
                    </div>

                  
                  </div>
                </div>
                <!-- /.pricing -->
              </div>
              <!-- /.col-lg-3 -->
              
              <!-- /.col-lg-4 -->


          <!-- /.col-lg-8 -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </div>
    <!-- /.untree_co-section -->

    <div class="untree_co-section bg-light" id="pricing-section">
      <div class="container">
        <div class="row pricing-title mb-5">
          <div class="col-12 text-center" data-aos="fade-up" data-aos-delay="0">
            <h2 class="heading mt-4"><?php print $vimi_title ?></h2>
            <h4><?php print $vimi_text ?></h4>
          </div>
        </div>
        <!-- /.row -->

        <div class="row justify-content-center mb-5">
          <div class="col-lg-10">
            <div class="row">
              <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <img src="dashboard/uploads/profile/<?php print $ppnew1; ?>" class="img-fluid">
                <div class="pricing">
                  <div class="body">
                    <div class="price">
                      <span class="price"><span><?php print $pvtitle ?></span></span>
                      <h1 class="d-block text-black mb-4"><?php print $pvsubtitle ?></h1>
                      <p class="text-black"><?php print $pvtext ?></p>
                    </div>
                   

                    
                  </div>
                </div>
                <!-- /.pricing -->
              </div>
              <!-- /.col-lg-4 -->

              <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                <img src="dashboard/uploads/profile/<?php print $ppnew2; ?>" class="img-fluid">

                <div class="pricing">
                  <div class="body">
                    <div class="price">
                      <span class="price"><span><?php print $pmtitle ?></span></span>
                      <ul class="text-dark text-start"><?php print $pmtext ?></ul>
                    </div>
                  
                    
                  </div>
                </div>
                <!-- /.pricing -->
              </div>
          
            </div>
        </div>
      </div>
      <!-- /.container -->
    </div>
    <!-- /.site-footer -->

    <div class="site-footer mt-3 text-start text-white bg-dark">
      <!-- /.footer-dots -->
      <div class="container">
        <div class="row">
          <div class="col-12 col-lg-5 mb-5">
            <div class="d-flex align-items-center">
              <img src="dashboard/uploads/logo/<?php print $xfile?>" width="53" class="img-fluid me-2">
              <h1 class="text-white"><?php print $web_title ?><span class="text-primary">.</span></h1>
              
            </div>
            <!-- /.widget -->
            
          </div>
          <div class="col-6 col-lg-4">
            <h5>Follow Us</h5>
            <div class="d-flex">
              <ul class="list-unstyled social fs-3">
                <?php
                  $q="SELECT * FROM  social ORDER BY id DESC";
                  $r123 = mysqli_query($con,$q);
                  while($ro = mysqli_fetch_array($r123)){
                    $id="$ro[id]";
                    $name="$ro[name]";
                    $fa="$ro[fa]";
                    $social_link="$ro[social_link]";
                    print"
                  <li>
                    <a href='$social_link'><span class='$fa'></span></a>
                  </li>";
                  }
                ?>
              </ul>
            </div>
            <!-- /.widget -->
          </div>

          <div class="col-6 col-lg-3">
            <h5 class="mb-3"><?php print $contact_title ?></h5>
            <div class="">
              <h6 class="fs-6 fw-light"><?php print $email ?></h6>
              <h6 class="fs-6 fw-light"><?php print $phone ?></h6>
            </div>
            <!-- /.widget -->
          </div>
          <!-- /.col-lg-3 -->

        </div>
        <h6 class="text-center mt-3"><?php print $site_footer ?></h6>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </div>
    <!-- /.site-footer -->

    <div id="overlayer"></div>
    <div class="loader">
      <div class="spinner-border" role="status">
        <span class="sr-only">Loading...</span>
      </div>
    </div>

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/aos.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
      integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
      integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK"
      crossorigin="anonymous"
    ></script>

    <script src="js/custom.js"></script>
  </body>
</html>