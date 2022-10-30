<?php include"header.php";?>
<?php include"sidebar.php";?>

<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">
 <div class="page-content">
       <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Banner</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">All</a></li>
                                        <li class="breadcrumb-item active">Banner</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->


                    <div class="row">

                        <!--end col-->
                        <div class="col-xxl-9">
                            <div class="card mt-xxl-n5">
                                <div class="card-header">
                                    <ul class="nav nav-tabs-custom rounded card-header-tabs border-bottom-0" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#personalDetails" role="tab" aria-selected="false">
                                                <i class="fas fa-home"></i> Update Banner
                                            </a>
                                        </li>


                                    </ul>
                                </div>



                                <?php
           $status = "OK"; //initial status
$msg="";
           if(ISSET($_POST['save'])){

$uploads_dir = 'uploads/banner';

        $tmp_name = $_FILES["hbdnew1"]["tmp_name"];
        // basename() may prevent filesystem traversal attacks;
        // further validation/sanitation of the filename may be appropriate
        $name = basename($_FILES["hbdnew1"]["name"]);
        $random_digit=rand(0000,9999);
        $new_image1=$random_digit.$name;

        move_uploaded_file($tmp_name, "$uploads_dir/$new_image1");

        $tmp_name = $_FILES["hbdnew2"]["tmp_name"];
        // basename() may prevent filesystem traversal attacks;
        // further validation/sanitation of the filename may be appropriate
        $name = basename($_FILES["hbdnew2"]["name"]);
        $random_digit=rand(0000,9999);
        $new_image2=$random_digit.$name;

        move_uploaded_file($tmp_name, "$uploads_dir/$new_image2");

        $tmp_name = $_FILES["hbdnew3"]["tmp_name"];
        // basename() may prevent filesystem traversal attacks;
        // further validation/sanitation of the filename may be appropriate
        $name = basename($_FILES["hbdnew3"]["name"]);
        $random_digit=rand(0000,9999);
        $new_image3=$random_digit.$name;

        move_uploaded_file($tmp_name, "$uploads_dir/$new_image3");

        $tmp_name = $_FILES["hbmnew1"]["tmp_name"];
        // basename() may prevent filesystem traversal attacks;
        // further validation/sanitation of the filename may be appropriate
        $name = basename($_FILES["hbmnew1"]["name"]);
        $random_digit=rand(0000,9999);
        $new_image4=$random_digit.$name;

        move_uploaded_file($tmp_name, "$uploads_dir/$new_image4");

        $tmp_name = $_FILES["hbmnew2"]["tmp_name"];
        // basename() may prevent filesystem traversal attacks;
        // further validation/sanitation of the filename may be appropriate
        $name = basename($_FILES["hbmnew2"]["name"]);
        $random_digit=rand(0000,9999);
        $new_image5=$random_digit.$name;

        move_uploaded_file($tmp_name, "$uploads_dir/$new_image5");

        $tmp_name = $_FILES["hbmnew3"]["tmp_name"];
        // basename() may prevent filesystem traversal attacks;
        // further validation/sanitation of the filename may be appropriate
        $name = basename($_FILES["hbmnew3"]["name"]);
        $random_digit=rand(0000,9999);
        $new_image6=$random_digit.$name;

        move_uploaded_file($tmp_name, "$uploads_dir/$new_image6");


if($status=="OK"){
  $qb=mysqli_query($con,"update banner_home set hbdnew1='$new_image1', hbdnew2='$new_image2', hbdnew3='$new_image3', hbmnew1='$new_image4', hbmnew2='$new_image5', hbmnew3='$new_image6' where id=1");

        if($qb){
                $errormsg= "
<div class='alert alert-success alert-dismissible alert-outline fade show'>
                 Data updated successfully.
                  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                  </div>
 "; //printing error if found in validation

        }
    }

        elseif ($status!=="OK") {
            $errormsg= "
<div class='alert alert-danger alert-dismissible alert-outline fade show'>
                     ".$msg." <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button> </div>"; //printing error if found in validation


    }
    else{
            $errormsg= "
      <div class='alert alert-danger alert-dismissible alert-outline fade show'>
                 Some Technical Glitch Is There. Please Try Again Later Or Ask Admin For Help.
                 <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                 </div>"; //printing error if found in validation


        }
           }
           ?>



                                <div class="card-body p-4">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="personalDetails" role="tabpanel">
                                        <?php
                     $query="SELECT * FROM  siteconfig where id=1 ";
 $result = mysqli_query($con,$query);
