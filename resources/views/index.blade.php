<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
    <title>Isotope</title>
</head>

<body>
    <!-- /* Please ❤ this if you like it! 😊 */ -->
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                @if (!empty(Auth::user()->id))
                     <a class="btn" href="{{ route('dashboard') }}">Dashboard</a>
                @else
                    <a class="btn" href="{{ route('login')}}">LogIn</a> <a class="btn"
                        href="{{ route('register') }}">Register</a>
                @endif

            </div>
        </div>
    </div>
    <!-- Portfolio Section Start -->
    <section class="portfolio overflow-hidden">
        <div class="container">
            <div class="row">
                <!-- Portfolio Section Heading -->
                <div class="portfolio__heading text-center col-12">
                    <h1 class="portfolio__title fw-bold mb-5"></h1>
                </div>
                <!-- Portfolio Navigation Buttons List -->
                <div class="col-12">
                    <ul class="portfolio__nav nav justify-content-center mb-4">
                        <li class="nav-item">
                            <button class="portfolio__nav__btn position-relative bg-transparent border-0 active"
                                data-filter="*">All</button>
                        </li>
                        @foreach ($categories as $category)
                            <li class="nav-item">
                                <button class="portfolio__nav__btn position-relative bg-transparent border-0"
                                    data-filter=".{{$category->id}}">{{$category->name}}</button>
                            </li>
                        @endforeach
                        {{-- <li class="nav-item">
                            <button class="portfolio__nav__btn position-relative bg-transparent border-0"
                                data-filter=".animal">Animal</button>
                        </li>
                        <li class="nav-item">
                            <button class="portfolio__nav__btn position-relative bg-transparent border-0"
                                data-filter=".work-station">Work Station</button>
                        </li> --}}
                    </ul>
                </div>
            </div>
            <!-- Portfolio Cards Container -->
            <div class="row grid">
                @foreach ($category_images as $category_image)
                    <div class="grid-item col-lg-4 col-sm-6 {{$category_image->cat_id}}">
                        <a href="#!" class="portfolio__card position-relative d-inline-block w-100">
                            <img src="{{asset('/uploads/category/image/' .$category_image->image)}}" alt="Random Image" class="w-100">
                        </a>
                    </div>
                @endforeach
                {{-- <div class="grid-item col-lg-4 col-sm-6 animal">
                    <a href="#!" class="portfolio__card position-relative d-inline-block w-100">
                        <img src="https://source.unsplash.com/LSoZprF1HSw/380x500" alt="Random Image" class="w-100">
                    </a>
                </div>
                <div class="grid-item col-lg-4 col-sm-6 vehicle">
                    <a href="#!" class="portfolio__card position-relative d-inline-block w-100">
                        <img src="https://source.unsplash.com/vI9_zv29VnQ/380x500" alt="Random Image" class="w-100">
                    </a>
                </div>
                <div class="grid-item col-lg-4 col-sm-6 road">
                    <a href="#!" class="portfolio__card position-relative d-inline-block w-100">
                        <img src="https://source.unsplash.com/_SaC-shd2n4/380x500" alt="Random Image" class="w-100">
                    </a>
                </div>
                <div class="grid-item col-lg-4 col-sm-6 work-station">
                    <a href="#!" class="portfolio__card position-relative d-inline-block w-100">
                        <img src="https://source.unsplash.com/QeVmJxZOv3k/380x500" alt="Random Image" class="w-100">
                    </a>
                </div>
                <div class="grid-item col-lg-4 col-sm-6 work-station">
                    <a href="#!" class="portfolio__card position-relative d-inline-block w-100">
                        <img src="https://source.unsplash.com/M1qSY_IuF4c/380x500" alt="Random Image" class="w-100">
                    </a>
                </div> --}}
            </div>
        </div>
    </section>
    <!-- Portfolio Section End -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
    <script src="{{ asset('assets/script.js') }}"></script>
</body>

</html>
