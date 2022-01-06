<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Quizez</title>
    <!-- BOOTSTRAP CORE STYLE CSS -->
    <link href="/site/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME CSS -->
    <link href="/site/css/font-awesome.min.css" rel="stylesheet" />
     <!-- FLEXSLIDER CSS -->
    <link href="/site/css/flexslider.css" rel="stylesheet" />
    <!-- CUSTOM STYLE CSS -->
    <link href="/site/css/style.css" rel="stylesheet" />
    <link rel="icon" type="image/png" href="pathToYourIcon.png" />

  <!-- Google	Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css' />
</head>
<body >


<style>
    .card:hover {
  transform: scale(1.1);
    }
</style>
 <div class="navbar navbar-inverse navbar-fixed-top " id="menu" style="height: 50px;">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url('/') }}"><h5 style="color:white;font-weight:bold;font-size:larger;margin-left:-37px">Quizez</h5></a>
            </div>
            <div class="navbar-collapse collapse move-me" style=" margin-right: px;  margin-left: -300px;" >
                <ul class="nav navbar-nav navbar-right" style="margin-top: 6px;" >
                    <li  ><a href="#home">HOME</a></li>
                     <li><a href="#features-sec">EXAMS</a></li>
                    <li><a href="#faculty-sec">FACULTY</a></li>
                     <li><a href="{{ url('#contact') }}">CONTACT</a></li>
                                <!-- Authentication Links -->
                                @guest
                                @if (Route::has('login'))
                                <li class="nav-item mr-4">
                                    <a class="nav-link text-white sign-my" href="{{ route('login') }}">{{ __('LOGIN') }}</a>
                                </li>
                                @endif

                                @if (Route::has('register'))
                                <li class="nav-item mr-4">
                                    <a class="nav-link text-white sign-my" href="{{ route('register') }}">{{ __('REGISTER') }}</a>
                                </li>
                                @endif
                                @else
                                <li>
                                    <a class="p-5 text-white" role="button" style="padding-right:40px !important;">
                                        {!! "Welocme, " . "<span style='color:#FFA801'>".Auth::user()->name."</span>" !!}
                                    </a>
                                </li>
                                <li>
                                    <a class="" href="{{ route('logout') }}" onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                        <button class="btn btn-danger " style="margin-top: -6px;margin-left:-10px;">
                                            {{ __('Logout') }}
                                        </button>
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                        </li>
                                @endguest
                </ul>
            </div>

        </div>
    </div>
      <!--NAVBAR SECTION END-->
