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
                                <h4 class="mb-sm-0">Alumni</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">All</a></li>
                                        <li class="breadcrumb-item active">Alumni</li>
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
                                                <i class="fas fa-home"></i> Update Alumni
                                            </a>
                                        </li>


                                    </ul>
                                </div>



                                <?php
           $status = "OK"; //initial status
$msg="";
           if(ISSET($_POST['save'])){

$uploads_dir = 'uploads/alumni';

        $tmp_name = $_FILES["inew1"]["tmp_name"];
        // basename() may prevent filesystem traversal attacks;
        // further validation/sanitation of the filename may be appropriate
        $name = basename($_FILES["inew1"]["name"]);
        $random_digit=rand(0000,9999);
        $new_alumni1=$random_digit.$name;

        move_uploaded_file($tmp_name, "$uploads_dir/$new_alumni1");

        $tmp_name = $_FILES["inew2"]["tmp_name"];
        // basename() may prevent filesystem traversal attacks;
        // further validation/sanitation of the filename may be appropriate
        $name = basename($_FILES["inew2"]["name"]);
        $random_digit=rand(0000,9999);
        $new_alumni2=$random_digit.$name;

        move_uploaded_file($tmp_name, "$uploads_dir/$new_alumni2");

        $tmp_name = $_FILES["inew3"]["tmp_name"];
        // basename() may prevent filesystem traversal attacks;
        // further validation/sanitation of the filename may be appropriate
        $name = basename($_FILES["inew3"]["name"]);
        $random_digit=rand(0000,9999);
        $new_alumni3=$random_digit.$name;

        move_uploaded_file($tmp_name, "$uploads_dir/$new_alumni3");

        $tmp_name = $_FILES["inew4"]["tmp_name"];
        // basename() may prevent filesystem traversal attacks;
        // further validation/sanitation of the filename may be appropriate
        $name = basename($_FILES["inew4"]["name"]);
        $random_digit=rand(0000,9999);
        $new_alumni4=$random_digit.$name;

        move_uploaded_file($tmp_name, "$uploads_dir/$new_alumni4");

        $tmp_name = $_FILES["inew5"]["tmp_name"];
        // basename() may prevent filesystem traversal attacks;
        // further validation/sanitation of the filename may be appropriate
        $name = basename($_FILES["inew5"]["name"]);
        $random_digit=rand(0000,9999);
        $new_alumni5=$random_digit.$name;

        move_uploaded_file($tmp_name, "$uploads_dir/$new_alumni5");

if($status=="OK"){
  $qb=mysqli_query($con,"update alumni set inew1='$new_alumni1', inew2='$new_alumni2', inew3='$new_alumni3', inew4='$new_alumni4', inew5='$new_alumni5' where id=1");

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
                     $query="SELECT * FROM  alumni where id=1";
 $result = mysqli_query($con,$query);
$i=0;
while($row = mysqli_fetch_array($result)){
    $inew1="$row[inew1]";
    $inew2="$row[inew2]";
    $inew3="$row[inew3]";
    $inew4="$row[inew4]";
    $inew5="$row[inew5]";
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
                                                     <span>Fadel Ibrohim : </span> <img src="uploads/alumni/<?php print $inew1; ?>" alt="img" style="max-height:120px;">
                                                        <div class="mb-3">
                                                            <label for="firstnameInput" class="form-label">Alumni 1</label>
                                                            <input type="file" class="form-control" id="firstnameInput" name="inew1" required>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                    <span>Hanif Wira Mahadika : </span> <img src="uploads/alumni/<?php print $inew2; ?>" alt="img" style="max-height:120px;">
                                                        <div class="mb-3">
                                                            <label for="firstnameInput" class="form-label">Alumni 2</label>
                                                            <input type="file" class="form-control" id="firstnameInput" name="inew2" required>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                    <span>Galuh Wicaksono : </span> <img src="uploads/alumni/<?php print $inew3; ?>" alt="img" style="max-height:120px;">
                                                        <div class="mb-3">
                                                            <label for="firstnameInput" class="form-label">Alumni 3</label>
                                                            <input type="file" class="form-control" id="firstnameInput" name="inew3" required>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                    <span>Calvin Adriaan : </span> <img src="uploads/alumni/<?php print $inew4; ?>" alt="img" style="max-height:120px;">
                                                        <div class="mb-3">
                                                            <label for="firstnameInput" class="form-label">Alumni 4</label>
                                                            <input type="file" class="form-control" id="firstnameInput" name="inew4" required>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                    <span>Eka Putri Santoso : </span> <img src="uploads/alumni/<?php print $inew5; ?>" alt="img" style="max-height:120px;">
                                                        <div class="mb-3">
                                                            <label for="firstnameInput" class="form-label">Alumni 5</label>
                                                            <input type="file" class="form-control" id="firstnameInput" name="inew5" required>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-lg-12">
                                                        <div class="hstack gap-2 justify-content-end">
                                                            <button type="submit" name="save" class="btn btn-primary">Update Alumni</button>

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
