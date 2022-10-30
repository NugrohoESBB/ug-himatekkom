<?php
include_once("../z_db.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['username'])) {
  $status = "OK"; //initial status
  $msg = "";
  $username = mysqli_real_escape_string($con, $_POST['username']); //fetching details through post method
  $password = mysqli_real_escape_string($con, $_POST['password']);


  if ($status == "OK") {

    // Retrieve username and password from database according to user's input, preventing sql injection
    $query = "SELECT * FROM admin WHERE (username = '". mysqli_real_escape_string($con, $_POST['username']) . "') AND (password = '" . mysqli_real_escape_string($con, $_POST['password']) . "')";


    if ($stmt = mysqli_prepare($con, $query)) {

      /* execute query */
      mysqli_stmt_execute($stmt);

      /* store result */
      mysqli_stmt_store_result($stmt);

      $num = mysqli_stmt_num_rows($stmt);

      /* close statement */
      mysqli_stmt_close($stmt);

    //mysqli_close($con);
    // Check username and password match

   if ($num == 1){

session_start();
        // Set username session variable
        $_SESSION['username'] = $username;

       $username = $_SESSION['username'];
       print "
       <script language='javascript'>
         window.location = 'index.php';
       </script>";

}

else{
$errormsg= "
<div class='alert alert-danger alert-dismissible alert-outline fade show'>
                 Username And/Or Password Does Not Match.
                    </div>"; //printing error if found in validation

}}}


else {

$errormsg= "
<div class='alert alert-danger alert-dismissible alert-outline fade show'>
                ".$msg."
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                    </div>"; //printing error if found in validation


}
}

