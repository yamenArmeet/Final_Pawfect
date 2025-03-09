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

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <!-- Main Stylesheet -->
    <link href="{{ asset('assets/css/shelter-index.css') }}" rel="stylesheet" />

    <!--Favicon-->
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon" />
    <link rel="icon" href="images/favicon.png" type="image/x-icon" />
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
        <div class="container py-4 my-5">
          <div class="row">
            <div class="col-lg-5 col-md-8">
              <form class="search-form" action="#">
                <div class="input-group">
                  <input
                    type="search"
                    class="bg-transparent shadow-none form-control rounded-0"
                    placeholder="Search here"
                  />
                  <div class="input-group-append">
                    <button class="btn" type="submit">
                        <i class="bi bi-search"></i>
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="row">
            <div class="col-md-9">
              <img class="img-fluid" src="https://placehold.co/825x474" alt="" />
              <h1 class="my-4 text-white add-letter-space">
               shelter's name
              </h1>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Metus
                cum cursus nunc nec velit volutpat consequat. Vitae dui, massa
                viverra nam dui laoreet ipsum. Sagittis sed feugiat blandit
                adipiscing mauris. Facilisis dictum in tellus ac turpis.
                Pretium, facilisis turpis duis pulvinar blandit est. Dolor
                accumsan pellentesque ullamcorper volutpat urna arcu. Nisi nulla
                et mauris et, ultricies odio semper gravida. Justo, lorem leo
                ullamcorper leo ornare phasellus. Dolor tristique sem quam eget
                tempor aliquet sem amet, eget. Vitae id mattis consectetur
                gravida sit lorem donec. Phasellus enim sodales congue varius
                arcu et, pulvinar ultrices. Faucibus nulla massa erat ut.
                Egestas integer pharetra proin pellentesque tellus quis pulvinar
                mauris. Sed quisque pellentesque platea vel. Proin felis tellus
                nunc risus tortor, nibh. Vulputate mauris fermentum tincidunt
                diam sed. Vel interdum nisl, pellentesque ante consectetur. At
                praesent lorem placerat nibh nunc. Massa lectus id et amet quam
                venenatis, in mus. Arcu cras risus est porttitor tincidunt
                posuere feugiat. Sem velit ornare id duis Amet nullam eget mus
                diam nisl, vel. Sed at id quam bibendum lacus felis. Porta arcu,
                nunc ultricies
              </p>
              <h2 class="my-5 text-white add-letter-space">
               Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis excepturi consequatur voluptatum.
              </h2>
              <ul class="list-unstyled">
                <li class="mb-4 bullet-list-item">
                  <h3 class="mb-3 text-white add-letter-space">
                    Lorem ipsum dolor sit amet consectetur.                  </h3>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Purus, donec nunc eros, ullamcorper id feugiat quisque
                    aliquam sagittis. Sem turpis sed viverra massa gravida
                    pharetra. Non dui dolor potenti eu dignissim fusce. Ultrices
                    amet, in curabitur a arcu a lectus morbi id. Iaculis erat
                    sagittis in tortor cursus. Molestie urna eu tortor erat.
                  </p>
                </li>
                <li class="mb-4 bullet-list-item">
                  <h3 class="mb-3 text-white add-letter-space">
                    Lorem ipsum dolor sit amet consectetur.                  </h3>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Purus, donec nunc eros, ullamcorper id feugiat quisque
                    aliquam sagittis. Sem turpis sed viverra massa gravida
                    pharetra. Non dui dolor potenti eu dignissim fusce. Ultrices
                    amet, in curabitur a arcu a lectus morbi id. Iaculis erat
                    sagittis in tortor cursus. Molestie urna eu tortor erat.
                  </p>
                </li>
                <li class="mb-4 bullet-list-item">
                  <h3 class="mb-3 text-white add-letter-space">
                    Lorem ipsum dolor sit amet consectetur.                  </h3>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Purus, donec nunc eros, ullamcorper id feugiat quisque
                    aliquam sagittis. Sem turpis sed viverra massa gravida
                    pharetra. Non dui dolor potenti eu dignissim fusce. Ultrices
                    amet, in curabitur a arcu a lectus morbi id. Iaculis erat
                    sagittis in tortor cursus. Molestie urna eu tortor erat.
                  </p>
                </li>
                <li class="bullet-list-item">
                  <h3 class="mb-3 text-white add-letter-space">
                    Lorem ipsum dolor sit amet consectetur.                  </h3>
                  <ol class="pl-0">
                    <li class="mb-2">
                     Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, dolor.
                    </li>
                    <li class="mb-2">
                      Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nobis, modi.
                    </li>
                    <li class="mb-2">
                      Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nobis, modi.
                    </li>
                    <li>
                      Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nobis, modi.
                    </li>
                  </ol>
                </li>
              </ul>
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

    <!-- Main Script -->
    <script src="{{ asset('assets/js/shelter.js') }}"></script>
  </body>
</html>
