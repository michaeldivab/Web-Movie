<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Planet</title>
    <!-- Use asset() helper for correct path to static files -->
    <link href="{{ asset('../css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('../css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('../css/global.css') }}" rel="stylesheet">
    <link href="{{ asset('../css/index.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani&display=swap" rel="stylesheet">

    <!-- Include JS file using asset() -->
    <script src="{{ asset('./js/bootstrap.bundle.min.js') }}"></script>
</head>
<body>

<section id="top">
    <div class="container">
        <div class="row top_1">
            <div class="col-md-3">
                <div class="top_1l pt-1">
                    <h3 class="mb-0"><a class="text-white" href="index.html"><i
                                class="fa fa-video-camera col_red me-1"></i> Planet</a></h3>
                </div>
            </div>
            <div class="col-md-5">
                <div class="top_1m">
                    <div class="input-group">
                        <input type="text" class="form-control bg-black" placeholder="Search Site...">
                        <span class="input-group-btn">
					<button class="btn btn text-white bg_red rounded-0 border-0" type="button">
						 Search</button>
				</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="top_1r text-end">
                    <ul class="social-network social-circle mb-0">
                        <li>
                            <a href="login.blade.php" class="icoLogin" title="Login">
                                <i class="fa fa-sign-in"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="header">
    <nav class="navbar navbar-expand-md navbar-light" id="navbar_sticky">
        <div class="container">
            <a class="navbar-brand text-white fw-bold" href="index.html"><i class="fa fa-video-camera col_red me-1"></i>
                Planet</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mb-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Team</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</section>

<section id="center" class="center_home">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"
                    class="" aria-current="true"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            @foreach ($items as $item)
            <div class="carousel-item active">
                <img src="{{ $item->poster }}" alt="Sample Image" style="width: 2000px; height: 600px; object-fit: cover;>
                    <h5 class=" card-title">{{ $item->title }}</h5>
                <div class="carousel-caption d-md-block">
                    <h1 class="font_60"> {{ $item->title }} </h1>
                    <h6 class="mt-3">
	    <span class="col_red me-3">
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star-half-o"></i>
		</span>
                        4.5 (Imdb) Year : {{ $item->year }}
                        <a class="bg_red p-2 pe-4 ps-4 ms-3 text-white d-inline-block"
                           href="https://youtu.be/d9MyW72ELq0?si=FJgP37jUtQQ11SjM">Action</a>
                    </h6>
                    <p class="mt-3">{{ $item->description }}</p>
                    <p class="mb-2"><span class="col_red me-1 fw-bold">Genres:</span> {{ $item->genre }}</p>
                    <h6 class="mt-4"><a class="button" href="https://youtu.be/d9MyW72ELq0?si=FJgP37jUtQQ11SjM"><i
                                class="fa fa-play-circle align-middle me-1"></i> Watch Trailer</a></h6>
                </div>
            </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>