?>

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

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap"
      rel="stylesheet"
    />

    <!-- App favicon -->
    <?php
      $rr=mysqli_query($con,"SELECT xfile FROM logo");
      $r = mysqli_fetch_row($rr);
      $xfile = $r[0];
    ?>
    <link rel="shortcut icon" href="uploads/logo/<?php print $xfile?>">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/owl.carousel.min.css" />
    <link rel="stylesheet" href="css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="css/jquery.fancybox.min.css" />
    <link rel="stylesheet" href="fonts/icomoon/style.css" />
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css" />
    <link rel="stylesheet" href="css/aos.css" />
    <link rel="stylesheet" href="css/style.css" />

    <title>Login Himatekkom Web</title>
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

    <nav class="site-nav dark js-site-navbar mb-2 site-navbar-target">
      <div class="container">
        <div class="site-navigation">
          <a href="../index.php" class="logo m-0 float-left"
            >Himatekkom<span class="text-primary">.</span></a
          >

          <ul
            class="js-clone-nav d-none d-lg-inline-block site-menu float-left"
          >
            <li class="active">
              <a href="../index.php" class="nav-link">Home</a>
            </li>
            <li class="has-children">
              <a href="business.html" class="nav-link">Business</a>
              <ul class="dropdown">
                <li>
                  <a href="#testimonials-section" class="nav-link"
                    >Testimonials</a
                  >
                </li>
                <li><a href="elements.html" class="nav-link">Elements</a></li>
                <li class="has-children">
                  <a href="#">Menu Two</a>
                  <ul class="dropdown">
                    <li><a href="#" class="nav-link">Sub Menu One</a></li>
                    <li><a href="#" class="nav-link">Sub Menu Two</a></li>
                    <li><a href="#" class="nav-link">Sub Menu Three</a></li>
                  </ul>
                </li>
                <li><a href="#" class="nav-link">Menu Three</a></li>
              </ul>
            </li>
            <li>
              <a href="#features-section" class="nav-link">Profile Pengurus</a>
            </li>
            <li>
              <a href="../forum_aspirasi.php" class="nav-link">Forum</a>
            </li>
            <li class="has-children">
              <a href="#" class="nav-link">Profile Pengurus</a>
              <ul class="dropdown">
                <li>
                  <a href="#testimonials-section" class="nav-link"
                    >Testimonials</a
                  >
                </li>
                <li><a href="elements.html" class="nav-link">Elements</a></li>
                <li class="has-children">
                  <a href="#">Menu Two</a>
                  <ul class="dropdown">
                    <li><a href="#" class="nav-link">Sub Menu One</a></li>
                    <li><a href="#" class="nav-link">Sub Menu Two</a></li>
                    <li><a href="#" class="nav-link">Sub Menu Three</a></li>
                  </ul>
                </li>
                <li><a href="#" class="nav-link">Menu Three</a></li>
              </ul>
            </li>
            <li>
              <a href="berita_acara.html" class="nav-link">Berita Acara</a>
            </li>
          </ul>

          <ul
            class="js-clone-nav d-none mt-1 d-lg-inline-block site-menu float-right"
          >
            <li class="cta-button-outline">
              <a href="signin.html">Sign in</a>
            </li>
          </ul>

          <a
            href="#"
            class="burger ml-auto float-right site-menu-toggle js-menu-toggle d-inline-block dark d-lg-none"
            data-toggle="collapse"
            data-target="#main-navbar"
          >
            <span></span>
          </a>
        </div>
      </div>
    </nav>

    <div class="untree_co-login-register">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5">
            <div class="custom-box" data-aos="fade-up" data-aos-delay="0">
              <h2 class="heading">Sign In</h2>
              <?php
                if($_SERVER['REQUEST_METHOD'] == 'POST' && ($errormsg!="")){
                  print $errormsg;
                }
              ?>
              <form class="user" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"], ENT_QUOTES, "utf-8"); ?>" method="post">
                <div class="form-field">
                  <label for="email">Username</label>
                  <input type="text" class="form-control" name="username" id="username" />
                </div>
                <div class="form-field">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" name="password" id="password-input" />
                </div>
                <div class="form-field">
                  <input
                    type="submit"
                    class="btn btn-primary btn-block"
                    value="Sign in"
                  />
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-footer">
      <div class="footer-dots"></div>
      <!-- /.footer-dots -->
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="widget">
              <h3>About Launch<span class="text-primary">.</span></h3>
              <p>Himpunan Mahasiswa Teknik Komputer</p>
            </div>
            <!-- /.widget -->
            <div class="widget">
              <h3>Follow Us</h3>
              <ul class="list-unstyled social">
                <li>
                  <a href="https://www.instagram.com/himatekkom.ug/"
                    ><span class="icon-instagram"></span
                  ></a>
                </li>
                <li>
                  <a href="#"><span class="icon-twitter"></span></a>
                </li>
                <li>
                  <a href="#"><span class="icon-facebook"></span></a>
                </li>
                <li>
                  <a href="#"><span class="icon-linkedin"></span></a>
                </li>
                <li>
                  <a href="#"><span class="icon-pinterest"></span></a>
                </li>
                <li>
                  <a href="#"><span class="icon-dribbble"></span></a>
                </li>
              </ul>
            </div>
            <!-- /.widget -->
          </div>
          <!-- /.col-lg-3 -->

          <div class="col-lg-2 ml-auto">
            <div class="widget">
              <h3>Projects</h3>
              <ul class="list-unstyled float-left links">
                <li><a href="#">Home</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Features</a></li>
                <li><a href="#">Pricing</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
              </ul>
            </div>
            <!-- /.widget -->
          </div>
          <!-- /.col-lg-3 -->

          <div class="col-lg-2">
            <div class="widget">
              <h3>Services</h3>
              <ul class="list-unstyled float-left links">
                <li><a href="#">Built for Developers</a></li>
                <li><a href="#">Modern Design</a></li>
                <li><a href="#">Building Stunning Websites</a></li>
                <li><a href="#">Bring Ideas To Life</a></li>
              </ul>
            </div>
            <!-- /.widget -->
          </div>
          <!-- /.col-lg-3 -->

          <div class="col-lg-3">
            <div class="widget">
              <h3>Quick Contact</h3>
              <address>43 Raymouth Rd. Baltemoer, London 3910</address>
              <ul class="list-unstyled links mb-4">
                <li><a href="tel://11234567890">+1(123)-456-7890</a></li>
                <li><a href="tel://11234567890">+1(123)-456-7890</a></li>
                <li>
                  <a href="mailto:info@mydomain.com">info@mydomain.com</a>
                </li>
              </ul>
            </div>
            <!-- /.widget -->
          </div>
          <!-- /.col-lg-3 -->
        </div>
        <!-- /.row -->

        <div class="row mt-5">
          <div class="col-12 text-center">
            <p class="copyright">
              Copyright &copy;
              <script>
                document.write(new Date().getFullYear());
              </script>
              . All Rights Reserved. &mdash; Designed with love by
              <a href="https://untree.co">Untree.co</a>
              <!-- License information: https://untree.co/license/ -->
            </p>
          </div>
        </div>
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

    <script src="js/custom.js"></script>
  </body>
</html>
