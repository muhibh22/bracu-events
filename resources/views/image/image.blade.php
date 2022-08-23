<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Signup</title>
    <link rel="shortcut icon" type="image" href="{{url('frontend/home/img/mainlogo.ico')}}">
    <!-- Icons font CSS-->
    <link href="{{url('frontend/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">
    <link href="{{url('frontend/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{url('frontend/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{url('frontend/vendor/datepicker/daterangepicker.css')}}" rel="stylesheet" media="all">
    <link type="text/css" rel="stylesheet" href="{{url('frontend/css/style.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{url('frontend/home/css/bootstrap.min.css')}}"/>
    <link rel="stylesheet" href="{{url('frontend/home/css/font-awesome.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{url('frontend/home/css/style.css')}}"/>

    <!-- Main CSS-->
    <link href="{{url('frontend/css/main.css')}}" rel="stylesheet" media="all">
</head>

<body>
    		<!-- Header -->
		<header id="header">
			<div class="container">

				<div class="navbar-header">
					<!-- Logo -->
					<div class="navbar-brand">
						<a class="logo" href="{{url('/')}}">
							<img src="{{url('frontend/home/img/mainlogo.png')}}" alt="logo">
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
						<li><a href="{{url('/')}}">Home</a></li>
						<li><a href="#">Events</a></li>
						<li><a href="contact.html">Contact</a></li>
                        <li><a href="{{url('/')}}/reg">Signup</a></li>
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
							<li><a href="index.html">Home</a></li>
							<li>Signup</li>
						</ul>
						<h1 class="white-text">Student Signup Page</h1>

					</div>
				</div>
			</div>

		</div>
		<!-- /Hero-area -->
    <div class="page-wrapper p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Signup Form</h2>
                    <form action="{{url('/')}}/image" method="POST" enctype="multipart/form-data">
                        @if (Session::get('success'))
                        <div class="alert alert-success">
                            {{Session::get('success')}}
                        </div>
                        @endif
                        @if (Session::get('fail'))
                        <div class="alert alert-success">
                            {{Session::get('fail')}}
                        </div>
                        @endif
                        @csrf
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="form-group">
                                    <label class="label">Image ID</label>
                                    <input class="input--style-4" type="id" name="image_id">
                                    <span class="text-danger">
                                        @error('name')
                                            {{$message}}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="col-2">
                        </div>
                            <div class="col-2">
                                <div class="form-group">
                                    <label class="label">Image</label>
                                    <input class="input--style-4" type="file" name="image">
                                    <span class="text-danger">
                                        @error('password')
                                            {{$message}}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
		<footer id="footer" class="section">

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">

					<!-- footer logo -->
					<div class="col-md-6">
						<div class="footer-logo">
							<a class="logo" href="{{url('/')}}">
								<img src="{{url('frontend/home/img/mainlogo.png')}}" alt="logo">
							</a>
						</div>
					</div>
					<!-- footer logo -->

					<!-- footer nav -->
					<div class="col-md-6">
						<ul class="footer-nav">
							<li><a href="{{url('/')}}">Home</a></li>
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
							<li><a href="https://www.facebook.com/BRACUniversity/" class="facebook"><i class="fa fa-facebook"></i></a></li>
							<li><a href="https://twitter.com/BRACUniversity" class="twitter"><i class="fa fa-twitter"></i></a></li>
							<li><a href="https://myaccount.google.com/profile" class="google-plus"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="https://www.instagram.com/BRACUniversity/" class="instagram"><i class="fa fa-instagram"></i></a></li>
							<li><a href="https://www.youtube.com/bracuniversity" class="youtube"><i class="fa fa-youtube"></i></a></li>
							<li><a href="https://www.linkedin.com/uas/login?session_redirect=%2Fschool%2F58028%2F" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
						</ul>
					</div>
					<!-- /social -->



				</div>
				<!-- row -->

			</div>
			<!-- /container -->

		</footer>
		<!-- /Footer -->
    <!-- Jquery JS-->
    <script src="{{url('frontend/vendor/jquery/jquery.min.js')}}"></script>
    <!-- Vendor JS-->
    <script src="{{url('frontend/vendor/select2/select2.min.js')}}"></script>
    <script src="{{url('frontend/vendor/datepicker/moment.min.js')}}"></script>
    <script src="{{url('frontend/vendor/datepicker/daterangepicker.js')}}"></script>
    

    <!-- Main JS-->
    <script src="{{url('frontend/js/global.js')}}"></script>

</body>

</html>