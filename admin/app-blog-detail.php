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
        <!-- Blog: banner -->
        <div class="blog-banner py-4">
          <div class="container">
            <div class="row g-xl-4 g-3 row-deck">
              <div class="col-12">
                <div class="card overflow-hidden">
                  <div class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators justify-content-start">
                      <button type="button" data-bs-target="#blog_slider" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#blog_slider" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#blog_slider" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                      <div class="thumb-overlay carousel-item active" style="height: 500px;">
                        <img src="assets/img/gallery/1.jpg" class="d-block w-100" alt="...">
                        <div class="content-overlay carousel-caption d-none d-md-block text-start">
                          <span class="bg-primary text-light px-1 small text-uppercase rounded mb-3 d-inline-flex">Design</span>
                          <a href="app-blog-detail.html" class="h3 d-flex text-white">Beachmaster Elephant Seal Fights off Rival Male, The match is uncompromising</a>
                          <span class="text-muted">20 minutes ago</span>
                          <span class="text-muted px-3">|</span>
                          <span class="text-muted">3k Views</span>
                        </div>
                      </div>
                      <div class="thumb-overlay carousel-item" style="height: 500px;">
                        <img src="assets/img/gallery/2.jpg" class="d-block w-100" alt="...">
                        <div class="content-overlay carousel-caption d-none d-md-block text-start">
                          <span class="bg-danger text-light px-1 small text-uppercase rounded mb-3 d-inline-flex">Angular</span>
                          <a href="app-blog-detail.html" class="h3 d-flex text-white">This genius photo experiment shows we are all just sheeple in the consumer matrix</a>
                          <span class="text-muted">30 minutes ago</span>
                          <span class="text-muted px-3">|</span>
                          <span class="text-muted">8k Views</span>
                        </div>
                      </div>
                      <div class="thumb-overlay carousel-item" style="height: 500px;">
                        <img src="assets/img/gallery/3.jpg" class="d-block w-100" alt="...">
                        <div class="content-overlay carousel-caption d-none d-md-block text-start">
                          <span class="bg-secondary text-light px-1 small text-uppercase rounded mb-3 d-inline-flex">Marketing</span>
                          <a href="app-blog-detail.html" class="h3 d-flex text-white">Beachmaster Elephant Seal Fights off Rival Male, The match is uncompromising</a>
                          <span class="text-muted">45 minutes ago</span>
                          <span class="text-muted px-3">|</span>
                          <span class="text-muted">53k Views</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div> <!-- .row end -->
          </div>
        </div>
        <!-- Blog: Latest posts -->
        <div class="blog-posts py-5">
          <div class="container">
            <div class="row g-4">
              <div class="col-xl-8 col-lg-8 col-md-12">
                <div class="blog-detail-text me-xl-5">
                  <h4 class="mb-3 fw-normal">Winners are recognized for outstanding app design, innovation, ingenuity, and technical achievement</h4>
                  <p class="lead mb-5">Get Uniquely crafted Landing pages for <a class="luno-link dotted" href="#"><span data-content="15+ business niche">15+ business niche</span></a>, which covers almost all the major <a class="luno-link text_bg2" href="#">business</a> niche requirements. Single purchase of the <a class="luno-link fw-bold double" href="#"><span data-content="LUNO admin dashboard">LUNO admin dashboard</span></a> license gives access to all this beautiful landing pages.</p>
                  <div class="alert alert-success" role="alert">
                    <h4 class="alert-heading">Well done!</h4>
                    <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
                    <hr>
                    <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
                  </div>
                  <p class="lead mb-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                  <p class="lead mb-5">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                  <h3>The Guitar Legends</h3>
                  <p class="lead mb-3">On top of that, all the <a class="luno-link line-through" href="#"><span data-content="landing pages">landing pages</span></a> has different theme and <a class="luno-link dashed" href="#"><span data-content="color options">color options</span></a>, gives you freedom to adjust the design suitable to your brand.</p>
                  <ul>
                    <li class="fs-6 py-1">Lorem Ipsum has been the industry's standard dummy</li>
                    <li class="fs-6 py-1">Many desktop publishing packages and web page editors now use Lorem</li>
                    <li class="fs-6 py-1">If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything</li>
                    <li class="fs-6 py-1">Contrary to popular belief, Lorem Ipsum is not simply random text.</li>
                    <li class="fs-6 py-1">Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia</li>
                  </ul>
                  <p class="lead mb-5">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop.</p>
                  <p class="lead mb-5">Create beautiful apps faster with <a class="luno-link text_bg" href="https://www.wrraptheme.com/templates/documentation/w-cards.html">LUNO widgets collection</a> of Card’s, Small card, Card List, Chart widget and Table option &amp; more...</p>
                  <h3>Apple Design Award Winners: Apps</h3>
                  <p class="lead mb-0">“Every year, app and game developers demonstrate exceptional craftsmanship and we’re honoring the best of the best,” said Ron Okamoto, Apple’s vice president of Worldwide Developer Relations. “Receiving an Apple Design Award is a special and laudable accomplishment. Past honorees have made some of the most noteworthy apps and games of all time. Through their vision, determination, and exacting standards, the winning developers inspire not only their peers in the Apple developer community, but all of us at Apple, too.”</p>
                </div>
                <div class="card author-detail mt-5">
                  <div class="card-body d-flex">
                    <div class="flex-shrink-0">
                      <img class="w120 rounded-circle" src="assets/img/profile_av.png" alt="...">
                    </div>
                    <div class="flex-grow-1 ms-lg-5 ms-4">
                      <h4 class="mb-1"><a href="page-profile.html" title="">Allie Grater</a></h4>
                      <span class="text-muted">Sr. UX Designer</span>
                      <p class="fs-6 mt-3">At 29 years old, my favorite compliment is being told that I look like my mom. Seeing myself in her image, like this daughter up top, makes me so proud of how far I’ve come, and so thankful for where I come from.</p>
                      <ul class="social mb-0 list-inline mt-3">
                        <li class="list-inline-item"><a href="#" class="p-2"><i class="fa fa-facebook-f"></i></a></li>
                        <li class="list-inline-item"><a href="#" class="p-2"><i class="fa fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="#" class="p-2"><i class="fa fa-instagram"></i></a></li>
                        <li class="list-inline-item"><a href="#" class="p-2"><i class="fa fa-linkedin"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="user-comment mt-3">
                  <div class="py-2">
                    <a class="me-lg-4 me-2 text-primary" href="#"><i class="fa fa-thumbs-up"></i> Like (105)</a>
                    <a class="me-lg-4 me-2 text-primary" href="#"><i class="fa fa-comment"></i> Comment (2)</a>
                    <a class="me-lg-4 me-2 text-primary" href="#"><i class="fa fa-share"></i> Share (6)</a>
                  </div>
                  <div>
                    <div class="d-flex mt-3 pt-3 border-top">
                      <img class="avatar rounded-circle" src="assets/img/xs/avatar2.jpg" alt="">
                      <div class="flex-fill ms-3">
                        <p class="lead mb-0">Rose Rivera</p>
                        <p class="text-muted small">Nov 23, 2021 at 12:23 pm</p>
                        <span>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</span>
                      </div>
                    </div>
                    <div class="d-flex mt-3 pt-3 border-top">
                      <img class="avatar rounded-circle" src="assets/img/xs/avatar3.jpg" alt="">
                      <div class="flex-fill ms-3">
                        <p class="lead mb-0">Robert Hammer</p>
                        <p class="text-muted small">Nov 24, 2021 at 11:38 pm</p>
                        <span>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-comment mt-5">
                  <div class="row g-2">
                    <div class="col-12">
                      <h3>Post a comment</h3>
                      <span class="text-muted">Your email address will not be published. Required fields are marked *</span>
                    </div>
                    <div class="col-md-4 col-12">
                      <div class="form-floating">
                        <input type="text" class="form-control" placeholder="Your Name">
                        <label>Your Name</label>
                      </div>
                    </div>
                    <div class="col-md-4 col-12">
                      <div class="form-floating">
                        <input type="email" class="form-control" placeholder="Your Email">
                        <label>Your Email</label>
                      </div>
                    </div>
                    <div class="col-md-4 col-12">
                      <div class="form-floating">
                        <input type="url" class="form-control" placeholder="Your Website">
                        <label>Your Website</label>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here" style="height: 100px"></textarea>
                        <label>Leave a comment here</label>
                      </div>
                    </div>
                    <div class="col-lg-12 py-3">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault"> Save my name, email, and website in this browser for the next time I comment. </label>
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <button class="btn btn-lg btn-primary">Post Comment</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-lg-4 col-md-12">
                <div class="text-uppercase mb-3 pb-2 border-bottom">About <strong>Me</strong></div>
                <div class="card bg-transparent border-0 mb-xl-4 mb-3">
                  <div class="d-flex align-items-start mb-3">
                    <div class="me-3">
                      <img class="rounded img-thumbnail" src="assets/img/xs/avatar1.jpg" alt="avatar lg" title="">
                    </div>
                    <div class="media-body">
                      <h5 class="mb-1"><a href="page-profile.html" title="">Allie Grater</a></h5>
                      <span class="text-muted">Author</span>
                      <div>
                        <a class="pe-3" target="_blank" href="#"><i class="fa fa-facebook"></i></a>
                        <a class="pe-3" target="_blank" href="#"><i class="fa fa-linkedin"></i></a>
                        <a class="pe-3" target="_blank" href="#"><i class="fa fa-twitter"></i></a>
                      </div>
                    </div>
                  </div>
                  <div>
                    <p>The functional aspect comes first in the work process because it's the core of the object: What is its purpose? something else?</p>
                    <a href="#" class="btn btn-lg btn-danger">Connect With Me</a>
                  </div>
                </div>
                <div class="mb-4 rounded-4 overflow-hidden">
                  <img src="assets/img/ads-01.jpg" alt="" class="img-fluid" />
                </div>
                <div class="text-uppercase mb-3 pb-2 border-bottom"><strong>Cate</strong>gories</div>
                <div class="card bg-transparent border-0 mb-xl-4 mb-3">
                  <div class="d-flex flex-wrap tag-group">
                    <a href="#" class="m-1 small tag py-1 px-3 border border-primary rounded lift">Family</a>
                    <a href="#" class="m-1 small tag py-1 px-3 border border-primary rounded lift">Home</a>
                    <a href="#" class="m-1 small tag py-1 px-3 border border-primary rounded lift bg-primary text-light">UI/UX Designer</a>
                    <a href="#" class="m-1 small tag py-1 px-3 border border-primary rounded lift">ReactJs</a>
                    <a href="#" class="m-1 small tag py-1 px-3 border border-primary rounded lift">Angular</a>
                  </div>
                </div>
                <div class="text-uppercase mb-3 pb-2 border-bottom"><strong>Insta</strong>gram</div>
                <div class="card bg-transparent border-0 mb-xl-4 mb-3">
                  <div class="row g-1">
                    <div class="col-4">
                      <a class="fancybox rounded d-block" rel="ligthbox" href="assets/img/gallery/1.jpg">
                        <img class="img-fluid rounded" alt="" src="assets/img/gallery/1.jpg" />
                      </a>
                    </div>
                    <div class="col-4">
                      <a class="fancybox rounded d-block" rel="ligthbox" href="assets/img/gallery/2.jpg">
                        <img class="img-fluid rounded" alt="" src="assets/img/gallery/2.jpg" />
                      </a>
                    </div>
                    <div class="col-4">
                      <a class="fancybox rounded d-block" rel="ligthbox" href="assets/img/gallery/3.jpg">
                        <img class="img-fluid rounded" alt="" src="assets/img/gallery/3.jpg" />
                      </a>
                    </div>
                    <div class="col-4">
                      <a class="fancybox rounded d-block" rel="ligthbox" href="assets/img/gallery/4.jpg">
                        <img class="img-fluid rounded" alt="" src="assets/img/gallery/4.jpg" />
                      </a>
                    </div>
                    <div class="col-4">
                      <a class="fancybox rounded d-block" rel="ligthbox" href="assets/img/gallery/5.jpg">
                        <img class="img-fluid rounded" alt="" src="assets/img/gallery/5.jpg" />
                      </a>
                    </div>
                    <div class="col-4">
                      <a class="fancybox rounded d-block" rel="ligthbox" href="assets/img/gallery/6.jpg">
                        <img class="img-fluid rounded" alt="" src="assets/img/gallery/6.jpg" />
                      </a>
                    </div>
                    <div class="col-4">
                      <a class="fancybox rounded d-block" rel="ligthbox" href="assets/img/gallery/7.jpg">
                        <img class="img-fluid rounded" alt="" src="assets/img/gallery/7.jpg" />
                      </a>
                    </div>
                    <div class="col-4">
                      <a class="fancybox rounded d-block" rel="ligthbox" href="assets/img/gallery/8.jpg">
                        <img class="img-fluid rounded" alt="" src="assets/img/gallery/8.jpg" />
                      </a>
                    </div>
                    <div class="col-4">
                      <a class="fancybox rounded d-block" rel="ligthbox" href="assets/img/gallery/9.jpg">
                        <img class="img-fluid rounded" alt="" src="assets/img/gallery/9.jpg" />
                      </a>
                    </div>
                  </div>
                </div>
                <!-- Plugin Js -->
                <script src="assets/js/bundle/fancybox.bundle.js"></script>
                <!-- Jquery Page Js -->
                <script>
                  /*	end gallery */
                  $(document).ready(function() {
                    $(".fancybox").fancybox({
                      openEffect: "none",
                      closeEffect: "none"
                    });
                  });
                </script>
              </div>
            </div> <!-- .row end -->
          </div>
        </div>
        <!-- Blog: Trending Topics -->
        <div class="blog-topics py-5 bg-dark mb-5 border-bottom border-secondary border-3">
          <div class="container">
            <div class="row mb-3">
              <div class="col-6">
                <h5 class="mb-0 color-400">Trending Topics</h5>
              </div>
              <div class="col-6 text-end">
                <a class="" href="#">See All Topics</a>
              </div>
            </div>
            <div class="row row-cols-xxl-6 cols-xl-3 row-cols-lg-3 row-cols-md-3 row-cols-sm-2 row-cols-2 g-1 row-deck">
              <div class="col">
                <a href="#" class="card thumb-overlay text-center overflow-hidden lift">
                  <img class="card-img" src="assets/img/gallery/1.jpg" alt="img hover">
                  <div class="card-img-overlay content-overlay d-flex align-items-end justify-content-center">
                    <h6 class="mb-0 text-white">Sports & Fitness</h6>
                  </div>
                </a>
              </div>
              <div class="col">
                <a href="#" class="card thumb-overlay text-center overflow-hidden lift">
                  <img class="card-img" src="assets/img/gallery/2.jpg" alt="img hover">
                  <div class="card-img-overlay content-overlay d-flex align-items-end justify-content-center">
                    <h6 class="mb-0 text-white">Travel</h6>
                  </div>
                </a>
              </div>
              <div class="col">
                <a href="#" class="card thumb-overlay text-center overflow-hidden lift">
                  <img class="card-img" src="assets/img/gallery/3.jpg" alt="img hover">
                  <div class="card-img-overlay content-overlay d-flex align-items-end justify-content-center">
                    <h6 class="mb-0 text-white">lifestyle</h6>
                  </div>
                </a>
              </div>
              <div class="col">
                <a href="#" class="card thumb-overlay text-center overflow-hidden lift">
                  <img class="card-img" src="assets/img/gallery/4.jpg" alt="img hover">
                  <div class="card-img-overlay content-overlay d-flex align-items-end justify-content-center">
                    <h6 class="mb-0 text-white">Health</h6>
                  </div>
                </a>
              </div>
              <div class="col">
                <a href="#" class="card thumb-overlay text-center overflow-hidden lift">
                  <img class="card-img" src="assets/img/gallery/5.jpg" alt="img hover">
                  <div class="card-img-overlay content-overlay d-flex align-items-end justify-content-center">
                    <h6 class="mb-0 text-white">Animals</h6>
                  </div>
                </a>
              </div>
              <div class="col">
                <a href="#" class="card thumb-overlay text-center overflow-hidden lift">
                  <img class="card-img" src="assets/img/gallery/6.jpg" alt="img hover">
                  <div class="card-img-overlay content-overlay d-flex align-items-end justify-content-center">
                    <h6 class="mb-0 text-white">Food & Drink</h6>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
        <!-- Section: Footer -->
        <div class="section footer">
          <div class="container">
            <div class="row g-3 mb-4">
              <div class="col-lg-4 col-md-6 col-12">
                <h3 class="mb-1 fw-bold color-900">LUNO</h3>
                <p>Start building your creative website with our awesome template Massive.</p>
                <ul class="mt-3 fs-6 lh-lg">
                  <li><span>Address:</span> 555 Wall Street, NY, USA</li>
                  <li><span>Email:</span> example@ttm.com</li>
                  <li><span>Call:</span> 123-456-1818</li>
                </ul>
              </div>
              <div class="col-lg-8 col-12">
                <div class="row g-3">
                  <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <h5 class="mb-4 color-900">Company</h5>
                    <ul class="lh-lg">
                      <li><a class="color-600" target="_blank" href="index.html">Dashboard</a></li>
                      <li><a class="color-600" target="_blank" href="https://www.thememakker.com/about/">About Us</a></li>
                      <li><a class="color-600" target="_blank" href="https://www.thememakker.com/services/">Services</a></li>
                      <li><a class="color-600" target="_blank" href="https://www.thememakker.com/hire-us/">Hire us</a></li>
                      <li><a class="color-600" target="_blank" href="https://www.thememakker.com/all-templates/">Templates</a></li>
                      <li><a class="color-600" target="_blank" href="https://www.thememakker.com/licenses/">licenses</a></li>
                    </ul>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <h5 class="mb-4 color-900">Admin</h5>
                    <ul class="lh-lg">
                      <li><a class="color-600" href="crypto/index.html">Cryptocurrency</a></li>
                      <li><a class="color-600" href="fitness/index.html">Fitness Analytics</a></li>
                      <li><a class="color-600" href="hospital/index.html">Hospital Management</a></li>
                      <li><a class="color-600" href="hrms/index.html">HR & Project</a></li>
                      <li><a class="color-600" href="restaurant/index.html">Restaurant & Cafe</a></li>
                      <li><a class="color-600" href="university/index.html">School / University</a></li>
                    </ul>
                  </div>
                  <div class="col-lg-4 col-md-12 col-12">
                    <h5 class="mb-4 color-900">Join Our Newsletter</h5>
                    <p class="text-muted">Subscribe to get the latest jobs posted, candidates...</p>
                    <form>
                      <div class="form-floating mb-1">
                        <input type="email" class="form-control rounded" placeholder="name@example.com">
                        <label>Enter email address</label>
                      </div>
                      <button type="button" class="btn btn-block btn-primary">Subscribe Now!</button>
                    </form>
                  </div>
                </div>
              </div>
            </div> <!-- .row end -->
            <div class="row g-3 border-top pt-3">
              <div class="col-lg-6 col-md-12 text-center text-lg-start">
                <span>© 2023 <a href="https://www.thememakker.com/" rel="nofollow" target="_blank">ThemeMakker</a>. All Rights Reserved.</span>
              </div>
              <div class="col-lg-6 col-md-12 text-center text-lg-end">
                <ul class="list-unstyled d-flex justify-content-center justify-content-lg-end mb-0">
                  <li><a class="p-2 ms-2" href="#">Facebook</a></li>
                  <li><a class="p-2 ms-2" href="#">Dribbble</a></li>
                  <li><a class="p-2 ms-2" href="#">Twitter</a></li>
                </ul>
              </div>
            </div> <!-- .row end -->
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal: Create project -->
  <div class="modal fade" id="CreateNew" tabindex="-1">
    <div class="modal-dialog modal-dialog-vertical modal-dialog-scrollable">
      <div class="modal-content rounded-0">
        <div class="modal-header">
          <h5 class="modal-title">Setup new project</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="progress bg-transparent" style="height: 3px;">
          <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="1" aria-valuemin="1" aria-valuemax="5" style="width: 20%;"></div>
        </div>
        <div class="modal-body custom_scroll">
          <ul class="nav nav-tabs tab-card border-0 fs-6" role="tablist">
            <li class="nav-item flex-fill text-center"><a class="nav-link active" href="#step1" data-bs-toggle="tab" data-bs-step="1">1. Project</a></li>
            <li class="nav-item flex-fill text-center"><a class="nav-link" href="#step2" data-bs-toggle="tab" data-bs-step="3">2. Team</a></li>
            <li class="nav-item flex-fill text-center"><a class="nav-link" href="#step3" data-bs-toggle="tab" data-bs-step="4">3. File</a></li>
            <li class="nav-item flex-fill text-center"><a class="nav-link" href="#step4" data-bs-toggle="tab" data-bs-step="5">4. Completed</a></li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane fade show active" id="step1">
              <div class="card mb-2">
                <div class="card-body">
                  <h6 class="card-title mb-1">Project Type</h6>
                  <p class="text-muted small">If you need more info, please check out <a href="#">FAQ Page</a></p>
                  <!-- Custome redio input -->
                  <div class="c_radio d-flex flex-md-wrap">
                    <label class="m-1 w-100" for="Personal">
                      <input type="radio" name="plan" id="Personal" checked />
                      <span class="card">
                        <span class="card-body d-flex p-3">
                          <svg class="avatar" viewBox="0 0 16 16">
                            <path class="fill-muted" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                          </svg>
                          <span class="ms-3">
                            <span class="h6 d-flex mb-1">Personal Project</span>
                            <span class="text-muted">For smaller business, with simple salaries and pay schedules.</span>
                          </span>
                        </span>
                      </span>
                    </label>
                    <label class="m-1 w-100" for="Team">
                      <input type="radio" name="plan" id="Team" />
                      <span class="card">
                        <span class="card-body d-flex p-3">
                          <svg class="avatar" viewBox="0 0 16 16">
                            <path class="fill-muted" d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                            <path class="fill-muted" fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z" />
                            <path class="fill-muted" d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z" />
                          </svg>
                          <span class="ms-3">
                            <span class="h6 d-flex mb-1">Team Project</span>
                            <span class="text-muted">For growing business who wants to create a rewarding place to work.</span>
                          </span>
                        </span>
                      </span>
                    </label>
                  </div>
                </div>
              </div>
              <div class="card mb-2">
                <div class="card-body">
                  <h6 class="card-title mb-1">Project Details</h6>
                  <p class="text-muted small">It is a long established fact that a reader will be distracted by Luno.</p>
                  <div class="form-floating mb-2">
                    <select class="form-select">
                      <option selected>Open this select menu</option>
                      <option value="1">Lucid</option>
                      <option value="2">LUNO</option>
                      <option value="3">Luno</option>
                    </select>
                    <label>Choose a Customer *</label>
                  </div>
                  <div class="form-floating mb-2">
                    <input type="text" class="form-control" placeholder="Project name">
                    <label>Project name *</label>
                  </div>
                  <div class="form-floating mb-2">
                    <textarea class="form-control" placeholder="Add project details" style="height: 100px"></textarea>
                    <label>Add project details</label>
                  </div>
                  <div class="form-floating mb-2">
                    <input type="date" class="form-control">
                    <label>Enter release Date *</label>
                  </div>
                  <div class="d-flex justify-content-between">
                    <div class="text-muted">Allow Notifications *</div>
                    <div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="allow_phone" value="option1">
                        <label class="form-check-label" for="allow_phone">Phone</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="allow_email" value="option2">
                        <label class="form-check-label" for="allow_email">Email</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="text-center">
                <button class="btn btn-lg bg-secondary text-light next text-uppercase">Add People</button>
              </div>
            </div>
            <div class="tab-pane fade" id="step2">
              <div class="card mb-3">
                <div class="card-body">
                  <h6 class="card-title mb-1">Build a Team</h6>
                  <p class="text-muted small">If you need more info, please check out <a href="#">Project Guidelines</a></p>
                  <div class="form-floating mb-4">
                    <input type="text" class="form-control" placeholder="Invite Teammates">
                    <label>Invite Teammates</label>
                  </div>
                  <h6 class="card-title mb-1">Team Members</h6>
                  <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="list-group6" checked="">
                    <label class="form-check-label text-muted" for="list-group6">Adding Users by Team Members</label>
                  </div>
                </div>
                <ul class="list-group list-group-flush list-group-custom custom_scroll mb-0" style="height: 300px;">
                  <li class="list-group-item d-flex align-items-center">
                    <img class="avatar rounded" src="assets/img/xs/avatar1.jpg" alt="">
                    <div class="flex-fill ms-2">
                      <div class="h6 mb-0">Chris Fox</div>
                      <small class="text-muted">Angular Developer</small>
                    </div>
                    <select class="form-select rounded-pill form-select-sm w120">
                      <option value="1">Owner</option>
                      <option value="2">Can Edit</option>
                      <option value="3">Guest</option>
                    </select>
                  </li>
                  <li class="list-group-item d-flex align-items-center">
                    <img class="avatar rounded" src="assets/img/xs/avatar2.jpg" alt="">
                    <div class="flex-fill ms-2">
                      <div class="h6 mb-0">Joge Lucky</div>
                      <small class="text-muted">ReactJs Developer</small>
                    </div>
                    <select class="form-select rounded-pill form-select-sm w120">
                      <option value="1">Owner</option>
                      <option value="2">Can Edit</option>
                      <option value="3">Guest</option>
                    </select>
                  </li>
                  <li class="list-group-item d-flex align-items-center">
                    <img class="avatar rounded" src="assets/img/xs/avatar3.jpg" alt="">
                    <div class="flex-fill ms-2">
                      <div class="h6 mb-0">Chris Fox</div>
                      <small class="text-muted">NodeJs Developer</small>
                    </div>
                    <select class="form-select rounded-pill form-select-sm w120">
                      <option value="1">Owner</option>
                      <option value="2">Can Edit</option>
                      <option value="3">Guest</option>
                    </select>
                  </li>
                  <li class="list-group-item d-flex align-items-center">
                    <img class="avatar rounded" src="assets/img/xs/avatar4.jpg" alt="">
                    <div class="flex-fill ms-2">
                      <div class="h6 mb-0">Chris Fox</div>
                      <small class="text-muted">Sr. Designer</small>
                    </div>
                    <select class="form-select rounded-pill form-select-sm w120">
                      <option value="1">Owner</option>
                      <option value="2">Can Edit</option>
                      <option value="3">Guest</option>
                    </select>
                  </li>
                  <li class="list-group-item d-flex align-items-center">
                    <img class="avatar rounded" src="assets/img/xs/avatar5.jpg" alt="">
                    <div class="flex-fill ms-2">
                      <div class="h6 mb-0">Chris Fox</div>
                      <small class="text-muted">Designer</small>
                    </div>
                    <select class="form-select rounded-pill form-select-sm w120">
                      <option value="1">Owner</option>
                      <option value="2">Can Edit</option>
                      <option value="3">Guest</option>
                    </select>
                  </li>
                  <li class="list-group-item d-flex align-items-center">
                    <img class="avatar rounded" src="assets/img/xs/avatar6.jpg" alt="">
                    <div class="flex-fill ms-2">
                      <div class="h6 mb-0">Chris Fox</div>
                      <small class="text-muted">Front-End Developer</small>
                    </div>
                    <select class="form-select rounded-pill form-select-sm w120">
                      <option value="1">Owner</option>
                      <option value="2">Can Edit</option>
                      <option value="3">Guest</option>
                    </select>
                  </li>
                  <li class="list-group-item d-flex align-items-center">
                    <img class="avatar rounded" src="assets/img/xs/avatar7.jpg" alt="">
                    <div class="flex-fill ms-2">
                      <div class="h6 mb-0">Chris Fox</div>
                      <small class="text-muted">QA</small>
                    </div>
                    <select class="form-select rounded-pill form-select-sm w120">
                      <option value="1">Owner</option>
                      <option value="2">Can Edit</option>
                      <option value="3">Guest</option>
                    </select>
                  </li>
                  <li class="list-group-item d-flex align-items-center">
                    <img class="avatar rounded" src="assets/img/xs/avatar8.jpg" alt="">
                    <div class="flex-fill ms-2">
                      <div class="h6 mb-0">Chris Fox</div>
                      <small class="text-muted">Laravel Developer</small>
                    </div>
                    <select class="form-select rounded-pill form-select-sm w120">
                      <option value="1">Owner</option>
                      <option value="2">Can Edit</option>
                      <option value="3">Guest</option>
                    </select>
                  </li>
                </ul>
              </div>
              <div class="text-center">
                <button class="btn btn-lg bg-secondary text-light next text-uppercase">Select Files</button>
              </div>
            </div>
            <div class="tab-pane fade" id="step3">
              <div class="card mb-3">
                <div class="card-body">
                  <h6 class="card-title mb-1">Upload Files</h6>
                  <div class="mb-4">
                    <label class="form-label small">Upload up to 10 files</label>
                    <input class="form-control" type="file" multiple>
                  </div>
                  <span>Already Uploaded File</span>
                </div>
                <ul class="list-group list-group-flush list-group-custom custom_scroll mb-0" style="height: 300px;">
                  <li class="list-group-item py-3">
                    <div class="d-flex align-items-center">
                      <div class="avatar rounded no-thumbnail"><i class="fa fa-file-pdf-o text-danger"></i></div>
                      <div class="flex-fill ms-3 text-truncate">
                        <p class="mb-0 color-800">Annual Sales Report 2018-19</p>
                        <small class="text-muted">.pdf, 5.3 MB</small>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item py-3">
                    <div class="d-flex align-items-center">
                      <div class="avatar rounded no-thumbnail"><i class="fa fa-file-excel-o text-success"></i></div>
                      <div class="flex-fill ms-3 text-truncate">
                        <p class="mb-0 color-800">Complete Product Sheet</p>
                        <small class="text-muted">.xls, 2.1 MB</small>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item py-3">
                    <div class="d-flex align-items-center">
                      <div class="avatar rounded no-thumbnail"><i class="fa fa-file-word-o text-info"></i></div>
                      <div class="flex-fill ms-3 text-truncate">
                        <p class="mb-0 color-800">Marketing Guidelines</p>
                        <small class="text-muted">.doc, 2.3 MB</small>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item py-3">
                    <div class="d-flex align-items-center">
                      <div class="avatar rounded no-thumbnail"><i class="fa fa-file-zip-o"></i></div>
                      <div class="flex-fill ms-3 text-truncate">
                        <p class="mb-0 color-800">Brand Photography</p>
                        <small class="text-muted">.zip, 30.5 MB</small>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="text-center">
                <button class="btn btn-lg bg-secondary text-light next text-uppercase">Advanced Options</button>
              </div>
            </div>
            <div class="tab-pane fade" id="step4">
              <div class="card text-center">
                <div class="card-body">
                  <h4 class="card-title mb-1">Project Created!</h4>
                  <span class="text-muted">If you need more info, please check how to create project</span>
                </div>
                <div class="card-body">
                  <button class="btn btn-lg bg-light first text-uppercase">Cretae new project</button>
                  <button class="btn btn-lg bg-secondary text-light text-uppercase">View project</button>
                </div>
                <div class="card-body">
                  <img class="img-fluid" src="assets/img/project-team.svg" alt="" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal: my notes -->
  <div class="modal fade" id="MynotesModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-vertical modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header px-4">
          <h5 class="modal-title">My Notes <span class="badge bg-danger ms-2">14</span></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="bg-light px-4 py-3">
          <ul class="nav nav-pills nav-fill" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" data-bs-toggle="tab" href="#Notetab-all" role="tab" aria-selected="true">All Notes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#Notetab-Business" role="tab" aria-selected="false">Business</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#Notetab-Social" role="tab">Social</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#Notetab-Create" role="tab"><i class="fa fa-plus me-2"></i>New</a>
            </li>
          </ul>
        </div>
        <div class="modal-body px-4 custom_scroll">
          <div class="tab-content p-0">
            <div class="tab-pane fade active show" id="Notetab-all" role="tabpanel">
              <div class="card ribbon mb-2">
                <div class="option-2 bg-primary position-absolute"></div>
                <div class="card-body">
                  <span class="text-muted">02 January 2021</span>
                  <p class="lead">Give Review for design</p>
                  <span>It has roots in a piece of classical Latin literature from 45 BC, making it over 2020 years old.</span>
                </div>
                <div class="card-footer pt-0 border-0">
                  <a class="btn btn-sm btn-outline-secondary" href="#"><i class="fa fa-star favourite-note"></i></a>
                  <a class="btn btn-sm btn-outline-secondary" href="#"><i class="fa fa-trash favourite-note"></i></a>
                </div>
              </div>
              <div class="card ribbon mb-2">
                <div class="option-2 bg-success position-absolute"></div>
                <div class="card-body">
                  <span class="text-muted">17 January 2022</span>
                  <p class="lead">Give salary to employee</p>
                  <span>The generated Lorem Ipsum is therefore always free from repetition</span>
                </div>
                <div class="card-footer pt-0 border-0">
                  <a class="btn btn-sm btn-outline-secondary" href="#"><i class="fa fa-star favourite-note"></i></a>
                  <a class="btn btn-sm btn-outline-secondary" href="#"><i class="fa fa-trash favourite-note"></i></a>
                </div>
              </div>
              <div class="card ribbon mb-2">
                <div class="option-2 bg-info position-absolute"></div>
                <div class="card-body">
                  <span class="text-muted">02 Fabruary 2020</span>
                  <p class="lead">Launch new template</p>
                  <span>Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis.</span>
                </div>
                <div class="card-footer pt-0 border-0">
                  <a class="btn btn-sm btn-outline-secondary" href="#"><i class="fa fa-star favourite-note"></i></a>
                  <a class="btn btn-sm btn-outline-secondary" href="#"><i class="fa fa-trash favourite-note"></i></a>
                </div>
              </div>
              <div class="card ribbon mb-2">
                <div class="option-2 bg-dark position-absolute"></div>
                <div class="card-body">
                  <span class="text-muted">22 August 2021</span>
                  <p class="lead">Nightout with friends</p>
                  <span>Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis.</span>
                </div>
                <div class="card-footer pt-0 border-0">
                  <a class="btn btn-sm btn-outline-secondary" href="#"><i class="fa fa-star favourite-note"></i></a>
                  <a class="btn btn-sm btn-outline-secondary" href="#"><i class="fa fa-trash favourite-note"></i></a>
                </div>
              </div>
              <div class="card ribbon mb-2">
                <div class="option-2 bg-danger position-absolute"></div>
                <div class="card-body">
                  <span class="text-muted">01 December 2021</span>
                  <p class="lead">Change a Design</p>
                  <span> It has survived not only five centuries, but also the leap into electronic</span>
                </div>
                <div class="card-footer pt-0 border-0">
                  <a class="btn btn-sm btn-outline-secondary" href="#"><i class="fa fa-star favourite-note"></i></a>
                  <a class="btn btn-sm btn-outline-secondary" href="#"><i class="fa fa-trash favourite-note"></i></a>
                </div>
              </div>
              <div class="card ribbon mb-2">
                <div class="option-2 bg-warning position-absolute"></div>
                <div class="card-body">
                  <span class="text-muted">10 December 2021</span>
                  <p class="lead">Meeting with Mr.Lee</p>
                  <span>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model</span>
                </div>
                <div class="card-footer pt-0 border-0">
                  <a class="btn btn-sm btn-outline-secondary" href="#"><i class="fa fa-star favourite-note"></i></a>
                  <a class="btn btn-sm btn-outline-secondary" href="#"><i class="fa fa-trash favourite-note"></i></a>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="Notetab-Business" role="tabpanel">
              <div class="card ribbon mb-2">
                <div class="option-2 bg-warning position-absolute"></div>
                <div class="card-body">
                  <span class="text-muted">10 December 2021</span>
                  <p class="lead">Meeting with Mr.Lee</p>
                  <span>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model</span>
                </div>
                <div class="card-footer pt-0 border-0">
                  <a class="btn btn-sm btn-outline-secondary" href="#"><i class="fa fa-star favourite-note"></i></a>
                  <a class="btn btn-sm btn-outline-secondary" href="#"><i class="fa fa-trash favourite-note"></i></a>
                </div>
              </div>
              <div class="card ribbon mb-2">
                <div class="option-2 bg-danger position-absolute"></div>
                <div class="card-body">
                  <span class="text-muted">01 December 2021</span>
                  <p class="lead">Change a Design</p>
                  <span> It has survived not only five centuries, but also the leap into electronic</span>
                </div>
                <div class="card-footer pt-0 border-0">
                  <a class="btn btn-sm btn-outline-secondary" href="#"><i class="fa fa-star favourite-note"></i></a>
                  <a class="btn btn-sm btn-outline-secondary" href="#"><i class="fa fa-trash favourite-note"></i></a>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="Notetab-Social" role="tabpanel">
              <div class="card ribbon mb-2">
                <div class="option-2 bg-dark position-absolute"></div>
                <div class="card-body">
                  <span class="text-muted">22 August 2021</span>
                  <p class="lead">Nightout with friends</p>
                  <span>Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis.</span>
                </div>
                <div class="card-footer pt-0 border-0">
                  <a class="btn btn-sm btn-outline-secondary" href="#"><i class="fa fa-star favourite-note"></i></a>
                  <a class="btn btn-sm btn-outline-secondary" href="#"><i class="fa fa-trash favourite-note"></i></a>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="Notetab-Create" role="tabpanel">
              <div class="form-floating mb-2">
                <input type="text" class="form-control" placeholder="Note Title">
                <label>Note Title</label>
              </div>
              <div class="form-floating mb-2">
                <input type="text" class="form-control datepicker" placeholder="Select Date">
                <label>Select Date</label>
              </div>
              <div class="form-floating mb-2">
                <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                  <option selected>Open this select menu</option>
                  <option value="1">Business</option>
                  <option value="2">Social</option>
                </select>
                <label>Works with selects</label>
              </div>
              <div class="form-floating mb-4">
                <textarea class="form-control" placeholder="Leave a comment here" style="height: 100px"></textarea>
                <label>Leave a comment here</label>
              </div>
              <button type="button" class="btn btn-primary lift">Save note</button>
              <button type="button" class="btn btn-white border lift" data-bs-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal: Schedule -->
  <div class="modal fade" id="ScheduleModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-vertical modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header bg-secondary rounded-0">
          <h5 class="modal-title text-light">Schedule</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body custom_scroll">
          <div class="ps-2">
            <!--Timeline item-->
            <div class="timeline-item ti-primary p-3">
              <div class="avatar sm rounded-circle no-thumbnail">
                <i class="fa fa-phone"></i>
              </div>
              <div class="timeline-content ms-3">
                <div>Call Danny at Colby's</div>
                <small class="text-muted">Today - 11:32am</small>
              </div>
            </div>
            <!--Timeline item-->
            <div class="timeline-item ti-info p-3">
              <div class="timeline-icon">
                <img class="avatar sm rounded-circle" src="assets/img/xs/avatar1.jpg" alt="">
              </div>
              <div class="timeline-content ms-3">
                <div>Meeting with Alice</div>
                <small class="text-muted">Today - 12:50pm</small>
              </div>
            </div>
            <!--Timeline item-->
            <div class="timeline-item ti-danger p-3">
              <div class="avatar sm rounded-circle no-thumbnail">
                <i class="fa fa-comment"></i>
              </div>
              <div class="timeline-content ms-3">
                <div>Answer Annie's message</div>
                <small class="text-muted">Today - 01:35pm</small>
              </div>
            </div>
            <!--Timeline item-->
            <div class="timeline-item ti-danger p-3">
              <div class="avatar sm rounded-circle no-thumbnail">
                <i class="fa fa-phone"></i>
              </div>
              <div class="timeline-content ms-3">
                <div>Send new campaign</div>
                <small class="text-muted">Today - 02:40pm</small>
              </div>
            </div>
            <!--Timeline item-->
            <div class="timeline-item ti-primary p-3">
              <div class="avatar sm rounded-circle no-thumbnail">
                <i class="fa fa-smile-o"></i>
              </div>
              <div class="timeline-content ms-3">
                <div>Project review</div>
                <small class="text-muted">Today - 03:15pm</small>
              </div>
            </div>
            <!--Timeline item-->
            <div class="timeline-item ti-warning p-3">
              <div class="avatar sm rounded-circle no-thumbnail">
                <i class="fa fa-phone"></i>
              </div>
              <div class="timeline-content ms-3">
                <div>Call Trisha Jackson</div>
                <small class="text-muted">Today - 05:40pm</small>
              </div>
            </div>
            <!--Timeline item-->
            <div class="timeline-item ti-success p-3">
              <div class="avatar sm rounded-circle no-thumbnail">
                <i class="fa fa-leaf"></i>
              </div>
              <div class="timeline-content ms-3">
                <div>Write proposal for Don</div>
                <small class="text-muted">Today - 06:30pm</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal: RecentChat -->
  <div class="modal fade" id="RecentChat" tabindex="-1">
    <div class="modal-dialog modal-dialog-vertical modal-dialog-scrollable">
      <div class="modal-content">
        <div class="d-flex align-items-start">
          <div class="nav flex-column nav-pills p-3 h-100">
            <a class="nav-link rounded-circle p-1 mb-2 active" href="javascript:void(0);" data-bs-toggle="pill" data-bs-target="#c-user-1" title="">
              <img class="avatar sm rounded-circle border" src="assets/img/xs/avatar1.jpg" alt="avatar">
            </a>
            <a class="nav-link rounded-circle p-1 mb-2" href="javascript:void(0);" data-bs-toggle="pill" data-bs-target="#c-user-2" title="">
              <img class="avatar sm rounded-circle border" src="assets/img/xs/avatar2.jpg" alt="avatar">
            </a>
            <a class="nav-link rounded-circle p-1 mb-2" href="javascript:void(0);" data-bs-toggle="pill" data-bs-target="#c-user-3" title="">
              <img class="avatar sm rounded-circle border" src="assets/img/xs/avatar3.jpg" alt="avatar">
            </a>
            <a class="nav-link rounded-circle p-1 mb-2" href="javascript:void(0);" data-bs-toggle="pill" data-bs-target="#c-user-2" title="">
              <img class="avatar sm rounded-circle border" src="assets/img/xs/avatar4.jpg" alt="avatar">
            </a>
            <a class="nav-link rounded-circle p-1 mb-2" href="javascript:void(0);" data-bs-toggle="pill" data-bs-target="#c-user-5" title="">
              <img class="avatar sm rounded-circle border" src="assets/img/xs/avatar5.jpg" alt="avatar">
            </a>
            <a class="nav-link rounded-circle p-1 mb-2" href="javascript:void(0);" data-bs-toggle="pill" data-bs-target="#c-user-1" title="">
              <img class="avatar sm rounded-circle border" src="assets/img/xs/avatar6.jpg" alt="avatar">
            </a>
            <a class="nav-link rounded-circle p-1 mb-2" href="javascript:void(0);" data-bs-toggle="pill" data-bs-target="#c-user-7" title="">
              <img class="avatar sm rounded-circle border" src="assets/img/xs/avatar7.jpg" alt="avatar">
            </a>
            <a class="nav-link rounded-circle p-1 mb-2" href="javascript:void(0);" data-bs-toggle="pill" data-bs-target="#c-user-3" title="">
              <img class="avatar sm rounded-circle border" src="assets/img/xs/avatar8.jpg" alt="avatar">
            </a>
            <a class="nav-link rounded-circle p-1 mb-2" href="javascript:void(0);" data-bs-toggle="pill" data-bs-target="#c-user-3" title="">
              <img class="avatar sm rounded-circle border" src="assets/img/xs/avatar9.jpg" alt="avatar">
            </a>
            <a class="nav-link rounded-circle p-1 mb-2" href="javascript:void(0);" data-bs-toggle="pill" data-bs-target="#c-user-1" title="">
              <img class="avatar sm rounded-circle border" src="assets/img/xs/avatar10.jpg" alt="avatar">
            </a>
            <a class="nav-link rounded-circle p-1 mb-2" href="javascript:void(0);" data-bs-toggle="pill" data-bs-target="#c-user-1" title="">
              <img class="avatar sm rounded-circle border" src="assets/img/xs/avatar5.jpg" alt="avatar">
            </a>
          </div>
          <div class="tab-content shadow-sm">
            <div class="tab-pane fade show active" id="c-user-1" role="tabpanel">
              <div class="card">
                <!-- start: chat header -->
                <div class="card-header border-bottom py-3">
                  <div class="d-flex">
                    <a href="javascript:void(0);" title="">
                      <img class="avatar rounded-circle" src="assets/img/xs/avatar1.jpg" alt="avatar">
                    </a>
                    <div class="ms-3">
                      <h6 class="mb-0">Orlando Lentz</h6>
                      <small class="text-muted">Last seen: 2 hours ago</small>
                    </div>
                  </div>
                  <div class="dropdown morphing scale-left">
                    <a class="nav-link p-2 text-secondary d-none d-xl-inline-block" href="javascript:void(0);"><i class="fa fa-camera"></i></a>
                    <a class="nav-link p-2 me-1 text-secondary d-none d-xl-inline-block" href="javascript:void(0);"><i class="fa fa-video-camera"></i></a>
                    <a class="nav-link py-2 px-3 text-muted d-inline-block d-xl-none" data-bs-dismiss="modal" aria-label="Close" href="#"><i class="fa fa-close"></i></a>
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
                <!-- start: chat body -->
                <div class="card-body custom_scroll" style="height: calc(100vh - 141px);">
                  <ul class="list-unstyled chat-history flex-grow-1">
                    <!-- Chat: left -->
                    <li class="mb-3 d-flex flex-row align-items-end">
                      <div class="max-width-70">
                        <div class="user-info mb-1">
                          <img class="avatar xs rounded-circle me-1" src="assets/img/xs/avatar1.jpg" alt="avatar">
                          <span class="text-muted small">10:10 AM, Today</span>
                        </div>
                        <div class="card p-3">
                          <div class="message"> Hi Aiden, how are you?</div>
                        </div>
                      </div>
                      <!-- More option -->
                      <div class="btn-group">
                        <a href="#" class="nav-link py-2 px-3 text-muted" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                        <ul class="dropdown-menu rounded-4 border-0 shadow">
                          <li><a class="dropdown-item" href="#">Edit</a></li>
                          <li><a class="dropdown-item" href="#">Share</a></li>
                          <li><a class="dropdown-item" href="#">Delete</a></li>
                        </ul>
                      </div>
                    </li>
                    <!-- Chat: right -->
                    <li class="mb-3 d-flex flex-row-reverse align-items-end">
                      <div class="max-width-70 text-end">
                        <div class="user-info mb-1">
                          <span class="text-muted small">10:12 AM, Today</span>
                        </div>
                        <div class="card border-0 p-3 bg-primary text-light">
                          <div class="message">Are we meeting today?</div>
                        </div>
                      </div>
                      <!-- More option -->
                      <div class="btn-group">
                        <a href="#" class="nav-link py-2 px-3 text-muted" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                        <ul class="dropdown-menu rounded-4 border-0 shadow">
                          <li><a class="dropdown-item" href="#">Edit</a></li>
                          <li><a class="dropdown-item" href="#">Share</a></li>
                          <li><a class="dropdown-item" href="#">Delete</a></li>
                        </ul>
                      </div>
                    </li>
                    <!-- Chat: left -->
                    <li class="mb-3 d-flex flex-row align-items-end">
                      <div class="max-width-70">
                        <div class="user-info mb-1">
                          <img class="avatar xs rounded-circle me-1" src="assets/img/xs/avatar1.jpg" alt="avatar">
                          <span class="text-muted small">10:10 AM, Today</span>
                        </div>
                        <div class="card p-3">
                          <div class="message"> It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</div>
                        </div>
                      </div>
                      <!-- More option -->
                      <div class="btn-group">
                        <a href="#" class="nav-link py-2 px-3 text-muted" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                        <ul class="dropdown-menu rounded-4 border-0 shadow">
                          <li><a class="dropdown-item" href="#">Edit</a></li>
                          <li><a class="dropdown-item" href="#">Share</a></li>
                          <li><a class="dropdown-item" href="#">Delete</a></li>
                        </ul>
                      </div>
                    </li>
                    <!-- Chat: left -->
                    <li class="mb-3 d-flex flex-row align-items-end">
                      <div class="max-width-70">
                        <div class="user-info mb-1">
                          <img class="avatar xs rounded-circle me-1" src="assets/img/xs/avatar1.jpg" alt="avatar">
                          <span class="text-muted small">10:10 AM, Today</span>
                        </div>
                        <div class="card p-3">
                          <div class="message"> Contrary to popular belief, Lorem Ipsum is not simply random text.</div>
                        </div>
                      </div>
                      <!-- More option -->
                      <div class="btn-group">
                        <a href="#" class="nav-link py-2 px-3 text-muted" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                        <ul class="dropdown-menu rounded-4 border-0 shadow">
                          <li><a class="dropdown-item" href="#">Edit</a></li>
                          <li><a class="dropdown-item" href="#">Share</a></li>
                          <li><a class="dropdown-item" href="#">Delete</a></li>
                        </ul>
                      </div>
                    </li>
                    <!-- Chat: right -->
                    <li class="mb-3 d-flex flex-row-reverse align-items-end">
                      <div class="max-width-70 text-end">
                        <div class="user-info mb-1">
                          <span class="text-muted small">10:12 AM, Today</span>
                        </div>
                        <div class="card border-0 p-3 bg-primary text-light">
                          <div class="message">Yes, Orlando Allredy done <br> There are many variations of passages of Lorem Ipsum available</div>
                        </div>
                      </div>
                      <!-- More option -->
                      <div class="btn-group">
                        <a href="#" class="nav-link py-2 px-3 text-muted" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                        <ul class="dropdown-menu rounded-4 border-0 shadow">
                          <li><a class="dropdown-item" href="#">Edit</a></li>
                          <li><a class="dropdown-item" href="#">Share</a></li>
                          <li><a class="dropdown-item" href="#">Delete</a></li>
                        </ul>
                      </div>
                    </li>
                    <!-- Chat: left -->
                    <li class="mb-3 d-flex flex-row align-items-end">
                      <div class="max-width-70">
                        <div class="user-info mb-1">
                          <img class="avatar xs rounded-circle me-1" src="assets/img/xs/avatar1.jpg" alt="avatar">
                          <span class="text-muted small">10:10 AM, Today</span>
                        </div>
                        <div class="card p-3">
                          <div class="message">
                            <p>Please find attached images</p>
                            <img class="w120 img-thumbnail" src="assets/img/gallery/3.jpg" alt="">
                            <img class="w120 img-thumbnail" src="assets/img/gallery/4.jpg" alt="">
                          </div>
                        </div>
                      </div>
                      <!-- More option -->
                      <div class="btn-group">
                        <a href="#" class="nav-link py-2 px-3 text-muted" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                        <ul class="dropdown-menu rounded-4 border-0 shadow">
                          <li><a class="dropdown-item" href="#">Edit</a></li>
                          <li><a class="dropdown-item" href="#">Share</a></li>
                          <li><a class="dropdown-item" href="#">Delete</a></li>
                        </ul>
                      </div>
                    </li>
                    <!-- Chat: right -->
                    <li class="mb-3 d-flex flex-row-reverse align-items-end">
                      <div class="max-width-70 text-end">
                        <div class="user-info mb-1">
                          <span class="text-muted small">10:12 AM, Today</span>
                        </div>
                        <div class="card border-0 p-3 bg-primary text-light">
                          <div class="message">Okay, will check and let you know.</div>
                        </div>
                      </div>
                      <!-- More option -->
                      <div class="btn-group">
                        <a href="#" class="nav-link py-2 px-3 text-muted" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                        <ul class="dropdown-menu rounded-4 border-0 shadow">
                          <li><a class="dropdown-item" href="#">Edit</a></li>
                          <li><a class="dropdown-item" href="#">Share</a></li>
                          <li><a class="dropdown-item" href="#">Delete</a></li>
                        </ul>
                      </div>
                    </li>
                  </ul>
                </div>
                <!-- start: chat footer -->
                <div class="card-footer border-top bg-transparent py-3 px-4">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Enter text here...">
                    <button class="btn btn-primary" type="button">Send</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade show active" id="c-user-2" role="tabpanel">
              <div class="card">
                <!-- start: chat header -->
                <div class="card-header border-bottom py-3">
                  <div class="d-flex">
                    <a href="javascript:void(0);" title="">
                      <img class="avatar rounded-circle" src="assets/img/xs/avatar2.jpg" alt="avatar">
                    </a>
                    <div class="ms-3">
                      <h6 class="mb-0">Orlando Lentz</h6>
                      <small class="text-muted">Last seen: 2 hours ago</small>
                    </div>
                  </div>
                  <div class="dropdown morphing scale-left">
                    <a class="nav-link p-2 text-secondary d-none d-xl-inline-block" href="javascript:void(0);"><i class="fa fa-camera"></i></a>
                    <a class="nav-link p-2 me-1 text-secondary d-none d-xl-inline-block" href="javascript:void(0);"><i class="fa fa-video-camera"></i></a>
                    <a class="nav-link py-2 px-3 text-muted d-inline-block d-xl-none" data-bs-dismiss="modal" aria-label="Close" href="#"><i class="fa fa-close"></i></a>
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
                <!-- start: chat body -->
                <div class="card-body custom_scroll" style="height: calc(100vh - 141px);">
                  <ul class="list-unstyled chat-history flex-grow-1">
                    <!-- Chat: right -->
                    <li class="mb-3 d-flex flex-row-reverse align-items-end">
                      <div class="max-width-70 text-end">
                        <div class="user-info mb-1">
                          <span class="text-muted small">10:12 AM, Today</span>
                        </div>
                        <div class="card border-0 p-3 bg-primary text-light">
                          <div class="message">Are we meeting today?</div>
                        </div>
                      </div>
                      <!-- More option -->
                      <div class="btn-group">
                        <a href="#" class="nav-link py-2 px-3 text-muted" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                        <ul class="dropdown-menu rounded-4 border-0 shadow">
                          <li><a class="dropdown-item" href="#">Edit</a></li>
                          <li><a class="dropdown-item" href="#">Share</a></li>
                          <li><a class="dropdown-item" href="#">Delete</a></li>
                        </ul>
                      </div>
                    </li>
                    <!-- Chat: left -->
                    <li class="mb-3 d-flex flex-row align-items-end">
                      <div class="max-width-70">
                        <div class="user-info mb-1">
                          <img class="avatar xs rounded-circle me-1" src="assets/img/xs/avatar2.jpg" alt="avatar">
                          <span class="text-muted small">10:10 AM, Today</span>
                        </div>
                        <div class="card p-3">
                          <div class="message"> Hi Aiden, how are you?</div>
                        </div>
                      </div>
                      <!-- More option -->
                      <div class="btn-group">
                        <a href="#" class="nav-link py-2 px-3 text-muted" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                        <ul class="dropdown-menu rounded-4 border-0 shadow">
                          <li><a class="dropdown-item" href="#">Edit</a></li>
                          <li><a class="dropdown-item" href="#">Share</a></li>
                          <li><a class="dropdown-item" href="#">Delete</a></li>
                        </ul>
                      </div>
                    </li>
                    <!-- Chat: right -->
                    <li class="mb-3 d-flex flex-row-reverse align-items-end">
                      <div class="max-width-70 text-end">
                        <div class="user-info mb-1">
                          <span class="text-muted small">10:12 AM, Today</span>
                        </div>
                        <div class="card border-0 p-3 bg-primary text-light">
                          <div class="message">Yes, Orlando Allredy done <br> There are many variations of passages of Lorem Ipsum available</div>
                        </div>
                      </div>
                      <!-- More option -->
                      <div class="btn-group">
                        <a href="#" class="nav-link py-2 px-3 text-muted" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                        <ul class="dropdown-menu rounded-4 border-0 shadow">
                          <li><a class="dropdown-item" href="#">Edit</a></li>
                          <li><a class="dropdown-item" href="#">Share</a></li>
                          <li><a class="dropdown-item" href="#">Delete</a></li>
                        </ul>
                      </div>
                    </li>
                    <!-- Chat: left -->
                    <li class="mb-3 d-flex flex-row align-items-end">
                      <div class="max-width-70">
                        <div class="user-info mb-1">
                          <img class="avatar xs rounded-circle me-1" src="assets/img/xs/avatar2.jpg" alt="avatar">
                          <span class="text-muted small">10:10 AM, Today</span>
                        </div>
                        <div class="card p-3">
                          <div class="message">
                            <p>Please find attached images</p>
                            <img class="w120 img-thumbnail" src="assets/img/gallery/1.jpg" alt="">
                            <img class="w120 img-thumbnail" src="assets/img/gallery/2.jpg" alt="">
                          </div>
                        </div>
                      </div>
                      <!-- More option -->
                      <div class="btn-group">
                        <a href="#" class="nav-link py-2 px-3 text-muted" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                        <ul class="dropdown-menu rounded-4 border-0 shadow">
                          <li><a class="dropdown-item" href="#">Edit</a></li>
                          <li><a class="dropdown-item" href="#">Share</a></li>
                          <li><a class="dropdown-item" href="#">Delete</a></li>
                        </ul>
                      </div>
                    </li>
                    <!-- Chat: right -->
                    <li class="mb-3 d-flex flex-row-reverse align-items-end">
                      <div class="max-width-70 text-end">
                        <div class="user-info mb-1">
                          <span class="text-muted small">10:12 AM, Today</span>
                        </div>
                        <div class="card border-0 p-3 bg-primary text-light">
                          <div class="message">Okay, will check and let you know.</div>
                        </div>
                      </div>
                      <!-- More option -->
                      <div class="btn-group">
                        <a href="#" class="nav-link py-2 px-3 text-muted" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                        <ul class="dropdown-menu rounded-4 border-0 shadow">
                          <li><a class="dropdown-item" href="#">Edit</a></li>
                          <li><a class="dropdown-item" href="#">Share</a></li>
                          <li><a class="dropdown-item" href="#">Delete</a></li>
                        </ul>
                      </div>
                    </li>
                    <!-- Chat: left -->
                    <li class="mb-3 d-flex flex-row align-items-end">
                      <div class="max-width-70">
                        <div class="user-info mb-1">
                          <img class="avatar xs rounded-circle me-1" src="assets/img/xs/avatar2.jpg" alt="avatar">
                          <span class="text-muted small">10:10 AM, Today</span>
                        </div>
                        <div class="card p-3">
                          <div class="message"> It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</div>
                        </div>
                      </div>
                      <!-- More option -->
                      <div class="btn-group">
                        <a href="#" class="nav-link py-2 px-3 text-muted" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                        <ul class="dropdown-menu rounded-4 border-0 shadow">
                          <li><a class="dropdown-item" href="#">Edit</a></li>
                          <li><a class="dropdown-item" href="#">Share</a></li>
                          <li><a class="dropdown-item" href="#">Delete</a></li>
                        </ul>
                      </div>
                    </li>
                    <!-- Chat: left -->
                    <li class="mb-3 d-flex flex-row align-items-end">
                      <div class="max-width-70">
                        <div class="user-info mb-1">
                          <img class="avatar xs rounded-circle me-1" src="assets/img/xs/avatar2.jpg" alt="avatar">
                          <span class="text-muted small">10:10 AM, Today</span>
                        </div>
                        <div class="card p-3">
                          <div class="message"> Contrary to popular belief, Lorem Ipsum is not simply random text.</div>
                        </div>
                      </div>
                      <!-- More option -->
                      <div class="btn-group">
                        <a href="#" class="nav-link py-2 px-3 text-muted" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                        <ul class="dropdown-menu rounded-4 border-0 shadow">
                          <li><a class="dropdown-item" href="#">Edit</a></li>
                          <li><a class="dropdown-item" href="#">Share</a></li>
                          <li><a class="dropdown-item" href="#">Delete</a></li>
                        </ul>
                      </div>
                    </li>
                  </ul>
                </div>
                <!-- start: chat footer -->
                <div class="card-footer border-top bg-transparent py-3 px-4">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Enter text here...">
                    <button class="btn btn-primary" type="button">Send</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal: Setting -->
  <div class="modal fade" id="SettingsModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-vertical right-side modal-dialog-scrollable">
      <div class="modal-content">
        <div class="px-xl-4 modal-header">
          <h5 class="modal-title">Theme Setting</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="px-xl-4 modal-body custom_scroll">
          <!-- start: color setting -->
          <div class="card fieldset border border-primary p-3 setting-theme mb-4">
            <span class="fieldset-tile text-primary bg-card">Color Settings</span>
            <ul class="list-unstyled d-flex choose-skin mb-0">
              <li data-theme="black">
                <div class="black"></div>
              </li>
              <li data-theme="indigo">
                <div class="indigo"></div>
              </li>
              <li data-theme="blue">
                <div class="blue"></div>
              </li>
              <li data-theme="cyan">
                <div class="cyan"></div>
              </li>
              <li data-theme="green">
                <div class="green"></div>
              </li>
              <li data-theme="orange">
                <div class="orange"></div>
              </li>
              <li data-theme="blush">
                <div class="blush"></div>
              </li>
              <li data-theme="red">
                <div class="red"></div>
              </li>
              <li data-theme="dynamic">
                <div class="dynamic"><i class="fa fa-paint-brush"></i></div>
              </li>
            </ul>
            <!-- Settings: Theme dynamics -->
            <div class="card fieldset border border-primary p-3 dt-setting mt-4">
              <span class="fieldset-tile text-primary bg-card">Dynamic Color Settings</span>
              <div class="row g-3">
                <div class="col-7">
                  <ul class="list-unstyled mb-0">
                    <li>
                      <button id="primaryColorPicker" class="btn bg-primary avatar xs me-2"></button>
                      <label>Primary Color</label>
                    </li>
                    <li>
                      <button id="secondaryColorPicker" class="btn bg-secondary avatar xs me-2"></button>
                      <label>Secondary Color</label>
                    </li>
                    <li>
                      <button id="BodyColorPicker" class="btn btn-outline-secondary bg-body avatar xs me-2"></button>
                      <label>Site Background</label>
                    </li>
                    <li>
                      <button id="CardColorPicker" class="btn btn-outline-secondary bg-card avatar xs me-2"></button>
                      <label>Widget Background</label>
                    </li>
                    <li>
                      <button id="BorderColorPicker" class="btn btn-outline-secondary bg-card avatar xs me-2"></button>
                      <label>Border Color</label>
                    </li>
                  </ul>
                </div>
                <div class="col-5">
                  <ul class="list-unstyled mb-0">
                    <li>
                      <button id="chartColorPicker1" class="btn chart-color1 avatar xs me-2"></button>
                      <label>Chart Color 1</label>
                    </li>
                    <li>
                      <button id="chartColorPicker2" class="btn chart-color2 avatar xs me-2"></button>
                      <label>Chart Color 2</label>
                    </li>
                    <li>
                      <button id="chartColorPicker3" class="btn chart-color3 avatar xs me-2"></button>
                      <label>Chart Color 3</label>
                    </li>
                    <li>
                      <button id="chartColorPicker4" class="btn chart-color4 avatar xs me-2"></button>
                      <label>Chart Color 4</label>
                    </li>
                    <li>
                      <button id="chartColorPicker5" class="btn chart-color5 avatar xs me-2"></button>
                      <label>Chart Color 5</label>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- start: Light/dark -->
          <div class="card fieldset border setting-mode mb-4">
            <span class="fieldset-tile bg-card">Light/Dark & Contrast Layout</span>
            <div class="c_radio d-flex text-center">
              <label class="m-1 theme-switch" for="theme-switch">
                <input type="checkbox" id="theme-switch" />
                <span class="card p-2">
                  <img class="img-fluid" src="assets/img/dark-version.svg" alt="Dark Mode" />
                </span>
              </label>
              <label class="m-1 theme-dark" for="theme-dark">
                <input type="checkbox" id="theme-dark" />
                <span class="card p-2">
                  <img class="img-fluid" src="assets/img/dark-theme.svg" alt="Theme Dark Mode" />
                </span>
              </label>
              <label class="m-1 theme-high-contrast" for="theme-high-contrast">
                <input type="checkbox" id="theme-high-contrast" />
                <span class="card p-2">
                  <img class="img-fluid" src="assets/img/high-version.svg" alt="High Contrast" />
                </span>
              </label>
              <label class="m-1 theme-rtl" for="theme-rtl">
                <input type="checkbox" id="theme-rtl" />
                <span class="card p-2">
                  <img class="img-fluid" src="assets/img/rtl-version.svg" alt="RTL Mode!" />
                </span>
              </label>
            </div>
          </div>
          <!-- start: Font setting -->
          <div class="card fieldset border setting-font">
            <span class="fieldset-tile bg-card">Google Font Settings</span>
            <div class="c_radio d-flex text-center font_setting">
              <label class="m-1" for="font-opensans">
                <input type="radio" name="font" id="font-opensans" value="font-opensans" />
                <span class="card p-2">
                  <img class="img-fluid" src="assets/img/font-opensans.svg" alt="Dark Mode" />
                </span>
              </label>
              <label class="m-1" for="font-quicksand">
                <input type="radio" name="font" id="font-quicksand" value="font-quicksand" />
                <span class="card p-2">
                  <img class="img-fluid" src="assets/img/font-quicksand.svg" alt="Dark Mode" />
                </span>
              </label>
              <label class="m-1" for="font-nunito">
                <input type="radio" name="font" id="font-nunito" value="font-nunito" checked="" />
                <span class="card p-2">
                  <img class="img-fluid" src="assets/img/font-nunito.svg" alt="Dark Mode" />
                </span>
              </label>
              <label class="m-1" for="font-raleway">
                <input type="radio" name="font" id="font-raleway" value="font-raleway" />
                <span class="card p-2">
                  <img class="img-fluid" src="assets/img/font-raleway.svg" alt="Dark Mode" />
                </span>
              </label>
            </div>
          </div>
          <!-- start: Dynamic Font Settings -->
          <div class="m-1 p-3 bg-body rounded-4 mb-4">
            <p>Dynamic Font Settings</p>
            <div class="mb-2">
              <label class="form-label small text-muted mb-0">Enter font URL</label>
              <input id="font_url" type="text" class="form-control" placeholder="http://fonts.cdnfonts.com/css/vonfont">
            </div>
            <div class="mb-3">
              <label class="form-label small text-muted mb-0">Enter font family name</label>
              <input id="font_family" type="text" class="form-control" placeholder="vonfont">
            </div>
            <button id="font_apply" type="submit" class="btn btn-primary">Save Changes</button>
            <button id="font_cancel" type="submit" class="btn btn-secondary">Clear Changes</button>
          </div>
          <!-- start: Extra setting -->
          <div class="setting-more mb-4">
            <h6 class="card-title">More Setting</h6>
            <ul class="list-group list-group-flush list-group-custom fs-6">
              <!-- Settings: Horizontal menu version -->
              <li class="list-group-item">
                <div class="form-check form-switch h-menu-switch mb-1">
                  <input class="form-check-input" type="checkbox" id="h_menu">
                  <label class="form-check-label" for="h_menu">Horizontal Menu Version</label>
                </div>
              </li>
              <!-- Settings: page header top Fix -->
              <li class="list-group-item">
                <div class="form-check form-switch pageheader-switch mb-1">
                  <input class="form-check-input" type="checkbox" id="PageHeader" checked>
                  <label class="form-check-label" for="PageHeader">Page Header Fix</label>
                </div>
              </li>
              <!-- Settings: page header Dark version  -->
              <li class="list-group-item">
                <div class="form-check form-switch pageheader-dark-switch mb-1">
                  <input class="form-check-input" type="checkbox" id="PageHeader_dark">
                  <label class="form-check-label" for="PageHeader_dark">Page Header Dark Mode</label>
                </div>
              </li>
              <!-- Settings: Border radius -->
              <li class="list-group-item">
                <div class="form-check form-switch radius-switch mb-1">
                  <input class="form-check-input" type="checkbox" id="BorderRadius">
                  <label class="form-check-label" for="BorderRadius">Border Radius none</label>
                </div>
              </li>
              <!-- Settings: sidebar version 2 -->
              <li class="list-group-item">
                <div class="form-check form-switch sidebar-v2 mb-1">
                  <input class="form-check-input" type="checkbox" id="sidebar_v2">
                  <label class="form-check-label" for="sidebar_v2">Sidebar Version 2</label>
                </div>
              </li>
              <!-- Settings: sidebar dark -->
              <li class="list-group-item">
                <div class="form-check form-switch sidebardark-switch mb-1">
                  <input class="form-check-input" type="checkbox" id="SidebarDark">
                  <label class="form-check-label" for="SidebarDark">Enable Dark! ( Sidebar )</label>
                </div>
              </li>
              <!-- Settings: Sidebar bg image -->
              <li class="list-group-item setting-img">
                <div class="form-check form-switch imagebg-switch mb-1">
                  <input class="form-check-input" type="checkbox" id="CheckImage">
                  <label class="form-check-label" for="CheckImage">Background Image (Sidebar)</label>
                </div>
                <div class="bg-images">
                  <ul class="list-unstyled d-flex">
                    <li class="sidebar-img-1 me-1 sidebar-img-active"><a class="rounded sidebar-img" id="img-1" href="#"><img src="assets/img/sidebar-bg/sidebar-1.jpg" alt="" /></a></li>
                    <li class="sidebar-img-2 me-1"><a class="rounded sidebar-img" id="img-2" href="#"><img src="assets/img/sidebar-bg/sidebar-2.jpg" alt="" /></a></li>
                    <li class="sidebar-img-3 me-1"><a class="rounded sidebar-img" id="img-3" href="#"><img src="assets/img/sidebar-bg/sidebar-3.jpg" alt="" /></a></li>
                    <li class="sidebar-img-4 me-1"><a class="rounded sidebar-img" id="img-4" href="#"><img src="assets/img/sidebar-bg/sidebar-4.jpg" alt="" /></a></li>
                    <li class="sidebar-img-5 me-1"><a class="rounded sidebar-img" id="img-5" href="#"><img src="assets/img/sidebar-bg/sidebar-5.jpg" alt="" /></a></li>
                  </ul>
                </div>
              </li>
              <!-- Settings: Container Fluid -->
              <li class="list-group-item">
                <div class="form-check form-switch fluid-switch mb-1">
                  <input class="form-check-input" type="checkbox" id="fluidLayout" checked="">
                  <label class="form-check-label" for="fluidLayout">Container Fluid</label>
                </div>
              </li>
              <!-- Settings: Card box shadow  -->
              <li class="list-group-item">
                <div class="form-check form-switch shadow-switch mb-1">
                  <input class="form-check-input" type="checkbox" id="card_shadow">
                  <label class="form-check-label" for="card_shadow">Card Box-Shadow</label>
                </div>
              </li>
            </ul>
          </div>
          <!-- start: Extra link, please do not add in your project -->
          <div class="mb-4">
            <a class="btn lift  btn-outline-secondary" href="marketing/index.html">Marketing page</a>
            <a class="btn lift  btn-outline-secondary" href="onepgae-uikit/onepage.html">Landing page</a>
            <a class="btn lift  btn-outline-secondary" href="onepgae-uikit/index.html">One page Ui Kit Elements</a>
          </div>
        </div>
        <div class="px-xl-4 modal-footer d-flex justify-content-start text-center">
          <button type="button" class="btn flex-fill btn-primary lift">Save Changes</button>
          <button type="button" class="btn flex-fill btn-white border lift" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
 <?php include "scripts.php"; ?>
</body>

</html>