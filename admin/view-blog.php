<?php 
include "auth.php";
$que=mysqli_query($link, "SELECT * from blog order by id DESC");
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
              <li class="breadcrumb-item"><a class="text-secondary" href="app-blog.php">Blog</a></li>
              <li class="breadcrumb-item active" aria-current="page">View Blog</li>
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
        <!-- Blog: Latest posts -->
  <div class="blog-posts py-5">
    <div class="container">
      <div class="row g-4">
        <div class="col-xl-8 col-lg-8 col-md-12">
          <div class="text-uppercase mb-3 pb-2 border-bottom"><strong>Latest</strong> posts</div>
          <?php 
          while ($blog=mysqli_fetch_assoc($que)){
            ?>
          
          <div class="card bg-transparent border-0 mb-xl-5 mb-4">
            <div class="row g-0 align-items-center">
              <div class="col-xl-4 col-lg-4 col-md-4">
                <img src="assets/images/blog/<?= $blog['image']; ?>" class="img-fluid rounded" alt="...">
              </div>
              <div class="col-xl-7 col-lg-8 col-md-8">
                <div class="ps-0 ps-md-4 pt-2 pt-md-0">
                  <div class="mb-2"><a class="small fw-bold text-info text-uppercase" href="#"><?=  $blog['tag']; ?></a></div>
                  <a href="#" class="h4 d-flex mb-md-3 mb-2 color-600"><?=  $blog['title']; ?></a>
                  <div class="small text-muted text-uppercase">
                    <span class="post-on"><?= date_format(date_create($blog['create_time']),"d F Y"); ?></span>
                    <!-- <span class="mx-2 time-reading has-dot">45 mins read</span>
                    <span class="post-by has-dot">2k views</span> -->
                    <span class="post-by has-dot">| <?= $blog['category']; ?></span>
                    <div>
                        <a href="delete-blog.php?id=<?= $blog['id']; ?>"><button class="fa fa-trash text-danger btn"></button></a>
                        <a href="edit-blog.php?id=<?= $blog['id']; ?>"><button class="fa fa-edit text-success btn"></button></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php } ?>
          <nav class="mt-3">
            <ul class="pagination">
              <li class="page-item">
                <span class="page-link">Previous</span>
              </li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item active" aria-current="page">
                <span class="page-link">2</span>
              </li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link" href="#">Next</a>
              </li>
            </ul>
          </nav>
        </div>
     </div> <!-- .row end -->
    </div>
  </div>
    <?php include "footer.php"; ?>   
    </div>
  </div>
 <?php include "scripts.php"; ?>
</body>

</html>