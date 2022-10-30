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
                                <h4 class="mb-sm-0">Section Titles</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Section</a></li>
                                        <li class="breadcrumb-item active">Titles</li>
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
                                                <i class="fas fa-home"></i> Section Titles
                                            </a>
                                        </li>


                                    </ul>
                                </div>



                                <?php
           $status = "OK"; //initial status
$msg="";
           if(ISSET($_POST['save'])){
$web_title = mysqli_real_escape_string($con,$_POST['web_title']);
$habout_title = mysqli_real_escape_string($con,$_POST['habout_title']);
$contact_title = mysqli_real_escape_string($con,$_POST['contact_title']);
$hvisi_title = mysqli_real_escape_string($con,$_POST['hvisi_title']);
$hmisi_title = mysqli_real_escape_string($con,$_POST['hmisi_title']);
$pprofile_title = mysqli_real_escape_string($con,$_POST['pprofile_title']);
$pprofile_text = mysqli_real_escape_string($con,$_POST['pprofile_text']);
$moto_title = mysqli_real_escape_string($con,$_POST['moto_title']);
$moto_text = mysqli_real_escape_string($con,$_POST['moto_text']);
$vimi_title = mysqli_real_escape_string($con,$_POST['vimi_title']);
$vimi_text = mysqli_real_escape_string($con,$_POST['vimi_text']);
$title_forum = mysqli_real_escape_string($con,$_POST['title_forum']);
$text_forum = mysqli_real_escape_string($con,$_POST['text_forum']);
$alumni_title = mysqli_real_escape_string($con,$_POST['alumni_title']);
$event_title = mysqli_real_escape_string($con,$_POST['event_title']);

 if ( strlen($pprofile_title) < 1 ){
$msg=$msg."Profile Title field can not be empty.<BR>";
$status= "NOTOK";}
 if ( strlen($pprofile_text) < 1 ){
$msg=$msg."Profile Text Field Must contain a Character.<BR>";
$status= "NOTOK";}


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
$qb=mysqli_query($con,"update section_title set web_title='$web_title', habout_title='$habout_title', contact_title='$contact_title', hvisi_title='$hvisi_title',hmisi_title='$hmisi_title',pprofile_title='$pprofile_title',pprofile_text='$pprofile_text',vimi_title='$vimi_title',vimi_text='$vimi_text',moto_title='$moto_title',moto_text='$moto_text',title_forum='$title_forum',text_forum='$text_forum',alumni_title='$alumni_title', event_title='$event_title' where id=1");

		if($qb){
		    	$errormsg= "
<div class='alert alert-success alert-dismissible alert-outline fade show'>
                  Section Titles Updated successfully.
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
					 $query="SELECT * FROM section_title where id=1 ";


 $result = mysqli_query($con,$query);
$i=0;
while($row = mysqli_fetch_array($result)){
    $web_title="$row[web_title]";
    $habout_title="$row[habout_title]";
    $hvisi_title="$row[hvisi_title]";
    $hmisi_title="$row[hmisi_title]";
    $contact_title="$row[contact_title]";
    $pprofile_title="$row[pprofile_title]";
    $pprofile_text="$row[pprofile_text]";
    $moto_title="$row[moto_title]";
    $moto_text="$row[moto_text]";
    $vimi_title="$row[vimi_title]";
    $vimi_text="$row[vimi_text]";
    $title_forum="$row[title_forum]";
    $text_forum="$row[text_forum]";
    $alumni_title="$row[alumni_title]";
    $event_title="$row[event_title]";
}
  ?>




                                      <?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
						print $errormsg;
						}
   ?>
              <form action="" method="post" enctype="multipart/form-data">
                                                <div class="row">

                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="firstnameInput" class="form-label">Web Title</label>
                                                            <input type="text" class="form-control" id="firstnameInput" name="web_title"  value="<?php print $web_title ?>">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="firstnameInput" class="form-label">Home | About Title</label>
                                                            <input type="text" class="form-control" id="firstnameInput" name="habout_title"  value="<?php print $habout_title ?>">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="firstnameInput" class="form-label">Contact | Contact Title</label>
                                                            <input type="text" class="form-control" id="firstnameInput" name="contact_title"  value="<?php print $contact_title ?>">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="firstnameInput" class="form-label">Home | Visi Title</label>
                                                            <input type="text" class="form-control" id="firstnameInput" name="hvisi_title" value="<?php print $hvisi_title ?>">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="firstnameInput" class="form-label">Home | Misi Title</label>
                                                            <input type="text" class="form-control" id="firstnameInput" name="hmisi_title" value="<?php print $hmisi_title ?>">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="firstnameInput" class="form-label">Profile | Profile Title</label>
                                                            <input type="text" class="form-control" id="firstnameInput" name="pprofile_title" value="<?php print $pprofile_title ?>">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="firstnameInput" class="form-label">Profile | Profile Text</label>
                                                            <textarea class="form-control" id="exampleFormControlTextarea5" name="pprofile_text" rows="2"><?php print $pprofile_text ?></textarea>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="firstnameInput" class="form-label">Profile | Moto Title</label>
                                                            <input type="text" class="form-control" id="firstnameInput" name="moto_title" value="<?php print $moto_title ?>">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="firstnameInput" class="form-label">Profile | Moto Text</label>
                                                            <textarea class="form-control" id="exampleFormControlTextarea5" name="moto_text" rows="2"><?php print $moto_text ?></textarea>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="firstnameInput" class="form-label">Profile | Visi & Misi Title</label>
                                                            <input type="text" class="form-control" id="firstnameInput" name="vimi_title" value="<?php print $vimi_title ?>">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="firstnameInput" class="form-label">Profile | Visi & Misi Text</label>
                                                            <textarea class="form-control" id="exampleFormControlTextarea5" name="vimi_text" rows="2"><?php print $vimi_text ?></textarea>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="firstnameInput" class="form-label">Forum | Forum Title</label>
                                                            <input type="text" class="form-control" id="firstnameInput" name="title_forum" value="<?php print $title_forum ?>">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="firstnameInput" class="form-label">Forum | Forum Text</label>
                                                            <textarea class="form-control" id="exampleFormControlTextarea5" name="text_forum" rows="2"><?php print $text_forum ?></textarea>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="firstnameInput" class="form-label">Info | Alumni Title</label>
                                                            <input type="text" class="form-control" id="firstnameInput" name="alumni_title" value="<?php print $alumni_title ?>">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="firstnameInput" class="form-label">Info | Event Title</label>
                                                            <input type="text" class="form-control" id="firstnameInput" name="event_title" value="<?php print $event_title ?>">
                                                        </div>
                                                    </div>

                                                    <!--end col-->

                                                    <!--end col-->
                                                    <div class="col-lg-12">
                                                        <div class="hstack gap-2 justify-content-end">
                                                            <button type="submit" name="save" class="btn btn-primary">Update Titles</button>
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
