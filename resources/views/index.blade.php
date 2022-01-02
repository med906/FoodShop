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
</head>
<body>


<nav class="navbar navbar-expand-lg navArea">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Organic</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active"  href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Trending</a>
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
                    <a class="nav-link" href="#" >Contact</a>
                </li>
            </ul>
            <form class="d-flex">
                <input class="px-2 search" type="search" placeholder="Search" aria-label="Search">
                <button class="btn0" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>

<section class="main">
    <div class="container py-5">
        <div class="row py-4">
            <div class="col-lg-7 pt-5 text-center">
                <h1 class="pt-5">Nature has always cared for Us!</h1>
                <button class="btn1 mt-3">More Tips</button>
            </div>
        </div>
    </div>
</section>

{{--center section with pics--}}
<section class="new">
    <div class="container py-5">
        <div class="row pt-5">
            <div class="col-lg-7 m-auto">
                <div class="row">
                    <div class="col-lg-4 text-center">
                        <img src="{{asset('img/mango.jpg')}}" class="img-luid" alt="">
                        <h6 class="pt-2">NATURAL</h6>
                    </div>
                    <div class="col-lg-4 text-center">
                        <img src="{{asset('img/grapes.jpg')}}" class="img-luid" alt="">
                        <h6 class="pt-2">NATURAL</h6>
                    </div>
                    <div class="col-lg-4 text-center">
                        <img src="{{asset('img/banana.jpg')}}" class="img-luid" alt="">
                        <h6 class="pt-2">NATURAL</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{--center section with pics--}}


{{--header with a centered products in a column--}}
<section class="product">
    <div class="container py-5">
        <div class="row py-5 ">
            <div class="col-lg-5 m-auto text-center">
                <h1>What's Trending</h1>
                <h6 style="color: red"> Be Healthy Organic Foods</h6>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 text-center">
                <div class="card border-0 bg-light">
                    <div class="card-body">
                        <img src="{{asset('img/energy.png')}}" class="img-fluid" alt="">
                    </div>
                </div>
                <h6 >Energy Food</h6>
                <p>$39.99</p>
            </div>

            <div class="col-lg-3 text-center">
                <div class="card border-0 bg-light">
                    <div class="card-body">
                        <img src="{{asset('img/beans.png')}}" class="img-fluid" alt="">
                    </div>
                </div>
                <h6 >Energy Food</h6>
                <p>$39.99</p>
            </div>


            <div class="col-lg-3 text-center">
                <div class="card border-0 bg-light">
                    <div class="card-body">
                        <img src="{{asset('img/120_copy-removebg-preview.png')}}" class="img-fluid" alt="">
                    </div>
                </div>
                <h6 >Energy Food</h6>
                <p>$39.99</p>
            </div>


            <div class="col-lg-3 text-center">
                <div class="card border-0 bg-light">
                    <div class="card-body">
                        <img src="{{asset('img/refill.png')}}" class="img-fluid" alt="">
                    </div>
                </div>
                <h6 >Energy Food</h6>
                <p>$39.99</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 m-auto text-center">
                <button class="btn1">Shop More</button>
            </div>
        </div>
    </div>
</section>

{{--header with a centered products in a column--}}



{{--3 Pic With Header And Text--}}
<section class="about">
    <div class="container py-5">
        <div class="row py-5">
            <div class="col-lg-8 m-auto text-center">
                <h1>Welcome To Our Organic Foods Society!</h1>
                <h6 style="color: red"> Be Healthy Organic Foods</h6>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <img src="{{asset('img/woman.jpg')}}" class="img-fluid" alt="">
                <h5 class="py-2">Best Quality Foods</h5>
                <p>Auto Genereated text that is long</p>
            </div>
            <div class="col-lg-4">
                <img src="{{asset('img/gf.jpg')}}" class="img-fluid" alt="">
                <h5 class="py-2">Best Quality Foods</h5>
                <p>Auto Genereated text that is long</p>
            </div>
            <div class="col-lg-4">
                <img src="{{asset('img/woman.jpg')}}" class="img-fluid" alt="">
                <h5 class="py-2">Best Quality Products</h5>
                <p>Auto Genereated text that is long</p>
            </div>

        </div>
        <div class="row">
            <div class="col-lg-6 text-center m-auto">
                <button class="btn1">Click For More Info</button>
            </div>
        </div>
    </div>
