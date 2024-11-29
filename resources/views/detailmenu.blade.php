<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Planet</title>
    <link href="{{ asset('../css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('../css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('../css/global.css') }}" rel="stylesheet">
    <link href="{{ asset('../css/index.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('../css/video.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani&display=swap" rel="stylesheet">
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
                            <a href="login.html" class="icoLogin" title="Login">
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
                    <li class="nav-item">
                        <a class="nav-link" href="detailmenu.html">Detail Menu</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</section>
<body>
<div class="video-container">
    <video id="video" src="your-video.mp4" poster="img/Robots.jpg"></video>
    <div class="controls">
        <div class="controls-left">
            <button id="play-pause"><i class="fa fa-play"></i></button>
            <span class="time" id="current-time">38:18</span> /
            <span class="time" id="duration">50:38</span>
        </div>
        <div class="progress-container">
            <div class="progress" id="progress">
                <div class="progress-bar" id="progress-bar"></div>
            </div>
        </div>
        <div class="controls-right">
            <button id="mute"><i class="fa fa-volume-up"></i></button>
            <button id="fullscreen"><i class="fa fa-expand"></i></button>
        </div>
    </div>
</div>

<script src="js/bootstrap.bundle.min.js"></script>
<body>
<section id="popular" class="pt-4 pb-5 bg_grey">
    <div class="container">
        <div class="row trend_1">
            <div class="col-md-12">
                <div class="trend_1l">
                </div>
            </div>
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
                                                    <a href="https://youtu.be/67MaSPjGHSs?si=IweEfbyjx2fOn0T-">
                                                        <img src="img/Recom Robots.png" class="w-100" alt="img25">
                                                    </a>
                                                </figure>
                                            </div>
                                        </div>
                                        <div
                                            class="popular_2i1lm2 position-absolute top-0 w-100 text-center clearfix"></div>
                                    </div>
                                </div>
                                <div class="col-md-8 col-8">
                                    <div class="popular_2i1r">
                                        <h5><a class="col_red" href="https://youtu.be/67MaSPjGHSs?si=IweEfbyjx2fOn0T-">Robots</a>
                                        </h5>
                                        <h6>Romantic</h6>
                                        <h6>IMDb 8.2 <span class="ms-2"><i class="fa fa-star col_red me-1"></i></span>
                                            Year: 2023 <span class="ms-2">Runtime: 1h 49m</span></h6>
                                        <p>Affluent suburbanites Elaine and Charles illegally use android doubles of
                                            themselves to avoid the time constraints of dating and the strain of
                                            work.</p>
                                        <h6 class="mb-0"></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section id="upcome" class="pt-4 pb-5">
            <div class="container">
                <div class="row trend_1">
                    <div class="col-md-6 col-6">
                        <div class="trend_1l">
                            <h4 class="mb-0"><i class="fa fa-youtube-play align-middle col_red me-1"></i> You may also
                                like <span class="col_red">Movies</span></h4>
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
                                                            src="img/New Relesae Ghosted.png" class="w-100" alt="img25"></a>
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
                                            <h5><a class="col_red"
                                                   href="https://youtu.be/IAdCsNtEuBU?si=Yl1w7hyJkV1lyuni">Ghosted</a>
                                            </h5>
                                            <p class="mb-2">American romantic action-adventure comedy film directed
                                                by...</p>
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
                                                            src="img/New Release John Wick.png" class="w-100"
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
                                            <h5><a class="col_red"
                                                   href="https://youtu.be/qEVUtrk8_B4?si=rrRYzg3il67XvSPO">John
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
                                                            src="img/New Release guardian of the galaxy.png"
                                                            class="w-100" alt="img25"></a>
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
                                            <h5><a class="col_red"
                                                   href="https://youtu.be/JqcncLPi9zw?si=hM3OkGSzGje71KnC">Guardian of
                                                the Galaxy</a></h5>
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
                        </div>
        </section>

        <section id="footer">
            <div class="footer_m clearfix">
                <div class="container">
                    <div class="row footer_1">
                        <div class="col-md-4">
                            <div class="footer_1i">
                                <h3><a class="text-white" href="index.html"><i
                                    class="fa fa-video-camera col_red me-1"></i> Planet</a></h3>
                                <p class="mt-3">Planet is a streaming service that offers a wide variety of
                                    award-winning TV shows, movies, anime, documentaries, and more on thousands of
                                    internet-connected. </p>
                                <h6 class="fw-normal"><i class="fa fa-map-marker fs-5 align-middle col_red me-1"></i>
                                    Kampus III Sanata Dharma University</h6>
                                <h6 class="fw-normal mt-3"><i class="fa fa-envelope fs-5 align-middle col_red me-1"></i>
                                    info@planet.com</h6>
                                <h6 class="fw-normal mt-3 mb-0"><i
                                    class="fa fa-phone fs-5 align-middle col_red me-1"></i> +62 812 1551 5830</h6>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="footer_1i">
                                <h4>Sign <span class="col_red">Newsletter</span></h4>
                                <p class="mt-3">Subscribe to our newsletter list to get latest news and updates from
                                    us</p>
                                <div class="input-group">
                                    <input type="text" class="form-control bg-black" placeholder="Email">
                                    <span class="input-group-btn">
            <button class="btn btn text-white bg_red rounded-0 border-0" type="button">
               Subscribe</button>
          </span>
                                </div>
                                <ul class="social-network social-circle mb-0 mt-4">
                                    <li><a href="#" class="icoRss" title="Rss"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-youtube"></i></a>
                                    </li>
                                    <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

</html>
