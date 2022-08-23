<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Event Create</title>
    <link rel="shortcut icon" type="image" href="{{ url('frontend/home/img/mainlogo.ico') }}">

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Lato:700%7CMontserrat:400,600" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="{{ url('/frontend/home/css/bootstrap.min.css') }}" />

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="{{ url('/frontend/home/css/font-awesome.min.css') }}">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="{{ url('/frontend/home/css/style.css') }}" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>

<body>

    <!-- Header -->
    <header id="header">
        <div class="container">

            <div class="navbar-header">
                <!-- Logo -->
                <div class="navbar-brand">
                    <a class="logo" href="{{ url('/') }}">
                        <img src="{{ url('/frontend/home/img/mainlogo.png') }}" alt="logo">
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
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('/') }}/department_dashboard">Dashboard</a></li>
                    <li><a href="blog.html">Events</a></li>
                    <li><a href="{{ url('/') }}/contact">Contact</a></li>
                    <li><a href="{{ url('/') }}/departmentlogout">logout</a></li>
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
                        <li><a href="">Department</a></li>
                        <li>Event Create</li>
                    </ul>
                    <h1 class="white-text">Create an Event</h1>

                </div>
            </div>
        </div>

    </div>
    <!-- /Hero-area -->

    <!-- Contact -->
    <div id="contact" class="section">

        <!-- container -->
        <div class="container">

            <!-- row -->
            <div class="row">

                <!-- contact form -->
                <div class="col-md-6">
                    <div class="contact-form">
                        <h4>Create the event</h4>
                        <form action="{{ url('/') }}/dept_event" enctype="multipart/form-data" method="POST">
                            @if (Session::get('success'))
                                <div class="alert alert-success">
                                    {{ Session::get('success') }}
                                </div>
                            @endif
                            @if (Session::get('fail'))
                                <div class="alert alert-success">
                                    {{ Session::get('fail') }}
                                </div>
                            @endif
                            @csrf

                            <input class="input" type="text" name="name" placeholder="Name">
                            <span class="text-danger">
                                @error('name')
                                    {{ $message }}
                                @enderror
                            </span>
                            <input class="input" type="text" name="guest" placeholder="Guest">
                            <span class="text-danger">
                                @error('guest')
                                    {{ $message }}
                                @enderror
                            </span>
                            <input class="input" type="text" name="organiser" placeholder="Organised by">
                            <span class="text-danger">
                                @error('organiser')
                                    {{ $message }}
                                @enderror
                            </span>
                            <input class="input" type="date" name="time" placeholder="Event Date">
                            <span class="text-danger">
                                @error('time')
                                    {{ $message }}
                                @enderror
                            </span>
                            <input class="input" type="file" name="image" placeholder="Insert Image">
                            <span class="text-danger">
                                @error('image')
                                    {{ $message }}
                                @enderror
                            </span>
                            <select name="venue" class="input">
                                <option disabled="disabled" selected="selected">Venue: UB-</option>
                                <option>30101</option>
                                <option>30102</option>
                                <option>30103</option>
                                <option>30104</option>
                                <option>30201</option>
                                <option>30202</option>
                                <option>30203</option>
                                <option>30204</option>

                            </select>
                            <textarea class="input" name="description" placeholder="Enter Event Description"></textarea>
                            <button class="main-button icon-button pull-right">Create</button>
                        </form>
                    </div>
                </div>
                <!-- /contact form -->

                <!-- contact information -->
                <div class="col-md-5 col-md-offset-1">
                    <h4>Contact Information</h4>
                    <ul class="contact-details">
                        <li><i class="fa fa-envelope"></i>Bracu@email.com</li>
                        <li><i class="fa fa-phone"></i>+880-2-222264051-4</li>
                        <li><i class="fa fa-map-marker"></i>66, Dhaka 1212</li>
                    </ul>
                    <!-- tags widget -->
                    <div class="widget tags-widget">
                        <h3>Tags</h3>
                        <a class="tag" href="{{ url('/') }}/audi_request">Request Auditorium</a>
                        <a class="tag" href="{{ url('/') }}/dept_event_create">Create departmental Event</a>
                        <a class="tag" href="{{ url('/') }}/transport">Request For Transport</a>
                        <a class="tag" href="{{ url('/') }}/dept_room">Room for Class</a>
                    </div>
                    <!-- /tags widget -->


                </div>
                <!-- contact information -->

            </div>
            <!-- /row -->

        </div>
        <!-- /container -->

    </div>
    <!-- /Contact -->

    <!-- Footer -->
    <footer id="footer" class="section">

        <!-- container -->
        <div class="container">

            <!-- row -->
            <div class="row">

                <!-- footer logo -->
                <div class="col-md-6">
                    <div class="footer-logo">
                        <a class="logo" href="index.html">
                            <img src="{{ url('/frontend/home/img/mainlogo.png') }}" alt="logo">
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
    <script type="text/javascript" src="{{ url('/frontend/home/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('/frontend/home/js/bootstrap.min.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
    <script type="text/javascript" src="{{ url('/frontend/home/js/google-map.js') }}"></script>
    <script type="text/javascript" src="{{ url('/frontend/home/js/main.js') }}"></script>

</body>

</html>
