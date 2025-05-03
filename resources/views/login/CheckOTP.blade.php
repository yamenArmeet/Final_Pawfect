<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="verification.css">
    <title>Boostrap Login | Ludiflex</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500;600;700');

        body {
            font-family: "Poppins", sans-serif;
            font-size: 16px;
            background-color: #EFF1FD;
        }


        .box-area {
            width: 930px;
        }


        .rounded-4 {
            border-radius: 20px;
        }

        .rounded-5 {
            border-radius: 30px;
        }


        /* right box things */
        .right-box {
            box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;
        }


        .card-header {
            color: #55A13D !important;
            /* background: #55A13D !important; */
            text-align: center;
        }


        .card-header>img {
            width: 100%;
        }


        .input-container input {
            width: 40px;
            height: 40px;
        }


        .form-control:focus {
            box-shadow: none !important;
            border: 1px solid #3366FF !important;
        }


        .verify-btn {
            border-radius: 20px !important;
            border: 0px !important;
            width: 140px;
            background-color: #55A13D !important;
        }

        .btn-creat {
            background-color: #4A9833;
        }

        .input-group {
            width: 85%;
        }


        /* button transform */
        a.btn {
            transition: box-shadow 0.3s ease, transform 0.3s ease;
        }

        a.btn:hover {
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            transform: scale(1.05);
            /* Slightly enlarge */
        }

        /* button transform */


        /* right box things */


        /*------------ For small screens------------*/

        @media screen and (max-width: 768px) {

            .box-area {
                margin: 0 10px;
            }

            .left-box {
                display: none !important;
            }

            .row {
                width: 400px;
                box-shadow: #4A9833 0px 4px 6px 0px !important;
            }

            .right-box {
                box-shadow: none;
            }
        }
    </style>
</head>

<body>

    <!-- start of container -->
    <div class="container d-flex justify-content-center align-items-center min-vh-100">

        <!-- start of row -->
        <div class="row border rounded-5 p-3 bg-white shadow box-area">

            <!-- left box -->
            <div class="col-lg-6 col-md-5 rounded-4 d-flex justify-content-center align-items-center flex-column left-box"
                style="background-color: #4A9833;">
                <div class="featured-image mb-3">
                    <img src="{{ asset('assets/images/mobile 1.svg') }}" class="img-fluid" style="height: 400px;">
                </div>
            </div>
            <!-- left box -->

            <!-- right box -->
            <div class="col-12 col-lg-6 col-md-7 ">

                <!-- contant of right box -->
                <form action="" method="">
                    <div
                        class="col-12 d-flex flex-column justify-content-center align-items-center right-box rounded-4">
                        <img class="img-fluid mb-5 mt-3" src="{{ asset('assets/images/logo.svg') }}"
                            style="width: 150px;">
                        <h5 class="mb-2">OTP VERIFICATION</h5>
                        <div>
                            <small>code has been send to this email:
                                <!-- يجب عليه ان يظهر ايميل المستخدم من الفورم السابق -->
                                <div class="text-center">yamen*****@gmail.com</div>
                            </small>
                        </div>

                        <div class="input-group my-3 input-group-lg">
                            <input type="text" name="token" class="form-control form-control-lg bg-light fs-6"
                                placeholder="Enter verification code">
                        </div>

                        <div>
                            <small>
                                didn't get the otp?
                                <a href="#" class="text-decoration-none">Resend</a>
                            </small>
                        </div>

                        <div class="mt-3 mb-5">
                            <!-- <button type="submit" class="btn btn-success px-4 verify-btn">verify</button> -->
                            <a href="{{ route('ChangePassword') }}" class="btn btn-success px-4 verify-btn">verify</a>
                        </div>

                    </div>
                </form>
                <!-- contant of right box -->

            </div>
            <!-- right box -->

        </div>
        <!-- end of row -->

    </div>
    <!-- end of container -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
