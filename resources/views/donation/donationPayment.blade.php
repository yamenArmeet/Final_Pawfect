@extends('layout')
@section('content')

    <body>

        <link rel="stylesheet" href="{{ asset('assets/css/DonatePayment.css') }}">


        <!-- start of container -->
        <div class="container d-flex justify-content-center align-items-center min-vh-100">

            <!-- start of row -->
            <div class="row border rounded-5 p-3 bg-white shadow box-area">

                <!-- start of left box -->
                <div class="col-md-5 rounded-4 d-flex justify-content-center align-items-center flex-column left-box"
                    style="background-color: #4A9833;">
                    <!-- header -->
                    <div class="mb-3 text-center">
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
                    <form action="{{ route('save.donation', $shelter) }}" method="post">
                        @csrf
                        <div class="row align-items-center justify-content-center">
                            <div class="header-text mb-4 text-center">
                                <h2>Make a Difference Today</h2>
                            </div>
                            <div class="input-group mb-4">
                                <input required type="text" name="cardName"
                                    class="form-control form-control-lg bg-light fs-6" placeholder="Name on Card">
                            </div>
                            <div class="input-group mb-4">
                                <input required type="text" name="cardNumber"
                                    class="form-control form-control-lg bg-light fs-6" placeholder="Card Number">
                            </div>
                            <div class="input-group mb-4" style="width: 50%;">
                                <input required type="text" name="cardDate"
                                    class="form-control form-control-lg bg-light fs-6" placeholder="Card Date (mm/yy)">
                            </div>
                            <div class="input-group mb-4" style="width: 50%;">
                                <input required type="text" name="cardCvv"
                                    class="form-control form-control-lg bg-light fs-6" placeholder="Card CVV">
                            </div>
                            <div class="input-group mb-4">
                                <input type="text" name="amount" class="form-control form-control-lg bg-light fs-6"
                                    placeholder="Amount of Donation" required>
                            </div>

                            <div class="input-group mt-4">
                                <button type="submit" class="btn btn-lg w-100 fs-6 text-white"
                                    style="background-color: #4A9833;">Donate now</button>
                                {{-- <a href="../Login things/Login.html" class="btn btn-lg w-100 fs-6 text-white" --}}
                                {{-- style="background-color: #4A9833;">Donate now</a> --}}
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
