<?php 
session_start();
include "auth.php"; 
?>
<!DOCTYPE html>
<html lang="en">

<?php include "head.php"; ?>

<body class="layout-1" data-luno="theme-blue">
  <!-- start: sidebar -->
  <?php include "sidebar.php"; ?>
  <!-- start: body area -->
  <div class="wrapper">
    <!-- start: page header -->
    <?php include "header.php"; ?>
    <!-- start: page toolbar -->
    <div class="page-toolbar px-xl-4 px-sm-2 px-0 py-3">
      <div class="container-fluid">
        <div class="row g-3 mb-3 align-items-center">
          <div class="col">
            <ol class="breadcrumb bg-transparent mb-0">
              <li class="breadcrumb-item"><a class="text-secondary" href="index.php">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Add Blog</li>
            </ol>
          </div>
        </div> <!-- .row end -->
        <div class="row align-items-center">
          <div class="col-auto">
            <h1 class="fs-5 color-900 mt-1 mb-0">Welcome back, Allie!</h1>
            <small class="text-muted">You have 12 new messages and 7 new notifications.</small>
          </div>
          <div class="col d-flex justify-content-lg-end mt-2 mt-md-0">
            <div class="p-2 me-md-3">
              <div><span class="h6 mb-0">8.18K</span> <small class="text-secondary"><i class="fa fa-angle-up"></i> 1.3%</small></div>
              <small class="text-muted text-uppercase">Income</small>
            </div>
            <div class="p-2 me-md-3">
              <div><span class="h6 mb-0">1.11K</span> <small class="text-secondary"><i class="fa fa-angle-up"></i> 4.1%</small></div>
              <small class="text-muted text-uppercase">Expense</small>
            </div>
            <div class="p-2 pe-lg-0">
              <div><span class="h6 mb-0">3.66K</span> <small class="text-danger"><i class="fa fa-angle-down"></i> 7.5%</small></div>
              <small class="text-muted text-uppercase">Revenue</small>
            </div>
          </div>
        </div> <!-- .row end -->
      </div>
    </div>
    <!-- start: page body -->
    <div class="page-body blog-app px-xl-4 px-sm-2 px-0 py-lg-2 py-1 mt-3">
      <div class="container-fluid">
        <div class="card">
          <div class="card-header">
            <h6 class="card-title mb-0">New blog post</h6>
            <div class="dropdown morphing scale-left">
              <a href="#" class="card-fullscreen" data-bs-toggle="tooltip" title="Card Full-Screen"><i class="icon-size-fullscreen"></i></a>
              <a href="#" class="more-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
              <ul class="dropdown-menu shadow border-0 p-2">
                <li><a class="dropdown-item" href="#">File Info</a></li>
                <li><a class="dropdown-item" href="#">Copy to</a></li>
                <li><a class="dropdown-item" href="#">Move to</a></li>
                <li><a class="dropdown-item" href="#">Rename</a></li>
                <li><a class="dropdown-item" href="#">Block</a></li>
                <li><a class="dropdown-item" href="#">Delete</a></li>
              </ul>
            </div>
          </div>
          <form method="post" enctype="multipart/form-data">
            <div class="card-body">

              <?php
              if(!empty($_SESSION['successmessage'])){
                $message = $_SESSION['successmessage'];
              ?>
              <div role="alert" class="alert alert-success"><?= $message; ?></div>
              <?php 
              unset($_SESSION['successmessage']);
              }else if(!empty($_SESSION['errormessage'])){
                $message = $_SESSION['errormessage'];
              ?>
              <div role="alert" class="alert alert-danger"><?= $message; ?></div>
              <?php 
              unset($_SESSION['errormessage']);
                }
              ?>

            <div class="row g-3 mb-3">
              <label class="col-xl-3 col-sm-4 col-form-label">Blog Title *</label>
              <div class="col-xl-9 col-sm-8">
                <input type="text" name="title" class="form-control form-control-lg" placeholder="Blog Title">
              </div>
            </div>
            <!-- <div class="row g-3 mb-3">
              <label class="col-xl-3 col-sm-4 col-form-label">Type</label>
              <div class="col-xl-9 col-sm-8">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="typeText" value="Type1">
                  <label class="form-check-label" for="typeText">Text</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="typeImage" value="Type2">
                  <label class="form-check-label" for="typeImage">Image</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="typeAudio" value="Type3">
                  <label class="form-check-label" for="typeAudio">Audio</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="typeVideo" value="Type4">
                  <label class="form-check-label" for="typeVideo">Video</label>
                </div>
              </div>
            </div> -->
            <div class="row g-3 mb-3">
              <label class="col-xl-3 col-sm-4 col-form-label">Select Category *</label>
              <div class="col-xl-9 col-sm-8">
                <select class="form-select form-select-lg" name="category" aria-label="Default select example">
                  <option selected>Open this select menu</option>
                  <option value="Millennium Group">Millennium Group</option>
                  <option value="Millennium Finance">Millennium Finance</option>
                  <option value="Millennium Trade Solutions">Millennium Trade Solutions</option>
                  <option value="Millennium Conceirge">Millennium Conceirge</option>
                  <option value="Maestro Atelier">Maestro Atelier</option>
                  <option value="Millennium Couture">Millennium Couture</option>
                  <option value="Millennium Farms">Millennium Farms</option>
                  <option value="Millennium Technologies">Millennium Technologies</option>
                  <option value="Millennium Entertainment">Millennium Entertainment</option>
                  <option value="Muna Real Estate">Muna Real Estate</option>
                </select>
              </div>
            </div>
            <div class="row g-3 mb-3">
              <label class="col-xl-3 col-sm-4 col-form-label">Tag</label>
              <div class="col-xl-9 col-sm-8">
                <input type="text" name="tag" class="form-control form-control-lg" data-role="tagsinput" value="News,Blog,Event">
              </div>
            </div>
            <div class="row g-3 mb-3">
              <label class="col-xl-3 col-sm-4 col-form-label">Content</label>
              <div class="col-xl-9 col-sm-8">
                <textarea name="content" class="form-control form-control-lg" id="" cols="30" rows="10"></textarea>
              </div>
            </div>
            <div class="row g-3 mb-3">
              <label class="col-xl-3 col-sm-4 col-form-label">Image</label>
              <div class="col-xl-9 col-sm-8">
                <div class="small text-muted">Note: <small>Image size should be 1024x640 with JPG file format.</small></div>
                <input type="file" name="image" class="dropify">
              </div>
            </div>
            <div class="row g-3 mb-3">
              <label class="col-xl-3 col-sm-4 col-form-label"></label>
              <div class="col-xl-9 col-sm-8">
                <button type="button" class="btn btn-secondary">Discard</button>
                <button type="submit" name="submit" class="btn btn-primary">Publish</button>
              </div>
            </div>
          </div>
          </form>
        </div>
      </div>
    </div>
    <?php include 'footer.php'; ?>
  </div>
  
  <?php include "scripts.php"; ?>
