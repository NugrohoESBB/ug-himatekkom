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
                                <h4 class="mb-sm-0">Event</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">All</a></li>
                                        <li class="breadcrumb-item active">Event</li>
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
                                                <i class="fas fa-home"></i> Update Event
                                            </a>
                                        </li>


                                    </ul>
                                </div>



                                <?php
           $status = "OK"; //initial status
$msg="";
           if(ISSET($_POST['save'])){

$uploads_dir = 'uploads/event';

        $tmp_name = $_FILES["enew1"]["tmp_name"];
        // basename() may prevent filesystem traversal attacks;
        // further validation/sanitation of the filename may be appropriate
        $name = basename($_FILES["enew1"]["name"]);
        $random_digit=rand(0000,9999);
        $new_event1=$random_digit.$name;

        move_uploaded_file($tmp_name, "$uploads_dir/$new_event1");

        $tmp_name = $_FILES["enew2"]["tmp_name"];
        // basename() may prevent filesystem traversal attacks;
        // further validation/sanitation of the filename may be appropriate
        $name = basename($_FILES["enew2"]["name"]);
        $random_digit=rand(0000,9999);
        $new_event2=$random_digit.$name;

        move_uploaded_file($tmp_name, "$uploads_dir/$new_event2");



if($status=="OK")
{
  $qb=mysqli_query($con,"update event set enew1='$new_event1', enew2='$new_event2' where id=1");

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
                     $query="SELECT * FROM  event where id=1";
 $result = mysqli_query($con,$query);
$i=0;
while($row = mysqli_fetch_array($result)){
    $enew1="$row[enew1]";
    $enew2="$row[enew2]";
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
                                                     <span>Webinar : </span> <img src="uploads/event/<?php print $enew1; ?>" alt="img" style="max-height:120px;">
                                                        <div class="mb-3">
                                                            <label for="firstnameInput" class="form-label">Event 1</label>
                                                            <input type="file" class="form-control" id="firstnameInput" name="enew1" required>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                    <span>Webinar : </span> <img src="uploads/event/<?php print $enew2; ?>" alt="img" style="max-height:120px;">
                                                        <div class="mb-3">
                                                            <label for="firstnameInput" class="form-label">Event 2</label>
                                                            <input type="file" class="form-control" id="firstnameInput" name="enew2" required>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-lg-12">
                                                        <div class="hstack gap-2 justify-content-end">
                                                            <button type="submit" name="save" class="btn btn-primary">Update Event</button>

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
