<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login V3</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="frontend/login/images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="frontend/login/vendor/bootstrap/frontend/login/css/bootstrap.min.css" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="frontend/login/fonts/font-awesome-4.7.0/frontend/login/css/font-awesome.min.css" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="frontend/login/fonts/iconic/css/material-design-iconic-font.min.css" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="frontend/login/vendor/animate/animate.css" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="frontend/login/vendor/css-hamburgers/hamburgers.min.css" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="frontend/login/vendor/animsition/frontend/login/css/animsition.min.css" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="frontend/login/vendor/select2/select2.min.css" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="frontend/login/vendor/daterangepicker/daterangepicker.css" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="frontend/login/css/util.css" />
    <link rel="stylesheet" type="text/css" href="frontend/login/css/main.css" />
    <!--===============================================================================================-->
</head>

<body>
    <div class="limiter">
        <div class="container-login100" style="background-image: url('frontend/login/images/bg-01.jpg')">
            <div class="wrap-login100">
                <form class="login100-form validate-form">
                    <a href="{{ url('/') }}">
                        <span class="login100-form-logo">
                            <i class="zmdi zmdi-landscape"></i>
                        </span>
                    </a>
                    <span class="login100-form-title p-b-34 p-t-27"> Log in </span>

                    <div class="wrap-input100 validate-input" data-validate="Enter username">
                        <input class="input100" type="text" name="username" placeholder="Username" />
                        <span class="focus-input100" data-placeholder="&#xf207;"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Enter password">
                        <input class="input100" type="password" name="pass" placeholder="Password" />
                        <span class="focus-input100" data-placeholder="&#xf191;"></span>
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn">Login</button>
                    </div>

                    <div class="text-center p-t-90">
                        <a class="txt1" href="{{ url('/signup') }}"> Don't have a account ? Sign up</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div id="dropDownSelect1"></div>

    <!--===============================================================================================-->
    <script src="frontend/login/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="frontend/login/vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="frontend/login/vendor/bootstrap/js/popper.js"></script>
    <script src="frontend/login/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="frontend/login/vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="frontend/login/vendor/daterangepicker/moment.min.js"></script>
    <script src="frontend/login/vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="frontend/login/vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="frontend/login/js/main.js"></script>
</body>

</html>
