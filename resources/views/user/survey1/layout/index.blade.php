<!DOCTYPE html>
<html lang="en">

<head>
    <title>T&A Solutions</title>
    <meta charset="UTF-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--  -->
    <!--  Bootstrap CSS  -->
    <link rel="stylesheet" href="{{ asset('assets/survey/css/bootstrap.min.css') }}" />

    <!--  Icons  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-1/css/fontawesome.css" />

    <!--  Custom CSS  -->
    <link rel="stylesheet" href="{{ asset('assets/survey/css/style.min.css')}}" type="text/css" />
    
</head>

<body>
    <!--  Header Section Starts  -->
    <header class="header-wrapper">
        <div class="container">
            <nav id="main-header" class="navbar navbar-expand-lg navbar-light fixed-top">
                <a class="navbar-brand text-white clearfix" href="/">
                   
                    <span class="Graphik-Semibold service-wrapper">T&A Solutions
                        
                    </span>
                    
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                          
                             <li class="nav-item"><a class="nav-link Graphik-Medium" href="{{ route('logout') }} " onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"> Logout</a></li>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                        </ul>
                </div>
            </nav>
        </div>
    </header>
    <!--  Header Section Ends  -->
     @yield('content')
    <!--  Script Source Files  -->
    <script src="{{asset('assets/survey/js/jquery.min.js')}}"></script>
    <!--  Bootstrap JS  -->
    <script src="{{asset('assets/survey/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/survey/js/bootstrap.min.js')}}"></script>
    <!--  Icons  JS-->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <!--  Custom CSS  -->
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/additional-methods.min.js"></script>
    <script src="{{asset('assets/survey/js/main.js')}}"></script>
   
</body>

</html>