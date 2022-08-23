<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Bracu Events</title>
    <link rel="shortcut icon" type="image" href="{{ url('frontend/home/img/mainlogo.ico') }}">

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Lato:700%7CMontserrat:400,600" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="{{ url('frontend/home/css/bootstrap.min.css') }}" />

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="{{ url('frontend/home/css/font-awesome.min.css') }}">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="{{ url('frontend/home/css/style.css') }}" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>

<body>

    <!-- Header -->
    <header id="header" class="transparent-nav">
        <div class="container">

            <div class="navbar-header">
                <!-- Logo -->
                <div class="navbar-brand">
                    <a class="logo" href="{{ url('/') }}">
                        <img src="{{ url('frontend/home/img/whitelogo.png') }}" alt="logo">
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
                    <li><a href="#">Home</a></li>
                    <li><a href="https://www.bracu.ac.bd/about">About</a></li>
                    <li><a href="{{ url('/') }}/event">Event</a></li>
                    <li><a href="{{ url('/') }}/contact">Contact</a></li>
                    <li><a href="{{ url('/') }}/reg">Signup</a></li>
                </ul>
            </nav>
            <!-- /Navigation -->

        </div>
    </header>
    <!-- /Header -->

    <!-- Home -->
    <div id="home" class="hero-area">

        <!-- Backgound Image -->
        <div class="bg-image bg-parallax overlay" style="background-image:url('frontend/home/img/2_4.jpg')"></div>
        <!-- /Backgound Image -->

        <div class="home-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h1 class="white-text">Brac University Events</h1>
                        <p class="lead white-text">Brac University believes in a holistic approach towards education and
                            grooming future leaders who will possess high moral values, have empathy, more informed,
                            scientific, and socially responsible alongside their academic excellence.</p>
                        <a class="main-button icon-button" href="{{ url('/') }}/studentlogin">Student</a>
                        <a class="main-button icon-button" href="{{ url('/') }}/clublogin">Club</a>
                        <a class="main-button icon-button" href="{{ url('/') }}/adminlogin">Admin</a>
                        <a class="main-button icon-button" href="{{ url('/') }}/ocalogin">OCA</a>
                        <a class="main-button icon-button" href="{{ url('/') }}/departmentlogin">Department</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /Home -->

    <!-- About -->
    <div id="about" class="section">

        <!-- container -->
        <div class="container">

            <!-- row -->
            <div class="row">

                <div class="col-md-6">
                    <div class="section-header">
                        <h2>Welcome to Bracu Events</h2>
                        <p class="lead">To guide future leaders in achieving the distinctive qualities of a real-life
                            champion.</p>
                    </div>

                    <!-- feature -->
                    <div class="feature">
                        <i class="feature-icon fa fa-flask"></i>
                        <div class="feature-content">
                            <h4>Timely Management</h4>
                            <p>To ensure that, the national events are being duly observeds.</p>
                        </div>
                    </div>
                    <!-- /feature -->

                    <!-- feature -->
                    <div class="feature">
                        <i class="feature-icon fa fa-users"></i>
                        <div class="feature-content">
                            <h4>Expert manage</h4>
                            <p>To engage students in creating social awareness, connecting to the roots and culture.</p>
                        </div>
                    </div>
                    <!-- /feature -->

                    <!-- feature -->
                    <div class="feature">
                        <i class="feature-icon fa fa-comments"></i>
                        <div class="feature-content">
                            <h4>Community</h4>
                            <p>To groom ambassadors in contributing Brac University’s community services..</p>
                        </div>
                    </div>
                    <!-- /feature -->

                </div>

                <div class="col-md-6">
                    <div class="about-img">
                        <img src="{{ url('frontend/home/img/backbracu.png') }}" alt="">
                    </div>
                </div>

            </div>
            <!-- row -->

        </div>
        <!-- container -->
    </div>
    <!-- /About -->

    <!-- Courses -->
    <div id="courses" class="section">

        <!-- container -->
        <div class="container">

            <!-- row -->
            <div class="row">
                <div class="section-header text-center">
                    <h2>Explore Events</h2>
                    <p class="lead">Here are some popular events organised by Brac University previously.</p>
                </div>
            </div>
            <!-- /row -->

            <!-- courses -->
            <div id="courses-wrapper">

                <!-- row -->
                <div class="row">

                    <!-- single course -->
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="course">
                            <div class="course-img">
                                <img src="{{ url('frontend/home/img/2_1.jpg') }}" alt="">
                            </div>
                            <div class="course-title">
                                <h5>Brac University Performs the event of 'Pohela Fagun' with style</h5>
                            </div>
                        </div>
                    </div>
                    <!-- /single course -->

                    <!-- single course -->
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="course">
                            <div class="course-img">
                                <img src="{{ url('frontend/home/img/2_3.jpg') }}" alt="">
                            </div>
                            <div class="course-title">
                                <h5>Opening of the new Research Lab </h5>
                            </div>
                        </div>
                    </div>
                    <!-- /single course -->

                    <!-- single course -->
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="course">
                            <div class="course-img">
                                <img src="{{ url('frontend/home/img/2_2.jpg') }}" alt="">
                            </div>
                            <div class="course-title">
                                <h5>Brac University Cultural Club organises international Mother Language Day</h5>
                            </div>
                        </div>
                    </div>
                    <!-- /single course -->

                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="course">
                            <div class="course-img">
                                <img src="{{ url('frontend/home/img/2_5.jpg') }}" alt="">
                            </div>
                            <div class="course-title">
                                <h5>Chess Tournament organised by Chess Club</h5>
                            </div>
                        </div>
                    </div>
                    <!-- /single course -->

                </div>
                <!-- /row -->

                <!-- row -->
                <div class="row">

                    <!-- single course -->
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="course">
                            <div class="course-img">
                                <img src="{{ url('frontend/home/img/2_6.jpg') }}" alt="">
                            </div>
                            <div class="course-title">
                                <h5>Seminar about International Mother Language Day</h5>
                            </div>
                        </div>
                    </div>
                    <!-- /single course -->

                    <!-- single course -->
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="course">
                            <div class="course-img">
                                <img src="{{ url('frontend/home/img/2_7.jpg') }}" alt="">
                            </div>
                            <div class="course-title">
                                <h5>Blood Donation event in the Auditorium</h5>
                            </div>
                        </div>
                    </div>
                    <!-- /single course -->

                    <!-- single course -->
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="course">
                            <div class="course-img">
                                <img src="{{ url('frontend/home/img/2_8.jpg') }}" alt="">
                            </div>
                            <div class="course-title">
                                <h5>The National Victory Day</h5>
                            </div>
                            <div class="course-details">
                            </div>
                        </div>
                        <!-- /single course -->



                    </div>
                    <!-- /row -->

                </div>



                <!-- Contact CTA -->
                <div id="contact-cta" class="section">

                    <!-- Backgound Image -->
                    <div class="bg-image bg-parallax overlay"
                        style="background-image:url(frontend/home/img/2_12.jpg)"></div>
                    <!-- Backgound Image -->

                    <!-- container -->
                    <div class="container">

                        <!-- row -->
                        <div class="row">

                            <div class="col-md-8 col-md-offset-2 text-center">
                                <h2 class="white-text">Contact Us</h2>
                                <p class="lead white-text">Contact with us to be a part of a memorising event and
                                    create a life time memory.</p>
                                <a class="main-button icon-button" href="{{ url('/') }}/contact">Contact Us
                                    Now</a>
                            </div>

                        </div>
                        <!-- /row -->

                    </div>
                    <!-- /container -->

                </div>
                <!-- /Contact CTA -->

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
                                    <li><a href="{{ url('/') }}/about">About</a></li>
                                    <li><a href="{{ url('/') }}/event">Events</a></li>
                                    <li><a href="{{ url('/') }}/contact">Contact</a></li>
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
