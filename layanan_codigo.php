<?php include "z_db.php";?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="author" content="Untree.co" />
    <link rel="shortcut icon" href="favicon.png" />

    <meta name="description" content="" />
    <meta name="keywords" content="" />

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

    <title>Himatekkom Web - Under Dev</title>
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

   
    <nav style="z-index: 99" class="navbar site-nav dark navbar-expand-lg bg-light navbar-light">
      <div class="container-fluid">
        <div class="d-flex align-items-center">
          <img src="images/logo.png" width="70" class="img-fluid me-2">
          <div class="d-block">
            <a class="navbar-brand logo" href="home">  Himatekkom</a>
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
              <a class="nav-link" aria-current="page" href="profile"
                >Profile Pengurus</a
              >
            </li>
            
            <li class="nav-item">
              <a class="nav-link " href="forum">Forum</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="info&berita">Info & Berita</a>
            </li>
          
          <li class="nav-item dropdown">
            <a
              class="nav-link active-link dropdown-toggle"
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

    <div class="untree_co-hero pb-0" id="home-section">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="dots"></div>
            <div class="row justify-content-center">
            </div>
          </div>
              
            
              
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
      <!-- <div class="illustration">
      
    </div> -->
    </div>
    <!-- /.untree_co-hero -->

    <div class="untree_co-section">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center" data-aos="fade-up" data-aos-delay="0">
            <span class="caption">Himatekkom</span>
            <h3 class="heading">Layanan - <span> Codigo</span> </h3>
           
            
       
          </div>
        </div>
        <!-- /.row -->

      
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </div>
    <!-- /.untree_co-section -->

    

    <div class="untree_co-section" id="about-section">
      <div class="container">
        <div class="row justify-content-between mb-5">
            <div class="col-12 col-lg-6" data-aos="fade-up" data-aos-delay="0">
                <img src="images/product.png" class="img-fluid" alt="">

              </div>
          
          <!-- /.col-lg-6 -->
          <div class="col-12 col-lg-6">
            <div class="mb-4" data-aos="fade-up" data-aos-delay="0">
             
              <h2 class="heading">Produk 1</h2>
            </div>
            <div class="mb-4" data-aos="fade-up" data-aos-delay="100">
              <p class="text-dark">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ullam
                sequi eum illo quo, blanditiis dolor hic commodi, sint molestias
                soluta fugit? Voluptas, magnam officia culpa fuga quidem ut
                eveniet expedita!
              </p>
             
            </div>


            <div class="row count-numbers align-items-center">
                <div class="col-6">
                    <button class="btn-primary btn"> <i class="icon-whatsapp"></i> Whatsapp</button>
                </div>
                <div class="col-6">
                    <div class="" data-aos="fade-up" data-aos-delay="0">
                      <span class="caption-2">Rp. </span>
                      <span class="counter d-block"
                        ><span data-number="10000">0</span></span
                      >
                    </div>
                    <div
                      class=""
                      data-aos="fade-up"
                      data-aos-delay="100"
                    >
                      
                    </div>
                    
                </div>
             
            </div>
            
          </div>
          <!-- /.col-lg-6 -->
        </div>
        <!-- /.row -->

        <div class="untree_co-section" id="about-section">
          <div class="container">
            <div class="row justify-content-between mb-5">
                <div class="col-12 col-lg-6" data-aos="fade-up" data-aos-delay="0">
                    <img src="images/product.png" class="img-fluid" alt="">
    
                  </div>
              
              <!-- /.col-lg-6 -->
              <div class="col-12 col-lg-6">
                <div class="mb-4" data-aos="fade-up" data-aos-delay="0">
                 
                  <h2 class="heading">Produk 2</h2>
                </div>
                <div class="mb-4" data-aos="fade-up" data-aos-delay="100">
                  <p class="text-dark">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ullam
                    sequi eum illo quo, blanditiis dolor hic commodi, sint molestias
                    soluta fugit? Voluptas, magnam officia culpa fuga quidem ut
                    eveniet expedita!
                  </p>
                 
                </div>
    
                
    
                <div class="row count-numbers align-items-center">
                    <div class="col-6">
                        <button class="btn-primary btn"> <i class="icon-whatsapp"></i> Whatsapp</button>
                    </div>
                    <div class="col-6">
                        <div class="" data-aos="fade-up" data-aos-delay="0">
                          <span class="caption-2">Rp. </span>
                          <span class="counter d-block"
                            ><span data-number="10000">0</span></span
                          >
                        </div>
                        <div
                          class=""
                          data-aos="fade-up"
                          data-aos-delay="100"
                        >
                          
                        </div>
                        
                    </div>
                 
                </div>
                
              </div>
              <!-- /.col-lg-6 -->
            </div>
            <!-- /.row -->

        

              <div class="untree_co-section" id="contact-section">
                  <div class="container">
                    <div class="row mb-5" data-aos="fade-up" data-aos-delay="0">
                      <div class="col-12 text-center">
                        <span class="caption">Contact</span>
                        <h2 class="heading">Hubungi Kami</h2>
                        
                      </div>
                    </div>
                    <!-- /.row -->
                    <div class="row">
                      <div class="col">
                        <form class="contact-form" data-aos="fade-up" data-aos-delay="100">
                          <div class="row">
                            <div class="col-6">
                              <div class="form-group">
                                <label class="" for="fname">First name</label>
                                <input type="text" class="form-control" id="fname" />
                              </div>
                            </div>
                            <div class="col-6">
                              <div class="form-group">
                                <label class="" for="lname">Last name</label>
                                <input type="text" class="form-control" id="lname" />
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="" for="email">Email address</label>
                            <input type="email" class="form-control" id="email" />
                          </div>
            
                          <div class="form-group">
                            <label class="" for="message">Message</label>
                            <textarea
                              name=""
                              class="form-control"
                              id="message"
                              cols="30"
                              rows="5"
                            ></textarea>
                          </div>
            
                          <button type="submit" class="btn btn-primary mb-5">
                            Send Message
                          </button>
                        </form>
                      </div>
                      <!-- /.col-lg-7 -->
                      
                    </div>
                    <!-- /.row -->
                  </div>
                  <!-- /.container -->
                </div>
                </div>  
                <!-- /.untree_co-section bg-light -->

        
        </div></div></div>  

                <div class="site-footer mt-3 text-start text-white bg-dark">
      <!-- /.footer-dots -->
      <div class="container">
        <div class="row">
          <div class="col-12 col-lg-5 mb-5">
            <div class="d-flex align-items-center">
              <img src="images/logo.png" width="53" class="img-fluid me-2">
              <h1 class="text-white">Himatekkom<span class="text-primary">.</span></h1>
              
            </div>
            <!-- /.widget -->
            
          </div>
          <div class="col-6 col-lg-4">
            <h5>Follow Us</h5>
            <div class="d-flex">
              <ul class="list-unstyled social fs-3">
                <li>
                  <a href="https://www.instagram.com/himatekkom.ug/"><span class="icon-instagram text-white"></span></a>
                </li>
                <li>
                  <a href="https://www.instagram.com/himatekkom.ug/"><span class="icon-linkedin text-white"></span></a>
                </li>
                <li>
                  <a href="https://www.instagram.com/himatekkom.ug/"><span class="icon-facebook text-white"></span></a>
                </li>
              </ul>
            </div>
            <!-- /.widget -->
          </div>

          <div class="col-6 col-lg-3">
            <h5 class="mb-3">Contact us</h5>
            <div class="">
              <h6 class="fs-6 fw-light">email@gmail.com</h6>
              <h6 class="fs-6 fw-light">08xxxxxxxxxxx</h6>
            </div>
            <!-- /.widget -->
          </div>
          <!-- /.col-lg-3 -->

        </div>
        <h6 class="text-center mt-3"> 2022 &#169; - Himpunan Mahasiswa Teknik Komputer. All Rights Reserved
        </h6>
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