<section id="trend" class="pt-4 pb-5">
    <div class="container">
        <div class="row trend_1">
            <div class="col-md-6 col-6">
                <div class="trend_1l">
                    <h4 class="mb-0"><i class="fa fa-youtube-play align-middle col_red me-1"></i> Trending <span
                            class="col_red">Movies</span></h4>
                </div>
            </div>
            <div class="col-md-6 col-6">
                <div class="trend_1r text-end">
                    <h6 class="mb-0"><a class="button" href="#"> View All</a></h6>
                </div>
            </div>
        </div>
        <div class="row trend_2 mt-4">
            <div id="carouselExampleCaptions1" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="trend_2i row">
                            <div class="col-md-3 col-6">
                                <div class="trend_2im clearfix position-relative">
                                    <div class="trend_2im1 clearfix">
                                        <div class="grid">
                                            <figure class="effect-jazz mb-0">
                                                <a href="https://www.youtube.com/watch?v=sCmCayvkABI"><img
                                                        src="../public/img/Trending Medellin.png" class="w-100" alt="img25"></a>
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="trend_2im2 clearfix text-center position-absolute w-100 top-0">
                                        <span class="fs-1"><a class="col_red"
                                                              href="https://youtu.be/sCmCayvkABI?si=aWEPZmqm26qdP8n6"><i
                                                    class="fa fa-youtube-play"></i></a></span>
                                    </div>
                                </div>
                                <div class="trend_2ilast bg_grey p-3 clearfix">
                                    <h5><a class="col_red" href="https://youtu.be/sCmCayvkABI?si=aWEPZmqm26qdP8n6">Medellin</a>
                                    </h5>
                                    <p class="mb-2">Reda is a French wannabe tough guy who manages a...</p>
                                    <span class="col_red">
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		</span>
                                    <p class="mb-0">1 Views</p>
                                </div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="trend_2im clearfix position-relative">
                                    <div class="trend_2im1 clearfix">
                                        <div class="grid">
                                            <figure class="effect-jazz mb-0">
                                                <a href="https://youtu.be/32RAq6JzY-w?si=l5nTqM2qGWru7m0m"><img
                                                        src="../public/img/Trending Fast X.png" class="w-100" alt="img25"></a>
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="trend_2im2 clearfix text-center position-absolute w-100 top-0">
                                        <span class="fs-1"><a class="col_red"
                                                              href="https://youtu.be/32RAq6JzY-w?si=l5nTqM2qGWru7m0m"><i
                                                    class="fa fa-youtube-play"></i></a></span>
                                    </div>
                                </div>
                                <div class="trend_2ilast bg_grey p-3 clearfix">
                                    <h5><a class="col_red" href="https://youtu.be/32RAq6JzY-w?si=l5nTqM2qGWru7m0m">Fast
                                            X</a></h5>
                                    <p class="mb-2">It stars Vin Diesel as Dominic Toretto alongside an ensemble
                                        cast...</p>
                                    <span class="col_red">
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star-half-o"></i>
		</span>
                                    <p class="mb-0">1 Views</p>
                                </div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="trend_2im clearfix position-relative">
                                    <div class="trend_2im1 clearfix">
                                        <div class="grid">
                                            <figure class="effect-jazz mb-0">
                                                <a href="https://youtu.be/z1xJAyVKAPY?si=PqmdeAGiJMtv7Ioh"><img
                                                        src="../public/img/Trending The Black Demon.png" class="w-100"
                                                        alt="img25"></a>
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="trend_2im2 clearfix text-center position-absolute w-100 top-0">
                                        <span class="fs-1"><a class="col_red"
                                                              href="https://youtu.be/z1xJAyVKAPY?si=PqmdeAGiJMtv7Ioh"><i
                                                    class="fa fa-youtube-play"></i></a></span>
                                    </div>
                                </div>
                                <div class="trend_2ilast bg_grey p-3 clearfix">
                                    <h5><a class="col_red" href="https://youtu.be/z1xJAyVKAPY?si=PqmdeAGiJMtv7Ioh">The
                                            Black Demon</a></h5>
                                    <p class="mb-2">Nixon Oil company inspector Paul Sturges is sent to a...</p>
                                    <span class="col_red">
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		</span>
                                    <p class="mb-0">1 Views</p>
                                </div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="trend_2im clearfix position-relative">
                                    <div class="trend_2im1 clearfix">
                                        <div class="grid">
                                            <figure class="effect-jazz mb-0">
                                                <a href="https://youtu.be/d9MyW72ELq0?si=FJgP37jUtQQ11SjM"><img
                                                        src="../public/img/Trending Avatar.png" class="w-100" alt="img25"></a>
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="trend_2im2 clearfix text-center position-absolute w-100 top-0">
                                        <span class="fs-1"><a class="col_red"
                                                              href="https://youtu.be/d9MyW72ELq0?si=FJgP37jUtQQ11SjM"><i
                                                    class="fa fa-youtube-play"></i></a></span>
                                    </div>
                                </div>
                                <div class="trend_2ilast bg_grey p-3 clearfix">
                                    <h5><a class="col_red" href="https://youtu.be/d9MyW72ELq0?si=FJgP37jUtQQ11SjM">Avatar:
                                            The Way of Water</a></h5>
                                    <p class="mb-2">Set more than a decade after the events of the first film...</p>
                                    <span class="col_red">
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star-half-o"></i>
		</span>
                                    <p class="mb-0">1 Views</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</section>

<section id="upcome" class="pt-4 pb-5">
    <div class="container">
        <div class="row trend_1">
            <div class="col-md-6 col-6">
                <div class="trend_1l">
                    <h4 class="mb-0"><i class="fa fa-youtube-play align-middle col_red me-1"></i> New Release <span
                            class="col_red">Movies</span></h4>
                </div>
            </div>
            <div class="col-md-6 col-6">
                <div class="trend_1r text-end">
                    <h6 class="mb-0"><a class="button" href="#"> View All</a></h6>
                </div>
            </div>
        </div>
        <div class="row trend_2 mt-4">
            <div id="carouselExampleCaptions2" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="trend_2i row">
                            <div class="col-md-4">
                                <div class="trend_2im clearfix position-relative">
                                    <div class="trend_2im1 clearfix">
                                        <div class="grid">
                                            <figure class="effect-jazz mb-0">
                                                <a href="https://youtu.be/IAdCsNtEuBU?si=Yl1w7hyJkV1lyuni"><img
                                                        src="../public/img/New Relesae Ghosted.png" class="w-100" alt="img25"></a>
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="trend_2im2 clearfix text-center position-absolute w-100 top-0">
                                        <span class="fs-1"><a class="col_red"
                                                              href="https://youtu.be/IAdCsNtEuBU?si=Yl1w7hyJkV1lyuni"><i
                                                    class="fa fa-youtube-play"></i></a></span>
                                    </div>
                                </div>
                                <div class="trend_2ilast bg_grey p-3 clearfix">
                                    <h5><a class="col_red" href="https://youtu.be/IAdCsNtEuBU?si=Yl1w7hyJkV1lyuni">Ghosted</a>
                                    </h5>
                                    <p class="mb-2">American romantic action-adventure comedy film directed by...</p>
                                    <span class="col_red">
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star-half-o"></i>
		</span>
                                    <p class="mb-0">1 Views</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="trend_2im clearfix position-relative">
                                    <div class="trend_2im1 clearfix">
                                        <div class="grid">
                                            <figure class="effect-jazz mb-0">
                                                <a href="https://youtu.be/qEVUtrk8_B4?si=rrRYzg3il67XvSPO"><img
                                                        src="../public/img/New Release John Wick.png" class="w-100"
                                                        alt="img25"></a>
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="trend_2im2 clearfix text-center position-absolute w-100 top-0">
                                        <span class="fs-1"><a class="col_red"
                                                              href="https://youtu.be/qEVUtrk8_B4?si=rrRYzg3il67XvSPO"><i
                                                    class="fa fa-youtube-play"></i></a></span>
                                    </div>
                                </div>
                                <div class="trend_2ilast bg_grey p-3 clearfix">
                                    <h5><a class="col_red" href="https://youtu.be/qEVUtrk8_B4?si=rrRYzg3il67XvSPO">John
                                            Wick:Chapter 4</a></h5>
                                    <p class="mb-2">John Wick uncovers a path to defeating The High Table...</p>
                                    <span class="col_red">
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		</span>
                                    <p class="mb-0">1 Views</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="trend_2im clearfix position-relative">
                                    <div class="trend_2im1 clearfix">
                                        <div class="grid">
                                            <figure class="effect-jazz mb-0">
                                                <a href="https://youtu.be/JqcncLPi9zw?si=hM3OkGSzGje71KnC"><img
                                                        src="../public/img/New Release guardian of the galaxy.png" class="w-100"
                                                        alt="img25"></a>
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="trend_2im2 clearfix text-center position-absolute w-100 top-0">
                                        <span class="fs-1"><a class="col_red"
                                                              href="https://youtu.be/JqcncLPi9zw?si=hM3OkGSzGje71KnC"><i
                                                    class="fa fa-youtube-play"></i></a></span>
                                    </div>
                                </div>
                                <div class="trend_2ilast bg_grey p-3 clearfix">
                                    <h5><a class="col_red" href="https://youtu.be/JqcncLPi9zw?si=hM3OkGSzGje71KnC">Guardian
                                            of the Galaxy</a></h5>
                                    <p class="mb-2">American superhero film based on the Marvel Comics...</p>
                                    <span class="col_red">
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star-half-o"></i>
		</span>
                                    <p class="mb-0">1 Views</p>
                                </div>
                            </div>

                        </div>
                    </div>
