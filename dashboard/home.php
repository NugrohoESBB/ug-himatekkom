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
                                <h4 class="mb-sm-0">Home</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">All</a></li>
                                        <li class="breadcrumb-item active">Home</li>
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
                                                <i class="fas fa-home"></i>Home
                                            </a>
                                        </li>


                                    </ul>
                                </div>



                                <?php
           $status = "OK"; //initial status
$msg="";
           if(ISSET($_POST['save'])){
$about_text1 = mysqli_real_escape_string($con,$_POST['about_text1']);
$about_text2 = mysqli_real_escape_string($con,$_POST['about_text2']);
$about_text3 = mysqli_real_escape_string($con,$_POST['about_text3']);
$hvisi_text = mysqli_real_escape_string($con,$_POST['hvisi_text']);
$hmisi_text = mysqli_real_escape_string($con,$_POST['hmisi_text']);


 /*
$uploads_dir = 'uploads';

        $tmp_name = $_FILES["ufile"]["tmp_name"];
        // basename() may prevent filesystem traversal attacks;
        // further validation/sanitation of the filename may be appropriate
        $name = basename($_FILES["ufile"]["name"]);
        $random_digit=rand(0000,9999);
        $new_file_name=$random_digit.$name;

        move_uploaded_file($tmp_name, "$uploads_dir/$new_file_name");*/

if($status=="OK"){
$qb=mysqli_query($con,"update home set about_text1='$about_text1', about_text2='$about_text2', about_text3='$about_text3', hvisi_text='$hvisi_text', hmisi_text='$hmisi_text' where id=1");

        if($qb){
                $errormsg= "
<div class='alert alert-success alert-dismissible alert-outline fade show'>
                  Site Setting Updated successfully.
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
                     $query="SELECT * FROM home where id=1 ";


 $result = mysqli_query($con,$query);
$i=0;
while($row = mysqli_fetch_array($result)){
    $about_text1="$row[about_text1]";
    $about_text2="$row[about_text2]";
    $about_text3="$row[about_text3]";
    $hvisi_text="$row[hvisi_text]";
    $hmisi_text="$row[hmisi_text]";
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
                                                        <div class="mb-3">
                                                            <label for="firstnameInput" class="form-label">Home | Visi Text</label>
                                                            <input type="text" class="form-control" id="firstnameInput" name="hvisi_text"  value="<?php print $hvisi_text ?>">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="firstnameInput" class="form-label">Home | Misi Text</label>
                                                            <textarea class="form-control" id="exampleFormControlTextarea5"  name="hmisi_text" rows="3" placeholder="Enter Footer About Text"> <?php print $hmisi_text ?></textarea>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="firstnameInput" class="form-label">Home Slider | About Text 1</label>
                                                            <textarea class="form-control" id="exampleFormControlTextarea5"  name="about_text1" rows="3" placeholder="Enter Footer About Text"> <?php print $about_text1 ?></textarea>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="firstnameInput" class="form-label">Home Slider | About Text 2</label>
                                                            <textarea class="form-control" id="exampleFormControlTextarea5"  name="about_text2" rows="3" placeholder="Enter Footer About Text"> <?php print $about_text2 ?></textarea>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="firstnameInput" class="form-label">Home Slider | About Text 3</label>
                                                            <textarea class="form-control" id="exampleFormControlTextarea5"  name="about_text3" rows="3" placeholder="Enter Footer About Text"> <?php print $about_text3 ?></textarea>
                                                        </div>
                                                    </div>

                                                    <!--end col-->
                                                    <div class="col-lg-12">
                                                        <div class="hstack gap-2 justify-content-end">
                                                            <button type="submit" name="save" class="btn btn-primary">Update Home</button>
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
