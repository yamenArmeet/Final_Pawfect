<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html>
  <head>
    <meta charset="utf-8" />
    <title>Galaxy - Personal Blog Template</title>

    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, maximum-scale=1"
    />

    <!-- theme meta -->
    <meta name="theme-name" content="galaxy" />

    <!-- ** Plugins Needed for the Project ** -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <!-- Main Stylesheet -->
    <link href="{{ asset('assets/css/shelter-index.css') }}" rel="stylesheet" />

    <!--Favicon-->
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon" />
    <link rel="icon" href="images/favicon.png" type="image/x-icon" />

    {{-- <style>
        div ,li
        {
            border: solid white 1px
        }
    </style> --}}
  </head>
  <body>
    <!-- START preloader-wrapper -->
    <div class="preloader-wrapper">
      <div class="preloader-inner">
        <div class="spinner-border text-red"></div>
      </div>
    </div>
    <!-- END preloader-wrapper -->

    <!-- START main-wrapper -->
    <section class="d-flex">
      <!-- start of sidenav -->
      <aside>
        <div class="sidenav position-sticky d-flex flex-column justify-content-between">
          <a class="navbar-brand" href="index.html" class="logo">
            <img src="https://placehold.co/204x134" alt="" />
          </a>
          <!-- end of navbar-brand -->

          <div class="p-0 my-4 navbar navbar-dark font-primary">
            <ul class="navbar-nav w-100">
              <li class="nav-item">
                <a class="px-0 pt-0 text-white nav-link" href="index.html"
                  >Home</a
                >
              </li>
              <li class="nav-item active">
                <a class="px-0 text-white nav-link" href="about.html">About</a>
              </li>
              <li class="nav-item">
                <a class="px-0 text-white nav-link" href="contact.html"
                  >Contact</a
                >
              </li>

              {{-- this page need to fix  --}}
              <li class="nav-item">
                <a
                  class="text-white nav-link"
                  href="#"
                  role="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#drop-menu"
                  aria-expanded="false"
                  aria-controls="drop-menu">
                  Pages
                </a>
                <div id="drop-menu" class="collapse">
                  <a class="nav-link d-block" href="index-2.html">Home 2</a>
                  <a class="nav-link d-block" href="category.html">Category</a>
                  <a class="nav-link d-block" href="post-details.html">Post Details</a>
                  <a class="nav-link d-block" href="privacy.html">Privacy &amp; Policy</a>
                </div>
              </li>


              <li class="mt-3 nav-item">
                <select
                  class="text-white bg-transparent shadow-none custom-select rounded-0"
                  id="pick-lang"
                >
                  <option selected value="en">English</option>
                  <option value="ar">العربية</option>
                </select>
              </li>
            </ul>
          </div>
          <!-- end of navbar -->

          <ul class="list-inline nml-2">
            <li class="list-inline-item">
              <a href="#!" class="pr-2 text-white text-red-onHover">
                <span class="bi bi-twitter-x"></span>              </a>
            </li>
            <li class="list-inline-item">
              <a href="#!" class="p-2 text-white text-red-onHover">
                <span class="bi bi-facebook"></span>              </a>
            </li>
            <li class="list-inline-item">
              <a href="#!" class="p-2 text-white text-red-onHover">
                <span class=" bi bi-instagram"></span>              </a>
            </li>

          </ul>
          <!-- end of social-links -->
        </div>
      </aside>
      <!-- end of sidenav -->
      <div class="main-content">
        <!-- start of mobile-nav -->
        <header class="pt-4 mobile-nav">
            <div class="container">
              <div class="row align-items-center">
                <div class="col-6">
                  <a href="index.html">
                    <img src="https://placehold.co/204x134" alt="" />
                  </a>
                </div>
                <div class="text-end col-6">
                  <button class="text-white bg-transparent border nav-toggle">
                    <span class="">☰</span>
                  </button>
                </div>
              </div>
            </div>
          </header>
        <div class="nav-toggle-overlay"></div>
        <!-- end of mobile-nav -->

        <div class="container pt-4 mt-5">
          <div class="row justify-content-between">
            <div class="col-lg-8">
              <div class="mb-5 bg-transparent border-0 card post-item">
                <a href="post-details.html">
                  <img
                    class="card-img-top rounded-0"
                    src="https://placehold.co/635x423"
                    alt=""
                  />
                </a>
                <div class="px-0 card-body">
                  <h2 class="card-title">
                    <a
                      class="text-white opacity-75-onHover"
                      href="post-details.html"
                      >Id reprehrenderit mollit in tempor naid incididunt
                      cupidatat consectetura</a
                    >
                  </h2>
                  <ul class="mt-3 post-meta">
                    <li class="mx-3 d-inline-block">
                      <span class="bi bi-clock-fill text-primary"></span>
                      <a class="ms-1" href="#">24 April, 2016</a>
                    </li>
                    <li class="d-inline-block">
                      <span class="bi bi-card-list text-primary"></span>
                      <a class="ms-1" href="#">Photography</a>
                    </li>
                  </ul>
                  <p class="my-4 card-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Tincidunt leo mi, viverra urna. Arcu velit risus,
                    condimentum ut vulputate cursus porttitor turpis in. Diam
                    egestas nec massa, habitasse. Tincidt dui.
                  </p>
                  <a href="post-details.html" class="btn btn-primary"
                    >Read More <i class="mx-2 bi bi-arrow-right"></i></a>
                </div>
              </div>
              <!-- end of post-item -->

             <div class="mb-5 bg-transparent border-0 card post-item">
                <a href="post-details.html">
                  <img
                    class="card-img-top rounded-0"
                    src="https://placehold.co/635x423"
                    alt=""
                  />
                </a>
                <div class="px-0 card-body">
                  <h2 class="card-title">
                    <a
                      class="text-white opacity-75-onHover"
                      href="post-details.html"
                      >Id reprehrenderit mollit in tempor naid incididunt
                      cupidatat consectetura</a
                    >
                  </h2>
                  <ul class="mt-3 post-meta">
                    <li class="mx-3 d-inline-block">
                      <span class="bi bi-clock-fill text-primary"></span>
                      <a class="ms-1" href="#">24 April, 2016</a>
                    </li>
                    <li class="d-inline-block">
                      <span class="bi bi-card-list text-primary"></span>
                      <a class="ms-1" href="#">Photography</a>
                    </li>
                  </ul>
                  <p class="my-4 card-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Tincidunt leo mi, viverra urna. Arcu velit risus,
                    condimentum ut vulputate cursus porttitor turpis in. Diam
                    egestas nec massa, habitasse. Tincidt dui.
                  </p>
                  <a href="post-details.html" class="btn btn-primary"
                    >Read More <i class="mx-2 bi bi-arrow-right"></i></a>
                </div>
              </div>
              <!-- end of post-item -->

              <div class="mb-5 bg-transparent border-0 card post-item">
                <a href="post-details.html">
                  <img
                    class="card-img-top rounded-0"
                    src="https://placehold.co/635x423"
                    alt=""
                  />
                </a>
                <div class="px-0 card-body">
                  <h2 class="card-title">
                    <a
                      class="text-white opacity-75-onHover"
                      href="post-details.html"
                      >Id reprehrenderit mollit in tempor naid incididunt
                      cupidatat consectetura</a
                    >
                  </h2>
                  <ul class="mt-3 post-meta">
                    <li class="mx-3 d-inline-block">
                      <span class="bi bi-clock-fill text-primary"></span>
                      <a class="ms-1" href="#">24 April, 2016</a>
                    </li>
                    <li class="d-inline-block">
                      <span class="bi bi-card-list text-primary"></span>
                      <a class="ms-1" href="#">Photography</a>
                    </li>
                  </ul>
                  <p class="my-4 card-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Tincidunt leo mi, viverra urna. Arcu velit risus,
                    condimentum ut vulputate cursus porttitor turpis in. Diam
                    egestas nec massa, habitasse. Tincidt dui.
                  </p>
                  <a href="post-details.html" class="btn btn-primary"
                    >Read More <i class="mx-2 bi bi-arrow-right"></i></a>
                </div>
              </div>
              <!-- end of post-item -->
            </div>
            <div class="col-lg-4 col-md-5">
              <div class="text-center widget">
                <img
                  class="mx-auto author-thumb-sm rounded-circle d-block"
                  src="https://placehold.co/230x230"
                  alt=""
                />
                <h2 class="mt-4 text-white widget-title d-inline-block">
                  About Me
                </h2>
                <p class="mt-4">
                  Lorem ipsum dolor sit coectetur adiing elit. Tincidunfywjt leo
                  mi, viearra urna. Arcu ve isus, condimentum ut vulpate cursus
                  por turpis.
                </p>
                <ul class="list-inline nml-2">
                    <li class="list-inline-item">
                      <a href="#!" class="pr-2 text-white text-red-onHover">
                        <span class="bi bi-twitter-x"></span>              </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#!" class="p-2 text-white text-red-onHover">
                        <span class="bi bi-facebook"></span>              </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#!" class="p-2 text-white text-red-onHover">
                        <span class=" bi bi-instagram"></span>              </a>
                    </li>

                  </ul>
              </div>
              <!-- end of author-widget -->

              <div class="p-4 text-center widget bg-dark">
                <h2 class="mt-4 text-white widget-title d-inline-block">
                  Subscribe Blog
                </h2>
                <p class="mt-4">
                  Lorem ipsum dolor sit coectetur elit. Tincidu nfywjt leo mi,
                  urna. Arcu ve isus, condimentum ut vulpate cursus por.
                </p>
                <form action="#">
                  <div class="form-group">
                    <input
                      type="email"
                      class="my-4 bg-transparent form-control rounded-0"
                      placeholder="Your Email Address"
                    />
                    <button class="btn btn-primary">
                      Subscribe Now <img src="images/arrow-right.png" alt="" />
                    </button>
                  </div>
                </form>
              </div>
              <!-- end of subscription-widget -->

              <div class="widget">
                <div class="mb-5 text-center">
                  <h2 class="text-white widget-title d-inline-block">
                    Featured Posts
                  </h2>
                </div>
                <div class="mb-5 bg-transparent border-0 card post-item">
                  <a href="post-details.html">
                    <img
                      class="card-img-top rounded-0"
                      src="https://placehold.co/350x256"
                      alt=""
                    />
                  </a>
                  <div class="px-0 card-body">
                    <h2 class="card-title">
                      <a
                        class="text-white opacity-75-onHover"
                        href="post-details.html"
                        >Excepteur ado Do minimal duis laborum Fugiat ea</a
                      >
                    </h2>
                    <ul class="mt-3 post-meta">
                        <li class="mx-3 d-inline-block">
                          <span class="bi bi-clock-fill text-primary"></span>
                          <a class="ms-1" href="#">24 April, 2016</a>
                        </li>
                        <li class="d-inline-block">
                          <span class="bi bi-card-list text-primary"></span>
                          <a class="ms-1" href="#">Photography</a>
                        </li>
                      </ul>
                      <a href="post-details.html " class="mx-3 mt-2 btn btn-primary"
                      >Read More <i class="mx-2 bi bi-arrow-right"></i></a>
                  </div>
                </div>
                <!-- end of widget-post-item -->
                <div class="mb-5 bg-transparent border-0 card post-item">
                  <a href="post-details.html">
                    <img
                      class="card-img-top rounded-0"
                      src="https://placehold.co/350x256"
                      alt=""
                    />
                  </a>
                  <div class="px-0 card-body">
                    <h2 class="card-title">
                      <a
                        class="text-white opacity-75-onHover"
                        href="post-details.html"
                        >Excepteur ado Do minimal duis laborum Fugiat ea</a
                      >
                    </h2>
                    <ul class="mt-3 post-meta">
                        <li class="mx-3 d-inline-block">
                          <span class="bi bi-clock-fill text-primary"></span>
                          <a class="ms-1" href="#">24 April, 2016</a>
                        </li>
                        <li class="d-inline-block">
                          <span class="bi bi-card-list text-primary"></span>
                          <a class="ms-1" href="#">Photography</a>
                        </li>
                      </ul>
                      <a href="post-details.html" class="mx-3 mt-2 btn btn-primary"
                      >Read More <i class="mx-2 bi bi-arrow-right"></i></a>
                  </div>
                </div>
                <!-- end of widget-post-item -->
              </div>
              <!-- end of post-items widget -->
            </div>
          </div>
        </div>

        <!-- start of footer -->
        <footer class="bg-dark">
            <div class="container">
              <div class="text-center row">
                <div class="mb-5 col-lg-3 col-sm-6">
                  <h5 class="mb-4 text-white font-primary">main sub</h5>
                  <ul class="list-unstyled">
                    <li><a href="#!">lorem2 lorem2</a></li>
                    <li><a href="#!">lorem</a></li>
                    <li><a href="#!">lorem</a></li>
                    <li><a href="#!">lorem</a></li>
                  </ul>
                </div>
                <div class="mb-5 col-lg-3 col-sm-6">
                  <h5 class="mb-4 text-white font-primary">main sub</h5>
                  <ul class="list-unstyled">
                    <li><a href="#!">lorem2 lorem2</a></li>
                    <li><a href="#!">lorem</a></li>
                    <li><a href="#!">lorem</a></li>
                    <li><a href="#!">lorem</a></li>
                  </ul>
                </div>
                <div class="mb-5 col-lg-3 col-sm-6">
                  <h5 class="mb-4 text-white font-primary">main sub</h5>
                  <ul class="list-unstyled">
                    <li><a href="#!">lorem2 lorem2</a></li>
                    <li><a href="#!">lorem</a></li>
                    <li><a href="#!">lorem</a></li>
                    <li><a href="#!">lorem</a></li>
                  </ul>
                </div>
                <div class="mb-5 col-lg-3 col-sm-6">
                  <h5 class="mb-4 text-white font-primary">main sub</h5>
                  <ul class="list-unstyled">
                    <li><a href="#!">lorem2 lorem2</a></li>
                    <li><a href="#!">lorem</a></li>
                    <li><a href="#!">lorem</a></li>
                    <li><a href="#!">lorem</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </footer>
        <!-- end of footer -->
      </div>
    </section>
    <!-- END main-wrapper -->

    <!-- All JS Files -->
 <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <script src="plugins/bootstrap/bootstrap.min.js"></script>

    <!-- Main Script -->
    <script src="{{ asset('assets/js/shelter.js') }}"></script>
  </body>
</html>
