<!DOCTYPE HTML>
<html lang="en">

<head>
    <title>Sign up | Sign In</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Meta tag Keywords -->

    <!-- css files -->
    <link rel="stylesheet" href="{{asset('LoginAssets/css/style.css')}}" type="text/css" media="all" />
    <!-- Style-CSS -->
    <link href="{{asset('LoginAssets/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- Font-Awesome-Icons-CSS -->
    <!-- //css files -->
    <!-- web-fonts -->
    <link href="//fonts.googleapis.com/css?family=Magra:400,700&amp;subset=latin-ext" rel="stylesheet">
    <!-- //web-fonts -->
</head>

<body>
    <!-- title -->
    <h1>
		{{config('app.name')}}
	</h1>
    <!-- //title -->

    <!-- content -->
    <div class="container-agille">
        <div class="formBox level-login">
            <div class="box boxShaddow"></div>
            <div class="box loginBox">
				<h3>Login Here</h3> 
				
				@if($errors->any())
                <div class="isa_error">
						<i class="fa fa-times-circle"></i>
						@include('layouts/errors')
				   </div>
				@endif
				
				@if (session('status'))
                        <div class="isa_success">
                            {{ session('status') }}
                        </div>
                @endif


                <form action="{{ route('login') }}" method="POST" class="form">
                    @csrf
                    <div class="f_row-2">
                        <input type="text" class="input-field" placeholder="Email" name="email" required>
                    </div>
                    <div class="f_row-2 last">
                        <input type="password" name="password" placeholder="Password" class="input-field" required>
                    </div>
                    <input type="checkbox" name="remember"> <span>{{ __('Remember Me') }}</span>
                    <input class="submit-w3" type="submit" value="Login">
                    <div class="f_link">
                        <a href="" class="resetTag">Forgot your password?</a>
                    </div>
                </form>
            </div>
            <div class="box forgetbox agile">
                <a href="#" class="back icon-back">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 199.404 199.404" style="enable-background:new 0 0 199.404 199.404;" xml:space="preserve">
                        <polygon points="199.404,81.529 74.742,81.529 127.987,28.285 99.701,0 0,99.702 99.701,199.404 127.987,171.119 74.742,117.876 
			  199.404,117.876 " />
                    </svg>
                </a>
				<h3>Reset Password</h3>
                <form method="POST" action="{{ route('password.email') }}" class="form" id="ResetForm">
                    @csrf
                    <p>Enter your email address and we'll send you a link to reset your password</p>
                    <div class="f_row last">
                        <label>E-Mail Address</label>
                        <input type="email" name="email" placeholder="Email" class="input-field" required>
                    </div>
                    <button id="Reset" type="submit" class="btn button submit-w3">Reset Password</button>
                </form>

            </div>
            <div class="box registerBox wthree">
                <span class="reg_bg"></span>
				<h3>Register</h3> 
				@if($errors->any())
                <div class="isa_error">
                    <i class="fa fa-times-circle"></i> @include('layouts/errors')
                </div>
                @endif
                <form method="POST" action="{{ route('register') }}" class="form">
                    @csrf
                    <div class="f_row-2">
                        <input type="text" class="input-field" placeholder="Name" name="name" required>
                    </div>
                    <div class="f_row-2">
                        <input type="email" class="input-field" placeholder="Email" name="email" required>
                    </div>
                    <div class="f_row-2 last">
                        <input type="password" name="password" placeholder="Password" id="password1" class="input-field" required>
                    </div>
                    <div class="f_row-2 last">
                        <input type="password" name="password_confirmation" placeholder="Confirm Password" id="password2" class="input-field" required>
                    </div>
                    <input class="submit-w3" type="submit" value="Register">
                </form>

            </div>
            <a href="#" class="regTag icon-add">
                <i class="fa fa-repeat" aria-hidden="true"></i>

            </a>
        </div>
    </div>
    <!-- //content -->

    <!-- js files -->
    <!-- Jquery -->
    <script src="{{asset('LoginAssets/js/jquery-2.2.3.min.js')}}"></script>
    <!-- //Jquery -->
    <!-- input fields js -->
    <script src="{{asset('LoginAssets/js/input-field.js')}}"></script>
    <!-- //input fields js -->

    <!-- password-script -->
    <script>
        window.onload = function() {
            document.getElementById("password1").onchange = validatePassword;
            document.getElementById("password2").onchange = validatePassword;
        }

        function validatePassword() {
            var pass2 = document.getElementById("password2").value;
            var pass1 = document.getElementById("password1").value;
            if (pass1 != pass2)
                document.getElementById("password2").setCustomValidity("Passwords Don't Match");
            else
                document.getElementById("password2").setCustomValidity('');
            //empty string means no validation error
        }
	</script>
	
	<script>
		$('#Reset').click(function(){
  			$("#ResetForm").submit();});
	</script>

</body>

</html>