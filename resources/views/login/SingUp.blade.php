<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">





    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    {{-- <link rel="stylesheet" href="Signup.css"> --}}
    <link rel="stylesheet" href="{{ asset('assets/css/Signup.css') }}?v={{ time() }}">
    <title>Boostrap Login | Ludiflex</title>
</head>



<body>

    <!-- start of container -->
    <div class="container d-flex justify-content-center align-items-center min-vh-100">

        <!-- start of row -->
        <div class="row border rounded-5 p-3 bg-white shadow box-area">

            <!-- start of left box -->
            <div class="col-lg-6 col-md-5 rounded-4 d-flex justify-content-center align-items-center flex-column left-box"
                style="background-color: #4A9833;">
                <div class="text-white fs-3 mt-3" style="font-weight: 600;  ">
                    <p>Join us</p>
                    <hr>
                </div>
                <div class="featured-image mb-3">
                    <img src="{{ asset('assets/images/Paws.png') }}" class="img-fluid" style="height: 450px;">
                </div>
            </div>
            <!-- end of left box -->

            <!-- start of right box -->
            <div class="col-lg-6 col-md-7 right-box">
                <form action="{{ route('register.custom') }}" method="POST">
                    @csrf

                    <div class="row align-items-center justify-content-center">
                        <div class="header-text mb-4 text-center">
                            <h2>Creat Account</h2>
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" name="name" id="name"
                                class="form-control form-control-lg bg-light fs-6" placeholder="Full Name" required
                                autofocus>

                            @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                        </div>




                        <div class="input-group mb-3">
                            <input type="text" id="email_address" name="email"
                                class="form-control form-control-lg bg-light fs-6" required placeholder="Email Address">
                            @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>


                        <div class="input-group mb-3">
                            <input type="text" id="email_address" name="phone"
                                class="form-control form-control-lg bg-light fs-6" required placeholder="phone Address">
                            @if ($errors->has('phone'))
                                <span class="text-danger">{{ $errors->first('phone') }}</span>
                            @endif
                        </div>







                        <div class="input-group mb-3">
                            <input type="password" name="password" id="password" required
                                class="form-control form-control-lg bg-light fs-6" placeholder="Password">
                            @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                        </div>



                        {{-- <div class="input-group mb-4">
                            <input type="text" name="PhoneNumber" class="form-control form-control-lg bg-light fs-6"
                                placeholder="Phone Number">
                        </div> --}}

                        <div class="row text-start mb-4" style="width:90%">
                            <small>Already have an account? <a href="{{ route('login') }}">Login</a></small>
                        </div>




                        <div class="input-group mb-3">
                            <button type="submit" class="btn-creat btn btn-lg w-100 fs-6 text-white">Create
                                Account</button>
                            {{-- <a href="../Login things/Login.html"
                                class="btn-creat btn btn-lg w-100 fs-6 text-white">Create Account</a> --}}
                        </div>
                        <div class="input-group mb-3">
                            <button class="btn btn-lg w-100 fs-6" style="background-color: #BDBDBD !important;"><img
                                    src="{{ asset('assets/images/google.png') }}" style="width:20px"
                                    class="me-2"><small>Login with
                                    Google</small></button>
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

</html>
