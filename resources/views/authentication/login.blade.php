@extends('layouts.master') 

@section('content')
<title>Sentinel Authentication</title>

	<div class="row">
		</br></br></br></br>
		<div class="col-md-6 col-md-offset-3">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title"><b> Login </b></h3>
				</div>
                
				<div class="panel-body">
		  <!--	    <form action="/login" method="POST">  -->
					<form id="login-form">
                        <!-- without json
                        @if(session('error'))
						<div class="alert alert-danger">
							{{ session('error') }}
						</div>
						@endif

						@if(session('success'))
						<div class="alert alert-success">
							{{ session('success') }}
						</div>
						@endif  

					    // without json  -->
					
						<div class="alert alert-danger" style="display: none;"></div>
						<div class="alert alert-success" style="display: none;"></div>

						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-envelope "></i></span>

								<input type="email" name="email" class="form-control" placeholder="example@example.com" required>
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>

								<input type="password" name="password" class="form-control" placeholder="Password" required>
							</div>
						</div>


						<div class="form-group">
							<div class="input-group">
								<input type="checkbox" name="remember_me"> <b> Remember Me</b>
							</div>
						</div>
                        <a href="/forgot-password">Forgot Your Password?</a>


						<div class="form-group">
							<input type="submit" value="Login" class="btn btn-success pull-right">
						</div>
						
					</form>
				</div>
			</div>
		</div>
	</div>


@endsection

@section('scripts')
     <script type="text/javascript">

     	$.ajaxSetup({
     		headers: {
     			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
     		}
     	})

     	$('#login-form').submit(function(event){
     		event.preventDefault()

     		var postData = {
     			'email'       : $('input[name=email]').val(),
     			'password'    : $('input[name=password]').val(),
     			'remember_me' : $('input[name=remember_me]').is(':checked'),
     		}

     		$.ajax({
     			type: 'post',
     			url : '/login',
     			data: postData,
     			success: function(response) {
     				console.log(response)
     			},
     			error: function(response) {
     				$('.alert-danger').text(response.responseJSON.error)

     				$('.alert-danger').show()
     			}
     		})
     	})
     </script>
@endsection