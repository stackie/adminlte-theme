@extends('orchestra/foundation::layouts.extra')

<?php set_meta('html::body', ['class' => 'login-page']); ?>

@section('content')
<div class="login-box">
	<div class="login-logo">
		<a href="{{ handles('orchestra::/') }}">{{ memorize('site.name') }}</a>
	</div>
	<div class="login-box-body">
		<p class="login-box-msg">Sign in to start your session</p>
		{!! Form::open(['url' => handles('orchestra::login'), 'method' => 'POST']) !!}
			<div class="form-group has-feedback">
				<input type="text" class="form-control" placeholder="Email"/>
			</div>
			<div class="form-group has-feedback">
				<input type="password" class="form-control" placeholder="Password"/>
			</div>
			<div class="row">
				<div class="col-xs-8">
					<div class="checkbox">
						<label>
							<input type="checkbox"> Remember Me
						</label>
					</div>
				</div>
				<div class="col-xs-4">
					<button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
				</div>
			</div>
		{!! Form::close() !!}

		<a href="{{ handles('orchestra::forgot') }}">I forgot my password</a><br>
		@if (memorize('site.registrable'))
		<a href="{{ handles('orchestra::register') }}" class="text-center">Register a new membership</a>
		@endif
	</div>
</div>
@stop
