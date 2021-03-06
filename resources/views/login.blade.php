@extends('front-layout')
@section('login-form')
<fieldset id="boo">
	<div class="container">
		<div class="row">
			<div class="col-lg-offset-3 col-lg-6">

				@if ( count($errors) > 0 )
					@foreach ( $errors->all() as $error ) 
						<p class="alert alert-danger">{{ $error }}</p>
					@endforeach
				@endif

				<form method="post" action="{{ route('login') }}">
					{{ csrf_field() }}
					<fieldset id ='f'>
						<legend><p><b>Login Form</b></p></legend>
						<div class="form-group">
						  	<label for="exampleInputEmail1"><p>Email address</p></label>
						  	<input name="email" value="{{ old('email') }}" class="form-control" aria-describedby="emailHelp" placeholder="Enter email" type="email">
						</div>
						<div class="form-group">
						  	<label for="exampleInputPassword1"><p>Password</p> 	</label>
						  	<input name="password" class="form-control" placeholder="Password" type="password">
						</div>
						<button type="reset" class="btn btn-warning" id='btn'>Reset</button>
						<button type="submit" class="btn btn-primary" >Login</button>
					</fieldset>
				</form>
			</div>
		</div>
	</div>
</fieldset>
@endsection