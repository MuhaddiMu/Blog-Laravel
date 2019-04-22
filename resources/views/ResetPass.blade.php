<!DOCTYPE HTML>
<html lang="en">

<head>
    <title>{{config('app.name')}}</title>
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


				<form method="POST" action="{{ route('password.update') }}" class="form">
						@csrf
						<input type="hidden" name="token" value="{{ $token }}">
						
						<div class="f_row-2">
							<input type="email" class="input-field" placeholder="Email" name="email" required>
						</div>
						<div class="f_row-2 last">
							<input type="password" name="password" placeholder="Password" id="password1" class="input-field" required>
						</div>
						<div class="f_row-2 last">
							<input type="password" name="password_confirmation" placeholder="Confirm Password" id="password2" class="input-field" required>
						</div>
						<input class="submit-w3" type="submit" value="Reset Password">
					</form>
            </div>
        
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


</body>

</html>