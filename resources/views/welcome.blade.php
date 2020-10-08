<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Poca - Podcast &amp; Audio Template">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <title>Smart News</title>


    <link rel="icon" href="/img/core-img/favicon.ico">
    <script src="https://unpkg.com/aos@next/dist/aos.js" defer></script>

    <link rel="stylesheet" href="/style.css">

</head>

<body>


    <header class="header-area">
        <!-- Main Header Start -->
        <div class="main-header-area">
            <div class="classy-nav-container breakpoint-off bg-dark">
                <!-- Classy Menu -->
                <nav class="classy-navbar justify-content-between" id="pocaNav">

                    <!-- Logo -->
                    <a class="nav-brand text-white" href="/">E-News</a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">

                        <!-- Menu Close Button -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul id="nav">
                                <li><a href="/">Home</a></li>

                                </li>
                                <li><a href="#">Categories</a>
                                    <ul class="dropdown">
                                        <li><a href="{{ route('category', 'business') }}">Business</a></li>
                                        <li><a href="{{ route('category', 'entertainment') }}">Entertainment</a></li>
                                        <li><a href="{{ route('category', 'health') }}">Health</a></li>
                                        <li><a href="{{ route('category', 'science') }}">Science</a></li>
                                        <li><a href="{{ route('category', 'sports') }}">Sports</a></li>
                                        <li><a href="{{ route('category', 'technology') }}">Technology</a></li>
                                    </ul>
                                </li>
                                <li><a href="#contact">Contact</a></li>

                            </ul>
                            </li>



                            <!-- Top Social Area -->


                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </header>

    <div class="breadcumb--con">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Blog</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    @if (Session::has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <strong>{{ Session::get('success') }}</strong>
        </div>

        <script>
            $(".alert").alert();

        </script>
    @endif
    <div class="p-3 mb-15">
        <h3 class="text-center text-danger"><ins>{{ ucfirst($title) ?? 'Random News Articles' }} </ins></h3>
    </div>
    <!-- ***** Blog Area Start ***** -->
    <section class="blog-area">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">

                    <!-- Single Blog Area -->
                    @if (count($data) > 0)
                        @foreach ($data['articles'] as $item)
                            <div class="" data-aos="fade-in">

                                <div class="single-blog-area mt-50 mb-50">
                                    <a href="{{ $item['url'] }}" class="mb-30"><img
                                            src="{{ $item['urlToImage'] ?? '/img/default.jpg' }}" alt="">
                                        <!-- Content -->
                                        <div class="post-content">
                                            <a href="{{ $item['url'] }}" target="_blank"
                                                class="post-date">{{ date('d-m-Y', strtotime($item['publishedAt'])) }}</a>
                                            <h4 class="post-">{{ $item['title'] }}</h4>
                                            <div class="post-meta mb-15">
                                                <a href="{{ $item['url'] }}"
                                                    class="post-author">{{ $item['source']['name'] ?? 'Anonymous User' }}</a>
                                            </div>
                                            <p>{{ $item['description'] }}</p>
                                            <a href="{{ $item['url'] }}" class="read-more-btn">Continue reading <i
                                                    class="fa fa-angle-right" aria-hidden="true"></i></a>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <hr>

                        @endforeach
                    @endif





                </div>

                <div class="col-12 col-lg-4">
                    <div class="sidebar-area mt-5">

                        <!-- Single Widget Area -->
                        {{-- <div class="single-widget-area search-widget-area mb-80">
                            <form action="#" method="post">
                                <input type="search" name="search" class="form-control" placeholder="Search ...">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div> --}}

                        <!-- Single Widget Area -->
                        <div class="single-widget-area catagories-widget mb-80">
                            <h5 class="widget-title">Categories</h5>

                            <!-- catagories list -->
                            <ul class="catagories-list">
                                <li><a href="{{ route('category', 'entertainment') }}"><i
                                            class="fa fa-angle-double-right" aria-hidden="true"></i>
                                        Entertainment</a></li>
                                <li><a href="{{ route('category', 'science') }}"><i class="fa fa-angle-double-right"
                                            aria-hidden="true"></i>Science</a>
                                </li>
                                <li><a href="{{ route('category', 'sports') }}"><i class="fa fa-angle-double-right"
                                            aria-hidden="true"></i> Sports</a>
                                </li>
                                <li><a href="{{ route('category', 'technology') }}"><i class="fa fa-angle-double-right"
                                            aria-hidden="true"></i>
                                        Technology</a></li>
                                <li><a href="{{ route('category', 'business') }}"><i class="fa fa-angle-double-right"
                                            aria-hidden="true"></i>Business</a>
                                </li>
                                <li><a href="{{ route('category', 'health') }}"><i class="fa fa-angle-double-right"
                                            aria-hidden="true"></i>
                                        Health</a></li>
                            </ul>
                        </div>


                        <div class="LI-profile-badge" data-version="v1" data-size="medium" data-locale="en_US"
                            data-type="vertical" data-theme="dark" data-vanity="sunny-ojo-b914b9187"><a
                                class="LI-simple-link"
                                href='https://ng.linkedin.com/in/sunny-ojo-b914b9187?trk=profile-badge'>Sunny Ojo</a>
                        </div>


                        <div class="single-widget-area widget mb-80 mt-150">
                            <h5 class="widget-title text-danger">Other Projects</h5>

                            <!-- catagories list -->
                            <ul class="catagories-list">
                                <li><a href="http://new-fund-me.herokuapp.com/" target="_blank"><i
                                            class="fa fa-angle-double-right" aria-hidden="true"></i>
                                        Helping Platform</a></li>
                                <li><a href="http://sunny-ojo-e-wallet.herokuapp.com/" target="_blank"><i
                                            class="fa fa-angle-double-right" aria-hidden="true"></i> E-Wallet Web
                                        Application</a>
                                </li>
                                <li><a href="http://search-for-github-users.herokuapp.com/" target="_blank"><i
                                            class="fa fa-angle-double-right" aria-hidden="true"></i> Github Users
                                        Profile
                                        Getters</a>
                                </li>
                                <li><a href="http://sunny-ojo.herokuapp.com/" target="_blank"><i
                                            class="fa fa-angle-double-right" aria-hidden="true"></i>
                                        My Portfolio Website</a></li>
                                <li><a href="http://sunny-ojo-blog.herokuapp.com/" target="_blank"><i
                                            class="fa fa-angle-double-right" aria-hidden="true"></i> Smart Blogging</a>
                                </li>
                                <li><a href="http://sunny-ojo-inspiring-quote.herokuapp.com/" target="_blank"><i
                                            class="fa fa-angle-double-right" aria-hidden="true"></i>
                                        Inspiring Quotes Generator</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Blog Area End ***** -->

    <!-- ***** Newsletter Area Start ***** -->
    <section class="poca-newsletter-area bg-img bg-overlay pt-50 jarallax" style="background-color: #54c6eb"
        id="contact">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-12 col-lg-6 mb-5">
                    <div class="newsletter-content  mb-50">
                        <h2 class="text-warning">Contact Me</h2>
                        <h6 class="text-warning">Please Fill out this form and i will get back as soon as possible</h6>

                        <form action="{{ route('contact') }}" method="post">
                            @csrf
                            <div class="form-group mt-5">
                                <label for="name" class="text-white">Name:</label>
                                <input id="name" class="form-control" type="text" name="name" required>
                            </div>
                            <div class="form-group">
                                <label for="email" class="text-white">Email:</label>
                                <input id="email" class="form-control" type="email" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="phone" class="text-white">Phone:</label>
                                <input id="phone" class="form-control" type="number" name="phone" required>
                            </div>
                            <div class="form-group">
                                <label for="message" class="text-white">Message:</label>
                                <textarea id="message" class="form-control" name="message" rows="6" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">SEND MESSAGE</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ***** Newsletter Area End ***** -->

    <!-- ***** Footer Area Start ***** -->
    <footer class="footer-area section-padding-80-0">
        <div class="container">
            <div class="row">

                <!-- Single Footer Widget -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-footer-widget mb-30">
                        <!-- Widget Title -->
                        <h4 class="widget-title">About Me</h4>

                        <p>My name is <b>Sunny Ojo</b>. I am a php/Laravel web developer proficient in using php and
                            laravel
                            for building back-end
                            functionalities of websites and web applications. I love coding and building awesome stuffs.
                            I'm always ready to learn new things to improve my career. .</p>
                        <div class="copywrite-content">
                            <p>&copy;

                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>
                                    document.write(new Date().getFullYear());

                                </script> All rights reserved | This template is made with <i class="fa fa-heart-o"
                                    aria-hidden="true"></i> by <a href="https://colorlib.com"
                                    target="_blank">Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Single Footer Widget -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-footer-widget mb-30">
                        <!-- Widget Title -->
                        <h4 class="widget-title">Categories</h4>

                        <!-- Catagories Nav -->
                        <nav>
                            <ul class="catagories-nav">
                                <li><a href="{{ route('category', 'business') }}">Business</a></li>
                                <li><a href="{{ route('category', 'entertainment') }}">Entertainment</a></li>
                                <li><a href="{{ route('category', 'health') }}">Health</a></li>
                                <li><a href="{{ route('category', 'science') }}">Science</a></li>
                                <li><a href="{{ route('category', 'sports') }}">Sports</a></li>
                                <li><a href="{{ route('category', 'technology') }}">Technology</a></li>
                        </nav>
                    </div>
                </div>

                <!-- Single Footer Widget -->


                <!-- Single Footer Widget -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-footer-widget mb-30">
                        <!-- Widget Title -->
                        <h4 class="widget-title">Follow Us</h4>
                        <!-- Social Info -->
                        <div class="footer-social-info">
                            <a href="https://facebook.com/sunnyojonjoku" target="_blank" class="facebook"
                                data-toggle="tooltip" data-placement="top" title="Facebook"><i
                                    class="fa fa-facebook"></i></a>
                            <a href="https://twitter.com/sunnyojo4" class="twitter" data-toggle="tooltip"
                                target="_blank" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a>

                            <a href="http://instagram.com/ojoskid_sunny" class="instagram" data-toggle="tooltip"
                                target="_blank" data-placement="top" title="Instagram"><i
                                    class="fa fa-instagram"></i></a>
                            <a href="https://www.linkedin.com/in/sunny-ojo-7635221aa/" target="_blank" class="linkedIn"
                                data-toggle="tooltip" data-placement="top" title="LinkedIn"><i
                                    class="fa fa-linkedin"></i></a>

                        </div>

                    </div>
                </div>

            </div>
        </div>
    </footer>
    <!-- ***** Footer Area End ***** -->

    <!-- ******* All JS ******* -->
    <!-- jQuery js -->
    <script src="/js/jquery.min.js"></script>
    <!-- Popper js -->
    <script src="/js/popper.min.js"></script>
    <!-- Bootstra/p js -->
    <script src="/js/bootstrap.min.js"></script>
    <!-- All js -->
    <script src="/js/poca.bundle.js"></script>
    <!-- Active js -->
    <script src="/js/default-assets/active.js"></script>
    <script type="text/javascript" src="https://platform.linkedin.com/badges/js/profile.js" async defer></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();

    </script>

</body>

</html>
