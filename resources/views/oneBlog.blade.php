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
    <link rel="stylesheet" href="OneBlog.css">
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

        .btn {
            transition: box-shadow 0.3s ease, transform 0.3s ease;
        }

        .btn:hover {
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            transform: scale(1.05);
            /* Slightly enlarge */
        }

        /* button transform */

        /*share icons*/
        div.share-icons a {
            color: black;
            /* Default green color */
            transition: color 0.3s ease;
            text-decoration: none;
        }

        div.share-icons a:hover {
            color: #F7C240;
        }

        /*share icons*/

        /*textarea*/
        .comment-textarea {
            resize: none;
            height: 300px;
            background-color: #EFF1FD;
            width: 1000px;
        }

        /*textarea*/

        /* Footer section */
        footer {
            background-color: #4D9B36;
        }

        footer p i {
            font-size: 20px;
        }

        footer a i {
            font-size: 26px;
        }

        footer a {
            color: white;
            /* Default green color */
            transition: color 0.3s ease;
            text-decoration: none;
        }

        footer a:hover {
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

    <section class="d-flex align-items-center justify-content-center flex-column text-white text-center"
        style="background-color: #4D9B36; width: 100%; height: 300px;">
        <span class="badge bg-primary text-white mb-2">BLOG</span>
        <h1 class="blog-title mt-2 mb-2" style="color: white; font-weight: bold; font-size: 2rem;">
            Blog Tiltle
        </h1>
    </section>

    <section>
        <div class="container mt-5 d-flex justify-content-around align-items-center">
            <div>
                <p class="mb-0">Comment (0)</p>
            </div>
            <div class="d-flex gap-2 share-icons">
                <a href="" class="fs-4 mx-2">
                    <i class="bi bi-facebook"></i>
                </a>
                <a href="" class="fs-4 mx-2">
                    <i class="bi bi-twitter fs-4 mx-2"></i>
                </a>
                <a href="" class="fs-4 mx-2">
                    <i class="bi bi-linkedin fs-4 mx-2"></i>
                </a>
                <a href="" class="fs-4 mx-2">
                    <i class="bi bi-whatsapp fs-4 mx-2"></i>
                </a>
                <a href="" class="fs-4 mx-2">
                    <i class="bi bi-share-fill fs-4 mx-2"></i>
                </a>
            </div>
        </div>

        <div class="blog-section container my-5 py-5" style="max-width: 1100px;">
            <p style="line-height: 2.5;">
                <strong>Blog Title</strong>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ad illo laudantium expedita dolores
                voluptates est iure sequi? Suscipit eaque magnam, totam est molestias eius minima alias qui,
                nisi beatae nobis minus expedita. Quibusdam voluptatum illo nostrum non? Laudantium, ea vitae quam
                fugit ducimus, vel optio debitis eos, eligendi nemo aliquid impedit. Quae maxime at quaerat excepturi
                aliquam possimus vitae doloremque ex corrupti? Atque corporis assumenda quam ut nemo nam quis
                voluptatibus facere neque odio aperiam quod tenetur, nulla repudiandae optio blanditiis, incidunt
                similique eveniet vel quae debitis placeat provident sunt! Dignissimos provident quas voluptatibus
                debitis quam qui velit sed sequi, perferendis, eaque, ipsa aliquid. Veniam omnis est ratione dolorum
                qui pariatur reiciendis suscipit dolorem voluptatibus dolores, ipsa facilis minus eos. Molestias,
                sunt esse consectetur id doloremque aut possimus aperiam sequi accusamus libero cumque architecto
                quod inventore ut eius, quos natus? Dignissimos corporis adipisci itaque facere sit consectetur!
                Pariatur quisquam ea, repellendus optio praesentium a nostrum laboriosam atque dolorem! Natus
                dignissimos alias aspernatur tempore quo ipsum. Aut facilis hic tenetur eveniet! Aliquam, est! Neque
                iure assumenda suscipit nihil animi error facere officia impedit eaque libero non id fugiat,
                voluptas excepturi atque qui inventore voluptatem provident aut earum in tenetur similique
                perspiciatis.
            </p>
        </div>
    </section>



    <div class="container comment-box mt-5 p-3 rounded-3" style="border: 1px solid #dee2e6;">
        <h4 class="text-center mb-4">Comments</h4>


        <form>
            <div class="mb-3 d-flex justify-content-center">
                <textarea class="form-control comment-textarea" placeholder="write your comments"></textarea>
            </div>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn px-4 text-white" style="background-color: #4D9B36;">Post
                    Comment</button>
            </div>
        </form>
    </div>


    <!-- Footer -->
    <footer class="text-white mt-5 p-lg-0 pt-lg-5">
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
