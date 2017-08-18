@extends('login.master')
@section ('body')
<div class="container">
	<div class="row">
		<div class="col-md-4">
			@section('login_panel_title','Please Login')
			@section('login_panel_body')
			<form role="form">
			{{ csrf_field()}}
			<fieldset>
				<div class="form-group">
					<input class="form-control" type="email" name="email" placeholder="E-mail">
				</div>
				<div class="form-group">
					<input type="password" name="password" value="" class="form-control" placeholder="Password">
				</div>
				<div class="checkbox">
                    <label>
                      <input name="remember" type="checkbox" value="Remember Me">Remember Me
                      </label>
                 </div>
                 <a href="{{ url ('/dashboard') }}" class="btn btn-lg btn-success btn-block">Login</a>
			</fieldset>
				



			</form>
			@endsection
		</div>
	</div> 
</div>

@stop