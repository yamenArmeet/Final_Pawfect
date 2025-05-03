@extends('layout')

@section('content')

    <body>

        <link rel="stylesheet" href="{{ asset('assets/css/Adoption.css') }}">


        <!-- Home -->
        <section class="Home bg-dark text-light p-5 p-lg-0 pt-lg-5 text-center text-sm-start" id="Home">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-8 col-md-6">
                        <h1>Find a Loving Home for Every Pet</h1>
                        <p class="lead my-4 ">
                            We focus on connecting pets with caring adopters to give them a second chance at a
                            happy life. Our goal is to simplify the adoption process, providing a platform that
                            empowers users to find their perfect furry companion. Together, we can create a brighter
                            future for pets and the families who welcome them into their hearts and homes.
                            <img src="{{ asset('assets/images/Vector.svg') }}" class="img-fluid">
                        </p>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <img class="img-fluid  mb-4 rounded-5 " src="{{ asset('assets/images/Home.svg') }}" />
                    </div>
                </div>
            </div>
        </section>
        <!-- Home -->

        <!-- Store -->
        <section class="Store my-5 p-lg-0 pt-lg-5 text-center" id="Store">
            <div class="container">
                <div class="row align-items-center justify-content-center">

                    <!-- Header -->
                    <div class="pb-3">
                        <h1 class="text-dark">Adoption</h1>
                        <hr class="w-25 m-auto" style="height: 3px; color: #4D9B36;">
                    </div>

                    <!-- Header -->

                    <!-- First item -->
                    <div class="col-xxl-3 col-lg-4 col-md-6 col-12 pt-3 text-light">
                        <div class="card mx-auto shadow-lg" style="width: 18rem;">
                            <img src="{{ asset('assets/images/400x300.png') }}" class="card-img-top mx-auto d-block"
                                alt="Pet Image">
                            <div class="card-body text-center">
                                <h5 class="card-title">Bella</h5>
                                <p class="card-text fs-5">
                                    3 years <i class="bi bi-dot"></i>
                                    Golden <i class="bi bi-dot"></i>
                                    Female
                                    Medium <i class="bi bi-dot"></i>
                                    Retriever
                                </p>

                                <div class="d-flex justify-content-around align-items-center mt-3">
                                    <a href="#" class="btn bg-light text-center" style="color:#4D9B36;">Adopt
                                        now</a>
                                    <a href="#" class="btn bg-light text-center" style="color:#4D9B36;">Add to
                                        cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- First item -->

                    <!-- Second item -->
                    <div class="col-xxl-3 col-lg-4 col-md-6 col-12 pt-3 text-light">
                        <div class="card mx-auto shadow-lg" style="width: 18rem;">
                            <img src="{{ asset('assets/images/400x300.png') }}" class="card-img-top mx-auto d-block"
                                alt="Pet Image">
                            <div class="card-body text-center">
                                <h5 class="card-title">Bella</h5>
                                <p class="card-text fs-5">
                                    3 years <i class="bi bi-dot"></i>
                                    Golden <i class="bi bi-dot"></i>
                                    Female
                                    Medium <i class="bi bi-dot"></i>
                                    Retriever
                                </p>

                                <div class="d-flex justify-content-around align-items-center mt-3">
                                    <a href="#" class="btn bg-light text-center" style="color:#4D9B36;">Adopt
                                        now</a>
                                    <a href="#" class="btn bg-light text-center" style="color:#4D9B36;">Add to
                                        cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Second item -->

                    <!-- Third item -->
                    <div class="col-xxl-3 col-lg-4 col-md-6 col-12 pt-3 text-light">
                        <div class="card mx-auto shadow-lg" style="width: 18rem;">
                            <img src="{{ asset('assets/images/400x300.png') }}" class="card-img-top mx-auto d-block"
                                alt="Pet Image">
                            <div class="card-body text-center">
                                <h5 class="card-title">Bella</h5>
                                <p class="card-text fs-5">
                                    3 years <i class="bi bi-dot"></i>
                                    Golden <i class="bi bi-dot"></i>
                                    Female
                                    Medium <i class="bi bi-dot"></i>
                                    Retriever
                                </p>

                                <div class="d-flex justify-content-around align-items-center mt-3">
                                    <a href="#" class="btn bg-light text-center" style="color:#4D9B36;">Adopt
                                        now</a>
                                    <a href="#" class="btn bg-light text-center" style="color:#4D9B36;">Add to
                                        cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Third item -->

                    <!-- Foruth item -->
                    <div class="col-xxl-3 col-lg-4 col-md-6 col-12 pt-3 text-light">
                        <div class="card mx-auto shadow-lg" style="width: 18rem;">
                            <img src="{{ asset('assets/images/400x300.png') }}" class="card-img-top mx-auto d-block"
                                alt="Pet Image">
                            <div class="card-body text-center">
                                <h5 class="card-title">Bella</h5>
                                <p class="card-text fs-5">
                                    3 years <i class="bi bi-dot"></i>
                                    Golden <i class="bi bi-dot"></i>
                                    Female
                                    Medium <i class="bi bi-dot"></i>
                                    Retriever
                                </p>

                                <div class="d-flex justify-content-around align-items-center mt-3">
                                    <a href="#" class="btn bg-light text-center" style="color:#4D9B36;">Adopt
                                        now</a>
                                    <a href="#" class="btn bg-light text-center" style="color:#4D9B36;">Add to
                                        cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Foruth item -->

                    <!-- five item -->
                    <div class="col-xxl-3 col-lg-4 col-md-6 col-12 pt-3 text-light">
                        <div class="card mx-auto shadow-lg" style="width: 18rem;">
                            <img src="{{ asset('assets/images/400x300.png') }}" class="card-img-top mx-auto d-block"
                                alt="Pet Image">
                            <div class="card-body text-center">
                                <h5 class="card-title">Bella</h5>
                                <p class="card-text fs-5">
                                    3 years <i class="bi bi-dot"></i>
                                    Golden <i class="bi bi-dot"></i>
                                    Female
                                    Medium <i class="bi bi-dot"></i>
                                    Retriever
                                </p>

                                <div class="d-flex justify-content-around align-items-center mt-3">
                                    <a href="#" class="btn bg-light text-center" style="color:#4D9B36;">Adopt
                                        now</a>
                                    <a href="#" class="btn bg-light text-center" style="color:#4D9B36;">Add to
                                        cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- five item -->

                    <!-- six item -->
                    <div class="col-xxl-3 col-lg-4 col-md-6 col-12 pt-3 text-light">
                        <div class="card mx-auto shadow-lg" style="width: 18rem;">
                            <img src="{{ asset('assets/images/400x300.png') }}" class="card-img-top mx-auto d-block"
                                alt="Pet Image">
                            <div class="card-body text-center">
                                <h5 class="card-title">Bella</h5>
                                <p class="card-text fs-5">
                                    3 years <i class="bi bi-dot"></i>
                                    Golden <i class="bi bi-dot"></i>
                                    Female
                                    Medium <i class="bi bi-dot"></i>
                                    Retriever
                                </p>

                                <div class="d-flex justify-content-around align-items-center mt-3">
                                    <a href="#" class="btn bg-light text-center" style="color:#4D9B36;">Adopt
                                        now</a>
                                    <a href="#" class="btn bg-light text-center" style="color:#4D9B36;">Add to
                                        cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- six item -->

                    <!-- seven item -->
                    <div class="col-xxl-3 col-lg-4 col-md-6 col-12 pt-3 text-light">
                        <div class="card mx-auto shadow-lg" style="width: 18rem;">
                            <img src="{{ asset('assets/images/400x300.png') }}" class="card-img-top mx-auto d-block"
                                alt="Pet Image">
                            <div class="card-body text-center">
                                <h5 class="card-title">Bella</h5>
                                <p class="card-text fs-5">
                                    3 years <i class="bi bi-dot"></i>
                                    Golden <i class="bi bi-dot"></i>
                                    Female
                                    Medium <i class="bi bi-dot"></i>
                                    Retriever
                                </p>

                                <div class="d-flex justify-content-around align-items-center mt-3">
                                    <a href="#" class="btn bg-light text-center" style="color:#4D9B36;">Adopt
                                        now</a>
                                    <a href="#" class="btn bg-light text-center" style="color:#4D9B36;">Add to
                                        cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- seven item -->

                </div>
            </div>
        </section>
        <!-- Store -->




        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
    </body>
@endsection
