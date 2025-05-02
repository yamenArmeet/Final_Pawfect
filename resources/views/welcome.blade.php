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
        <section class="my-5 text-center Search p-lg-0 pt-lg-5" id="Search">
            <div class="container">
                <div class="row align-items-center justify-content-sm-evenly justify-content-center ">

                    <!-- header -->
                    <div class="pb-3">
                        <h1 class="text-dark">Find Your Perfect Match</h1>
                        <hr class="m-auto w-25" style="height: 3px; color: #4D9B36;">
                    </div>
                    <p class="lead text-dark">
                        Discover pets that suit your lifestyle and needs effortlessly with our easy-to-use search feature.
                    </p>
                    <!-- header -->

                    <!-- left box -->
                    <div class="pt-2 mb-3 col-lg-4 col-md-5 col-12 text-light">
                        <div class="mx-auto card rounded-5"
                            style="box-shadow: 10px 10px 15px rgba(0, 0, 0, 0.5); border-radius: 15px;">
                            <a href="{{ route('donate') }}">
                                <img src="{{ asset('assets/images/dog (1).png') }}" class="img-fluid">
                                <h2 class="pt-2">Dogs</h2>
                            </a>
                        </div>
                    </div>

                    <!-- left box -->

                    <!-- right box -->
                    <div class="pt-2 mb-3 col-lg-4 col-md-5 col-12 text-light">
                        <div class="mx-auto card rounded-5"
                            style="box-shadow: 10px 10px 15px rgba(0, 0, 0, 0.5); border-radius: 15px;">
                            <a href="{{ route('donate') }}">
                                <img src="{{ asset('assets/images/cat (1).png') }}" class="img-fluid">
                                <h2 class="pt-2">Cats</h2>
                            </a>
                        </div>
                    </div>
                    <!-- right box -->

                </div>
            </div>
        </section>
        <!-- Search -->

        <!-- Rescue -->
        <section class="my-5 text-center Rescue p-lg-0 pt-lg-5" id="Rescue">
            <div class="container">
                <div class="row align-items-center justify-content-sm-evenly justify-content-center ">
                    <!-- Header -->
                    <div class="pb-3">
                        <h1 class="text-dark">Donate and Rescue</h1>
                        <hr class="m-auto w-25" style="height: 3px; color: #4D9B36;">
                    </div>
                    <p class="lead text-dark">
                        Your donation can make a life-saving difference. Join us in our mission to rescue, care for, and
                        rehome pets in need rescue, care for, and rehome pets in need by contributing today.
                    </p>
                    <!-- Header -->

                    <!-- left box -->
                    <div class="mb-3 col-lg-4 col-md-5 col-12 text-dark">
                        <div class="pt-4 mx-auto card "
                            style="box-shadow: 10px 10px 15px rgba(0, 0, 0, 0.5); border-radius: 15px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor"
                                class="bi bi-cash-coin card-img-top text-light" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8m5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0" />
                                <path
                                    d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195z" />
                                <path
                                    d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083q.088-.517.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1z" />
                                <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 6 6 0 0 1 3.13-1.567" />
                            </svg>
                            <div class="card-body">
                                <h5 class="card-title">Donation and Sponsor</h5>
                                <p class="card-text">
                                    Make a donation to support our ongoing efforts in rescuing and caring for pets in need.
                                </p>
                                <a href="#" class="mt-3 text-center btn btn-light">
                                    Donate Now
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-arrow-up-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- left box -->

                    <!-- right box -->
                    <div class="mb-3 col-lg-4 col-md-5 col-12 text-dark">
                        <div class="pt-4 mx-auto card "
                            style="box-shadow: 10px 10px 15px rgba(0, 0, 0, 0.5); border-radius: 15px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor"
                                class="bi bi-heart-pulse card-img-top text-light" viewBox="0 0 16 16">
                                <path
                                    d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053.918 3.995.78 5.323 1.508 7H.43c-2.128-5.697 4.165-8.83 7.394-5.857q.09.083.176.171a3 3 0 0 1 .176-.17c3.23-2.974 9.522.159 7.394 5.856h-1.078c.728-1.677.59-3.005.108-3.947C13.486.878 10.4.28 8.717 2.01zM2.212 10h1.315C4.593 11.183 6.05 12.458 8 13.795c1.949-1.337 3.407-2.612 4.473-3.795h1.315c-1.265 1.566-3.14 3.25-5.788 5-2.648-1.75-4.523-3.434-5.788-5" />
                                <path
                                    d="M10.464 3.314a.5.5 0 0 0-.945.049L7.921 8.956 6.464 5.314a.5.5 0 0 0-.88-.091L3.732 8H.5a.5.5 0 0 0 0 1H4a.5.5 0 0 0 .416-.223l1.473-2.209 1.647 4.118a.5.5 0 0 0 .945-.049l1.598-5.593 1.457 3.642A.5.5 0 0 0 12 9h3.5a.5.5 0 0 0 0-1h-3.162z" />
                            </svg>
                            <div class="card-body">
                                <h5 class="card-title">Rescue and Help</h5>
                                <p class="card-text">
                                    Reach out to us to help rescue and care for pets in need. So, we can help all pets.
                                </p>
                                <a href="#" class="mt-3 text-center btn btn-light">
                                    Rescue Now
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-arrow-up-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- right box -->

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
                                <img src="{{ asset('assets/images/Franklin.jpeg') }}"
                                    class="mx-auto card-img-top d-block" alt="..." style="max-height: 8rem;">
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
