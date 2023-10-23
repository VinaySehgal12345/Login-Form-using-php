<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Super Bikes</title>
</head>

<body>
    <!-- top-strip -->
    <div class="top-strip bg-secondary container-fluid">
        <div class="container-fluid">
            <div class="row">
            <div class="d-flex justify-content-end">
                <div class="d-flex ">
                    <div>
                        <input id="searchBar" class="searchbar border-0 text-white bg-secondary fs-6" type="text"
                            placeholder="Search IAAI.com">
                    </div>
                    <div>
                        <a id="btnSearch" type="button"
                            class="btn-search text-white fs-6 d-none d-md-block pt-2 me-md-5"><i
                                class="bi bi-search"></i></a>
                    </div>
                </div>
                <div class="d-none d-md-block me-md-3">
                    <a href="" type="button" class="help-btn btn-sm text-white pt-2">HELP</a>
                </div>
                <div>
                    <div class="dropdown">
                        <button class="btn btn-transparent border-none text-white dropdown-toggle" type="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <span><i class="bi bi-globe-americas text-white"></i></span> Global Location
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#"> <span><img src="assets/images/illustration/canada.png"
                                            alt="flag" class="img-fluid"></span> Canada</a></li>
                            <li><a class="dropdown-item" href="#"> <span><img
                                            src="assets/images/illustration/united-kingdom.png" alt="flag"
                                            class="img-fluid"></span> United Kingdom</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    <!-- mobile-view navbar -->
    <section class="navigation container-fluid d-lg-none">
        <div class="container">
            <div class="d-flex justify-content-between">
                <div class="header-logo">
                    <img src="assets/images/illustration/logo-1.svg" alt="header-logo" class="">
                </div>
                <div class="d-flex justify-content-evenly">
                    <div class="pt-3 pt-md-4">
                        <p class="text-muted">Register/Log In <span class="text-muted"><i
                                    class="bi bi-person-circle"></i></span></p>
                    </div>
                    <!-- offcanvas -->
                    <div>
                        <button class="btn px-2 py-1 mt-2" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasExample" aria-controls="offcanvasExample"><i
                                class="bi bi-list text-muted fs-1"></i></button>
                        <div class="offcanvas blue-bg border-0 offcanvas-start" tabindex="-1" id="offcanvasExample"
                            aria-labelledby="offcanvasExampleLabel">
                            <div class="offcanvas-header justify-content-end  me-5 ">
                                <button type="button" class="fs-3 border-0 bg-transparent " data-bs-dismiss="offcanvas"
                                    aria-label="Close"><i
                                        class="bi bi-x-lg text-white border border-1 border-white fs-4 p-2 "></i></button>
                            </div>
                            <div class="offcanvas-body  me-5">
                                <ul>
                                    <li class="dropdown py-3 ">
                                        <a href="#" class="d-flex justify-content-between text-white black"
                                            data-bs-toggle="dropdown">HOME<i class="bi bi-chevron-down"></i></a>
                                    </li>
                                   
                                    <li class="dropdown py-3">
                                        <a href="#" class="d-flex justify-content-between text-white black"
                                            data-bs-toggle="dropdown">Contact us<i class="bi bi-chevron-down"></i></a>
                                      
                                    </li>
                                    <li class="dropdown py-3">
                                        <a href="#" class="d-flex justify-content-between text-white black"
                                            data-bs-toggle="dropdown"> My Auction Center <i class="bi bi-chevron-down"></i></a>
                                        <ul class="dropdown-menu lh-lg  bg-main">
                                            <li><a class="dropdown-item fw-semibold" href="#">Please Log in</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="py-3"><a href="" class="d-flex justify-content-between text-white fw-semibold">Buying</a></li>
                                    <li class="py-3"><a href="" class="d-flex justify-content-between text-white black">Selling</a></li>
                                    <li class="dropdown py-3">
                                        <a href="#" class="d-flex justify-content-between text-white fw-semibold"
                                            data-bs-toggle="dropdown">News & Insight <i class="bi bi-chevron-down"></i></a>
                                        <ul class="dropdown-menu lh-lg  bg-main">
                                            <li><a class="dropdown-item black" href="#">Buyer Publication</a>
                                            </li>
                                            <li><a class="dropdown-item fw-semibold" href="#">Seller Publication</a></li>
                                            <li><a class="dropdown-item fw-semibold" href="#">Market Report </a></li>
                                            <li><a class="dropdown-item fw-semibold" href="#">Press release</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown  py-3">
                                        <a href="#" class="d-flex justify-content-between text-white black"
                                            data-bs-toggle="dropdown">Company <i class="bi bi-chevron-down"></i></a>
                                        <ul class="dropdown-menu lh-lg  bg-main">
                                            <li><a class="dropdown-item black" href="#">About Us</a>
                                            </li>
                                            <li><a class="dropdown-item black" href="#">Career</a></li>
                                            <li><a class="dropdown-item black" href="#">Investor</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- searchbar -->
    <section class="search-strip container-fluid d-lg-none">
        <div class="container-fluid pt-3 pb-3">
            <div class="row text-center">
                <div class="col-9">
                    <div class="input">
                        <span class="input-text" id="input-sizing-default"><i class="bi bi-seach text-dark "></i></span>
                        <input type="search" class="form-control" aria-label="Sizing example input"
                            aria-describedby="inputGroup-sizing-default"
                            placeholder="Serach for vehicle , auctaion and location...">
                    </div>
                </div>
                <div class="col-2">
                    <button type="button"
                        class="search-btn blue-bg text-white px-2 py-2 border border-blue rounded-2">Search</button>
                </div>
            </div>
        </div>
    </section>
    <!-- laptop view for navigation -->
    <section class="container-fluid  d-none d-lg-block">

        <div class="row">
        <div class="d-flex justify-content-between">
            <div class="navbar-logo">
                <img src="assets/images/illustration/white logo.svg" alt="navbar-logo" class="">
            </div>
            <!-- navigation-lg -->
            <div class="navbar ms-3">
                <nav class="navbar navbar-expand-lg">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown dropdown-center px-lg-1 px-xl-2">
                            <a class="nav-link black underline  text-uppercase" href="#"
                                data-bs-toggle="dropdown">Home</a>
                        </li>
                        <li class="nav-item dropdown dropdown-center px-lg-1 px-xl-2">
                            <a class="nav-link black  underline  text-uppercase" href="#"
                                data-bs-toggle="dropdown">Contact us</a>
                        </li>
                        <li class="nav-item dropdown dropdown-center px-lg-1 px-xl-2">
                            <a class="nav-link black  underline  text-uppercase" href="#"
                                data-bs-toggle="dropdown">About us</a>
                        </li>
                        <li class="nav-item dropdown dropdown-center px-lg-1 px-xl-2">
                            <a class="nav-link black  underline  text-uppercase" href="#"
                                data-bs-toggle="dropdown">Products</a>
                                <ul class="dropdown-menu menu-1 border-0 p-0 lh-lg rounded-0">
                                    <li><a class="dropdown-item underline-2  black" href="#">About us</a></li>
                                    <li><a class="dropdown-item underline-2  black" href="#">Career</a></li>
                                    <li><a class="dropdown-item underline-2  black" href="#">Investor</a></li>
                            </li>
    </ul>
                        
                    </ul>
                </nav>

            </div>

               
                <li class="nav-item px-lg-1 d-flex dropdown dropend px-xl-2">
                    
                        <a href="http://localhost/admin/Register%20login%20form/registration.php" class="btn d-flex align-items-center px-0">Register</a>
                        <a href="  " class="btn d-flex align-items-center ">/</a>
                         <a href="http://localhost/admin/Register%20login%20form/loginuser.php" class="btn d-flex align-items-center pl-0">Log In</a>
                                <span class="text-muted d-flex align-items-center"><i class="bi bi-person-circle font-34"></i></span></li>
                          
        </div>
        </div>
    </section>
    <section>
        <div class="container-fluid">
            <div class="row">
                                <!-- searchbar in laptop view -->
                <div class="search-strip container-fluid d-none d-lg-block">
                    <div class="container-fluid pt-2 pb-2">
                        <div class="row text-cente">
                            <div class="col-10 px-0">
                                <div class="input">
                                    <span class="input-text" id="input-sizing-default"><i
                                            class="bi bi-seach text-dark "></i></span>
                                    <input type="search" class="form-control form-searchbar" aria-label="Sizing example input"
                                        aria-describedby="inputGroup-sizing-default"
                                        placeholder="Serach for vehicle , auctaion and location...">
                                </div>
                            </div>
                            <div class="col-2 px-0">
                                <button type="button"
                                    class="search-btn blue-bg text-white px-2 py-2 border border-blue rounded-2 searchbar-btn">Search</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- hero section -->
    <section class="heroSection overflow-hidden">
        <div class="container-fluid p-0">
            <div id="carouselExample" class="carousel slide">
                <div class="carousel-inner">
                    <div class="carousel-item active carousel-image bg1">
                         <div class="overlay"></div>
                        <div class="container">
                            <div class="row">
                                <div class=" hero-info col-12 col-md-8 text-start pt-5">
                                    <h1 class="text-white pt-md-3 pt-lg-4">Start Buying</h1>
                                    <p class="text-white  fs-5 pt-md-2">
                                        IAA sells lightly damaged, salvage and clear-title vehicles, parts cars, trucks,
                                        SUVs, motorcycles and heavy equipment at auctions across the United States.
                                        Preview our huge selection of vehicles free of charge then register to view
                                        auctions and bid.
                                    </p>
                                    <div class=" pt-md-4">
                                        <button type="button"
                                            class="hero-btn px-5 py-3 border-0 text-dark fw-semibold">Registor today
                                            <span><i class="bi bi-arrow-right text-dark fs-4"></i></span></button>
                                    </div>
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item carousel-image bg2">
                        <div class="overlay"></div>
                        <div class="container">
                            <div class="row">
                                <div class=" hero-info col-12 col-md-8 text-start pt-5">
                                    <h1 class="text-white pt-md-3 pt-lg-5">IAA Transport™️ available
                                    </h1>
                                    <p class="text-white  fs-5 pt-md-2">

                                        Schedule fast and efficient delivery for your IAA vehicle from anywhere at any
                                        time when you choose IAA Transport™️ at checkout.

                                    </p>
                                    <div class=" pt-md-4">
                                        <button type="button"
                                            class="hero-btn px-5 py-3 border-0 text-dark fw-semibold">Get Started Today
                                            <span><i class="bi bi-arrow-right text-dark fs-4"></i></span></button>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item carousel-image bg-3">
                        <div class="overlay"></div>
                        <div class="container">
                            <div class="row">
                                <div class=" hero-info col-12 col-md-8 text-start pt-5">
                                    <h1 class="text-white pt-md-3 pt-lg-5">Lobour Day Auction Schedule</h1>
                                    <p class="text-white  fs-5 pt-md-2">

                                        U.S.-based IAA locations will be closed for Labor Day on Monday, September 4,
                                        2023. Review our updated auction schedule to make bidding and buying plans
                                        around the holiday.

                                    </p>
                                    <div class=" pt-md-4">
                                        <button type="button"
                                            class="hero-btn px-5 py-3 border-0 text-dark fw-semibold">View Auction
                                            Schedule <span><i
                                                    class="bi bi-arrow-right text-dark fs-4"></i></span></button>
                                    </div>
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>

    <!-- cards -->
    <section class="buying container-fluid">
        <div class="buying-wrapper container pt-5">
            <div class="d-flex">
                <div>
                    <button type="button"
                        class="join-btn  me-2 fw-semibold ">Buying From
                        IAA</button>
                </div>
                <div>
                    <button type="button" class="join-btn fw-semibold ">Selling For IAA</button>
                </div>
            </div>
            <h2 class="text-black pt-3 fs-1 fw-bolder">Buying Feature</h2>
            <span class="spanStyle-1"></span>
            <p class="text-black fs-5">IAA is driving a new automotive experience. Built on technology and backed by
                expertise, our vehicle marketplace and buying services are a modern take on an established industry</p>
            <div class="row pt-2">
                <div class="col-12 col-md-4 pb-3">
                    <div class="card">
                        <div class="photo-1">
                            <img src="assets/images/illustration/bg11.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="info text-center p-3">
                            <h3 class="text-center">How to Register as an IAA Buyer Online</h3>
                            <p>It's easy to register to bid and buy as an individual or licensed business buyer. Just
                                gather
                                your documents and follow six simple steps on your desktop or mobile device to get
                                started
                                on IAA's auction platform today</p>
                        </div>
                    </div>

                </div>
                <div class="col-12 col-md-4 pb-3">
                    <div class="card">
                        <div class="photo-1">
                            <img src="assets/images/illustration/bg2.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="info text-center p-3">
                            <h3 class="text-center">How to Register as an IAA Buyer Online</h3>
                            <p>It's easy to register to bid and buy as an individual or licensed business buyer. Just
                                gather
                                your documents and follow six simple steps on your desktop or mobile device to get
                                started
                                on IAA's auction platform today</p>
                        </div>
                    </div>

                </div>
                <div class="col-12 col-md-4 pb-3">
                    <div class="card">
                        <div class="photo-1">
                            <img src="assets/images/illustration/bg11.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="info text-center p-3">
                            <h3 class="">How to Register as an IAA Buyer Online</h3>
                            <p>It's easy to register to bid and buy as an individual or licensed business buyer. Just
                                gather
                                your documents and follow six simple steps on your desktop or mobile device to get
                                started
                                on IAA's auction platform today</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--  -->

    <section class="treading container-fluid pt-5">
        <div class="treading-wrapper container">
            <h2 class="text-black pt-3 fs-1 fw-bolder">Buying Feature</h2>
            <span class="spanStyle-1"></span>
            <p class="text-black fs-5">IAA can help you save time by viewing the industry’s most popular makes and
                models with one easy click. Take note of your bidding competition for these popular vehicles, plus where
                and when they’ll be up for auction</p>
            <div class="d-flex">
                <div class="">
                    <button type="button" class="trend-btn fw-semibold px-2 py-2">Selling For IAA</button>
                </div>
                <div class="">
                    <button type="button" class="trend-btn fw-semibold  px-2 py-2">Selling For IAA</button>
                </div>
                <div class="">
                    <button type="button" class="trend-btn fw-semibold  px-2 py-2">Selling For IAA</button>
                </div>
            </div>
            <hr class="text-black">
            <div class="row text-center mx-auto">
                <div class="col-6 col-md-2">
                    <ul>
                        <li></i> <a href="#" class="lorem-1  text-black lh-lg fs-4">Ausra</a></li>
                        <li></i> <a href="#" class="lorem-1  text-black lh-lg fs-4">Audio</a></li>
                        <li></i> <a href="#" class="lorem-1   text-black lh-lg fs-4">BMW</a></li>
                        <li></i> <a href="#" class="lorem-1  text-black lh-lg fs-4">Buick</a></li>
                        <li> <a href="#" class="lorem-1    text-black lh-lg fs-4">Cadylic</a></li>
                        <li> <a href="#" class="lorem-1  text-black lh-lg fs-4">Chorvlet</a></li>

                    </ul>
                </div>
                <div class="col-6 col-md-2">
                    <ul>
                        <li></i> <a href="#" class="lorem-1  underline-2 lh-lg fs-4 text-black">Ausra</a></li>
                        <li></i> <a href="#" class="lorem-1  underline-2 lh-lg fs-4 text-black">Audio</a></li>
                        <li></i> <a href="#" class="lorem-1  underline-2 lh-lg fs-4 text-black">BMW</a></li>
                        <li></i> <a href="#" class="lorem-1  underline-2 lh-lg fs-4 text-black">Buick</a></li>
                        <li> <a href="#" class="lorem-1  underline-2 lh-lg fs-4 text-black">Cadylic</a></li>
                        <li> <a href="#" class="lorem-1  underline-2 lh-lg fs-4 text-black">Chorvlet</a></li>

                    </ul>
                </div>
                <div class="col-6 col-md-3 d-none d-md-block">
                    <ul>
                        <li></i> <a href="#" class="lorem-1   lh-lg fs-4 text-black">Ausra</a></li>
                        <li></i> <a href="#" class="lorem-1   lh-lg fs-4 text-black">Audio</a></li>
                        <li></i> <a href="#" class="lorem-1   lh-lg fs-4 text-black">BMW</a></li>
                        <li></i> <a href="#" class="lorem-1   lh-lg fs-4 text-black">Buick</a></li>
                        <li> <a href="#" class="lorem-1   lh-lg fs-4 text-black">Cadylic</a></li>
                        <li> <a href="#" class="lorem-1  lh-lg fs-4 text-black">Chorvlet</a></li>

                    </ul>
                </div>
                <div class="col-6 col-md-2  d-none d-md-block">
                    <ul>
                        <li></i> <a href="#" class="lorem-1   lh-lg fs-4 text-black">Ausra</a></li>
                        <li></i> <a href="#" class="lorem-1 lh-lg fs-4 text-black">Audio</a></li>
                        <li></i> <a href="#" class="lorem-1   lh-lg fs-4 text-black">BMW</a></li>
                        <li></i> <a href="#" class="lorem-1   lh-lg fs-4 text-black">Buick</a></li>
                        <li> <a href="#" class="lorem-1   lh-lg fs-4 text-black">Cadylic</a></li>
                        <li> <a href="#" class="lorem-1   lh-lg fs-4 text-black">Chorvlet</a></li>

                    </ul>
                </div>
                <div class="col-6 col-md-2  d-none d-md-block">
                    <ul>
                        <li></i> <a href="#" class="lorem-1  underline-2 lh-lg fs-4 text-black">Ausra</a></li>
                        <li></i> <a href="#" class="lorem-1  underline-2 lh-lg fs-4 text-black">Audio</a></li>
                        <li></i> <a href="#" class="lorem-1  underline-2 lh-lg fs-4 text-black">BMW</a></li>
                        <li></i> <a href="#" class="lorem-1  underline-2 lh-lg fs-4 text-black">Buick</a></li>
                        <li> <a href="#" class="lorem-1  underline-2 lh-lg fs-4 text-black">Cadylic</a></li>
                        <li> <a href="#" class="lorem-1  underline-2 lh-lg fs-4 text-black">Chorvlet</a></li>

                    </ul>
                </div>

            </div>
            <div class="text-center mx-auto">
                <button type="button" class="mark-btn fw-semibold btn-lg px-5 py-3 text-center">VIEW ALL MARKS</button>
            </div>
        </div>
        <hr class="text-black">
    </section>
    <!--  -->
    <section class="inventry pt-5 pb-5">
        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators text-danger">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-md-4 pb-4">
                                <div class="card h-100">
                                    <div>
                                        <img src="assets/images/illustration/bg11.jpg" alt="" class="img-fluid">
                                    </div>
                                    <div class="p-4">
                                        <div class="car-info ">
                                            <h2 class="fs-4 pt-2">2008 CADILLAC STS RWD W/1SB</h2>
                                        </div>
                                        <div class="d-flex justify-content-between ">
                                            <div>
                                                <p>Buy Now: USD 5400</p>
                                                <p>Unknown</p>
                                            </div>
                                            <div>
                                                <p>23096 min</p>
                                                <p>key available</p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-4 pb-4">
                                <div class="card h-100">
                                    <div>
                                        <img src="assets/images/illustration/bg2.jpg" alt="" class="img-fluid">
                                    </div>
                                    <div class="p-4">
                                        <div class="car-info">
                                            <h2 class="fs-4 pt-2">2006 FORD FREESTYLE LIMITED</h2>
                                        </div>
                                        <div class="d-flex justify-content-between ">

                                            <div>
                                                <p>Buy Now: USD 5400</p>
                                                <p>Unknown</p>
                                            </div>
                                            <div>
                                                <p>23096 min</p>
                                                <!-- <p  class="border border-1 border-success text-center">Run & drive</p> -->
                                                <p>key available</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-4 pb-4">
                                <div class="card h-100">
                                    <div>
                                        <img src="assets/images/illustration/bg2.jpg" alt="" class="img-fluid">
                                    </div>
                                    <div class="p-4">
                                        <div class="car-info">
                                            <h2 class="fs-4 pt-2">2011 MAZDA MAZDA3 I SPORT</h2>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <p>Buy Now: USD 5400</p>
                                                <p>Unknown</p>
                                            </div>
                                            <div>
                                                <p>23096 min</p>
                                                <p class="border border-1 border-success text-center">Run & drive</p>
                                                <p>key available</p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-md-4 pb-4">
                                <div class="card h-100">
                                    <div>
                        <img src="assets/images/illustration/bg11.jpg" alt="" class="img-fluid">
                                    </div>
                                    <div class="p-4">
                                        <div class="car-info">
                                            <h2 class="fs-4 pt-2">2004 FORD RANGER XL FLEET/XLT VALUE/XLT</h2>
                                        </div>
                                        <div class="d-flex justify-content-between ">
                                            <div>
                                                <p>Buy Now: USD 5400</p>
                                                <p>Unknown</p>
                                            </div>
                                            <div>
                                                <p>23096 min</p>
                                                <p>key available</p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-4 pb-4">
                                <div class="card h-100">
                                    <div>
                                        <img src="assets/images/illustration/bg2.jpg" alt="" class="img-fluid">
                                    </div>
                                    <div class="p-4">
                                        <div class="car-info">
                                            <h2 class="fs-4 pt-2">2006 FORD FREESTYLE LIMITED</h2>
                                        </div>
                                        <div class="d-flex justify-content-between ">
                                            <div>
                                                <p>Buy Now: USD 5400</p>
                                                <p>Unknown</p>
                                            </div>
                                            <div>
                                                <p>23096 min</p>

                                                <!-- <p  class="border border-1 border-success text-center">Run & drive</p> -->

                                                <p>key available</p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-4 pb-4">
                                <div class="card h-100">
                                    <div>
                                        <img src="assets/images/illustration/bg2.jpg" alt="" class="img-fluid">
                                    </div>
                                    <div class="p-4">
                                        <div class="car-info">
                                            <h2 class="fs-4 pt-2">2011 MAZDA MAZDA3 I SPORT</h2>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <p>Buy Now: USD 5400</p>
                                                <p>Unknown</p>
                                            </div>
                                            <div>
                                                <p>23096 min</p>
                                                <p class="border border-1 border-success text-center">Run & drive</p>
                                                <p>key available</p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-md-4 pb-4">
                                <div class="card h-100">
                                    <div>
                                        <img src="assets/images/illustration/bg11.jpg" alt="" class="img-fluid">
                                    </div>
                                    <div class="p-4">
                                        <div class="car-info">
                                            <h2 class="fs-4 pt-2">2004 FORD RANGER XL FLEET/XLT VALUE/XLT</h2>
                                        </div>
                                        <div class="d-flex justify-content-between ">
                                            <div>
                                                <p>Buy Now: USD 5400</p>
                                                <p>Unknown</p>
                                            </div>
                                            <div>
                                                <p>23096 min</p>
                                                <p>key available</p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-4 pb-4">
                                <div class="card h-100">
                                    <div>
                                        <img src="assets/images/illustration/bg11.jpg" alt="" class="img-fluid">
                                    </div>
                                    <div class="p-4">
                                        <div class="car-info">
                                            <h2 class="fs-4 pt-2">2013 DODGE DART SXT</h2>
                                        </div>
                                        <div class="d-flex justify-content-between ">
                                            <div>
                                                <p>Buy Now: USD 5400</p>
                                                <p>Unknown</p>
                                            </div>
                                            <div>
                                                <p>23096 min</p>
                                                <!-- <p  class="border border-1 border-success text-center">Run & drive</p> -->
                                                <p>key available</p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-4 pb-4">
                                <div class="card h-100">
                                    <div>
                                        <img src="assets/images/illustration/bg2.jpg" alt="" class="img-fluid">
                                    </div>
                                    <div class="p-4">
                                        <div class="car-info">
                                            <h2 class="fs-4 pt-2">2011 MAZDA MAZDA3 I SPORT</h2>
                                        </div>
                                        <div class="d-flex justify-content-between ">
                                            <div>
                                                <p>Buy Now: USD 5400</p>
                                                <p>Unknown</p>
                                            </div>
                                            <div>
                                                <p>23096 min</p>
                                                <p class="border border-1 border-success text-center">Run & drive</p>
                                                <p>key available</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="text-center mx-auto pt-5 pb-3">
            <button type="button" class="car-btn btn-lg px-5 py-3 fw-semibold  text-center text-white">Register To
                Buy</button>
        </div>
    </section>
    <!--  -->

    <section class="Global container-fluid">
        <div class="Global-wrapper container pt-5 pb-3">
            <div class="text-start pt-md-5">
                <h2 class="text-black pt-3 fs-1 fw-bolder">IAA is a Leader in the Global Vehicle Marketplace</h2>
                <span class="spanStyle-1"></span>
                <p class="text-muted pt-2 fs-5">IAA provides international buyers with the flexibility of buying online
                    either with a registeblue buyer account or through a broker. Our Market Alliance members can provide
                    local support to buyers in over 170 countries with bidding, buying and shipping in select regions.
                    IAA is always looking for opportunities to grow our Market Alliance network and provide even more
                    customers with the conveniences of our online digital marketplace.</p>
                <p class="text-muted fs-5">Visit the IAA Market Alliances & Brokers page to see a list of our network
                    members and the countries where they operate.</p>
            </div>
            <div class="text-start pt-3">
                <button type="button" class="global-btn px-5 py-3 text-center text-white border"> Explore
                    our Market alligance And Broker Network <span> <i
                            class="bi bi-arrow-right text-white fs-5 fw-semibold"></i></span> </button>
            </div>
        </div>
    </section>
    <hr>
    <!--  -->
    <section class="news container-fluid">
        <div class="news-wrapper container pb-4">
            <div class="text-start pt-3">
                <h2 class="text-black pt-3 fs-1 fw-bolder">IAA is a Leader in the Global Vehicle Marketplace</h2>
                <span class="spanStyle-1"></span>
                <p class="text-muted pt-2 fs-5">Read up on IAA’s latest buyer news with regular updates from Team IAA.
                    Stay current with original content that includes product launches and enhancements, updates
                    regarding IAA’s branch locations, and deep dives into current industry trends and innovations..</p>
            </div>
            <div class="row">
                <div class="col-12 ">
                    <div class="card p-3 text-start">
                        <div class="box pt-3">
                            <p class="blue">ARTICLE</p>
                            <h3>Online buy : Bidding Strategy</h3>
                            <h6>June 7, 2023</h6>
                            <div class="pt-3">
                                <a href="" role="button" class="box-btn "><u>Read More <span><i
                                                class="bi bi-arrow-right"></i></span></u></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 ">
                    <div class="card p-3 text-start">
                        <div class="box pt-3">
                            <p class="blue">ARTICLE</p>
                            <h3>Online Actions: Do Your Research</h3>
                            <h6>June 7, 2023</h6>
                            <div class="pt-3">
                                <a href="" role="button" class="box-btn "><u>Read More <span><i
                                                class="bi bi-arrow-right"></i></span></u></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 ">
                    <div class="card p-3 text-start">
                        <div class="box pt-3">
                            <p class="blue">ARTICLE</p>
                            <h3>Online bike Actions: Who Can Buy?</h3>
                            <h6 class="">June 7, 2023</h6>
                            <div class="pt-3">
                                <a href="" role="button" class="box-btn "><u>Read More <span><i
                                                class="bi bi-arrow-right"></i></span></u></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- footer start -->
    <section class="footer container-fluid">
        <div class="footer-wrapper container pt-5">
            <div class="row text-center mx-auto">
                <div class="col-12 col-md-4 col-xl-2 pb-3 ">
                  
                    <ul class="footer-list text-start">
                        <li><h6 class="text-white fw-semibold pb-2">COMPANY</h6></li>
                        <li class="lh-lg"><a href="" class="text-white"><u>About Us</u></a></li>
                        <li class="lh-lg"><a href="" class="text-white"><u>Location</u></a></li>
                        <li class="lh-lg"><a href="" class="text-white"><u>Career</u></a></li>
                        <li class="lh-lg"><a href="" class="text-white"><u>Investor Relation</u></a></li>
                        <li class="lh-lg"><a href="" class="text-white"><u>IAA app</u></a></li>
                        <li class="lh-lg"><a href="" class="text-white"><u>IAA family of comapny</u></a></li>
                    </ul>
                </div>
                <div class="col-12 col-md-4 col-xl-2 pb-3  ">
            <ul class="footer-list text-start">
                        <li> <h6 class="text-white fw-semibold pb-2 text-start ">VEHICLE</h6></li>
                        <li class="lh-lg"><a href="" class="text-white"><u>Car</u></a></li>
                        <li class="lh-lg"><a href="" class="text-white"><u>Truck</u></a></li>
                        <li class="lh-lg"><a href="" class="text-white"><u>MotorCycle</u></a></li>
                        <li class="lh-lg"><a href="" class="text-white"><u>SUVs</u></a></li>
                        <li class="lh-lg"><a href="" class="text-white"><u>RVs</u></a></li>
                    </ul>
                </div>
                <div class="col-12 col-md-4 col-xl-2 pb-3  ">
                   <ul class="footer-list text-start">
                        <li> <h6 class="text-white fw-semibold pb-2 text-start ">HELP</h6></li>
                        <li class="lh-lg"><a href="" class="text-white"><u>New Buyer Resources</u></a></li>
                        <li class="lh-lg"><a href="" class="text-white"><u>How to Buy</u></a></li>
                        <li class="lh-lg"><a href="" class="text-white"><u>Find a Broker</u></a></li>
                        <li class="lh-lg"><a href="" class="text-white"><u>Document & Form</u></a></li>
                        <li class="lh-lg"><a href="" class="text-white"><u>Tutorial Vedio</u></a></li>
                        <li class="lh-lg"><a href="" class="text-white"><u>Contact US</u></a></li>
                    </ul>
                </div>
                <div class="col-12 col-xl-3 pb-2  ">
                    <div class="d-md-flex justify-content-between d-xl-block pt-md-3 pt-xl-0">
                        <div>
                            <h6 class="text-white fw-semibold pb-2 text-start ">DOWNLOAD THE APP</h6>
                            <div class="d-flex justify-content-center">
                                <div class="me-2">
                                    <img src="assets/images/illustration/app-1.svg" alt="app" class="img-fluid">
                                </div>
                                <div>
                                    <img src="assets/images/illustration/app-2.svg" alt="app" class="img-fluid">
                                </div>
                            </div>
                        </div>


                        <div class=" pt-4 pt-md-0 pt-lg-4 pt-xl-4">
                            <h6 class="text-white fw-semibold pb-2 text-start pt-3">SITE PREFERANCE</h6>
                            <div class="d-flex justify-content-center pt-2">
                                <div>
                                    <div class="dropdown me-2">
                                        <button
                                            class="btn bg-transaprent text-white border border-secondary dropdown-toggle"
                                            type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            English
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Espanol</a></li>
                                            <li><a class="dropdown-item" href="#">Francsis</a></li>
                                            <li><a class="dropdown-item" href="#">Polski</a></li>
                                            <li><a class="dropdown-item" href="#">*$%$~</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn  bg-transaprent border border-secondary text-white"
                                        data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                        12:53AM CDT
                                    </button>
                                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"
                                        data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                        aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centeblue">
                                            <div class="modal-content  text-start p-3">
                                                <h5 class="text-dark fw-semibold pb-3">SET MY TIME ZONE</h5>
                                                <p class="text-muted pb-2">Current Time-12:56Am CDT</p>
                                                <select class="form-select mb-3" aria-label="Default select example">
                                                    <option selected>COUNTRY</option>
                                                    <option value="1">INDIA</option>
                                                    <option value="2">PAKISTAN</option>
                                                    <option value="3">ENGLAND</option>
                                                    <option value="4">JAPAN</option>
                                                    <option value="5">CHINA</option>
                                                    <option value="6">UNITED KINGDOM</option>
                                                    <option value="7">SWEDEN</option>
                                                    <option value="8">SINGAPUR</option>
                                                    <option value="9">TURKEY</option>
                                                </select>
                                                <select class="form-select mb-3" aria-label="Default select example">
                                                    <option selected>CITY</option>
                                                    <option value="1">BANGLORE</option>
                                                    <option value="2">PUNE</option>
                                                    <option value="3">MUMBAI</option>
                                                    <option value="4">GUNNA</option>
                                                    <option value="5">DELHI</option>

                                                </select>
                                                <div class="modal-footer">
                                                    <button type="button"
                                                        class="btn px-2 py-2 text-dark text-center fw-semibold bg-white border "
                                                        data-bs-dismiss="modal">Cancle</button>
                                                    <div id="liveAlertPlaceholder"></div>
                                                    <button type="button"
                                                        class="form-btn px-2 py-2 text-center text-white fw-semibold bg-blue border "
                                                        id="liveAlertBtn">Save</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--  -->
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-12 col-xl-2 pb-3">
                    <div class="d-md-flex justify-content-between d-xl-block pt-md-3 pt-xl-0">
                        <div>
                            <h6 class="text-white fw-semibold pb-2 text-start ">SIGANOS</h6>
                            <div class="d-flex justify-content-center pt-3">
                                <li class="px-2"><a href=""><i class="bi bi-facebook text-white fs-5"></i></a></li>
                                <li class="px-2"><a href=""><i class="bi bi-whatsapp text-white fs-5"></i></a></li>
                                <li class="px-2"><a href=""><i class="bi bi-twitter text-white fs-5"></i></a></li>
                                <li class="px-2"><a href=""><i class=" bi bi-linkedin text-white fs-5"></i></a></li>
                                <li class="px-2"><a href=""><i class="bi bi-youtube text-white fs-5"></i></a></li>
                            </div>
                        </div>
                        <div class=" pt-3 pt-md-5 ">
                            <img src="assets/images/illustration/app-3.png" alt="app" class="">
                        </div>
                    </div>
                </div>
            </div>
            <!--  -->
            <hr class="hr text-white">
            <div class="row pb-md-3 text-center mx-auto">
                <div class="col-12 col-md-3 pb-4 pt-3">
                    <div class="pb-3">
                        <p class="text-white">IAA INTERACTTM</p>
                        <a href="" class="text-white"><u>Innovative Auto Auction Tools</u></a>
                    </div>
                    <div class="pt-4">
                        <p class="text-white">IAA LOAN PAYOFFTM</p>
                        <a href="" class="text-white"><u>Faster Payoff Payments</u></a>
                    </div>
                </div>
                <div class="col-12 col-md-3 pb-4 pt-3">
                    <div class="pb-3">
                        <p class="text-white">IAA TRANSPORTTM</p>
                        <a href="" class="text-white"><u>Door-to-Door Vehicle Delivery</u></a>
                    </div>
                    <div class="pt-4">
                        <p class="text-white">INSPECTION SERVICES®</p>
                        <a href="" class="text-white"><u>Remote Inspections & Appraisals</u></a>
                    </div>
                </div>
                <div class="col-12 col-md-3 pb-4 pt-3">
                    <div class="pb-3">
                        <p class="text-white">IAA BUY NOWTM</p>
                        <a href="" class="text-white"><u>Don’t Wait for an Auction</u></a>
                    </div>
                    <div class="pt-4">
                        <p class="text-white">DEALER CAT SERVICES</p>
                        <a href="" class="text-white"><u>Offload Vehicles After Catastrophe</u></a>
                    </div>
                </div>
                <div class="col-12 col-md-3 pb-4 pt-3 ">
                    <div class="pb-3">
                        <p class="text-white">FINANCIAMIENTO</p>
                        <a href="" class="text-white"><u>Buy Now, Pay Over Times</u></a>
                    </div>
                    <div class="pt-4">
                        <p class="text-white">IAA AUCTIONNOWTM</p>
                        <a href="" class="text-white"><u>Digital Auto Auction Platform</u></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="copyright pt-3 pb-2 bg-dark">
        <div class="text-center mx-auto">
            <p class="text-white">Designed by <span class="blue fw-bold "></span></p>
        </div>
    </section>



    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>