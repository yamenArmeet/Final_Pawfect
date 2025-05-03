<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="Reset-password.css">
    <title>Boostrap Login | Ludiflex</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
            background-color: #EFF1FD;
            font-size: 16px;
        }


        .rounded-4 {
            border-radius: 20px;
        }

        .rounded-5 {
            border-radius: 30px;
        }

        .btn-creat {
            background-color: #4A9833;
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


        /*------------ For small screens------------*/

        @media screen and (min-width: 576px) {
            .box {
                width: 400px;
            }
        }
    </style>
</head>

<body>

    <!-- start of container -->
    <div class="container d-flex justify-content-center align-items-center min-vh-100">

        <!-- start of row -->
        <div class="row border rounded-5 p-3 bg-white shadow justify-content-center align-items-center text-center">

            <!-- start of box -->
            <form action="" method="">
                <div class="col-12 box">
                    <div class="mb-4 text-center">
                        <img src="{{ asset('assets/images/logo.svg') }}" class="img-fluid" style="width: 200px;">
                        <hr style="width: 40%; height: 2px; margin: 0 auto;">
                    </div>
                    <div class="header-text mb-4 text-center">
                        <h4>Reset Password</h4>
                    </div>
                    <!-- <div class="input-group mb-4">
                        <input type="password" class="form-control form-control-lg bg-light fs-6" placeholder="Old Password">
                    </div> -->
                    <div class="input-group mb-4">
                        <input type="password" name="New Password1" class="form-control form-control-lg bg-light fs-6"
                            placeholder="New Password">
                    </div>
                    <div class="input-group mb-4">
                        <input type="password" name="New Password2" class="form-control form-control-lg bg-light fs-6"
                            placeholder="Confiram New Password">
                    </div>
                    <div class="input-group mb-4">
                        <!-- <button type="submit" class="btn-creat btn btn-lg w-100 fs-6 text-white">Reset Password</button> -->
                        <a href="{{ route('home') }}" class="btn-creat btn btn-lg w-100 fs-6 text-white">Reset
                            Password</a>
                    </div>

                </div>
            </form>
            <!-- end of box -->

        </div>
        <!-- end of row -->

    </div>
    <!-- end of container -->




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
