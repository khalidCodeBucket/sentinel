@extends('layouts.master')

@section('content')

<title>Sentinel Authentication</title>

	<div class="row">
		</br></br></br></br>
		<div class="col-md-6 col-md-offset-3">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title"><b> Register </b></h3>
				</div>
                
				<div class="panel-body">
					<form action="/register" method="POST">
						{{ csrf_field() }}

						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-envelope "></i></span>

								<input type="email" name="email" class="form-control" placeholder="example@example.com">
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>

								<input type="text" name="first_name" class="form-control" placeholder="First Name">
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>

								<input type="text" name="last_name" class="form-control" placeholder="Last Name">
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span>

								<input type="text" name="location" class="form-control" placeholder="Location">
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>

								<input type="password" name="password" class="form-control" placeholder="Password">
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>

								<input type="password" name="password_confirmation" class="form-control" placeholder="Password Confirmation">
							</div>
						</div>
						<div class="form-group">
							<input type="submit" value="Register" class="btn btn-success pull-right">
						</div>
						
					</form>
				</div>
			</div>
		</div>
	</div>


@endsection