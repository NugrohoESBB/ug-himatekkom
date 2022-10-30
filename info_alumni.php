<?php include "z_db.php";?>
<!DOCTYPE html>
<html lang="en">
<?php
  $rrs=mysqli_query($con,"SELECT * FROM section_title Where id=1");
  $rs = mysqli_fetch_array($rrs);
  $web_title="$rs[web_title]";
  $contact_title="$rs[contact_title]";
  $alumni_title="$rs[alumni_title]";
  $event_title="$rs[event_title]";
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
    <meta name="keywords" content="" />
    <?php
      $rr=mysqli_query($con,"SELECT * FROM siteconfig where id=1");
      $r = mysqli_fetch_array($rr);
      $site_title = "$r[site_title]";
      $site_footer = "$r[site_footer]";
    ?>

    <?php
      $rr=mysqli_query($con,"SELECT * FROM alumni where id=1");
      $r = mysqli_fetch_array($rr);
      $inew1 = "$r[inew1]";
      $inew2 = "$r[inew2]";
      $inew3 = "$r[inew3]";
      $inew4 = "$r[inew4]";
      $inew5 = "$r[inew5]";
    ?>

    <?php
      $rr=mysqli_query($con,"SELECT * FROM event where id=1");
      $r = mysqli_fetch_array($rr);
      $enew1 = "$r[enew1]";
      $enew2 = "$r[enew2]";
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

   
    <nav style="z-index: 99" class="navbar site-nav dark navbar-expand-lg bg-light navbar-light">
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
              <a class="nav-link" aria-current="page" href="profile"
                >Profile Pengurus</a
              >
            </li>
            
            <li class="nav-item">
              <a class="nav-link " href="forum">Forum</a>
            </li>

            <li class="nav-item">
              <a class="nav-link active-link" href="info&berita">Info & Berita</a>
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
            <h3 class="heading"><?php print $alumni_title ?></h3>
            
       
          </div>
        </div>
        <!-- /.row -->

      
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </div>
    <!-- /.untree_co-section -->

    

    <div class="untree_co-section" id="testimonials-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">

            <div>
              <a
                href="#"
                class="js-custom-prev-v2 cusotm-slider-nav custom-prev"
                ><span
                  ><svg
                    class="bi bi-arrow-left"
                    width="1em"
                    height="1em"
                    viewBox="0 0 16 16"
                    fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M5.854 4.646a.5.5 0 0 1 0 .708L3.207 8l2.647 2.646a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 0 1 .708 0z"
                    />
                    <path
                      fill-rule="evenodd"
                      d="M2.5 8a.5.5 0 0 1 .5-.5h10.5a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"
                    /></svg></span
              ></a>
              <a
                href="#"
                class="js-custom-next-v2 cusotm-slider-nav custom-next"
                ><span
                  ><svg
                  class="bi bi-arrow-right"
                  width="1em"
                  height="1em"
                  viewBox="0 0 16 16"
                  fill="currentColor"
                  xmlns="http://www.w3.org/2000/svg"
                  >
                  <path
                  fill-rule="evenodd"
                  d="M10.146 4.646a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L12.793 8l-2.647-2.646a.5.5 0 0 1 0-.708z"
                />
                <path
                  fill-rule="evenodd"
                  d="M2 8a.5.5 0 0 1 .5-.5H13a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 8z"
                /></svg></span
              ></a>
             
            </div>
          </div>
        </div>
        <div class="row justify-content-center mt-3">
          <div class="col-lg-12" data-aos="fade" data-aos-delay="200">
            <div class="owl-2-slider owl-carousel">
              <div class="item">
                <div class="untree_co-testimonial d-flex">
                  <div class="row">
                    <div class="col"><div class="pic mr-3">
                      <img
                        src="dashboard/uploads/alumni/<?php print $inew1; ?>"
                        alt="Image"
                        class="img-fluid"
                      />
                    </div></div>
                  </div>
                </div>
                <!-- /.untree_co-testimonial -->
              </div>

              <div class="item">
                <div class="untree_co-testimonial d-flex">
                  <div class="row">
                    <div class="col"><div class="pic mr-3">
                      <img
                        src="dashboard/uploads/alumni/<?php print $inew2; ?>"
                        alt="Image"
                        class="img-fluid"
                      />
                    </div></div>
                  </div>
                </div>
                <!-- /.untree_co-testimonial -->
              </div>

              <div class="item">
                <div class="untree_co-testimonial d-flex">
                  <div class="row">
                    <div class="col"><div class="pic mr-3">
                      <img
                        src="dashboard/uploads/alumni/<?php print $inew3; ?>"
                        alt="Image"
                        class="img-fluid"
                      />
                    </div></div>
                  </div>
                </div>
                <!-- /.untree_co-testimonial -->
              </div>

              <div class="item">
                <div class="untree_co-testimonial d-flex">
                  <div class="row">
                    <div class="col"><div class="pic mr-3">
                      <img
                        src="dashboard/uploads/alumni/<?php print $inew4; ?>"
                        alt="Image"
                        class="img-fluid"
                      />
                    </div></div>
                  </div>
                </div>
                <!-- /.untree_co-testimonial -->
              </div>

              <div class="item">
                <div class="untree_co-testimonial d-flex">
                  <div class="row">
                    <div class="col"><div class="pic mr-3">
                      <img
                        src="dashboard/uploads/alumni/<?php print $inew5; ?>"
                        alt="Image"
                        class="img-fluid"
                      />
                    </div></div>
                  </div>
                </div>
                <!-- /.untree_co-testimonial -->
              </div>
              

            </div>
          </div>
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </div>
    <!-- /.untree_co-section -->

    <div class="untree_co-section" id="testimonials-section">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center" data-aos="fade-up" data-aos-delay="0">
            <h3 class="heading"><?php print $event_title ?></h3>
            
       
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 text-center">

            <div>
              <a
                href="#"
                class="js-custom-prev-v2 cusotm-slider-nav custom-prev"
                ><span
                  ><svg
                    class="bi bi-arrow-left"
                    width="1em"
                    height="1em"
                    viewBox="0 0 16 16"
                    fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M5.854 4.646a.5.5 0 0 1 0 .708L3.207 8l2.647 2.646a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 0 1 .708 0z"
                    />
                    <path
                      fill-rule="evenodd"
                      d="M2.5 8a.5.5 0 0 1 .5-.5h10.5a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"
                    /></svg></span
              ></a>
              <a
                href="#"
                class="js-custom-next-v2 cusotm-slider-nav custom-next"
                ><span
                  ><svg
                  class="bi bi-arrow-right"
                  width="1em"
                  height="1em"
                  viewBox="0 0 16 16"
                  fill="currentColor"
                  xmlns="http://www.w3.org/2000/svg"
                  >
                  <path
                  fill-rule="evenodd"
                  d="M10.146 4.646a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L12.793 8l-2.647-2.646a.5.5 0 0 1 0-.708z"
                />
                <path
                  fill-rule="evenodd"
                  d="M2 8a.5.5 0 0 1 .5-.5H13a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 8z"
                /></svg></span
              ></a>
             
            </div>
          </div>
        </div>
        <div class="row justify-content-center mt-3">
          <div class="col-lg-12" data-aos="fade" data-aos-delay="200">
            <div class="owl-2-slider owl-carousel">
              <div class="item">
                <div class="untree_co-testimonial d-flex">
                  <div class="row">
                    <div class="col"><div class="pic mr-3">
                      <img
                        src="dashboard/uploads/event/<?php print $enew1; ?>"
                        alt="Image"
                        class="img-fluid"
                      />
                    </div></div>
                  </div>
                </div>
                <!-- /.untree_co-testimonial -->
              </div>

              <div class="item">
                <div class="untree_co-testimonial d-flex">
                  <div class="row">
                    <div class="col"><div class="pic mr-3">
                      <img
                        src="dashboard/uploads/event/<?php print $enew2; ?>"
                        alt="Image"
                        class="img-fluid"
                      />
                    </div></div>
                  </div>
                </div>
                <!-- /.untree_co-testimonial -->
              </div>

            </div>
          </div>
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </div>
    <!-- /.untree_co-section -->

    

    <div class="untree_co-section mt-5" id="contact-section">
      <div class="container">
        <div class="row mb-5" data-aos="fade-up" data-aos-delay="0">
          <div class="col-12 text-center">
            <h2 class="heading"><?php print $contact_title ?></h2>
           
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
    <!-- /.untree_co-section bg-light -->

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