</section>

<section id="popular" class="pt-4 pb-5 bg_grey">
    <div class="container">
        <div class="row trend_1">
            <div class="col-md-12">
                <div class="trend_1l">
                    <h4 class="mb-0"><i class="fa fa-youtube-play align-middle col_red me-1"></i> Recommended <span
                            class="col_red">Movies</span></h4>
                </div>
            </div>
        </div>
        <div class="row popular_1 mt-4">
            <ul class="nav nav-tabs  border-0 mb-0">
                <li class="nav-item">
                    <a href="#home" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                        <span class="d-md-block">MOVIES</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#profile" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                        <span class="d-md-block">SERIES</span>
                    </a>
                </li>

            </ul>
        </div>
        <div class="popular_2 row mt-4">
            <div class="tab-content">
                <div class="tab-pane active" id="home">
                    <div class="popular_2i row">
                        <div class="col-md-6">
                            <div class="popular_2i1 row">
                                <div class="col-md-4 col-4">
                                    <div class="popular_2i1lm position-relative clearfix">
                                        <div class="popular_2i1lm1 clearfix">
                                            <div class="grid">
                                                <figure class="effect-jazz mb-0">
                                                    <a href="https://youtu.be/67MaSPjGHSs?si=IweEfbyjx2fOn0T-"><img
                                                            src="../public/img/Recom Robots.png" class="w-100" alt="img25"></a>
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="popular_2i1lm2 position-absolute top-0 w-100 text-center clearfix">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8 col-8">
                                    <div class="popular_2i1r">
                                        <h5><a class="col_red" href="https://youtu.be/67MaSPjGHSs?si=IweEfbyjx2fOn0T-">Robots</a>
                                        </h5>
                                        <h6>Romantic</h6>
                                        <h6> Imdb 8.2 <span class="ms-2"><i class="fa fa-star col_red me-1"></i></span>
                                            Year : 2023 <span class="ms-2">Runtime: 1h 49m</span></h6>
                                        <p>Affluent suburbanites Elaine and Charles illegally use android doubles of
                                            themselves to avoid the time constraints of dating and the strain of
                                            work.</p>
                                        <h6 class="mb-0"><a class="button"
                                                            href="https://youtu.be/67MaSPjGHSs?si=IweEfbyjx2fOn0T-">
                                                More Info - Trailer</a></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="popular_2i1 row">
                                <div class="col-md-4 col-4">
                                    <div class="popular_2i1lm position-relative clearfix">
                                        <div class="popular_2i1lm1 clearfix">
                                            <div class="grid">
                                                <figure class="effect-jazz mb-0">
                                                    <a href="https://youtu.be/CQDXtD2HJAs?si=EY3xM7d-6KPjivcm"><img
                                                            src="../public/img/Recom Love Again.png" class="w-100"
                                                            alt="img25"></a>
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="popular_2i1lm2 position-absolute top-0 w-100 text-center clearfix">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8 col-8">
                                    <div class="popular_2i1r">
                                        <h5><a class="col_red" href="https://youtu.be/CQDXtD2HJAs?si=EY3xM7d-6KPjivcm">Love
                                                Again</a></h5>
                                        <h6>Romantic, Comedy</h6>
                                        <h6> Imdb 8.3 <span class="ms-2"><i class="fa fa-star col_red me-1"></i></span>
                                            Year : 2023 <span class="ms-2">Runtime: 2h 29m</span></h6>
                                        <p>A young woman tries to ease the pain of her fiancé's death by sending texts
                                            to his old cell phone number, and forms a connection with the man the
                                            number.</p>
                                        <h6 class="mb-0"><a class="button"
                                                            href="https://youtu.be/CQDXtD2HJAs?si=EY3xM7d-6KPjivcm">
                                                More Info - Trailer</a></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="popular_2i row mt-4">
                        <div class="col-md-6">
                            <div class="popular_2i1 row">
                                <div class="col-md-4 col-4">
                                    <div class="popular_2i1lm position-relative clearfix">
                                        <div class="popular_2i1lm1 clearfix">
                                            <div class="grid">
                                                <figure class="effect-jazz mb-0">
                                                    <a href="https://youtu.be/N-qn4h-amyY?si=VOTj3mqxHdOYB1ua"><img
                                                            src="../public/img/Recom Hypnotic.png" class="w-100" alt="img25"></a>
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="popular_2i1lm2 position-absolute top-0 w-100 text-center clearfix">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8 col-8">
                                    <div class="popular_2i1r">
                                        <h5><a class="col_red" href="https://youtu.be/N-qn4h-amyY?si=VOTj3mqxHdOYB1ua">Hypnotic</a>
                                        </h5>
                                        <h6>Action</h6>
                                        <h6> Imdb 8.4 <span class="ms-2"><i class="fa fa-star col_red me-1"></i></span>
                                            Year : 2023 <span class="ms-2">Runtime: 1h 59m</span></h6>
                                        <p>A detective investigates a mystery involving his missing daughter and a
                                            secret government program.</p>
                                        <h6 class="mb-0"><a class="button"
                                                            href="https://youtu.be/N-qn4h-amyY?si=VOTj3mqxHdOYB1ua">
                                                More Info - Trailer</a></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="popular_2i1 row">
                                <div class="col-md-4 col-4">
                                    <div class="popular_2i1lm position-relative clearfix">
                                        <div class="popular_2i1lm1 clearfix">
                                            <div class="grid">
                                                <figure class="effect-jazz mb-0">
                                                    <a href="https://youtu.be/K9TX-6HyuOc?si=6MOQrwop35hE6UuP"><img
                                                            src="../public/img/Recom Paint.png" class="w-100" alt="img25"></a>
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="popular_2i1lm2 position-absolute top-0 w-100 text-center clearfix">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8 col-8">
                                    <div class="popular_2i1r">
                                        <h5><a class="col_red" href="https://youtu.be/K9TX-6HyuOc?si=6MOQrwop35hE6UuP">Paint</a>
                                        </h5>
                                        <h6>Comedy</h6>
                                        <h6> Imdb 8.6 <span class="ms-2"><i class="fa fa-star col_red me-1"></i></span>
                                            Year : 2023 <span class="ms-2">Runtime: 1h 48m</span></h6>
                                        <p>Paint is an American independent comedy film written and directed by Brit
                                            McAdams. The film stars Owen Wilson, Michaela Watkins, Wendi
                                            McLendon-Covey.</p>
                                        <h6 class="mb-0"><a class="button"
                                                            href="https://youtu.be/K9TX-6HyuOc?si=6MOQrwop35hE6UuP">
                                                More Info - Trailer</a></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="profile">
                    <div class="popular_2i row">
                        <div class="col-md-6">
                            <div class="popular_2i1 row">
                                <div class="col-md-4 col-4">
                                    <div class="popular_2i1lm position-relative clearfix">
                                        <div class="popular_2i1lm1 clearfix">
                                            <div class="grid">
                                                <figure class="effect-jazz mb-0">
                                                    <a href="https://youtu.be/8ZYhuvIv1pA?si=7fRl4Ah-HpzRXpl_"><img
                                                            src="../public/img/Series Silo.png" class="w-100" alt="img25"></a>
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="popular_2i1lm2 position-absolute top-0 w-100 text-center clearfix">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8 col-8">
                                    <div class="popular_2i1r">
                                        <h5><a class="col_red" href="https://youtu.be/8ZYhuvIv1pA?si=7fRl4Ah-HpzRXpl_">Silo</a>
                                        </h5>
                                        <h6>Drama</h6>
                                        <h6> Imdb 8.2 <span class="ms-2"><i class="fa fa-star col_red me-1"></i></span>
                                            Year : 2023 <span class="ms-2">Runtime: 1h 49m</span></h6>
                                        <p>In a bleak dystopian future, humanity clings to survival deep underground
                                            within the confines of a colossal silo.</p>
                                        <h6 class="mb-0"><a class="button"
                                                            href="https://youtu.be/8ZYhuvIv1pA?si=7fRl4Ah-HpzRXpl_">
                                                More Info - Trailer</a></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="popular_2i1 row">
                                <div class="col-md-4 col-4">
                                    <div class="popular_2i1lm position-relative clearfix">
                                        <div class="popular_2i1lm1 clearfix">
                                            <div class="grid">
                                                <figure class="effect-jazz mb-0">
                                                    <a href="https://youtu.be/Se26Op9sEC8?si=lZVtFyy2xR5Fnmqk"><img
                                                            src="../public/img/Series Black Knight.png" class="w-100" alt="img25"></a>
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="popular_2i1lm2 position-absolute top-0 w-100 text-center clearfix">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8 col-8">
                                    <div class="popular_2i1r">
                                        <h5><a class="col_red" href="https://youtu.be/Se26Op9sEC8?si=lZVtFyy2xR5Fnmqk">Black
                                                Knight</a></h5>
                                        <h6>Action</h6>
                                        <h6> Imdb 8.3 <span class="ms-2"><i class="fa fa-star col_red me-1"></i></span>
                                            Year : 2023 <span class="ms-2">Runtime: 2h 29m</span></h6>
                                        <p>A legendary delivery driver 5-8 with exceptional battle skills and a refugee
                                            Sawol who dreams of following in his footsteps.</p>
                                        <h6 class="mb-0"><a class="button"
                                                            href="https://youtu.be/Se26Op9sEC8?si=lZVtFyy2xR5Fnmqk">
                                                More Info - Trailer</a></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="popular_2i row mt-4">
                        <div class="col-md-6">
                            <div class="popular_2i1 row">
                                <div class="col-md-4 col-4">
                                    <div class="popular_2i1lm position-relative clearfix">
                                        <div class="popular_2i1lm1 clearfix">
                                            <div class="grid">
                                                <figure class="effect-jazz mb-0">
                                                    <a href="https://youtu.be/3_y2j72Cfe4?si=JUckVg7Iqzy2tai2"><img
                                                            src="../public/img/Series Drops of God.png" class="w-100" alt="img25"></a>
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="popular_2i1lm2 position-absolute top-0 w-100 text-center clearfix">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8 col-8">
                                    <div class="popular_2i1r">
                                        <h5><a class="col_red" href="https://youtu.be/3_y2j72Cfe4?si=JUckVg7Iqzy2tai2">Drops
                                                of God</a></h5>
                                        <h6>Drama</h6>
                                        <h6> Imdb 8.4 <span class="ms-2"><i class="fa fa-star col_red me-1"></i></span>
                                            Year : 2023 <span class="ms-2">Runtime: 1h 59m</span></h6>
                                        <p>A woman discovers the world's greatest wine collection that's left by her
                                            estranged father and competes against a Japanese man to claim her
                                            inheritance.</p>
                                        <h6 class="mb-0"><a class="button"
                                                            href="https://youtu.be/3_y2j72Cfe4?si=JUckVg7Iqzy2tai2">
                                                More Info - Trailer</a></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="popular_2i1 row">
                                <div class="col-md-4 col-4">
                                    <div class="popular_2i1lm position-relative clearfix">
                                        <div class="popular_2i1lm1 clearfix">
                                            <div class="grid">
                                                <figure class="effect-jazz mb-0">
                                                    <a href="https://youtu.be/YDbnY9Obsfs?si=RNqcxQvdGRuzu6MG"><img
                                                            src="../public/img/Series The Night Agent.png" class="w-100"
                                                            alt="img25"></a>
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="popular_2i1lm2 position-absolute top-0 w-100 text-center clearfix">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8 col-8">
                                    <div class="popular_2i1r">
                                        <h5><a class="col_red" href="https://youtu.be/YDbnY9Obsfs?si=RNqcxQvdGRuzu6MG">The
                                                Night Agent</a></h5>
                                        <h6>Action, Drama</h6>
                                        <h6> Imdb 8.6 <span class="ms-2"><i class="fa fa-star col_red me-1"></i></span>
                                            Year : 2023 <span class="ms-2">Runtime: 1h 48m</span></h6>
                                        <p>Conspiracy ThrillerActionDramaThriller. Low-level FBI agent Peter Sutherland
                                            works in the basement of the White House manning a phone that never
                                            rings.</p>
                                        <h6 class="mb-0"><a class="button"
                                                            href="https://youtu.be/YDbnY9Obsfs?si=RNqcxQvdGRuzu6MG">
                                                More Info - Trailer</a></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="settings">
                    <div class="popular_2i row">
                        <div class="col-md-6">
                            <div class="popular_2i1 row">
                                <div class="col-md-4 col-4">
                                    <div class="popular_2i1lm position-relative clearfix">
                                        <div class="popular_2i1lm1 clearfix">
                                            <div class="grid">
                                                <figure class="effect-jazz mb-0">
                                                    <a href="#"><img src="../public/img/26.jpg" class="w-100" alt="img25"></a>
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="popular_2i1lm2 position-absolute top-0 w-100 text-center clearfix">
                                            <ul>
                                                <li class="d-inline-block"><a href="#"><i
                                                            class="fa fa-link col_red"></i></a></li>
                                                <li class="d-inline-block"><a href="#"><i
                                                            class="fa fa-search col_red"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8 col-8">
                                    <div class="popular_2i1r">
                                        <h5><a class="col_red" href="#">Semp Porta</a></h5>
                                        <h6>Action, Thriller</h6>
                                        <h6> Imdb 8.2 <span class="ms-2"><i class="fa fa-star col_red me-1"></i></span>
                                            Year : 2022 <span class="ms-2">Runtime: 1h 49m</span></h6>
                                        <p>Four waves of increasingly deadly alien attacks have left most of ruin.
                                            Cassie is on the run, desperately trying to save her younger brother.</p>
                                        <h6 class="mb-0"><a class="button" href="#"> More Info - Trailer</a></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="popular_2i1 row">
                                <div class="col-md-4 col-4">
                                    <div class="popular_2i1lm position-relative clearfix">
                                        <div class="popular_2i1lm1 clearfix">
                                            <div class="grid">
                                                <figure class="effect-jazz mb-0">
                                                    <a href="#"><img src="../public/img/27.jpg" class="w-100" alt="img25"></a>
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="popular_2i1lm2 position-absolute top-0 w-100 text-center clearfix">
                                            <ul>
                                                <li class="d-inline-block"><a href="#"><i
                                                            class="fa fa-link col_red"></i></a></li>
                                                <li class="d-inline-block"><a href="#"><i
                                                            class="fa fa-search col_red"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8 col-8">
                                    <div class="popular_2i1r">
                                        <h5><a class="col_red" href="#">Eget Diam</a></h5>
                                        <h6>Action, Thriller</h6>
                                        <h6> Imdb 8.3 <span class="ms-2"><i class="fa fa-star col_red me-1"></i></span>
                                            Year : 2022 <span class="ms-2">Runtime: 2h 29m</span></h6>
                                        <p>Four waves of increasingly deadly alien attacks have left most of ruin.
                                            Cassie is on the run, desperately trying to save her younger brother.</p>
                                        <h6 class="mb-0"><a class="button" href="#"> More Info - Trailer</a></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="popular_2i row mt-4">
                        <div class="col-md-6">
                            <div class="popular_2i1 row">
                                <div class="col-md-4 col-4">
                                    <div class="popular_2i1lm position-relative clearfix">
                                        <div class="popular_2i1lm1 clearfix">
                                            <div class="grid">
                                                <figure class="effect-jazz mb-0">
                                                    <a href="#"><img src="../public/img/28.jpg" class="w-100" alt="img25"></a>
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="popular_2i1lm2 position-absolute top-0 w-100 text-center clearfix">
                                            <ul>
                                                <li class="d-inline-block"><a href="#"><i
                                                            class="fa fa-link col_red"></i></a></li>
                                                <li class="d-inline-block"><a href="#"><i
                                                            class="fa fa-search col_red"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8 col-8">
                                    <div class="popular_2i1r">
                                        <h5><a class="col_red" href="#">Quis Sem</a></h5>
                                        <h6>Action, Thriller</h6>
                                        <h6> Imdb 8.4 <span class="ms-2"><i class="fa fa-star col_red me-1"></i></span>
                                            Year : 2022 <span class="ms-2">Runtime: 1h 59m</span></h6>
                                        <p>Four waves of increasingly deadly alien attacks have left most of ruin.
                                            Cassie is on the run, desperately trying to save her younger brother.</p>
                                        <h6 class="mb-0"><a class="button" href="#"> More Info - Trailer</a></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="popular_2i1 row">
                                <div class="col-md-4 col-4">
                                    <div class="popular_2i1lm position-relative clearfix">
                                        <div class="popular_2i1lm1 clearfix">
                                            <div class="grid">
                                                <figure class="effect-jazz mb-0">
                                                    <a href="#"><img src="../public/img/29.jpg" class="w-100" alt="img25"></a>
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="popular_2i1lm2 position-absolute top-0 w-100 text-center clearfix">
                                            <ul>
                                                <li class="d-inline-block"><a href="#"><i
                                                            class="fa fa-link col_red"></i></a></li>
                                                <li class="d-inline-block"><a href="#"><i
                                                            class="fa fa-search col_red"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8 col-8">
                                    <div class="popular_2i1r">
                                        <h5><a class="col_red" href="#">Ipsum Lorem</a></h5>
                                        <h6>Action, Thriller</h6>
                                        <h6> Imdb 8.6 <span class="ms-2"><i class="fa fa-star col_red me-1"></i></span>
                                            Year : 2022 <span class="ms-2">Runtime: 1h 48m</span></h6>
                                        <p>Four waves of increasingly deadly alien attacks have left most of ruin.
                                            Cassie is on the run, desperately trying to save her younger brother.</p>
                                        <h6 class="mb-0"><a class="button" href="#"> More Info - Trailer</a></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane" id="settings_o">
                    <div class="popular_2i row">
                        <div class="col-md-6">
                            <div class="popular_2i1 row">
                                <div class="col-md-4 col-4">
                                    <div class="popular_2i1lm position-relative clearfix">
                                        <div class="popular_2i1lm1 clearfix">
                                            <div class="grid">
                                                <figure class="effect-jazz mb-0">
                                                    <a href="#"><img src="../public/img/18.jpg" class="w-100" alt="img25"></a>
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="popular_2i1lm2 position-absolute top-0 w-100 text-center clearfix">
                                            <ul>
                                                <li class="d-inline-block"><a href="#"><i
                                                            class="fa fa-link col_red"></i></a></li>
                                                <li class="d-inline-block"><a href="#"><i
                                                            class="fa fa-search col_red"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8 col-8">
                                    <div class="popular_2i1r">
                                        <h5><a class="col_red" href="#">Semp Porta</a></h5>
                                        <h6>Action, Thriller</h6>
                                        <h6> Imdb 8.2 <span class="ms-2"><i class="fa fa-star col_red me-1"></i></span>
                                            Year : 2022 <span class="ms-2">Runtime: 1h 49m</span></h6>
                                        <p>Four waves of increasingly deadly alien attacks have left most of ruin.
                                            Cassie is on the run, desperately trying to save her younger brother.</p>
                                        <h6 class="mb-0"><a class="button" href="#"> More Info - Trailer</a></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="popular_2i1 row">
                                <div class="col-md-4 col-4">
                                    <div class="popular_2i1lm position-relative clearfix">
                                        <div class="popular_2i1lm1 clearfix">
                                            <div class="grid">
                                                <figure class="effect-jazz mb-0">
                                                    <a href="#"><img src="../public/img/19.jpg" class="w-100" alt="img25"></a>
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="popular_2i1lm2 position-absolute top-0 w-100 text-center clearfix">
                                            <ul>
                                                <li class="d-inline-block"><a href="#"><i
                                                            class="fa fa-link col_red"></i></a></li>
                                                <li class="d-inline-block"><a href="#"><i
                                                            class="fa fa-search col_red"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8 col-8">
                                    <div class="popular_2i1r">
                                        <h5><a class="col_red" href="#">Eget Diam</a></h5>
                                        <h6>Action, Thriller</h6>
                                        <h6> Imdb 8.3 <span class="ms-2"><i class="fa fa-star col_red me-1"></i></span>
                                            Year : 2022 <span class="ms-2">Runtime: 2h 29m</span></h6>
                                        <p>Four waves of increasingly deadly alien attacks have left most of ruin.
                                            Cassie is on the run, desperately trying to save her younger brother.</p>
                                        <h6 class="mb-0"><a class="button" href="#"> More Info - Trailer</a></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="popular_2i row mt-4">
                        <div class="col-md-6">
                            <div class="popular_2i1 row">
                                <div class="col-md-4 col-4">
                                    <div class="popular_2i1lm position-relative clearfix">
                                        <div class="popular_2i1lm1 clearfix">
                                            <div class="grid">
                                                <figure class="effect-jazz mb-0">
                                                    <a href="#"><img src="../public/img/20.jpg" class="w-100" alt="img25"></a>
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="popular_2i1lm2 position-absolute top-0 w-100 text-center clearfix">
                                            <ul>
                                                <li class="d-inline-block"><a href="#"><i
                                                            class="fa fa-link col_red"></i></a></li>
                                                <li class="d-inline-block"><a href="#"><i
                                                            class="fa fa-search col_red"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8 col-8">
                                    <div class="popular_2i1r">
                                        <h5><a class="col_red" href="#">Quis Sem</a></h5>
                                        <h6>Action, Thriller</h6>
                                        <h6> Imdb 8.4 <span class="ms-2"><i class="fa fa-star col_red me-1"></i></span>
                                            Year : 2022 <span class="ms-2">Runtime: 1h 59m</span></h6>
                                        <p>Four waves of increasingly deadly alien attacks have left most of ruin.
                                            Cassie is on the run, desperately trying to save her younger brother.</p>
                                        <h6 class="mb-0"><a class="button" href="#"> More Info - Trailer</a></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="popular_2i1 row">
                                <div class="col-md-4 col-4">
                                    <div class="popular_2i1lm position-relative clearfix">
                                        <div class="popular_2i1lm1 clearfix">
                                            <div class="grid">
                                                <figure class="effect-jazz mb-0">
                                                    <a href="#"><img src="../public/img/21.jpg" class="w-100" alt="img25"></a>
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="popular_2i1lm2 position-absolute top-0 w-100 text-center clearfix">
                                            <ul>
                                                <li class="d-inline-block"><a href="#"><i
                                                            class="fa fa-link col_red"></i></a></li>
                                                <li class="d-inline-block"><a href="#"><i
                                                            class="fa fa-search col_red"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8 col-8">
                                    <div class="popular_2i1r">
                                        <h5><a class="col_red" href="#">Ipsum Lorem</a></h5>
                                        <h6>Action, Thriller</h6>
                                        <h6> Imdb 8.6 <span class="ms-2"><i class="fa fa-star col_red me-1"></i></span>
                                            Year : 2022 <span class="ms-2">Runtime: 1h 48m</span></h6>
                                        <p>Four waves of increasingly deadly alien attacks have left most of ruin.
                                            Cassie is on the run, desperately trying to save her younger brother.</p>
                                        <h6 class="mb-0"><a class="button" href="#"> More Info - Trailer</a></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<section id="choice" class="pt-4 pb-5">
    <div class="container">
        <div class="row trend_1">
            <div class="col-md-6 col-6">
                <div class="trend_1l">
                    <h4 class="mb-0"><i class="fa fa-youtube-play align-middle col_red me-1"></i> You may also like
                        <span class="col_red">Movies</span></h4>
                </div>
            </div>
            <div class="col-md-6 col-6">
                <div class="trend_1r text-end">
                    <h6 class="mb-0"><a class="button" href="#"> View All</a></h6>
                </div>
            </div>
        </div>
        <div class="row trend_2 mt-4">
            <div id="carouselExampleCaptions3" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions3" data-bs-slide-to="0" class="active"
                            aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions3" data-bs-slide-to="1"
                            aria-label="Slide 2" class="" aria-current="true"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="trend_2i row">
                            <div class="col-md-4">
                                <div class="trend_2im clearfix position-relative">
                                    <div class="trend_2im1 clearfix">
                                        <div class="grid">
                                            <figure class="effect-jazz mb-0">
                                                <a href="https://youtu.be/cZcHc3zEEoc?si=Yt9w2589u7Uq0lHH"><img
                                                        src="../public/img/Like Scoop.png" class="w-100" alt="img25"></a>
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="trend_2im2 clearfix  position-absolute w-100 top-0">
                                        <h5><a class="col_red" href="https://youtu.be/cZcHc3zEEoc?si=Yt9w2589u7Uq0lHH">Scoop</a>
                                        </h5>
                                        <span class="col_red">
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		</span>
                                        <p class="mb-0">2 Views</p>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-4">
                                <div class="trend_2im clearfix position-relative">
                                    <div class="trend_2im1 clearfix">
                                        <div class="grid">
                                            <figure class="effect-jazz mb-0">
                                                <a href="https://youtu.be/WVFl_BGbYrg?si=smmDqbL5Eac24bDx"><img
                                                        src="../public/img/Like The Prank Panel.png" class="w-100"
                                                        alt="img25"></a>
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="trend_2im2 clearfix  position-absolute w-100 top-0">
                                        <h5><a class="col_red" href="https://youtu.be/WVFl_BGbYrg?si=smmDqbL5Eac24bDx">The
                                                Prank Panel</a></h5>
                                        <span class="col_red">
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		</span>
                                        <p class="mb-0">1 Views</p>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-4">
                                <div class="trend_2im clearfix position-relative">
                                    <div class="trend_2im1 clearfix">
                                        <div class="grid">
                                            <figure class="effect-jazz mb-0">
                                                <a href="https://youtu.be/8VNB7snSJxM?si=XfuaYg6YTAg2xSmt"><img
                                                        src="../public/img/Like Nikita.png" class="w-100" alt="img25"></a>
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="trend_2im2 clearfix  position-absolute w-100 top-0">
                                        <h5><a class="col_red" href="https://youtu.be/8VNB7snSJxM?si=XfuaYg6YTAg2xSmt">Nikita</a>
                                        </h5>
                                        <span class="col_red">
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		</span>
                                        <p class="mb-0">4 Views</p>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="trend_2i row">

                            <div class="col-md-4">
                                <div class="trend_2im clearfix position-relative">
                                    <div class="trend_2im1 clearfix">
                                        <div class="grid">
                                            <figure class="effect-jazz mb-0">
                                                <a href="https://youtu.be/pDHqAj4eJcM?si=VzXWyBYXGBxJqLkU"><img
                                                        src="../public/img/Like From.png" class="w-100" alt="img25"></a>
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="trend_2im2 clearfix  position-absolute w-100 top-0">
                                        <h5><a class="col_red" href="https://youtu.be/pDHqAj4eJcM?si=VzXWyBYXGBxJqLkU">Form</a>
                                        </h5>
                                        <span class="col_red">
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		</span>
                                        <p class="mb-0">4 Views</p>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-4">
                                <div class="trend_2im clearfix position-relative">
                                    <div class="trend_2im1 clearfix">
                                        <div class="grid">
                                            <figure class="effect-jazz mb-0">
                                                <a href="https://youtu.be/8lCyxWdAjzI?si=Lq-Mh4i31skpW3et"><img
                                                        src="../public/img/Like Spy_Master.png" class="w-100" alt="img25"></a>
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="trend_2im2 clearfix  position-absolute w-100 top-0">
                                        <h5><a class="col_red" href="https://youtu.be/8lCyxWdAjzI?si=Lq-Mh4i31skpW3et">Spy/Master</a>
                                        </h5>
                                        <span class="col_red">
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		</span>
                                        <p class="mb-0">6 Views</p>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-4">
                                <div class="trend_2im clearfix position-relative">
                                    <div class="trend_2im1 clearfix">
                                        <div class="grid">
                                            <figure class="effect-jazz mb-0">
                                                <a href="https://youtu.be/gln5grBHEU0?si=-ZM1DIG_sbUU-nDd"><img
                                                        src="../public/img/Like Little Bird.png" class="w-100" alt="img25"></a>
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="trend_2im2 clearfix  position-absolute w-100 top-0">
                                        <h5><a class="col_red" href="https://youtu.be/gln5grBHEU0?si=-ZM1DIG_sbUU-nDd">Little
                                                Bird</a></h5>
                                        <span class="col_red">
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		</span>
                                        <p class="mb-0">5 Views</p>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</section>

