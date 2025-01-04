@extends('layout')

@section('content')

    <body>

        <link rel="stylesheet" href="{{ asset('assets/css/Donate.css') }}">


        <!-- Rescue -->
        <section class="Rescue text-light p-5 p-lg-0 pt-lg-5 text-center text-lg-start" id="Home">
            <div class="container">
                <div class="row align-items-center justify-content-center pb-4">

                    <!-- header -->
                    <div class="mb-3 text-center">
                        <h1>Rescue</h1>
                        <hr class="m-auto" style="height: 3px; width: 15%; color: #EFF1FD;">
                    </div>
                    <!-- header -->

                    <div class="col-lg-8 col-12">
                        <p class="lead my-4 ">
                            At Pawfect Home, we believe every animal deserves a second chance.
                            Our Rescue section is dedicated to helping injured, abandoned, or sick pets
                            get the care they need. Whether it's providing urgent medical attention,
                            reuniting lost pets with their families, or offering them a safe place to recover,
                            our mission is to save lives and create a brighter future for animals in need.
                        </p>
                        <p class="lead my-4 ">
                            Join us in making a difference—report a pet in distress, support rescue operations,
                            or adopt a rescued pet to give them the loving home they deserve. Together,
                            we can be the voice for those who cannot speak.
                        </p>
                        <a class="btn bg-white mb-4" href="#Shelters" style="color: #4D9B36; font-weight: bold;">Save a
                            Life Today</a>
                    </div>
                    <div class="col-lg-4 col-12">
                        <img src="{{ asset('assets/images/Home.svg') }}" class="img-fluid rounded-4 h-lg-50 ">
                    </div>
                </div>
            </div>
        </section>
        <!-- Rescue -->


        <!-- Shelters -->
        <section class="Shelters my-5 p-lg-0 pt-lg-5 text-center" id="Shelters">
            <div class="container">
                <!-- header -->
                <div class="mb-3 text-center">
                    <h1 class="text-dark">Explore Shelters Ready to Help</h1>
                    <hr class="w-50 m-auto" style="height: 3px; color: #4D9B36;">
                </div>
                <!-- header -->
                <div class="row align-items-center justify-content-center">






                    <!-- Member 6 -->
                    {{-- <p>{{ $shelter->id }}</p> --}}
                    @foreach ($shelters as $shelter)
                        <div class="col-lg-4 col-md-6 col-12 pt-4 text-light">
                            <div class="card mx-auto shadow-lg" style="width: 18rem;">
                                <img src="https://via.placeholder.com/400x300" class="card-img-top mx-auto d-block"
                                    alt="Drools 3KG">
                                <div class="card-body">

                                    <h5 class="card-title mb-3">
                                        <p>{{ $shelter->name }}</p>

                                        @if ($shelter->donations->isNotEmpty())
                                            @php $totalAmount = $shelter->donations->sum('amounet'); @endphp
                                            <p>Total Donations: {{ $totalAmount }}</p>
                                        @else
                                            <p>No donations yet</p>
                                        @endif

                                    </h5>
                                    <p class="mb-2"><i class="bi bi-envelope-fill"></i>
                                        {{ $shelter->email }}
                                    </p>
                                    <p class="mb-2"><i class="bi bi-telephone-fill"></i>
                                        {{ $shelter->phone }}
                                    </p>
                                    <a href="#" class="mx-2"><i class="bi bi-facebook"></i></a>
                                    <a href="#" class="mx-2"><i class="bi bi-instagram"></i></a>
                                    <a href="#" class="mx-2"><i class="bi bi-whatsapp"></i></a>
                                    <a href="#" class="mx-2"><i class="bi bi-geo-alt-fill"></i></a>
                                    <a @if (Auth::check()) href="{{ route('donatePayment', $shelter) }}"

                                        class="btn btn-light text-center mt-3">
                                        Donate Now
                                        @else<button type="button" class="btn btn-light text-center mt-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            Donate Now
                                        </button> @endif
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-arrow-up-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0z" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>


                <!-- Member 6 -->
            </div>

            </div>

            <!-- Button trigger modal -->

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            for donation you need to login first
                            <br>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <a href="{{ route('login') }}" class="btn text-white" style="background-color:#4D9B36">Go to
                                Login</a>
                            {{-- <a href="{{ route('login') }}" class="btn btn-primary">Save changes</a=> --}}
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
    </body>
@endsection