</section>
{{--3 Pic With Header And Text--}}

{{--multiple products section--}}
<section class="shop py-5">
    <div class="container">
        <div class="row py-5">
            <div class="col-lg-8 m-auto text-center">
                <h1>Explore Our Store</h1>
                <h6 style="color: red">Be Healthy Organic Foods</h6>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3 text-center">
                <div class="card border-0 bg-light">
                    <div class="card-body">
                        <img src="{{asset('img/energy.png')}}" class="img-fluid" alt="">
                    </div>
                </div>
                <h6 >Energy Food</h6>
                <p>$39.99</p>
            </div>

            <div class="col-lg-3 text-center">
                <div class="card border-0 bg-light">
                    <div class="card-body">
                        <img src="{{asset('img/beans.png')}}" class="img-fluid" alt="">
                    </div>
                </div>
                <h6 >Energy Food</h6>
                <p>$39.99</p>
            </div>


            <div class="col-lg-3 text-center">
                <div class="card border-0 bg-light">
                    <div class="card-body">
                        <img src="{{asset('img/120_copy-removebg-preview.png')}}" class="img-fluid" alt="">
                    </div>
                </div>
                <h6 >Energy Food</h6>
                <p>$39.99</p>
            </div>


            <div class="col-lg-3 text-center">
                <div class="card border-0 bg-light">
                    <div class="card-body">
                        <img src="{{asset('img/refill.png')}}" class="img-fluid" alt="">
                    </div>
                </div>
                <h6 >Energy Food</h6>
                <p>$39.99</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 text-center">
                <div class="card border-0 bg-light">
                    <div class="card-body">
                        <img src="{{asset('img/energy.png')}}" class="img-fluid" alt="">
                    </div>
                </div>
                <h6 >Energy Food</h6>
                <p>$39.99</p>
            </div>

            <div class="col-lg-3 text-center">
                <div class="card border-0 bg-light">
                    <div class="card-body">
                        <img src="{{asset('img/beans.png')}}" class="img-fluid" alt="">
                    </div>
                </div>
                <h6 >Energy Food</h6>
                <p>$39.99</p>
            </div>


            <div class="col-lg-3 text-center">
                <div class="card border-0 bg-light">
                    <div class="card-body">
                        <img src="{{asset('img/120_copy-removebg-preview.png')}}" class="img-fluid" alt="">
                    </div>
                </div>
                <h6 >Energy Food</h6>
                <p>$39.99</p>
            </div>


            <div class="col-lg-3 text-center">
                <div class="card border-0 bg-light">
                    <div class="card-body">
                        <img src="{{asset('img/refill.png')}}" class="img-fluid" alt="">
                    </div>
                </div>
                <h6 >Energy Food</h6>
                <p>$39.99</p>
            </div>
        </div>

    </div>
</section>
{{--multiple products section--}}

{{--1 image bar with text--}}
<section class="apple py-5">
<div class="container text-white py-5">
    <div class="row py-5">
        <div class="col-lg-6">
            <h1 class="font-weight-bold py-3">Unlock Your Potentail With Nutrion</h1>
            <h6>Be Healthy Organic Food</h6>
            <button class="btn1 mt-3">More From Us</button>
        </div>
    </div>
</div>
</section>
{{--1 image bar with text--}}

<section class="contact py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 text-center m-auto">
                <h1>Contact Us</h1>
                <h6 style="color: red;">Always be in touch with us</h6>
            </div>

        </div>

        <div class="row py-5">

            <div class="col-lg-9 m-auto">
                <div class="row">
                    <div class="col-lg-4">
                        <h6>LOCATION</h6>
                        <p>New York 0911 first Street DC</p>
                        <h6>PHONE</h6>
                        <p>88992-3938774</p>
                        <h6>EMAIL</h6>
                        <p>email@emial.com</p>
                    </div>

                    <div class="col-lg-7">
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" class="form-control bg-light" placeholder="First Name">
                            </div>
                            <div class="col-lg-6">
                                <input type="text" class="form-control bg-light" placeholder="Last Name">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 py-2">
                                <textarea name="" placeholder="Enter Your Comment" class="form-control bg-light" cols="30" rows="5"></textarea>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="row m-auto text-center">
            <p>
                <button type="submit" class="btn1">Submit</button>
            </p>
        </div>
    </div>
</section>

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



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
