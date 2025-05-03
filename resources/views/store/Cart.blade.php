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
    <link rel="stylesheet" href="MyCartStore.css">
    <title>Pawfect Home</title>
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


        /* nav bar things*/
        .navbar .navbar-nav .nav-link {
            color: black;
            font-family: "Irish Grover", system-ui;
        }

        .sign-btn:hover {
            text-decoration: none;
            color: white;
            font-weight: bold;
        }

        .login:hover {
            color: #22BB21;
            font-weight: bold;
            text-decoration: none;
        }

        /* nav bar things*/


        /* cart section */
        .cart-container {
            padding: 40px 0;
        }

        .product-img {
            width: 60px;
            height: 60px;
            object-fit: cover;
            border-radius: 8px;
        }

        .product-info small {
            color: #888;
        }

        .cart-totals {
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
        }

        .quantity-control input {
            width: 50px;
            text-align: center;
        }

        .btn-dark {
            width: 100%;
            padding: 12px;
        }

        .form-control-sm {
            width: auto;
            display: inline-block;
        }

        /* cart section */


        /* Footer section */
        footer {
            background-color: #4D9B36;
        }

        a i {
            font-size: 2rem;
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

            <div class="collapse navbar-collapse" id="navmenu">
                <ul class="navbar-nav ms-auto">
                    <!-- Home Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Home
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#Home">Home</a>
                            <a class="dropdown-item" href="#Search">Search</a>
                            <a class="dropdown-item" href="#Rescue">Rescue</a>
                            <a class="dropdown-item" href="#Store">Store</a>
                            <a class="dropdown-item" href="#Shelters">Shelters</a>
                            <a class="dropdown-item" href="#Popular Questions">Popular Questions</a>
                        </div>
                    </li>
                    <!-- Home Dropdown -->

                    <!-- Search Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Search
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                    <!-- Search Dropdown -->

                    <!-- Rescue Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Rescue
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                    <!-- Rescue Dropdown -->

                    <!-- Store Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Store
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                    <!-- Store Dropdown -->
                </ul>
            </div>

            <!-- Login and signup button -->
            <div class="text-end">
                <a class="login btn" href="#" style="color: #22BB21;">Login</a>
                <a class="sign-btn btn text-white" href="#" style="background-color: #4D9B36;">Sign Up</a>
            </div>
            <!-- Login and signup button -->

        </div>
    </nav>
    <!-- navbar -->


    <section class="p-lg-0 pt-lg-5">
        <div class="container cart-container">
            <div class="row justify-content-center ">
                <!-- Left side: Product list -->
                <div class="col-lg-8">
                    <table class="table align-middle">
                        <thead class="text-center" style="background-color: #4D9B36; color: white;">
                            <tr>
                                <th style="width: 250px;">Product</th>
                                <th>Price</th>
                                <th style="width: 200px;">Quantity</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody class="text-center" style="background-color: white;">
                            <!-- Product 1 -->
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="https://placehold.co/60x60" class="product-img mx-3"
                                            alt="Clock">
                                        <div class="product-info ms-3">
                                            <div>Table Clock</div>
                                            <small>Color: Pink</small>
                                        </div>
                                    </div>
                                </td>
                                <td>$23.00</td>
                                <td>
                                    <div class="input-group quantity-control">
                                        <button class="btn btn-outline-danger btn-sm">-</button>
                                        <input type="text" class="form-control form-control-sm"
                                            style="width: 50px;" value="1">
                                        <button class="btn btn-outline-success btn-sm">+</button>
                                    </div>
                                </td>
                                <td>$23.00</td>
                            </tr>

                            <!-- Product 2 -->
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="https://placehold.co/60x60" class="product-img mx-3"
                                            alt="Pot">
                                        <div class="product-info ms-3">
                                            <div>Designer Pot</div>
                                            <small>Color: Brown</small>
                                        </div>
                                    </div>
                                </td>
                                <td>$35.00</td>
                                <td>
                                    <div class="input-group quantity-control">
                                        <button class="btn btn-outline-danger btn-sm">-</button>
                                        <input type="text" class="form-control form-control-sm" value="2">
                                        <button class="btn btn-outline-success btn-sm">+</button>
                                    </div>
                                </td>
                                <td>$70.00</td>
                            </tr>

                            <!-- Product 3 -->
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="https://placehold.co/60x60" class="product-img mx-3"
                                            alt="Mug">
                                        <div class="product-info ms-3">
                                            <div>Ceramic Mug</div>
                                            <small>Color: White</small>
                                        </div>
                                    </div>
                                </td>
                                <td>$15.00</td>
                                <td>
                                    <div class="input-group quantity-control ">
                                        <button class="btn btn-outline-danger btn-sm">-</button>
                                        <input type="text" class="form-control form-control-sm" value="1">
                                        <button class="btn btn-outline-success btn-sm">+</button>
                                    </div>
                                </td>
                                <td>$15.00</td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="d-flex justify-content-between mt-4">
                        <button class="btn btn-danger me-2">Empty cart</button>
                    </div>
                </div>

                <!-- Right side: Cart totals -->
                <div class="col-lg-4">
                    <div class="cart-totals">
                        <h5>Cart totals</h5>
                        <hr>
                        <div class="d-flex justify-content-between mb-2">
                            <span>Subtotal</span>
                            <strong>$405.00</strong>
                        </div>

                        <div class="mb-3">
                            <label class="form-label d-block">Shipping</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="shipping" checked>
                                <label class="form-check-label">Free shipping</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="shipping">
                                <label class="form-check-label">Flat: $12.00</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="shipping">
                                <label class="form-check-label">Local pickup</label>
                            </div>
                        </div>

                        <div class="d-flex justify-content-between mb-3">
                            <strong>Total</strong>
                            <strong>$405.00</strong>
                        </div>
                        <small class="text-muted">(Includes $19.29 tax)</small>

                        <button class="btn mt-3 text-white"
                            style="width: 100%; padding: 12px; background-color: #4D9B36;">Proceed to checkout</button>
                    </div>
                </div>
            </div>
        </div>



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
                        <p><a href="#">Adopt a Pet</a></p>
                        <p><a href="#">Shop Pet Supplies</a></p>
                        <p><a href="#">Donate & Sponsor</a></p>
                        <p><a href="#">Pet Care Guides</a></p>
                    </div>
                    <!-- Quick Links -->

                    <!-- About Us -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                        <h5 class="text-uppercase mb-4 font-weight-bold">About Us</h5>
                        <p><a href="#">Our Mission</a></p>
                        <p><a href="#">Meet the Team</a></p>
                        <p><a href="#">FAQs</a></p>
                        <p><a href="#">Contact Us</a></p>
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
                        <p class="text-center">© 2024 Pawfect Home. All rights reserved. "Together, we create
                            paw-sitive changes!"</p>
                    </div>
                </div>
                <!-- Copyright -->
            </div>
        </footer>
        <!-- Footer -->

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>

        <script></script>
</body>

</html>
