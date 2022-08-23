<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Admin</title>
    <link rel="shortcut icon" type="image" href="{{ url('frontend/home/img/mainlogo.ico') }}">
    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Lato:700%7CMontserrat:400,600" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="{{ url('frontend/home/css/bootstrap.min.css') }}" />

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="{{ url('frontend/home/css/font-awesome.min.css') }}">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="{{ url('frontend/home/css/style.css') }}" />


</head>

<body>

    <!-- Header -->
    <header id="header">
        <div class="container">

            <div class="navbar-header">
                <!-- Logo -->
                <div class="navbar-brand">
                    <a class="logo" href="{{ url('/') }}">
                        <img src="{{ url('frontend/home/img/mainlogo.png') }}" alt="logo">
                    </a>
                </div>
                <!-- /Logo -->

                <!-- Mobile toggle -->
                <button class="navbar-toggle">
                    <span></span>
                </button>
                <!-- /Mobile toggle -->
            </div>

            <!-- Navigation -->
            <nav id="nav">
                <ul class="main-menu nav navbar-nav navbar-right">
                    <li><a href="{{ url('/') }}/admindashboard">Dashboard</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="{{ url('/') }}/contact">Contact</a></li>
                    <li><a href="{{ url('/') }}/adminlogout">Logout</a></li>
                </ul>
            </nav>
            <!-- /Navigation -->

        </div>
    </header>
    <!-- /Header -->

    <!-- Hero-area -->
    <div class="hero-area section">

        <!-- Backgound Image -->
        <div class="bg-image bg-parallax overlay" style="background-image:url('frontend/home/img/2_4.jpg')"></div>
        <!-- /Backgound Image -->

        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 text-center">
                    <ul class="hero-area-tree">
                        <li><a href="index.html">Admin</a></li>
                        <li>Dashboard</li>
                    </ul>
                    <h1 class="white-text">Admin</h1>

                </div>
            </div>
        </div>

    </div>
    <!-- /Hero-area -->

    <!-- Blog -->
    <div id="blog" class="section">

        <!-- container -->
        <div class="container">

            <!-- row -->
            <div class="row">

                <!-- main blog -->
                <div id="main" class="col-md-9">

                    <!-- row -->
                    <div class="row">
                        @foreach ($events as $event)
                            @if ($event->accept != 0)
                                <!-- single blog -->
                                <div class="col-md-6">
                                    <div class="single-blog">
                                        <div class="blog-img">
                                            <a href="blog-post.html">
                                                <img src="{{ url('/images/posts/' . $event->image) }}" alt="image">
                                            </a>
                                        </div>
                                        <h4>{{ $event->name }}</h4>
                                        <p>{{ $event->description }}</p>
                                        <p>
                                            @if ($event->status != 0)
                                                <span class="button-12">Active</span>
                                            @else
                                                <span class="button-13">Inactive</span>
                                            @endif
                                        </p>
                                        <p>
                                            <span class="badge badge-primary">Event ID: {{ $event->event_id }}</span>
                                        </p>
                                        <div class="blog-meta">
                                            <span class="blog-meta-author">By: {{ $event->organiser }}</span>
                                            <div class="pull-right">
                                                <span>{{ $event->time }}</span>
                                            </div>
                                        </div>
                                        <div class="blog-meta">
                                            <span class="">Venue:UB{{ $event->venue }}</span>
                                            <div class="pull-right">
                                                <span>Guest: {{ $event->guest }}</span>
                                            </div>
                                        </div>
                                        <div class="blog-meta">
                                            <a href="{{ url('/admin_request_delete/') }}/{{ $event->event_id }}">
                                                <button class="button button3">Delete</button>
                                            </a>
                                        </div>

                                    </div>
                                </div>
                                <!-- /single blog -->
                            @endif
                        @endforeach
                    </div>
                    <!-- /row -->

                    <!-- row -->
                    <div class="row">


                    </div>
                    <!-- /row -->
                </div>
                <!-- /main blog -->

                <!-- aside blog -->
                <div id="aside" class="col-md-3">



                    <!-- tags widget -->
                    <div class="widget tags-widget">
                        <h3>Tags</h3>
                        <a class="tag" href="{{ url('/') }}/admin_request">Requests</a>
                        <a class="tag" href="{{ url('/') }}/feedback_list">View Event Feedback</a>
                        <a class="tag" href="{{ url('/') }}/University_Event">Create University event</a>
                    </div>
                    <!-- /tags widget -->

                </div>
                <!-- /aside blog -->

            </div>
            <!-- row -->

        </div>
        <!-- container -->

    </div>
    <!-- /Blog -->

    <!-- Footer -->
    <footer id="footer" class="section">

        <!-- container -->
        <div class="container">

            <!-- row -->
            <div class="row">

                <!-- footer logo -->
                <div class="col-md-6">
                    <div class="footer-logo">
                        <a class="logo" href="{{ url('/') }}">
                            <img src="{{ url('frontend/home/img/mainlogo.png') }}" alt="logo">
                        </a>
                    </div>
                </div>
                <!-- footer logo -->

                <!-- footer nav -->
                <div class="col-md-6">
                    <ul class="footer-nav">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="https://www.bracu.ac.bd/about">About</a></li>
                        <li><a href="#">Events</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div>
                <!-- /footer nav -->

            </div>
            <!-- /row -->

            <!-- row -->
            <div id="bottom-footer" class="row">

                <!-- social -->
                <div class="col-md-4 col-md-push-8">
                    <ul class="footer-social">
                        <li><a href="https://www.facebook.com/BRACUniversity/" class="facebook"><i
                                    class="fa fa-facebook"></i></a></li>
                        <li><a href="https://twitter.com/BRACUniversity" class="twitter"><i
                                    class="fa fa-twitter"></i></a></li>
                        <li><a href="https://myaccount.google.com/profile" class="google-plus"><i
                                    class="fa fa-google-plus"></i></a></li>
                        <li><a href="https://www.instagram.com/BRACUniversity/" class="instagram"><i
                                    class="fa fa-instagram"></i></a></li>
                        <li><a href="https://www.youtube.com/bracuniversity" class="youtube"><i
                                    class="fa fa-youtube"></i></a></li>
                        <li><a href="https://www.linkedin.com/uas/login?session_redirect=%2Fschool%2F58028%2F"
                                class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
                <!-- /social -->
            </div>
            <!-- row -->

        </div>
        <!-- /container -->

    </footer>
    <!-- /Footer -->

    <!-- preloader -->
    <div id='preloader'>
        <div class='preloader'></div>
    </div>
    <!-- /preloader -->


    <!-- jQuery Plugins -->
    <script type="text/javascript" src="{{ url('frontend/home/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('frontend/home/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('frontend/home/js/main.js') }}"></script>

</body>

</html>
