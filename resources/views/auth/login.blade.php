<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="shortcut icon" href="{{asset('public/media/logo/yess.png')}}" type="image/x-icon">
    <link href="{{asset('public/flexy/dist/css/style.min.css')}}" rel="stylesheet">

    <link href="{{asset('public/flexy/dist/css/dataTables.bootstrap5.min.css')}}" rel="stylesheet">

</head>
<body>

<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-sm-center h-100">
				<div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
					<div class="text-center my-5">
						<img src="{{asset('public/media/logo/yess.png')}}" alt="logo" width="100">
					</div>
					<div class="card shadow-lg">
						<div class="card-body p-5">
							<h1 class="fs-4 card-title fw-bold mb-4">Login</h1>
							<form method="POST" class="needs-validation"  autocomplete="on" action="{{ route('login') }}">
                                @csrf
								<div class="mb-3">
									<label class="mb-2 text-muted" for="email">E-Mail Address</label>
									<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="" required autofocus>
									<div class="invalid-feedback @error('email') d-block @enderror">
										Email is invalid
									</div>
								</div>

								<div class="mb-3">
									<div class="mb-2 w-100">
										<label class="text-muted" for="password">Password</label>
										<!-- <a href="forgot.html" class="float-end">
											Forgot Password?
										</a> -->
									</div>
									<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required>
								    <div class="invalid-feedback @error('password') d-block @enderror">
								    	Password is invalid
							    	</div>
								</div>

								<div class="d-flex align-items-center">
									<div class="form-check">
										<input type="checkbox" name="remember" id="remember" class="form-check-input">
										<label for="remember" class="form-check-label">Remember Me</label>
									</div>
									<button type="submit" class="btn btn-primary ms-auto">
										Login
									</button>
								</div>
							</form>
						</div>
						<div class="card-footer py-3 border-0">
							<div class="text-center">
								<!-- Don't have an account? <a href="register.html" class="text-dark">Create One</a> -->
							</div>
						</div>
					</div>
					<div class="text-center mt-5 text-muted">
						Copyright &copy; 2023 &mdash; YAA
					</div>
				</div>
			</div>
		</div>
	</section>


</body>
</html>