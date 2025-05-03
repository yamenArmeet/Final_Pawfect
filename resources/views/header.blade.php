<!-- navbar -->

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<nav class="navbar navbar-expand-md">
    <div class="container">
        <a href="{{ route('home') }}" class="navbar-brand">
            <img class="img-fluid" src="{{ asset('assets/images/logo.svg') }}" style="width: 75px;">
        </a>
        <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
            <i class="fa-solid fa-bars text-end"></i>
        </button>
        <div class="m-0 p-0 d-flex text-center">
            <div class="collapse navbar-collapse" id="navmenu">
                <ul class="navbar-nav ms-auto">
                    <!-- Home Dropdown -->
                    <a class="nav-link" href="{{ route('home') }}">
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
                            <a class="dropdown-item" href="{{ route('adoption') }}">Adoption</a>
                            <a class="dropdown-item" href="#">My Cart</a>
                        </div>
                    </li>
                    <!-- Search Dropdown -->

                    <!-- Rescue Dropdown -->
                    <a class="nav-link" href="{{ route('donate') }}">
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
                            <a class="dropdown-item" href="{{ route('storeCard') }}">Store</a>
                            <a class="dropdown-item" href="{{ route('StoreCart') }}">My cart</a>
                        </div>
                    </li>
                    <!-- Store Dropdown -->

                    <!-- About us Dropdown -->

                    <a class="nav-link" href="{{ route('aboutUs') }}">
                        About Us
                    </a>


                    <!-- Home Dropdown -->
                </ul>
            </div>
        </div>
        <!-- Login and signup button -->


        <div class="text-end">
            @guest
                <a class="login btn" href="{{ route('login') }}" style="color: #22BB21;">Login</a>
                <a class="sign-btn btn text-white" href="{{ route('signup') }}" style="background-color: #4D9B36;">Sign
                    Up</a>
            @else
                <a class="sign-btn btn text-white" style="background-color: #4D9B36;"
                    href="{{ route('signout') }}">Logout</a>
            @endguest
        </div>
        <!-- Login and signup button -->

    </div>
</nav>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<!-- navbar -->