$i=0;
while($row = mysqli_fetch_array($result)){
    $site_url="$row[site_url]";
}
  ?>
                                     <?php
                     $query="SELECT * FROM  banner_home where id=1";
 $result = mysqli_query($con,$query);
$i=0;
while($row = mysqli_fetch_array($result)){
    $hbdnew1="$row[hbdnew1]";
    $hbdnew2="$row[hbdnew2]";
    $hbdnew3="$row[hbdnew3]";
    $hbmnew1="$row[hbmnew1]";
    $hbmnew2="$row[hbmnew2]";
    $hbmnew3="$row[hbmnew3]";
}
  ?>


                                        <?php
if($_SERVER['REQUEST_METHOD'] == 'POST')
                        {
                        print $errormsg;
                        }
   ?>
              <form action="" method="post" enctype="multipart/form-data">

                                                <div class="row">
                                                    <div class="col-lg-6">
                                                     <span>Welcome : </span> <img src="uploads/banner/<?php print $hbdnew1; ?>" alt="img" style="max-height:120px;">
                                                        <div class="mb-3">
                                                            <label for="firstnameInput" class="form-label">Desktop 1 (2560 x 960)</label>
                                                            <input type="file" class="form-control" id="firstnameInput" name="hbdnew1" required>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                    <span>Webinar : </span> <img src="uploads/banner/<?php print $hbdnew2; ?>" alt="img" style="max-height:120px;">
                                                        <div class="mb-3">
                                                            <label for="firstnameInput" class="form-label">Desktop 2 (2560 x 960)</label>
                                                            <input type="file" class="form-control" id="firstnameInput" name="hbdnew2" required>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                    <span>Event : </span> <img src="uploads/banner/<?php print $hbdnew3; ?>" alt="img" style="max-height:120px;">
                                                        <div class="mb-3">
                                                            <label for="firstnameInput" class="form-label">Desktop 3 (2560 x 960)</label>
                                                            <input type="file" class="form-control" id="firstnameInput" name="hbdnew3" required>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                    <span>Welcome : </span> <img src="uploads/banner/<?php print $hbmnew1; ?>" alt="img" style="max-height:120px;">
                                                        <div class="mb-3">
                                                            <label for="firstnameInput" class="form-label">Mobile 1 (1440 x 2560)</label>
                                                            <input type="file" class="form-control" id="firstnameInput" name="hbmnew1" required>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                    <span>Webinar : </span> <img src="uploads/banner/<?php print $hbmnew2; ?>" alt="img" style="max-height:120px;">
                                                        <div class="mb-3">
                                                            <label for="firstnameInput" class="form-label">Mobile 2 (1440 x 2560)</label>
                                                            <input type="file" class="form-control" id="firstnameInput" name="hbmnew2" required>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                    <span>Event : </span> <img src="uploads/banner/<?php print $hbmnew3; ?>" alt="img" style="max-height:120px;">
                                                        <div class="mb-3">
                                                            <label for="firstnameInput" class="form-label">Mobile 3 (1440 x 2560)</label>
                                                            <input type="file" class="form-control" id="firstnameInput" name="hbmnew3" required>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-lg-12">
                                                        <div class="hstack gap-2 justify-content-end">
                                                            <button type="submit" name="save" class="btn btn-primary">Update Banner</button>

                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                </div>
                                                <!--end row-->
                                            </form>
                                        </div>
                                        <!--end tab-pane-->

                                        <!--end tab-pane-->

                                        <!--end tab-pane-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                    </div>


                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <?php include"footer.php";?>
