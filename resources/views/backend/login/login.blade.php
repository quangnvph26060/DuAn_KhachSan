<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<base href="{{ asset('')."backend/" }}">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	
	<link href="css/styles.css" rel="stylesheet">
</head>

<body>

	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Log in</div>
				<div class="panel-body">
					<form role="form" method="POST">
						@csrf
						@if(session('thongbao'))
						<div class="alert alert-success" role="alert">
							{{session('thongbao')}}
						</div>
						@endif
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="E-mail" name="email" type="email" autofocus="">
								{!! showError($errors,'email') !!}
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Password" name="password" type="password" value="">
								{!! showError($errors,'password') !!}
							</div>
							<div class="checkbox">
								<label>
									<input name="remember" type="checkbox" value="Remember Me">Remember Me
								</label>
							</div>
							<button class="btn btn-primary" type="submit">Login</button>
							{{-- <a href="index.html" class="btn btn-primary">Login</a> --}}
						</fieldset>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->
</body>

</html>