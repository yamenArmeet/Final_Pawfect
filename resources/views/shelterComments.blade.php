<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bootstrap Login | Ludiflex</title>

    <!-- Bootstrap & Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <link rel="stylesheet" href="ShelterComment.css" />
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


        /* sidebar section */
        .sidebar {
            width: 220px;
            background-color: #4D9B36;
            position: sticky;
            top: 0;
            height: 100vh;
            flex-shrink: 0;
            /* box-shadow: 0 2px 8px rgba(0, 0, 0, 0.3); */
        }

        /* sidebar section */


        /* comment section */
        .comment-card {
            max-width: 450px;
            border: 1px solid #e0e0e0;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
        }

        .card-title {
            font-size: 1.25rem;
            /* Adjust font size for consistency */
            color: black;
        }

        .card-body p {
            color: black;
        }

        /* comment section */



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
            <a href="#" class="navbar-brand">
                <img class="img-fluid" src="images/logo.svg" style="width: 75px;">
            </a>
            <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
                <i class="fa-solid fa-bars text-end"></i>
            </button>

            <div class="m-0 p-0 d-flex text-center">
                <div class="collapse navbar-collapse" id="navmenu">
                    <ul class="navbar-nav ms-auto">
                        <!-- Home Dropdown -->
                        <a class="nav-link" href="#">
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
                        <a class="nav-link" href="../Rescue_Donate/RescueDonate.html">
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

    <section style="background-color: #4D9B36; width: 100%; height: 400px;">

    </section>


    <!-- Sidebar + Content Layout -->
    <main class="pt-2 d-flex">

        <!-- Sidebar -->
        <div class="sidebar container align-items-center d-flex flex-column text-white">
            <!-- Logo -->
            <img src="images/400x300.png" alt="Logo" class="img-fluid mt-3" />
            <h3 class="mt-1">Shelter Name</h3>

            <!-- Shelter Rating -->
            <div class="rating mb-3">
                ★★★★☆ <small>(4.2 / 5)</small>
            </div>

            <!-- Contact Info -->
            <div class="contact-info text-center mb-3">
                <a href="" class="d-block mb-1"><i class="bi bi-envelope fs-5"></i> info@shelter.org</a>
                <a href="" class="d-block mb-1"><i class="bi bi-telephone fs-5"></i> +962 7 1234 5678</a>
                <a href="" class="d-block mb-1"><i class="bi bi-geo-alt fs-5"></i> Amman, Jordan</a>
            </div>

            <!-- Stats -->
            <div class="stats text-center mb-3">
                <p class="mb-1"><strong>Number Of Pets:</strong> 120</p>
                <p class="mb-1"><strong>Number Of Products:</strong> 45</p>
            </div>

            <!-- Social Media Links -->
            <div class="mt-3">
                <a href="#" class="mx-3"><i class="bi bi-twitter-x"></i></a>
                <a href="#" class="mx-3"><i class="bi bi-facebook"></i></a>
                <a href="#" class="mx-3"><i class="bi bi-instagram"></i></a>
            </div>
        </div>

        <!-- Sidebar -->


        <!-- Main Content -->
        <div class="row m-0 w-100">
            <div class="col-md-12">

                <!--comment things-->
                <div class="my-5">
                    <!-- Header -->
                    <div class="pb-3">
                        <h1 class="text-dark text-center">All Comment</h1>
                        <hr class="w-25 m-auto" style="height: 3px; color: #4D9B36;">
                        <div class="justify-content-end d-flex me-2">
                            <a class="btn text-white" href="" style="background-color: #4D9B36;">View More</a>
                        </div>
                    </div>
                    <!-- Header -->

                    <!--comment card-->
                    <div class="row justify-content-center align-items-center d-flex">
                        <!--first card-->
                        <div class="col-4 p-0">
                            <div class="container my-2">
                                <div class="comment-card w-100">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="me-3 fs-2" style="color: #4D9B36;">
                                            <i class="bi bi-person-circle"></i>
                                        </div>
                                        <div>
                                            <strong>Jane Smith</strong>
                                        </div>
                                    </div>
                                    <p class="mb-0">
                                        I've been using this service for months and I'm really satisfied with the
                                        performance and support.
                                    </p>
                                    <div class="rating mb-3">
                                        ★★★★☆ <small>(4.2 / 5)</small>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!--first card-->

                        <!--second card-->
                        <div class="col-4 p-0">
                            <div class="container my-2">
                                <div class="comment-card">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="me-3 fs-2" style="color: #4D9B36;">
                                            <i class="bi bi-person-circle"></i>
                                        </div>
                                        <div>
                                            <strong>Jane Smith</strong>
                                        </div>
                                    </div>
                                    <p class="mb-0">
                                        I've been using this service for months and I'm really satisfied with the
                                        performance and support.
                                    </p>
                                    <div class="rating mb-3">
                                        ★★★★☆ <small>(4.2 / 5)</small>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!--second card-->

                        <!--third card-->
                        <div class="col-4 p-0">
                            <div class="container my-2">
                                <div class="comment-card">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="me-3 fs-2" style="color: #4D9B36;">
                                            <i class="bi bi-person-circle"></i>
                                        </div>
                                        <div>
                                            <strong>Jane Smith</strong>
                                        </div>
                                    </div>
                                    <p class="mb-0">
                                        I've been using this service for months and I'm really satisfied with the
                                        performance and support.
                                    </p>
                                    <div class="rating mb-3">
                                        ★★★★☆ <small>(4.2 / 5)</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--third card-->

                        <!--foruth card-->
                        <div class="col-4 p-0">
                            <div class="container my-2">
                                <div class="comment-card">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="me-3 fs-2" style="color: #4D9B36;">
                                            <i class="bi bi-person-circle"></i>
                                        </div>
                                        <div>
                                            <strong>Jane Smith</strong>
                                        </div>
                                    </div>
                                    <p class="mb-0">
                                        I've been using this service for months and I'm really satisfied with the
                                        performance and support.
                                    </p>
                                    <div class="rating mb-3">
                                        ★★★★☆ <small>(4.2 / 5)</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--foruth card-->

                        <!--five card-->
                        <div class="col-4 p-0">
                            <div class="container my-2">
                                <div class="comment-card">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="me-3 fs-2" style="color: #4D9B36;">
                                            <i class="bi bi-person-circle"></i>
                                        </div>
                                        <div>
                                            <strong>Jane Smith</strong>
                                        </div>
                                    </div>
                                    <p class="mb-0">
                                        I've been using this service for months and I'm really satisfied with the
                                        performance and support.
                                    </p>
                                    <div class="rating mb-3">
                                        ★★★★☆ <small>(4.2 / 5)</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--five card-->

                        <!--six card-->
                        <div class="col-4 p-0">
                            <div class="container my-2">
                                <div class="comment-card">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="me-3 fs-2" style="color: #4D9B36;">
                                            <i class="bi bi-person-circle"></i>
                                        </div>
                                        <div>
                                            <strong>Jane Smith</strong>
                                        </div>
                                    </div>
                                    <p class="mb-0">
                                        I've been using this service for months and I'm really satisfied with the
                                        performance and support.
                                    </p>
                                    <div class="rating mb-3">
                                        ★★★★☆ <small>(4.2 / 5)</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--six card-->

                        <!--seven card-->
                        <div class="col-4 p-0">
                            <div class="container my-2">
                                <div class="comment-card">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="me-3 fs-2" style="color: #4D9B36;">
                                            <i class="bi bi-person-circle"></i>
                                        </div>
                                        <div>
                                            <strong>Jane Smith</strong>
                                        </div>
                                    </div>
                                    <p class="mb-0">
                                        I've been using this service for months and I'm really satisfied with the
                                        performance and support.
                                    </p>
                                    <div class="rating mb-3">
                                        ★★★★☆ <small>(4.2 / 5)</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--seven card-->



                    </div>
                    <!--comment card-->
                </div>
                <!--comment things-->
            </div>

        </div>
        <!-- Main Content -->

    </main>



    <!-- Footer -->
    <footer class="Footer text-white mt-0 p-lg-0 pt-lg-5">
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
                    <p><a href="../Rescue_Donate/RescueDonate.html">Rescue & Donate</a></p>
                    <p><a href="../Rescue_Donate/RescueDonate.html">Pet Care Guides</a></p>
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

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
