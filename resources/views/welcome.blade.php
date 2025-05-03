@extends('layout')
@section('content')

    <body>
        <link rel="stylesheet" href="{{ asset('assets/css/index.css') }}">

        <!-- navbar -->

        <!-- navbar -->

        <!-- Home -->
        <section class="p-5 text-center Home bg-dark text-light p-lg-0 pt-lg-5 text-sm-start" id="Home">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-8 col-md-6">
                        <h1>Adopt a pet and give them home</h1>
                        <p class="my-4 lead ">
                            We focus on providing shelters and adopters with the latest and most
                            efficient tools for managing pet adoptions and supplies.
                            Our goal is to simplify the process,empowering users with
                            cutting-edge technology to create a better future for pets
                            and their forever homes. <img src="{{ asset('assets/images/Vector.svg') }}" class="img-fluid">
                        </p>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <img class="mb-4 img-fluid rounded-5 " src="{{ asset('assets/images/Home.svg') }}" />
                    </div>
                </div>
            </div>
        </section>
        <!-- Home -->

        <!-- Search -->
        <section class="Search my-5 p-lg-0 pt-lg-5 text-center" id="Search">
            <div class="container">
                <div class="row align-items-center justify-content-sm-evenly justify-content-center ">

                    <!-- header -->
                    <div class="pb-3">
                        <h1 class="text-dark">Find Your Perfect Match</h1>
                        <hr class="w-25 m-auto" style="height: 3px; color: #4D9B36;">
                    </div>
                    <p class="lead text-dark">
                        Discover pets that suit your lifestyle and needs effortlessly with our easy-to-use search feature.
                    </p>
                    <!-- header -->

                    <!-- Left box -->
                    <div class="col-lg-8 col-md-8 col-12 pt-2 mb-3">
                        <div class="card mx-auto shadow-lg p-4 rounded-4 text-white" style="width: auto; height: auto;">
                            <div class="row align-items-center g-3">
                                <!-- Icon and title -->
                                <div class="col-md-6 text-center">
                                    <i class="fas fa-dog fa-8x ms-3"></i>
                                    <h4 class="pt-2 fs-2 ">Dogs</h4>
                                </div>

                                <!-- Description -->
                                <div class="col-md-6">
                                    <p class="mb-0 fs-5">
                                        Friendly, loyal, and full of energy — perfect for active families, outdoor
                                        adventurers, and those seeking a devoted companion.
                                    </p>
                                    <a href="" class="btn btn-sm-info bg-white mt-4 w-50"> adopt now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Left box -->

                    <!-- Right box -->
                    <div class="col-lg-8 col-md-8 col-12 pt-2 mb-3">
                        <div class="card mx-auto shadow-lg p-4 rounded-4 text-white" style="width: auto; height: auto;">
                            <div class="row align-items-center g-3">

                                <!-- Description on the left (default order on larger screens, flipped for small screens) -->
                                <div class="col-md-6 order-md-1 order-2">
                                    <p class="mb-0 fs-5">
                                        Independent, graceful, and affectionate — ideal for calm homes, busy professionals,
                                        and anyone who loves quiet companionship.
                                    </p>
                                    <a href="" class="btn btn-sm-info bg-white mt-4 w-50">Adopt Now</a>
                                </div>

                                <!-- Icon and title on the right (default order on larger screens, flipped for small screens) -->
                                <div class="col-md-6 text-center order-md-2 order-1">
                                    <i class="fas fa-cat fa-8x"></i>
                                    <h4 class="pt-2 fs-2">Cats</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Right box -->

                </div>
            </div>
        </section>
        <!-- Search -->

        <!-- section between search and rescue -->
        <section class="mt-5">
            <div class="wrapper py-5">
                <div class="item item1">Adopt Love</div>
                <div class="item item2">Save Home</div>
                <div class="item item3">Give Care</div>
                <div class="item item4">Find Home</div>
            </div>
        </section>
        <!-- section between search and rescue -->

        <!-- Rescue -->
        <section class="Rescue my-5 p-lg-0 pt-lg-5 text-center" id="Rescue">
            <div class="container">
                <div class="row align-items-center justify-content-sm-evenly justify-content-center ">
                    <!-- Header -->
                    <div class="pb-3">
                        <h1 class="text-dark">Donate and Rescue</h1>
                        <hr class="w-25 m-auto" style="height: 3px; color: #4D9B36;">
                    </div>
                    <p class="lead text-dark">
                        Your donation can make a life-saving difference. Join us in our mission to rescue, care for, and
                        rehome pets in need rescue, care for, and rehome pets in need by contributing today.
                    </p>
                    <!-- Header -->

                    <!-- Left box: Donation and Sponsor -->
                    <div class="col-lg-8 col-md-8 col-12 pt-2 mb-3">
                        <div class="card mx-auto shadow-lg p-4 rounded-4 text-white" style="width: auto; height: auto;">
                            <div class="row align-items-center g-3">
                                <!-- Icon and title -->
                                <div class="col-md-6 text-center">
                                    <i class="fas fa-hand-holding-heart fa-8x"></i>
                                    <h4 class="pt-2 fs-2">Donation & Sponsor</h4>
                                </div>
                                <!-- Description -->
                                <div class="col-md-6">
                                    <p class="mb-0 fs-5">
                                        Make a donation to support our ongoing efforts in rescuing and caring for pets in
                                        need.
                                    </p>
                                    <a href="../Donate/Donate.html" class="btn btn-sm-info bg-white mt-4 w-50">
                                        Donate Now
                                        <i class="fas fa-arrow-up-right-from-square fa-1x ms-2"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Left box: Donation and Sponsor -->

                    <!-- Right box: Rescue and Help -->
                    <div class="col-lg-8 col-md-8 col-12 pt-2 mb-3">
                        <div class="card mx-auto shadow-lg p-4 rounded-4 text-white" style="width: auto; height: auto;">
                            <div class="row align-items-center g-3">
                                <!-- Description -->
                                <div class="col-md-6 order-md-1 order-2">
                                    <p class="mb-0 fs-5">
                                        Reach out to help rescue and care for pets in need. Together, we can support every
                                        animal in distress.
                                    </p>
                                    <a href="../Donate/Donate.html" class="btn btn-sm-info bg-white mt-4 w-50">
                                        Rescue Now
                                        <i class="fas fa-arrow-up-right-from-square fa-1x ms-2"></i>
                                    </a>
                                </div>

                                <!-- Icon and title -->
                                <div class="col-md-6 text-center order-md-2 order-1">
                                    <i class="fas fa-kit-medical fa-8x"></i>
                                    <h4 class="pt-2 fs-2">Rescue & Help</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Right box: Rescue and Help -->

                </div>
            </div>
        </section>
        <!-- Rescue -->

        <!-- Store -->
        <section class="my-5 text-center Store p-lg-0 pt-lg-5" id="Store">
            <div class="container">
                <div class="row align-items-center justify-content-center">

                    <!-- Header -->
                    <div class="pb-3">
                        <h1 class="text-dark">Store</h1>
                        <hr class="m-auto w-25" style="height: 3px; color: #4D9B36;">
                    </div>
                    <div class="mb-4 row align-items-center">
                        <div class="col text-start">
                            <h3>Most Popular Product</h3>
                        </div>
                        <div class="col text-end">
                            <a href="{{ route('storeCard') }}" class="btn text-light"
                                style="background-color: #4D9B36;">View More</a>
                        </div>
                    </div>
                    <!-- Header -->

                    <!-- left box -->
                    <div class="pt-3 col-xxl-3 col-lg-4 col-md-6 col-12 text-light">
                        <div class="mx-auto shadow-lg card" style="width: 18rem;">
                            <img src="{{ asset('assets/images/Drools.svg') }}" class="mx-auto card-img-top d-block"
                                alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Drools | 3KG</h5>
                                <p class="card-text">Adult chicken and egg Egg, Chicken 3 kg Dry Adult Dog Food</p>
                                <a href="#" class="btn bg-light" style="color:#4D9B36;">Go to Store</a>
                            </div>
                        </div>
                    </div>
                    <!-- left box -->

                    <!-- center box -->
                    <div class="pt-3 col-xxl-3 col-lg-4 col-md-6 col-12 text-light">
                        <div class="mx-auto shadow-lg card" style="width: 18rem;">
                            <img src="{{ asset('assets/images/Canine.svg') }}" class="mx-auto card-img-top d-block"
                                alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Canine Creek 4 KG</h5>
                                <p class="card-text">Adult chicken and egg Egg, Chicken 3 kg Dry Adult Dog Food</p>
                                <a href="#" class="btn bg-light" style="color:#4D9B36;">Go to Store</a>
                            </div>
                        </div>
                    </div>
                    <!-- center box -->

                    <!-- right box -->
                    <div class="pt-3 col-xxl-3 col-lg-4 col-md-6 col-12 text-light">
                        <div class="mx-auto shadow-lg card" style="width: 18rem;">
                            <img src="{{ asset('assets/images/Biscork.svg') }}" class="mx-auto card-img-top d-block"
                                alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Biscork Biscuits</h5>
                                <p class="card-text">Adult chicken and egg Egg, Chicken Dry Adult Dog Food</p>
                                <a href="#" class="btn bg-light" style="color:#4D9B36;">Go to Store</a>
                            </div>
                        </div>
                    </div>
                    <!-- right box -->

                    <!-- right box -->
                    <div class="pt-3 col-xxl-3 col-lg-4 col-md-6 col-12 text-light">
                        <div class="mx-auto shadow-lg card" style="width: 18rem;">
                            <img src="{{ asset('assets/images/Biscork.svg') }}" class="mx-auto card-img-top d-block"
                                alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Biscork Biscuits</h5>
                                <p class="card-text">Adult chicken and egg Egg, Chicken Dry Adult Dog Food</p>
                                <a href="#" class="btn bg-light" style="color:#4D9B36;">Go to Store</a>
                            </div>
                        </div>
                    </div>
                    <!-- right box -->
                </div>
            </div>
        </section>
        <!-- Store -->

        <!-- shelters -->
        <section class="my-5 text-center Shelters p-lg-0 pt-lg-5" id="Shelters">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <!-- Header -->
                    <div class="pb-3">
                        <h1 class="text-dark">Search for Animal Shelters</h1>
                        <hr class="m-auto w-25" style="height: 3px; color: #4D9B36;">
                    </div>
                    <!-- Header -->

                    <!-- left box -->
                    <div class="pt-2 col-lg-4 col-md-6 col-12 text-light">
                        <div class="mx-auto shadow-lg card" style="width: 18rem; background-color: #4D9B36;">
                            <a href="">
                                <img src="{{ asset('assets/images/Mainely.jpeg') }}" class="mx-auto card-img-top d-block"
                                    alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Mainely Mutts Animal Rescue</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- left box -->

                    <!-- center box -->
                    <div class="pt-2 col-lg-4 col-md-6 col-12 text-light">
                        <div class="mx-auto shadow-lg card" style="width: 18rem; background-color: #4D9B36;">
                            <a href="">
                                <img src="{{ asset('assets/images/Franklin.jpeg') }}" class="mx-auto card-img-top d-block"
                                    alt="..." style="max-height: 8rem;">
                                <div class="card-body">
                                    <h5 class="card-title">Franklin County Animal Shelter</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- center box -->

                    <!-- right box -->
                    <div class="pt-2 col-lg-4 col-md-6 col-12 text-light">
                        <div class="mx-auto shadow-lg card" style="width: 18rem; background-color: #4D9B36;">
                            <a href="">
                                <img src="{{ asset('assets/images/Motley.jpeg') }}" class="mx-auto card-img-top d-block"
                                    alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Motley Mutts Rescue</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- right box -->

                </div>
            </div>
        </section>
        <!-- shelters -->

        <!-- Popular Questions
                            need to re-create
                            -->
        <section class="my-5 text-center PQ p-lg-0 pt-lg-5" id="Popular Questions">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <!-- Header -->
                    <div class="pb-3">
                        <h1 class="text-dark">Popular Questions</h1>
                        <hr class="m-auto w-25" style="height: 3px; color: #4D9B36;">
                    </div>
                    <!-- Header -->

                    <!-- Accordion Content -->
                    <div class="pt-2 col-lg-8 col-md-6 col-12 text-light">
                        <div class=" accordion" id="accordionExample">
                            <!-- Accordion Item 1 -->
                            <div class="accordion-item text-dark">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Accordion Item #1
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>This is the first item's accordion body.</strong> It is shown by default
                                        until the collapse plugin adds the appropriate classes.
                                    </div>
                                </div>
                            </div>
                            <!-- Accordion Item 1 -->

                            <!-- Accordion Item 2 -->
                            <div class="accordion-item text-dark">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Accordion Item #2
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>This is the second item's accordion body.</strong> It is hidden by default
                                        until the collapse plugin adds the appropriate classes.
                                    </div>
                                </div>
                            </div>
                            <!-- Accordion Item 2 -->

                            <!-- Accordion Item 3 -->
                            <div class="accordion-item text-dark">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        Accordion Item #3
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>This is the third item's accordion body.</strong> You can modify this
                                        content to suit your needs.
                                    </div>
                                </div>
                            </div>
                            <!-- Accordion Item 3 -->

                            <!-- Accordion Item 4 -->
                            <div class="accordion-item text-dark">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="false"
                                        aria-controls="collapseFour">
                                        Accordion Item #4
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>This is the fourth item's accordion body.</strong> You can add custom
                                        content here.
                                    </div>
                                </div>
                            </div>
                            <!-- Accordion Item 4 -->

                            <!-- Accordion Item 5 -->
                            <div class="accordion-item text-dark">
                                <h2 class="accordion-header" id="headingFive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFive" aria-expanded="false"
                                        aria-controls="collapseFive">
                                        Accordion Item #5
                                    </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>This is the fifth item's accordion body.</strong> Customize this content as
                                        needed.
                                    </div>
                                </div>
                            </div>
                            <!-- Accordion Item 5 -->
                        </div>
                    </div>
                    <!-- Accordion Content -->

                </div>
            </div>
        </section>
        <!-- Popular Questions -->

        <!-- Footer -->


        <!-- Footer -->

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
    </body>
@endsection
