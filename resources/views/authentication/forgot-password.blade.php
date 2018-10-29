@extends('layouts.master') 

@section('content')
<title>Sentinel Authentication</title>

	<div class="row">
		</br></br></br></br>
		<div class="col-md-6 col-md-offset-3">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title"><b> Forgot Password </b></h3>
				</div>
                
				<div class="panel-body">
					<form action="/forgot-password" method="POST">
						{{ csrf_field() }}

                        @if(session('success'))
						<div class="alert alert-success">
							{{ session('success') }}
						</div>
						@endif

						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-envelope "></i></span>

								<input type="email" name="email" class="form-control" placeholder="example@example.com" required>
							</div>
						</div>

                        <a href="/login">Login?</a>

						<div class="form-group">
							<input type="submit" value="Send Code" class="btn btn-success pull-right">
						</div>
						
					</form>
				</div>
			</div>
		</div>
	</div>


@endsection