</body>
</div>
</div>
</section>

<section id="footer">
    <div class="footer_m clearfix">
        <div class="container">
            <div class="row footer_1">
                <div class="col-md-4">
                    <div class="footer_1i">
                        <h3><a class="text-white" href="index.html"><i class="fa fa-video-camera col_red me-1"></i>
                                Planet</a></h3>
                        <p class="mt-3">Planet is a streaming service that offers a wide variety of award-winning TV
                            shows, movies, anime, documentaries, and more on thousands of internet-connected. </p>
                        <h6 class="fw-normal"><i class="fa fa-map-marker fs-5 align-middle col_red me-1"></i> Kampus III
                            Sanata Dharma University</h6>
                        <h6 class="fw-normal mt-3"><i class="fa fa-envelope fs-5 align-middle col_red me-1"></i>
                            info@planet.com</h6>
                        <h6 class="fw-normal mt-3 mb-0"><i class="fa fa-phone fs-5 align-middle col_red me-1"></i> +62
                            812 1551 5830</h6>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="footer_1i">
                        <h4>Sign <span class="col_red">Newsletter</span></h4>
                        <p class="mt-3">Subscribe to our newsletter list to get latest news and updates from us</p>
                        <div class="input-group">
                            <input type="text" class="form-control bg-black" placeholder="Email">
                            <span class="input-group-btn">
					<button class="btn btn text-white bg_red rounded-0 border-0" type="button">
						 Subscribe</button>
				</span>
                        </div>
                        <ul class="social-network social-circle mb-0 mt-4">
                            <li><a href="#" class="icoRss" title="Rss"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-youtube"></i></a></li>
                            <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

</html>
