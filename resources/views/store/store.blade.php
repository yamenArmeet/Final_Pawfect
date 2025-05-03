@extends('layout')

@section('content')

    <body>
        <link rel="stylesheet" href="{{ asset('assets/css/Store.css') }}">



        <!-- Home -->
        <section class="Home bg-dark text-light p-5 p-lg-0 pt-lg-5 text-center text-sm-start" id="Home">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-8 col-md-6">
                        <h1>Shop for your pets and make their lives better</h1>
                        <p class="lead my-4 ">
                            We focus on providing pet owners with the latest and most
                            efficient tools for managing pet care and supplies.
                            Our goal is to simplify shopping, empowering users with
                            cutting-edge technology to create a better future for their pets
                            and their happy, healthy lives. <img src="{{ asset('assets/images/Vector.svg') }}"
                                class="img-fluid">
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
                        <h1 class="text-dark">Store</h1>
                        <hr class="w-25 m-auto" style="height: 3px; color: #4D9B36;">
                    </div>
                    <!-- Header -->

                    <!-- First item -->
                    <div class="col-xxl-3 col-lg-4 col-md-6 col-12 pt-3 text-light">
                        <div class="card mx-auto shadow-lg" style="width: 18rem;">
                            <img src="{{ asset('assets/images/Drools.svg') }} " class="card-img-top mx-auto d-block"
                                alt="...">
                            <div class="card-body text-start">
                                <h5 class="card-title">Drools | 3KG</h5>
                                <p class="card-text">Adult chicken and egg Egg, Chicken 3 kg Dry Adult Dog Food</p>
                                <div class="card-text d-flex justify-content-between align-items-center">
                                    <h4 class="m-0">100.0 JD</h4>
                                    <span style="color: #F7C240;">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-half"></i>
                                        <span class="text-white">4.5</span>
                                    </span>
                                </div>

                                <form action="" class="d-flex justify-content-center align-items-center mt-3">
                                    <div class="input-group">
                                        <button class="btn w-25 bg-white btn-outline-dark" type="button"
                                            id="decrement">-</button>
                                        <input type="text" class="form-control text-center bg-white" id="quantity"
                                            value="1" min="1" max="25">
                                        <button class="btn w-25 bg-white btn-outline-dark" type="button"
                                            id="increment">+</button>
                                    </div>
                                    <a href="#" class="btn bg-light text-center ms-3 w-75" style="color:#4D9B36;">Add
                                        to cart</a>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- First item -->

                    <!-- Second item -->
                    <div class="col-xxl-3 col-lg-4 col-md-6 col-12 pt-3 text-light">
                        <div class="card mx-auto shadow-lg" style="width: 18rem;">
                            <img src="{{ asset('assets/images/Canine.svg') }} " class="card-img-top mx-auto d-block"
                                alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Canine Creek 4 KG</h5>
                                <p class="card-text">Adult chicken and egg Egg, Chicken 3 kg Dry Adult Dog Food</p>
                                <div class="card-text d-flex justify-content-between align-items-center">
                                    <h4 class="m-0">100.0 JD</h4>
                                    <span style="color: #F7C240;">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-half"></i>
                                        <span class="text-white">4.5</span>
                                    </span>
                                </div>

                                <form action="" class="d-flex justify-content-center align-items-center mt-3">
                                    <div class="input-group">
                                        <button class="btn w-25 bg-white btn-outline-dark" type="button"
                                            id="decrement">-</button>
                                        <input type="text" class="form-control text-center bg-white" id="quantity"
                                            value="1" min="1" max="25">
                                        <button class="btn w-25 bg-white btn-outline-dark" type="button"
                                            id="increment">+</button>
                                    </div>
                                    <a href="#" class="btn bg-light text-center ms-3 w-75" style="color:#4D9B36;">Add
                                        to cart</a>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Second item -->

                    <!-- Third item -->
                    <div class="col-xxl-3 col-lg-4 col-md-6 col-12 pt-3 text-light">
                        <div class="card mx-auto shadow-lg" style="width: 18rem;">
                            <img src="{{ asset('assets/images/Biscork.svg') }} " class="card-img-top mx-auto d-block"
                                alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Biscork Biscuits</h5>
                                <p class="card-text">Adult chicken and egg Egg, Chicken Dry Adult Dog Food</p>
                                <div class="card-text d-flex justify-content-between align-items-center">
                                    <h4 class="m-0">100.0 JD</h4>
                                    <span style="color: #F7C240;">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-half"></i>
                                        <span class="text-white">4.5</span>
                                    </span>
                                </div>

                                <form action="" class="d-flex justify-content-center align-items-center mt-3">
                                    <div class="input-group">
                                        <button class="btn w-25 bg-white btn-outline-dark" type="button"
                                            id="decrement">-</button>
                                        <input type="text" class="form-control text-center bg-white" id="quantity"
                                            value="1" min="1" max="25">
                                        <button class="btn w-25 bg-white btn-outline-dark" type="button"
                                            id="increment">+</button>
                                    </div>
                                    <a href="#" class="btn bg-light text-center ms-3 w-75"
                                        style="color:#4D9B36;">Add to cart</a>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Third item -->

                    <!-- Foruth item -->
                    <div class="col-xxl-3 col-lg-4 col-md-6 col-12 pt-3 text-light">
                        <div class="card mx-auto shadow-lg" style="width: 18rem;">
                            <img src="{{ asset('assets/images/Biscork.svg') }} " class="card-img-top mx-auto d-block"
                                alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Biscork Biscuits</h5>
                                <p class="card-text">Adult chicken and egg Egg, Chicken Dry Adult Dog Food</p>
                                <div class="card-text d-flex justify-content-between align-items-center">
                                    <h4 class="m-0">100.0 JD</h4>
                                    <span style="color: #F7C240;">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-half"></i>
                                        <span class="text-white">4.5</span>
                                    </span>
                                </div>

                                <form action="" class="d-flex justify-content-center align-items-center mt-3">
                                    <div class="input-group">
                                        <button class="btn w-25 bg-white btn-outline-dark" type="button"
                                            id="decrement">-</button>
                                        <input type="text" class="form-control text-center bg-white" id="quantity"
                                            value="1" min="1" max="25">
                                        <button class="btn w-25 bg-white btn-outline-dark" type="button"
                                            id="increment">+</button>
                                    </div>
                                    <a href="#" class="btn bg-light text-center ms-3 w-75"
                                        style="color:#4D9B36;">Add to cart</a>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Foruth item -->

                    <!-- five item -->
                    <div class="col-xxl-3 col-lg-4 col-md-6 col-12 pt-3 text-light">
                        <div class="card mx-auto shadow-lg" style="width: 18rem;">
                            <img src="{{ asset('assets/images/Canine.svg') }} " class="card-img-top mx-auto d-block"
                                alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Canine Creek 4 KG</h5>
                                <p class="card-text">Adult chicken and egg Egg, Chicken 3 kg Dry Adult Dog Food</p>
                                <div class="card-text d-flex justify-content-between align-items-center">
                                    <h4 class="m-0">100.0 JD</h4>
                                    <span style="color: #F7C240;">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-half"></i>
                                        <span class="text-white">4.5</span>
                                    </span>
                                </div>

                                <form action="" class="d-flex justify-content-center align-items-center mt-3">
                                    <div class="input-group">
                                        <button class="btn w-25 bg-white btn-outline-dark" type="button"
                                            id="decrement">-</button>
                                        <input type="text" class="form-control text-center bg-white" id="quantity"
                                            value="1" min="1" max="25">
                                        <button class="btn w-25 bg-white btn-outline-dark" type="button"
                                            id="increment">+</button>
                                    </div>
                                    <a href="#" class="btn bg-light text-center ms-3 w-75"
                                        style="color:#4D9B36;">Add to cart</a>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- five item -->

                    <!-- six item -->
                    <div class="col-xxl-3 col-lg-4 col-md-6 col-12 pt-3 text-light">
                        <div class="card mx-auto shadow-lg" style="width: 18rem;">
                            <img src="{{ asset('assets/images/Canine.svg') }} " class="card-img-top mx-auto d-block"
                                alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Canine Creek 4 KG</h5>
                                <p class="card-text">Adult chicken and egg Egg, Chicken 3 kg Dry Adult Dog Food</p>
                                <div class="card-text d-flex justify-content-between align-items-center">
                                    <h4 class="m-0">100.0 JD</h4>
                                    <span style="color: #F7C240;">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-half"></i>
                                        <span class="text-white">4.5</span>
                                    </span>
                                </div>

                                <form action="" class="d-flex justify-content-center align-items-center mt-3">
                                    <div class="input-group">
                                        <button class="btn w-25 bg-white btn-outline-dark" type="button"
                                            id="decrement">-</button>
                                        <input type="text" class="form-control text-center bg-white" id="quantity"
                                            value="1" min="1" max="25">
                                        <button class="btn w-25 bg-white btn-outline-dark" type="button"
                                            id="increment">+</button>
                                    </div>
                                    <a href="#" class="btn bg-light text-center ms-3 w-75"
                                        style="color:#4D9B36;">Add to cart</a>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- six item -->

                    <!-- seven item -->
                    <div class="col-xxl-3 col-lg-4 col-md-6 col-12 pt-3 text-light">
                        <div class="card mx-auto shadow-lg" style="width: 18rem;">
                            <img src="{{ asset('assets/images/Drools.svg') }} " class="card-img-top mx-auto d-block"
                                alt="...">
                            <div class="card-body text-start">
                                <h5 class="card-title">Drools | 3KG</h5>
                                <p class="card-text">Adult chicken and egg Egg, Chicken 3 kg Dry Adult Dog Food</p>
                                <div class="card-text d-flex justify-content-between align-items-center">
                                    <h4 class="m-0">100.0 JD</h4>
                                    <span style="color: #F7C240;">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-half"></i>
                                        <span class="text-white">4.5</span>
                                    </span>
                                </div>

                                <form action="" class="d-flex justify-content-center align-items-center mt-3">
                                    <div class="input-group">
                                        <button class="btn w-25 bg-white btn-outline-dark" type="button"
                                            id="decrement">-</button>
                                        <input type="text" class="form-control text-center bg-white" id="quantity"
                                            value="1" min="1" max="25">
                                        <button class="btn w-25 bg-white btn-outline-dark" type="button"
                                            id="increment">+</button>
                                    </div>
                                    <a href="#" class="btn bg-light text-center ms-3 w-75"
                                        style="color:#4D9B36;">Add to cart</a>
                                </form>
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

        <script>
            // JavaScript for increment and decrement functionality
            const decrementBtn = document.getElementById('decrement');
            const incrementBtn = document.getElementById('increment');
            const quantityInput = document.getElementById('quantity');

            decrementBtn.addEventListener('click', () => {
                let currentValue = parseInt(quantityInput.value);
                if (currentValue > 1) {
                    quantityInput.value = currentValue - 1;
                }
            });

            incrementBtn.addEventListener('click', () => {
                let currentValue = parseInt(quantityInput.value);
                if (currentValue < 25) {
                    quantityInput.value = currentValue + 1;
                }
            });
        </script>


    </body>
@endsection
