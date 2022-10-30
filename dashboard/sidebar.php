<?php
include"../z_db.php";
$username=$_SESSION['username'];
?>
<div class="app-menu navbar-menu">
  <!-- LOGO -->
  <div class="navbar-brand-box">
    <!-- Dark Logo-->
<?php
    $rr=mysqli_query($con,"SELECT ufile FROM logo");
$r = mysqli_fetch_row($rr);
$ufile = $r[0];
?>

    <a href="index.html" class="logo logo-dark">
      <span class="logo-sm">
        <img src="uploads/logo/<?php print $ufile?>" alt="" height="22">
      </span>
      <span class="logo-lg">
        <img src="uploads/logo/<?php print $ufile?>" alt="" height="30">
      </span>
    </a>
    <!-- Light Logo-->
    <a href="index.html" class="logo logo-light">
      <span class="logo-sm">
        <img src="uploads/logo/<?php print $ufile?>" alt="" height="22">
      </span>
      <span class="logo-lg">
        <img src="uploads/logo/<?php print $ufile?>" alt="" height="30">
      </span>
    </a>
    <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
      <i class="ri-record-circle-line"></i>
    </button>
  </div>

  <div id="scrollbar">
    <div class="container-fluid">

      <div id="two-column-menu">
      </div>
      <ul class="navbar-nav" id="navbar-nav">
        <li class="menu-title"><span data-key="t-menu">Menu</span></li>


            <li class="nav-item">
                <a href="dashboard" class="nav-link" data-key="t-analytics">  <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards"> Dashboard </span></a>
            </li>

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarH" data-bs-toggle="collapse" role="button" aria-expanded="true" aria-controls="sidebarLanding">
                                <i class="ri-rocket-line"></i> <span data-key="t-landing">Manage Home</span>
                            </a>
                            <div class="menu-dropdown collapse" id="sidebarH" style="">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="home" class="nav-link" data-key="t-nft-landing">Update Home</a>
                                    </li>
                                </ul>
                            </div>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarHB" data-bs-toggle="collapse" role="button" aria-expanded="true" aria-controls="sidebarLanding">
                                <i class="ri-image-fill"></i> <span data-key="t-landing">Manage Home | Banner</span>
                            </a>
                            <div class="menu-dropdown collapse" id="sidebarHB" style="">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="banner" class="nav-link" data-key="t-nft-landing">Update Banner</a>
                                    </li>
                                </ul>
                            </div>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarIA" data-bs-toggle="collapse" role="button" aria-expanded="true" aria-controls="sidebarLanding">
                                <i class="ri-file-list-3-line"></i> <span data-key="t-landing">Manage Info | Alumni</span>
                            </a>
                            <div class="menu-dropdown collapse" id="sidebarIA" style="">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="alumni" class="nav-link" data-key="t-nft-landing">Upload Alumni</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarIE" data-bs-toggle="collapse" role="button" aria-expanded="true" aria-controls="sidebarLanding">
                                <i class="ri-checkbox-multiple-line"></i> <span data-key="t-landing">Manage Info | Event</span>
                            </a>
                            <div class="menu-dropdown collapse" id="sidebarIE" style="">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="event" class="nav-link" data-key="t-nft-landing">Upload Event</a>
                                    </li>
                                </ul>
                            </div>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarP" data-bs-toggle="collapse" role="button" aria-expanded="true" aria-controls="sidebarLanding">
                                <i class="ri-rhythm-fill"></i> <span data-key="t-landing">Manage Profile</span>
                            </a>
                            <div class="menu-dropdown collapse" id="sidebarP" style="">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="profile" class="nav-link" data-key="t-nft-landing">Upload Profile</a>
                                    </li>
                                </ul>
                            </div>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarPT" data-bs-toggle="collapse" role="button" aria-expanded="true" aria-controls="sidebarLanding">
                                <i class="ri-message-line"></i> <span data-key="t-landing">Manage Profile Text</span>
                            </a>
                            <div class="menu-dropdown collapse" id="sidebarPT" style="">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="profile_text" class="nav-link" data-key="t-nft-landing"> Update Profile Text </a>
                                    </li>
                                </ul>
                            </div>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarF" data-bs-toggle="collapse" role="button" aria-expanded="true" aria-controls="sidebarLanding">
                                <i class="ri-message-line"></i> <span data-key="t-landing">Manage Forum</span>
                            </a>
                            <div class="menu-dropdown collapse" id="sidebarF" style="">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="forum" class="nav-link" data-key="t-nft-landing">Update Forum</a>
                                    </li>
                                </ul>
                            </div>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarFC" data-bs-toggle="collapse" role="button" aria-expanded="true" aria-controls="sidebarLanding">
                                <i class="ri-message-line"></i> <span data-key="t-landing">Manage Forum Cumatekkom</span>
                            </a>
                            <div class="menu-dropdown collapse" id="sidebarFC" style="">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="cumatekkom" class="nav-link" data-key="t-nft-landing"> All Cumatekkom </a>
                                    </li>
                                </ul>
                            </div>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarS" data-bs-toggle="collapse" role="button" aria-expanded="true" aria-controls="sidebarLanding">
                                <i class="ri-chrome-fill"></i> <span data-key="t-landing">Manage Social</span>
                            </a>
                            <div class="menu-dropdown collapse" id="sidebarS" style="">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="createsocial" class="nav-link" data-key="t-one-page"> Add New </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="social" class="nav-link" data-key="t-nft-landing">Social List </a>
                                    </li>
                                </ul>
                            </div>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarSC" data-bs-toggle="collapse" role="button" aria-expanded="true" aria-controls="sidebarLanding">
                                <i class="ri-tools-fill"></i> <span data-key="t-landing"> Site Configuration </span>
                            </a>
                            <div class="menu-dropdown collapse" id="sidebarSC" style="">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="settings" class="nav-link" data-key="t-one-page"> Site Settings </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="titles" class="nav-link" data-key="t-nft-landing"> Section Titles </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="logo" class="nav-link" data-key="t-nft-landing"> Update Logo </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="contact" class="nav-link" data-key="t-nft-landing"> Update Contact </a>
                                    </li>
                                </ul>
                            </div>
                        </li>









      </ul>
    </div>
    <!-- Sidebar -->
  </div>

  <div class="sidebar-background"></div>
</div>
<!-- Left Sidebar End -->
<!-- Vertical Overlay-->
<div class="vertical-overlay"></div>
