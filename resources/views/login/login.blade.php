<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/Login.css') }}?v={{ time() }}">

    <title>Boostrap Login | Ludiflex</title>
</head>

<body>
    <!-- start of container -->
    <div class="container d-flex justify-content-center align-items-center min-vh-100">

        <!-- start of row -->
        <div class="row border rounded-5 p-2 bg-white shadow box-area">

            <!-- start of left box -->
            <div class="col-lg-6 col-md-6 right-box">

                <form method="POST" action="{{ route('login.custom') }}">
                    @csrf

                    <div class="row align-items-center justify-content-center">
                        <div class="mb-4 text-center">
                            <img src="{{ asset('assets/images/logo.svg') }}" class="img-fluid" style="width: 200px;">
                            <hr style="width: 40%; height: 2px; margin: 0 auto;">
                        </div>


                        <div class="input-group mb-3">
                            <input type="text" name="email" class="form-control form-control-lg bg-light fs-6"
                                required placeholder="Email address">
                        </div>

                        <div class="input-group mb-3">
                            <input type="password" name="password" id="password"
                                class="form-control form-control-lg bg-light fs-6" placeholder="Password" required>
                            @if ($errors->has('emailPassword'))
                                <span class="text-danger">{{ $errors->first('emailPassword') }}</span>
                            @endif
                        </div>


                        <div class="row text-start mb-4" style="width:90%">
                            <small><a href="{{ route('CheckEmail') }}" style="color:#4A9833">Forgot
                                    Password?</a></small>
                        </div>
                        <div class="row text-start mb-4" style="width:90%">
                            <small>Don't have an account? <a href="{{ route('signup') }}">Creat
                                    account</a></small>
                        </div>
                        <div class="input-group mb-3">
                            <button type="submit" class="btn-login btn btn-lg w-100 fs-6 text-white">Login</button>
                        </div>
                        {{-- <div class="input-group mb-3">
                            <button class="btn btn-lg w-100 fs-6" style="background-color: #BDBDBD !important;"><img
                                    src="{{ asset('assets/images/google.png') }}" style="width:20px"
                        class="me-2"><small>Login with
                            Google</small></button>
                    </div> --}}


                    </div>
                </form>
            </div>
            <!-- end of left box -->

            <!-- start of right box -->
            <div
                class="col-lg-6 col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box background-animation">
                <img src="{{ asset('assets/images/Dogs and Cats.png') }}" class="img"
                    style="width: 100%; height: 100%;">
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
