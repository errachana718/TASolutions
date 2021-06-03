<!DOCTYPE html>
<html lang="en">
<head>
    <title>T&A Solutions</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{ asset('assets/front/login/images/icons/favicon.ico') }}"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/front/login/vendor/bootstrap/css/bootstrap.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/front/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/front/login/css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/front/login/css/main.css') }}">
    <!--===============================================================================================-->
</head>
<body>

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
            <form class="login100-form validate-form flex-sb flex-w" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
					<span class="login100-form-title p-b-32">
						Survey Login
					</span>

                <span class="txt1 p-b-11">
						Email
					</span>
                <div class="wrap-input100 validate-input m-b-36" data-validate = "Username is required">
                    <input class="input100" type="email" name="email" required="required" >
                    <span class="focus-input100"></span>
                </div>

                <span class="txt1 p-b-11">
						Password
					</span>
                <div class="wrap-input100 validate-input m-b-12" data-validate = "Password is required">
						<span class="btn-show-pass">
							<i class="fa fa-eye"></i>
						</span>
                    <input class="input100" type="password" name="password" required="required">
                    <span class="focus-input100"></span>
                </div>

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        Login
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>


<!--===============================================================================================-->
<script src="{{ asset('assets/front/login/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
<!--===============================================================================================-->
<script src="{{ asset('assets/front/login/vendor/bootstrap/js/popper.js') }}"></script>
<script src="{{ asset('assets/front/login/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<!--===============================================================================================-->
<script src="{{ asset('assets/front/login/js/main.js') }}"></script>

</body>
</html>