</body>


</html>
<?php
if(isset($_POST['submit'])){
  $_SESSION['errorMessage']= "";
  $_SESSION['successMessage']= "";

$title=mysqli_real_escape_string($link,$_POST['title']);
$category=mysqli_real_escape_string($link,$_POST['category']);
$tag=mysqli_real_escape_string($link,$_POST['tag']);
$content=mysqli_real_escape_string($link,$_POST['content']);
  $file_name = $_FILES['image']['name'];
  $file_size = $_FILES['image']['size'];
  $file_tmp = $_FILES['image']['tmp_name'];
  $file_type = $_FILES['image']['type'];
  $file_name_parts = explode('.', $_FILES['image']['name']);
  $file_ext = strtolower(end($file_name_parts));
  $new_image_name = md5($file_name).".".$file_ext;

  $extensions= array("jpeg","jpg","png");
  
  if(in_array($file_ext,$extensions)=== false){
    $_SESSION['errorMessage'] ="Image type not allowed, please choose a JPEG or PNG file.";
  }
  
  if($file_size > 2097152) {
    $_SESSION['errorMessage']='File size must be less than 2 MB';
  }
  
  if($_SESSION['errorMessage'] === "") {
    $insert = mysqli_query($link, "INSERT INTO blog (create_time, title, category, tag, content, image) VALUES (NOW(), '$title', '$category', '$tag', '$content', '$new_image_name')")or die(mysqli_error($link));

if($insert){
  move_uploaded_file($file_tmp,"assets/images/blog/".$new_image_name);
  $_SESSION['successmessage'] = "Blog Post Added Successfully";
  echo "<script>window.open('app-blog.php','_self');</script>";
}else{
  $_SESSION['errormessage'] = "Error Adding Blog Post";
  echo "<script>window.open('app-blog.php', '_self');</script>";
}
  }else{
    $_SESSION['errorMessage'] = "An error occurred";
  }


}
?>