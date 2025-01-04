@extends('layout')

@section('content')

<body>
    <link rel="stylesheet" href="{{ asset('assets/css/DonateInfo.css') }}">



    <!-- start of container -->
    <div class="container d-flex justify-content-center align-items-center min-vh-100">

        <!-- start of row -->
        <div class="row border rounded-5 p-3 bg-white shadow box-area">

            <!-- start of left box -->
            <div class="col-md-5 rounded-4 d-flex justify-content-center align-items-center flex-column left-box"
                style="background-color: #4A9833;">

                <!-- header -->
                <div class="my-3 text-center">
                    <h3 class="text-white">Make a Difference,<br> One Paw At a Time</h3>
                    <hr class="m-auto w-100" style="height: 3px; color: #EFF1FD;">
                </div>
                <!-- header -->

                <div class="featured-image mb-3">
                    <img src="{{ asset('assets/images/xdd.png') }}" class="img-fluid" style="height: 350px;">
                </div>
            </div>
            <!-- end of left box -->

            <!-- start of right box -->
            <div class="col-md-7 right-box">
                <form action="{{ route('donatePayment') }}" method="">
                    <div class="row align-items-center justify-content-center">
                        <div class="header-text mb-4 text-center">
                            <h2>Personal Information</h2>
                        </div>
                        <div class="input-group mb-4">
                            <input required type="text" name="FirstName"
                                class="form-control form-control-lg bg-light fs-6" placeholder="First Name">
                        </div>
                        <div class="input-group mb-4">
                            <input required type="text" name="LastName"
                                class="form-control form-control-lg bg-light fs-6" placeholder="Last Name">
                        </div>
                        <div class="input-group mb-4">
                            <input required type="text" name="email"
                                class="form-control form-control-lg bg-light fs-6" placeholder="Email Address">
                        </div>
                        <div class="input-group mb-4">
                            <input type="text" name="PhoneNumber" class="form-control form-control-lg bg-light fs-6"
                                placeholder="Phone Number" required>
                        </div>

                        <div class="input-group mt-4">
                            <button type="submit" class="btn btn-lg w-100 fs-6 text-white"
                                style="background-color: #4A9833; ">next</button>

                        </div>
                    </div>
                </form>
            </div>
            <!-- end of right box -->

        </div>
        <!-- end of row -->

    </div>
    <!-- end of container -->






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>
@endsection