<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Rubik:ital,wght@1,500&display=swap" rel="stylesheet">
    <script scr="https://kit.fontawesome.com/c26cd2166c.js"></script>


    <title>Food Shop</title>

    @livewireStyles




</head>

<header>
    <nav class="navbar navbar-expand-lg navArea">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{route('home')}}">Organic</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active"  href="{{route('home')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('trending')}}">Trending</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" >
                            Store
                        </a>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" >Organic</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('contact')}}" >Contact</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="px-2 search" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn0" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
</header>

{{$slot}}

<footer>
    <section class="news">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-9 m-auto text-center">
                    <h1>Join Our secret society</h1>
                    <input type="text" placeholder="Enter Your Email">
                    <button class="btn2">Submit</button>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-11">
                    <div class="row py-4">
                        <div class="col-lg-3">
                            <h5 class="pb-3">CUSTOMER CARE</h5>
                            <p>Regular</p>
                            <p>On Time</p>
                            <p>Always Care</p>
                        </div>

                        <div class="col-lg-3">
                            <h5 class="pb-3">CUSTOMER CARE</h5>
                            <p>Regular</p>
                            <p>On Time</p>
                            <p>Always Care</p>
                        </div>

                        <div class="col-lg-3">
                            <h5 class="pb-3">CUSTOMER CARE</h5>
                            <p>Regular</p>
                            <p>On Time</p>
                            <p>Always Care</p>
                        </div>

                        <div class="col-lg-3">
                            <h5 class="pb-3">CUSTOMER CARE</h5>
                            <span><i class="soc fa-facebook"></i></span>
                            <span><i class="soc fa-instagram"></i></span>
                            <span><i class="soc fa-twitter"></i></span>
                            <span><i class="soc fa-google-plus"></i></span>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</footer>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
@livewireScripts
@stack('scripts')

</html>
