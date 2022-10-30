<?php include "z_db.php";?>
<!DOCTYPE html>
<html lang="en">
<?php
  $rrs=mysqli_query($con,"SELECT * FROM section_title Where id=1");
  $rs = mysqli_fetch_array($rrs);
  $web_title="$rs[web_title]";
  $contact_title="$rs[contact_title]";
  $title_forum="$rs[title_forum]";
  $text_forum="$rs[text_forum]";
?>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="author" content="Untree.co" />
    <link rel="shortcut icon" href="favicon.png" />

    <meta name="description" content="" />
    <?php
      $rt=mysqli_query($con,"SELECT * FROM sitecontact where id=1");
      $tr = mysqli_fetch_array($rt);
      $phone = "$tr[phone]";
      $email = "$tr[email]";
    ?>

    <?php
      $rt=mysqli_query($con,"SELECT * FROM cumatekkom where id=1");
      $tr = mysqli_fetch_array($rt);
      $c_date = "$tr[c_date]";
      $ctitle = "$tr[ctitle]";
      $ctext = "$tr[ctext]";
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
          <span class="navbar-toggler-icon">
          </span>
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
              <a class="nav-link active-link" href="forum">Forum</a>
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

          <div class="text-center">
            <span class="caption">Forum</span>
            <h2 class="heading"><?php print $title_forum ?></h2>
            <h6 class="text-black"><?php print $text_forum ?></span></h6>
            
          </div>
        </div>
      </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </div>
    <!-- /.untree_co-section -->

    

    <!-- Forum -->
    <div class="container mb-5">

      <div class="forum-card ">
        <div class="row">
          
          <div class="col-12 col-lg-6">
            <div class="card mt-4">
              <div class="card-header">
                <span class="card-subtitle mb-2 text-muted"><?php print $c_date ?></h6>
                </div>
                <div class="card-body">
                  <h5 class="card-title"><?php print $ctitle ?></h5>
                  <p class="card-text text-dark"><?php print $ctext ?></p>
                  <a href="cumatekkom" class="btn btn-primary">Buka Forum</a>
                </div>
              </div>
            </div>
            
            <!-- dihapus boleh -->
            <div class="col-12 col-lg-6">
              <div class="card mt-4">
                <div class="card-header">
                  <span class="card-subtitle mb-2 text-muted">Tanggal</h6>
                  </div>
                  <div class="card-body">
                    <h5 class="card-title">Judul Forum</h5>
                    <p class="card-text text-dark">Isi forum disini</p>
                  <a href="forum_aspirasi[id].php" class="btn btn-primary">Buka Forum</a>
                </div>
              </div>
            </div>
        </div>
        
      </div>
    </div>
    <!-- /.Forum -->
    
    
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
