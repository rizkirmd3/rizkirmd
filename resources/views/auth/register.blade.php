<!doctype html>
<html lang="en">
  <head>
  	<title>login page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="{{asset('css1/style.css')}}">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">silahkan daftar</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">
						<div class="img" style="background-image: url({{url('images1/bg-1.jpg')}}">
			      </div>
						<div class="login-wrap p-4 p-md-5">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h3 class="mb-4">Sign In</h3>
			      		</div>
								<div class="w-100">
									<p class="social-media d-flex justify-content-end">
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
									</p>
								</div>
			      	</div>
							<form method="POST" action="{{ route('register') }}">
								@csrf
						<div class="form-group mb-3">
			      			<label for="name" class="label" for="name">name</label>
			      			<input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
			      		</div>
			      		<div class="form-group mb-3">
			      			<label for="email" class="label" for="name">email</label>
			      			<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
			      		</div>
		            <div class="form-group mb-3">
		            	<label for="password" class="label" for="password">Password</label>
		              <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
		            </div>
                    <div class="form-group mb-3">
		            	<label for="password-confirm" class="label" for="password">confirm Password</label>
		              <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
		            </div>
		            <div class="form-group">
		            	<button type="submit" class="form-control btn btn-primary rounded submit px-3">Sign In</button>
		            </div>
		            <div class="form-group d-md-flex">
		            	<div class="w-50 text-left">
			            	<label class="checkbox-wrap checkbox-primary mb-0">Remember Me
									  <input type="checkbox" checked>
									  <span class="checkmark"></span>
										</label>
									</div>
									<div class="w-50 text-md-right">
										<a href="#">Forgot Password</a>
									</div>
		            </div>
		          </form>
				  @if (Route::has('register'))
		          <p class="text-center">Not a member? <a class="nav-link" href="{{ route('login') }}">{{_( 'login' ) }}</a></p>
				  @endif
		        </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="{{asset('js1/jquery.min.js')}}"></script>
  <script src="{{asset('js1/popper.js')}}"></script>
  <script src="{{asset('js1/bootstrap.min.js')}}"></script>
  <script src="{{asset('js1/main.js')}}"></script>

	</body>
</html>

