<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">

	<title>Login</title>

</head>
<body>

<div class="login-page">
	<div class="container d-flex align-items-center">
		<div class="form-holder has-shadow">
			<div class="row">
				<!-- Logo & Information Panel-->
				<div class="col-lg-6">
					<div class="info d-flex align-items-center">
						<div class="content">
							<div class="logo">
								<h1>Dashboard</h1>
							</div>
						</div>
					</div>
				</div>
				<!-- Form Panel    -->
				<div class="col-lg-6 bg-white">
					<div class="form d-flex align-items-center">
						<div class="content">
							<form method="POST" action="{{ route('login') }}">
								{{ csrf_field() }}
								<div class="form-row pt-5 mt-5">
									<div class="form-group col-md-12 {{ $errors->has('email') ? ' has-error' : '' }}">
										<label for="inputEmail4">EMAIL</label>
										<input type="email" class="form-control" id="inputEmail4" name="email" value="{{ old('email') }}" required autofocus>
										@if ($errors->has('email'))
											<span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
										@endif
									</div>

									<div class="form-group col-md-12 {{ $errors->has('password') ? ' has-error' : '' }}">
										<label for="inputPassword4">PASSWORD</label>
										<input type="password" class="form-control" id="password" name="password" required>
										@if ($errors->has('password'))
											<span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
										@endif
									</div>
								</div>
								<div class="text-right mt-4">
									<input class="btn" type="submit" name="login" value="Login">
								</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"> </script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
<script src="vendor/chart.js/Chart.min.js"></script>
<script src="js/front.js"></script>
                            
</body>
</html>
                    
              
