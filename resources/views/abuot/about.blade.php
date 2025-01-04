@extends('layout')
@section('content')

    <body>
        <link rel="stylesheet" href="{{ asset('assets/css/AboutUs.css') }}">




        <!-- Our Mission -->
        <section class="Our-mission text-light p-5 p-lg-0 pt-lg-5 text-center text-lg-start" id="Home">
            <div class="container">
                <div class="row align-items-center justify-content-center pb-4">

                    <!-- header -->
                    <div class="mb-3 text-center">
                        <h1>Our Mission</h1>
                        <hr class="w-25 m-auto" style="height: 3px; color: #EFF1FD;">
                    </div>
                    <!-- header -->

                    <div class="col-lg-8 col-12">
                        <p class="lead my-4 ">
                            At Pawfect Home, we are driven by a singular mission: to create a world where every pet has
                            a loving home. Our platform bridges the gap between shelters and adopters, simplifying the
                            adoption process and providing a seamless experience for all parties involved.
                            We are committed to improving animal welfare by supporting shelters with tools to manage
                            adoptions efficiently, offering pet owners guidance on care, and connecting animal lovers
                            to the resources they need.
                        </p>
                        <p class="lead my-4 ">
                            Through innovative technology, we empower users to make informed decisions, access necessary
                            supplies, and learn how to care for their pets effectively.Our focus is on sustainability,
                            community building, and fostering a sense of shared responsibility for animal welfare.
                            By collaborating with shelters, veterinarians, and animal rescue groups, we aim to ensure
                            that no pet is left behind.
                        </p>
                    </div>
                    <div class="col-lg-4 col-12">
                        <img class="img-fluid  mb-4 rounded-5 " src="{{ asset('assets/images/Home.svg') }}" />
                    </div>
                </div>
            </div>
        </section>
        <!-- Our Mission -->


        <!-- Meet the team -->
        <section class="my-5 p-lg-0 pt-lg-5 text-center">
            <div class="container">
                <div class="row align-items-center justify-content-center">

                    <!-- header -->
                    <div class="mb-3 text-center">
                        <h1 class="text-dark">Meet the team</h1>
                        <hr class="w-25 m-auto" style="height: 3px; color: #4D9B36;">
                    </div>
                    <!-- header -->

                    <!-- Member 1 -->
                    <div class="col-lg-4 col-md-6 col-12 pt-2 text-light">
                        <div class="card mx-auto shadow-lg" style="width: 18rem;">
                            <img src="https://via.placeholder.com/400x300" class="card-img-top mx-auto d-block"
                                alt="Drools 3KG">
                            <div class="card-body">
                                <h5 class="card-title mb-3">yamen</h5>
                                <p class="card-text mb-2">Front-End Developer<br>
                                    team ledr</p>
                                <a href="#" class="mx-2"><i class="bi bi-linkedin"></i></a>
                                <a href="#" class="mx-2"><i class="bi bi-envelope-at-fill"></i></a>
                                <a href="https://wa.me/9620780144284" target="_blank" class="mx-2"><i
                                        class="bi bi-whatsapp"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Member 1 -->

                    <!-- Member 2 -->
                    <div class="col-lg-4 col-md-6 col-12 pt-2 text-light">
                        <div class="card mx-auto shadow-lg" style="width: 18rem;">
                            <img src="https://via.placeholder.com/400x300" class="card-img-top mx-auto d-block"
                                alt="Drools 3KG">
                            <div class="card-body">
                                <h5 class="card-title mb-3">al ared </h5>
                                <p class="card-text mb-2">UI/UX Designer</p>
                                <a href="#" class="mx-2"><i class="bi bi-linkedin"></i></a>
                                <a href="#" class="mx-2"><i class="bi bi-envelope-at-fill"></i></a>
                                <a href="https://wa.me/796260469" class="mx-2"><i class="bi bi-whatsapp"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Member 2 -->

                    <!-- Member 3 -->
                    <div class="col-lg-4 col-md-6 col-12 pt-2 text-light">
                        <div class="card mx-auto shadow-lg" style="width: 18rem;">
                            <img src="https://via.placeholder.com/400x300" class="card-img-top mx-auto d-block"
                                alt="Drools 3KG">
                            <div class="card-body">
                                <h5 class="card-title mb-3">bou s3oud 3</h5>
                                <p class="card-text mb-2">Back-End Developer</p>
                                <a href="#" class="mx-2"><i class="bi bi-linkedin"></i></a>
                                <a href="#" class="mx-2"><i class="bi bi-envelope-at-fill"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Member 3 -->

                    <!-- Member 4 -->
                    <div class="col-lg-4 col-md-6 col-12 pt-4 text-light">
                        <div class="card mx-auto shadow-lg" style="width: 18rem;">
                            <img src="https://via.placeholder.com/400x300" class="card-img-top mx-auto d-block"
                                alt="Drools 3KG">
                            <div class="card-body">
                                <h5 class="card-title mb-3">jaser</h5>
                                <p class="card-text mb-2">Back-End Developer</p>
                                <a href="#" class="mx-2"><i class="bi bi-linkedin"></i></a>
                                <a href="#" class="mx-2"><i class="bi bi-envelope-at-fill"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Member 4 -->

                    <!-- Member 5 -->
                    <div class="col-lg-4 col-md-6 col-12 pt-4 text-light">
                        <div class="card mx-auto shadow-lg" style="width: 18rem;">
                            <img src="https://via.placeholder.com/400x300" class="card-img-top mx-auto d-block"
                                alt="Drools 3KG">
                            <div class="card-body">
                                <h5 class="card-title mb-3">edd al manek 5</h5>
                                <p class="card-text mb-2">Back-End Developer</p>
                                <a href="#" class="mx-2"><i class="bi bi-linkedin"></i></a>
                                <a href="#" class="mx-2"><i class="bi bi-envelope-at-fill"></i></a>
                                <a href="https://wa.me/785059897" class="mx-2"><i class="bi bi-whatsapp"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Member 5 -->
                </div>

            </div>

        </section>
        <!-- Meet the team -->







        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
    </body>
@endsection
