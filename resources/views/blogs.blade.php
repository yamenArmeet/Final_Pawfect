<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="Blogs.css">
    <title>Boostrap Login | Ludiflex</title>
    <style>
        body {

            background-color: #EFF1FD;
        }

        .rounded-4 {
            border-radius: 20px;
        }

        .rounded-5 {
            border-radius: 30px;
        }

        /* nav bar things */
        .navbar .navbar-nav .nav-link {
            color: black;
            font-family: "Irish Grover", system-ui;
        }

        .sign-btn:hover {
            text-decoration: none;
            font-weight: bold;
        }

        .login:hover {
            font-weight: bold;
            text-decoration: none;
        }

        /* nav bar things */



        /* button transform */
        a.btn {
            transition: box-shadow 0.3s ease, transform 0.3s ease;
        }

        a.btn:hover {
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            transform: scale(1.05);
            /* Slightly enlarge */
        }

        /* button transform */


        /*Blog section*/
        .blog-card {
            max-width: 400px;
            height: auto;
            border: 1px solid #6bb853;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
        }

        .blog-card img {
            border-radius: 10px;
        }

        .blog-card a {
            color: black;
            transition: color 0.3s ease;
            text-decoration: none;
        }

        .blog-card a:hover {
            color: #F7C240;
            /* Bright Yellow on hover */
        }

        div.blog-card {
            transition: box-shadow 0.3s ease, transform 0.3s ease;
        }

        div.blog-card:hover {
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            transform: scale(1.02);
        }

        .card-body {
            text-align: start;
            /* Center-align text */
        }

        .card-title {
            font-size: 1.25rem;
            /* Adjust font size for consistency */
        }

        .card-body p {
            color: black;
        }

        /*Blog section*/



        /* Footer section */
        footer {
            background-color: #4D9B36;
        }

        p i {
            font-size: 20px;
        }

        a i {
            font-size: 26px;
        }

        a {
            color: white;
            /* Default green color */
            transition: color 0.3s ease;
            text-decoration: none;
        }

        a:hover {
            color: #F7C240;
            /* Bright Yellow on hover */
        }

        /* Footer section */
    </style>
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-md">
        <div class="container">
            <a href="../Home/index.html" class="navbar-brand">
                <img class="img-fluid" src="images/logo.svg" style="width: 75px;">
            </a>
            <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
                <i class="fa-solid fa-bars text-end"></i>
            </button>

            <div class="m-0 p-0 d-flex text-center">
                <div class="collapse navbar-collapse" id="navmenu">
                    <ul class="navbar-nav ms-auto">
                        <!-- Home Dropdown -->
                        <a class="nav-link" href="../Home/index.html">
                            Home
                        </a>

                        <!-- Home Dropdown -->

                        <!-- Search Dropdown -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Adoption
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="../Adoption/Adoption.html">Adoption</a>
                                <a class="dropdown-item" href="../AdoptionCart/AdoptionCart.html">My Cart</a>
                            </div>
                        </li>
                        <!-- Search Dropdown -->

                        <!-- Rescue Dropdown -->
                        <a class="nav-link" href="#">
                            Rescue
                        </a>
                        <!-- Rescue Dropdown -->

                        <!-- Store Dropdown -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Store
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="../Store/Store.html">Store</a>
                                <a class="dropdown-item" href="../StoreCart/StoreCart.html">My cart</a>
                            </div>
                        </li>
                        <!-- Store Dropdown -->

                        <!-- About us Dropdown -->
                        <a class="nav-link" href="../About us/AboutUs.html">
                            About Us
                        </a>

                        <!-- Home Dropdown -->
                    </ul>
                </div>
            </div>

            <!-- Login and signup button -->
            <div class="text-end">
                <a class="login btn" href="../Login things/Login.html" style="color: #22BB21;">Login</a>
                <a class="sign-btn btn text-white" href="../Sign-up things/Signup.html"
                    style="background-color: #4D9B36;">Sign Up</a>
            </div>
            <!-- Login and signup button -->

        </div>
    </nav>
    <!-- navbar -->

    <!-- Blogs header -->
    <section class="text-light p-5 p-lg-0 pt-lg-5 text-center text-lg-start" style="background-color: #4D9B36;">
        <div class="container">
            <div class="row align-items-center justify-content-center pb-4">

                <!-- header -->
                <div class="mb-3 text-center">
                    <h1>Blogs</h1>
                    <hr class="m-auto w-25" style="height: 3px; color: #EFF1FD;">
                </div>
                <!-- header -->

                <div class="col-lg-8 col-12">
                    <p class="lead my-4 ">
                        At <strong>Pawfect Home</strong>, our blog is your go-to space for inspiring rescue
                        stories, expert pet care advice, and behind-the-scenes updates from our shelter. We're
                        here to share the heartwarming journeys of animals finding their second chance, offer
                        valuable tips for pet owners, and highlight the incredible work our team does every day.
                        <br>
                        Whether you're a pet lover, an adopter, or someone who's passionate about animal welfare,
                        you'll find content that connects you with our mission: to provide every animal with the
                        care, love, and opportunities they deserve. From expert guidance to uplifting stories, our
                        blog aims to inform, inspire, and encourage everyone to get involved in the cause.
                        <br>
                        Join us on this incredible journey as we work to create brighter futures for animals in need
                        and help you provide the best care for your furry friends.
                    </p>


                    </p>
                </div>
                <div class="col-lg-4 col-12">
                    <img src="images/400x300.png" class="img-fluid rounded-4 h-lg-50 ">
                </div>
            </div>
        </div>
    </section>
    <!-- Blogs header -->


    <!-- Blogs -->
    <section class="Shelters my-5 p-lg-0 pt-lg-5 text-center" id="Shelters">
        <div class="container">
            <div class="row align-items-center justify-content-around">

                <!-- header -->
                <div class="mb-3 text-center">
                    <h1 class="text-dark">Welcome to Our Blog</h1>
                    <hr class="w-50 m-auto" style="height: 3px; color: #4D9B36;">
                </div>
                <!-- header -->

                <!-- Member 1 -->
                <div class="col-lg-4 col-md-6 col-12 blog-card p-0 my-3">
                    <a href="">
                        <img src="images/400x300.png" alt="Main" class="img-fluid" />
                    </a>
                    <div class="card-body px-4">
                        <a href="">
                            <h5 class="card-title mb-3">The Title Of The Blog</h5>
                        </a>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam possimus delectus qui,
                            impedit praesentium odit officiis quam et alias odio.</p>
                        <p class="d-flex justify-content-between align-items-center">
                            <span>By <a class="text-decoration-underline" href="">Shelter Name</a>
                            </span> <span>20 september 2025</span>
                        </p>
                    </div>
                </div>
                <!-- Member 1 -->

                <!-- Member 2 -->
                <div class="col-lg-4 col-md-6 col-12 blog-card p-0 my-3">
                    <a href="">
                        <img src="images/400x300.png" alt="Main" class="img-fluid" />
                    </a>
                    <div class="card-body px-4">
                        <a href="">
                            <h5 class="card-title mb-3">The Title Of The Blog</h5>
                        </a>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam possimus delectus qui,
                            impedit praesentium odit officiis quam et alias odio.</p>
                        <p class="d-flex justify-content-between align-items-center">
                            <span>By <a class="text-decoration-underline" href="">Shelter Name</a>
                            </span> <span>20 september 2025</span>
                        </p>
                    </div>
                </div>
                <!-- Member 2 -->

                <!-- Member 3 -->
                <div class="col-lg-4 col-md-6 col-12 blog-card p-0 my-3">
                    <a href="">
                        <img src="images/400x300.png" alt="Main" class="img-fluid" />
                    </a>
                    <div class="card-body px-4">
                        <a href="">
                            <h5 class="card-title mb-3">The Title Of The Blog</h5>
                        </a>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam possimus delectus qui,
                            impedit praesentium odit officiis quam et alias odio.</p>
                        <p class="d-flex justify-content-between align-items-center">
                            <span>By <a class="text-decoration-underline" href="">Shelter Name</a>
                            </span> <span>20 september 2025</span>
                        </p>
                    </div>
                </div>
                <!-- Member 3 -->

                <!-- Member 4 -->
                <div class="col-lg-4 col-md-6 col-12 blog-card p-0 my-3">
                    <a href="">
                        <img src="images/400x300.png" alt="Main" class="img-fluid" />
                    </a>
                    <div class="card-body px-4">
                        <a href="">
                            <h5 class="card-title mb-3">The Title Of The Blog</h5>
                        </a>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam possimus delectus qui,
                            impedit praesentium odit officiis quam et alias odio.</p>
                        <p class="d-flex justify-content-between align-items-center">
                            <span>By <a class="text-decoration-underline" href="">Shelter Name</a>
                            </span> <span>20 september 2025</span>
                        </p>
                    </div>
                </div>
                <!-- Member 4 -->

                <!-- Member 5 -->
                <div class="col-lg-4 col-md-6 col-12 blog-card p-0 my-3">
                    <a href="">
                        <img src="images/400x300.png" alt="Main" class="img-fluid" />
                    </a>
                    <div class="card-body px-4">
                        <a href="">
                            <h5 class="card-title mb-3">The Title Of The Blog</h5>
                        </a>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam possimus delectus qui,
                            impedit praesentium odit officiis quam et alias odio.</p>
                        <p class="d-flex justify-content-between align-items-center">
                            <span>By <a class="text-decoration-underline" href="">Shelter Name</a>
                            </span> <span>20 september 2025</span>
                        </p>
                    </div>
                </div>
                <!-- Member 5 -->

                <!-- Member 6 -->
                <div class="col-lg-4 col-md-6 col-12 blog-card p-0 my-3">
                    <a href="">
                        <img src="images/400x300.png" alt="Main" class="img-fluid" />
                    </a>
                    <div class="card-body px-4">
                        <a href="">
                            <h5 class="card-title mb-3">The Title Of The Blog</h5>
                        </a>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam possimus delectus qui,
                            impedit praesentium odit officiis quam et alias odio.</p>
                        <p class="d-flex justify-content-between align-items-center">
                            <span>By <a class="text-decoration-underline" href="">Shelter Name</a>
                            </span> <span>20 september 2025</span>
                        </p>
                    </div>
                </div>
                <!-- Member 6 -->
            </div>

        </div>

    </section>
    <!-- Blogs -->




    <!-- Footer -->
    <footer class="Footer text-white mt-5 p-lg-0 pt-lg-5">
        <div class="container text-center text-md-left">
            <div class="row justify-content-center">
                <!-- Brand and Tagline -->
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                    <img src="images/logo-white.svg" class="img-fluid" style="width: 10rem">
                    <p>"Where every paw finds a home."</p>
                </div>
                <!-- Brand and Tagline -->

                <!-- Quick Links -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold">Quick Links</h5>
                    <p><a href="../Adoption/Adoption.html">Adopt a Pet</a></p>
                    <p><a href="../Store/Store.html">Shop Pet Supplies</a></p>
                    <p><a href="#">Rescue & Donate</a></p>
                    <p><a href="#">Pet Care Guides</a></p>
                </div>
                <!-- Quick Links -->

                <!-- About Us -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold">About Us</h5>
                    <p><a href="../About us/AboutUs.html">Our Mission</a></p>
                    <p><a href="../About us/AboutUs.html">Meet the Team</a></p>
                    <p><a href="../About us/AboutUs.html">FAQs</a></p>
                </div>
                <!-- About Us -->

                <!-- Contact Info -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold">Stay Connected</h5>
                    <p><i class="fas fa-envelope mr-3"></i> pawfecthome@gmail.com</p>
                    <p><i class="fas fa-phone mr-3"></i> +123 456 7890</p>
                    <p>
                        <a href="#" class="mx-2"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="mx-2"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="mx-2"><i class="bi bi-twitter-x"></i></a>
                    </p>
                </div>
                <!-- Contact Info -->
            </div>

            <!-- Copyright -->
            <div class="row">
                <div class="col-md-12 mt-3">
                    <p class="text-center">© 2024 Pawfect Home. All rights reserved. "Together, we create paw-sitive
                        changes!"</p>
                </div>
            </div>
            <!-- Copyright -->

        </div>
    </footer>
    <!-- Footer -->



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
