<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Untree.co">
        <meta name="description" content="" />
        <meta name="keywords" content="bootstrap, bootstrap5" />

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;600;700&display=swap" rel="stylesheet">


        <link rel="stylesheet" href="{{ asset('frontend/fonts/icomoon/style.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/fonts/flaticon/font/flaticon.css') }}">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
        <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/tiny-slider.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/aos.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/glightbox.min.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">

        <link rel="stylesheet" href="{{ asset('frontend/css/flatpickr.min.css') }}">


        <title>Blog website</title>
    </head>

<body>
    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close">
                <span class="icofont-close js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>

    <nav class="site-nav">
        <div class="container">
            <div class="menu-bg-wrap">
                <div class="site-navigation">
                    <div class="row g-0 align-items-center">
                        <div class="col-2">
                            <a href="index.html" class="logo m-0 float-start">Blogy<span class="text-primary">.</span></a>
                        </div>
                        <div class="col-8 text-center">
                            <form action="#" class="search-form d-inline-block d-lg-none">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="bi-search"></span>
                            </form>

                            <ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu mx-auto">
                                <li class="active"><a href="{{ route('index.page') }}">Home</a></li>
                                <li><a href="{{ route('login') }}">Login</a></li>
                                <li><a href="{{ route('register') }}">register</a></li>
                            </ul>
                        </div>
                        <div class="col-2 text-end">
                            <a href="#"
                                class="burger ms-auto float-end site-menu-toggle js-menu-toggle d-inline-block d-lg-none light">
                                <span></span>
                            </a>
                            <form action="#" class="search-form d-none d-lg-inline-block">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="bi-search"></span>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

        <section class="section bg-light">
            <div class="container">
                <div class="row align-items-stretch retro-layout">
                    @foreach ($value as $data)
                    <div class="col-md-6">
                        <a href="" class="h-entry mb-30 v-height gradient">

                            <div class="featured-img">
                                <img src="{{ asset('upload/homeImage/' . $data->image) }}" class="featured_backgroud"
                                    alt="">
                            </div>

                            <div class="text">
                                <span class="date">{{$data->date_time}}</span>
                                <h2>{{$data->heading}}</h2>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>

            <footer class="site-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="widget">
                                <h3 class="mb-4">About</h3>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                                    live the blind texts.</p>
                            </div> <!-- /.widget -->
                            <div class="widget">
                                <h3>Social</h3>
                                <ul class="list-unstyled social">
                                    <li><a href="#"><span class="icon-instagram"></span></a></li>
                                    <li><a href="#"><span class="icon-twitter"></span></a></li>
                                    <li><a href="#"><span class="icon-facebook"></span></a></li>
                                    <li><a href="#"><span class="icon-linkedin"></span></a></li>
                                    <li><a href="#"><span class="icon-pinterest"></span></a></li>
                                    <li><a href="#"><span class="icon-dribbble"></span></a></li>
                                </ul>
                            </div> <!-- /.widget -->
                        </div> <!-- /.col-lg-4 -->
                        <div class="col-lg-4 ps-lg-5">
                            <div class="widget">
                                <h3 class="mb-4">Company</h3>
                                <ul class="list-unstyled float-start links">
                                    <li><a href="#">About us</a></li>
                                    <li><a href="#">Services</a></li>
                                    <li><a href="#">Vision</a></li>
                                    <li><a href="#">Mission</a></li>
                                    <li><a href="#">Terms</a></li>
                                    <li><a href="#">Privacy</a></li>
                                </ul>
                                <ul class="list-unstyled float-start links">
                                    <li><a href="#">Partners</a></li>
                                    <li><a href="#">Business</a></li>
                                    <li><a href="#">Careers</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">FAQ</a></li>
                                    <li><a href="#">Creative</a></li>
                                </ul>
                            </div> <!-- /.widget -->
                        </div> <!-- /.col-lg-4 -->
                        <div class="col-lg-4">
                            <div class="widget">
                                <h3 class="mb-4">Recent Post Entry</h3>
                                <div class="post-entry-footer">
                                    <ul>
                                       @foreach ($footerRecent as $data)


                                       <li>
                                            <a href="">
                                                <img src="{{asset('upload/homeImage/' . $data->image)}}" alt="Image placeholder"
                                                    class="me-4 rounded">
                                                <div class="text">
                                                    <h4>{{$data->heading}}</h4>
                                                    <div class="post-meta">
                                                        <span class="mr-2">{{$data->date_time}} </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        @endforeach

                                    </ul>
                                </div>


                            </div> <!-- /.widget -->
                        </div> <!-- /.col-lg-4 -->
                    </div> <!-- /.row -->

                    <div class="row mt-5">
                        <div class="col-12 text-center">
                            <p>Copyright &copy;
                                <script>
                                    document.write(new Date().getFullYear());
                                </script>. All Rights Reserved. &mdash; Rayhan parvez
                            </p>
                        </div>
                    </div>
                </div> <!-- /.container -->
            </footer> <!-- /.site-footer -->

            <!-- Preloader -->
            <div id="overlayer"></div>
            <div class="loader">
                <div class="spinner-border text-primary" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </div>


            <script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}"></script>
            <script src="{{ asset('frontend/js/tiny-slider.js') }}"></script>

            <script src="{{ asset('frontend/js/flatpickr.min.js') }}"></script>


            <script src="{{ asset('frontend/js/aos.js') }}"></script>
            <script src="{{ asset('frontend/js/glightbox.min.js') }}"></script>
            <script src="{{ asset('frontend/js/navbar.js') }}"></script>
            <script src="{{ asset('frontend/js/counter.js') }}"></script>
            <script src="{{ asset('frontend/js/custom.js') }}"></script>



</body>

</html>
