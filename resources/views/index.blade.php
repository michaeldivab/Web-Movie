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
    <script src="{{ asset('../js/bootstrap.bundle.min.js') }}"></script>
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
                            @foreach ($items as $item)
                            <div class="col-md-3 col-6">
                                <div class="trend_2im clearfix position-relative">
                                    <div class="trend_2im1 clearfix">
                                        <div class="grid">
                                            <figure class="effect-jazz mb-0">
                                                <a href="https://www.youtube.com/watch?v=sCmCayvkABI">
                                                    <img src="{{ $item->poster }}" class="w-100" alt="img25"
                                                         style="height: 500px; object-fit: cover;">
                                                </a>
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                                <div class="trend_2ilast bg_grey p-3 clearfix">
                                    <h5>
                                        <a class="col_red" href="https://youtu.be/sCmCayvkABI?si=aWEPZmqm26qdP8n6">{{
                                            $item->title }}</a>
                                    </h5>
                                    <p class="mb-2" style="max-height: 60px; overflow: hidden; text-overflow: ellipsis; line-height: 1.4;">
                                        {{ $item->description }}
                                    </p>
                                    <span class="col_red">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
            </span>
                                    <p class="mb-0">1 Views</p>
                                </div>
                            </div>
                            @endforeach
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
                            @foreach ($items as $item)
                            <div class="col-md-3 col-6">
                                <div class="trend_2im clearfix position-relative">
                                    <div class="trend_2im1 clearfix">
                                        <div class="grid">
                                            <figure class="effect-jazz mb-0">
                                                <a href="https://www.youtube.com/watch?v=sCmCayvkABI">
                                                    <img src="{{ $item->poster }}" class="w-100" alt="img25"
                                                         style="height: 500px; object-fit: cover;">
                                                </a>
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                                <div class="trend_2ilast bg_grey p-3 clearfix">
                                    <h5>
                                        <a class="col_red" href="https://youtu.be/sCmCayvkABI?si=aWEPZmqm26qdP8n6">{{
                                            $item->title }}</a>
                                    </h5>
                                    <p class="mb-2" style="max-height: 60px; overflow: hidden; text-overflow: ellipsis; line-height: 1.4;">
                                        {{ $item->description }}
                                    </p>
                                    <span class="col_red">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
            </span>
                                    <p class="mb-0">1 Views</p>
                                </div>
                            </div>
                            @endforeach
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
        <div class="popular_2 row mt-4">
            <div class="tab-content">
                <div class="tab-pane active" id="home">
                    <div class="popular_2i row">
                        @foreach ($items as $item)
                        <div class="col-md-6">
                            <div class="popular_2i1 row">
                                <div class="col-md-4 col-4">
                                    <div class="popular_2i1lm position-relative clearfix">
                                        <div class="popular_2i1lm1 clearfix">
                                            <div class="grid">
                                                <figure class="effect-jazz mb-0">
                                                    <a href="https://youtu.be/67MaSPjGHSs?si=IweEfbyjx2fOn0T-"><img
                                                                src="{{ $item->poster }}" class="w-100" alt="img25"></a>
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="popular_2i1lm2 position-absolute top-0 w-100 text-center clearfix">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8 col-8">
                                    <div class="popular_2i1r">
                                        <h5><a class="col_red" href="https://youtu.be/67MaSPjGHSs?si=IweEfbyjx2fOn0T-">{{
                                                $item->title }}</a>
                                        </h5>
                                        <h6>{{ $item->genre }}</h6>
                                        <h6> Imdb 8.2 <span class="ms-2"><i class="fa fa-star col_red me-1"></i></span>
                                            Year : {{$item->year}} <span class="ms-2">Runtime: 1h 49m</span></h6>
                                        <p class="mb-2" style="max-height: 60px; overflow: hidden; text-overflow: ellipsis; line-height: 1.4;">
                                            {{ $item->description }}
                                        </p>
                                        <h6 class="mb-0"><a class="button"
                                                            href="https://youtu.be/67MaSPjGHSs?si=IweEfbyjx2fOn0T-">
                                                More Info - Trailer</a></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="tab-pane" id="profile">
                    <div class="popular_2i row">
                        <div class="col-md-6">
                            <div class="popular_2i1 row">
                                @foreach ($items as $item)
                                <div class="col-md-4 col-4">
                                    <div class="popular_2i1lm position-relative clearfix">
                                        <div class="popular_2i1lm1 clearfix">
                                            <div class="grid">
                                                <figure class="effect-jazz mb-0">
                                                    <a href="https://youtu.be/8ZYhuvIv1pA?si=7fRl4Ah-HpzRXpl_"><img
                                                                src="{{ $item->poster }}" class="w-100" alt="img25"></a>
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="popular_2i1lm2 position-absolute top-0 w-100 text-center clearfix">
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="popular_2i1 row">
                                @foreach ($items as $item)
                                <div class="col-md-4 col-4">
                                    <div class="popular_2i1lm position-relative clearfix">
                                        <div class="popular_2i1lm1 clearfix">
                                            <div class="grid">
                                                <figure class="effect-jazz mb-0">
                                                    <a href="https://youtu.be/8ZYhuvIv1pA?si=7fRl4Ah-HpzRXpl_"><img
                                                                src="{{ $item->poster }}" class="w-100" alt="img25"></a>
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="popular_2i1lm2 position-absolute top-0 w-100 text-center clearfix">
                                        </div>
                                    </div>
                                </div>
                                @endforeach
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
                            @foreach ($carousel as $item)
                            <div class="col-md-4">
                                <div class="trend_2im clearfix position-relative">
                                    <div class="trend_2im1 clearfix">
                                        <div class="grid">
                                            <figure class="effect-jazz mb-0">
                                                <a href="https://youtu.be/cZcHc3zEEoc?si=Yt9w2589u7Uq0lHH"><img
                                                            src="{{ $item->poster }}" class="w-100" alt="img25" style="height: 225px; object-fit: cover;"></a>
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="trend_2im2 clearfix  position-absolute w-100 top-0">
                                        <h5><a class="col_red" href="https://youtu.be/cZcHc3zEEoc?si=Yt9w2589u7Uq0lHH">{{$item->title}}</a>
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
                            @endforeach
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="trend_2i row">
                            @foreach ($carousel as $item)
                            <div class="col-md-4">
                                <div class="trend_2im clearfix position-relative">
                                    <div class="trend_2im1 clearfix">
                                        <div class="grid">
                                            <figure class="effect-jazz mb-0">
                                                <a href="https://youtu.be/pDHqAj4eJcM?si=VzXWyBYXGBxJqLkU"><img
                                                            src="{{$item->poster}}" class="w-100" alt="img25" style="height: 225px; object-fit: cover;"></a>
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="trend_2im2 clearfix  position-absolute w-100 top-0">
                                        <h5><a class="col_red" href="https://youtu.be/pDHqAj4eJcM?si=VzXWyBYXGBxJqLkU">{{$item->title}}</a>
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
                            @endforeach
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
