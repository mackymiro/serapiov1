@extends('layouts.app')
@section('title', 'Login | Serapio.ph')

@section('content')
<!-- BREADCRUMBS -->
<div class="page-header">
	<div class="container">
		<h1 class="page-title pull-left">Login</h1>
		<ol class="breadcrumb">
			<li><a href="#">Home</a></li>
			<li class="active">Login</li>
		</ol>
	</div>
</div>
<!-- END BREADCRUMBS -->
<div class="container">
    <div class="row">
		<form class="form-horizontal" method="POST" action="{{ route('login') }}">
		<div class="col-md-6">
		<!-- LOGIN FORM -->
			<h2 class="section-heading">Login Here</h2>
				{{ csrf_field() }}
				<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} ">
					<label for="" class="control-label sr-only">Username</label>
					<div class="col-sm-12">
						<div class="input-group">
							<input type="text" class="form-control"  name="username" value="" placeholder="Username" >
							<span class="input-group-addon"><i class="fa fa-user"></i></span>
						</div>
						@if ($errors->has('username'))
							<span class="help-block alert alert-danger">
								<strong>{{ $errors->first('username') }}</strong>
							</span>
						@endif
					</div>
				</div>
			<br>
		
		</div>
		<div class="col-md-6" style='margin-top:75px;'>
		<div class="form-group">
				<label for="inputpassword3" class="control-label sr-only">password</label>
						<div class="col-sm-12">
							<div class="input-group">
								<input type="password" class="form-control" name="password" value="" placeholder="Password">
								<span class="input-group-addon"><i class="fa fa-lock"></i></span>
							</div>
							
						</div>
					</div>
					<div class="pull-right form-group">
						<div class="col-sm-12">
							<div class="checkbox">
								<label>
									<input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
								</label>
							</div>
						
						</div>
					</div>
					<div class="form-group">
						<div class="pull-right col-sm-12">
							<button type="submit" class="btn btn-primary btn-lg pull-right"><i class="fa fa-sign-in"></i> Sign in</button>
						<br>
						<br>
						<br>
						<div class="pull-right">
							<p><em>Don't have an account yet?</em> <a href=""><strong>Sign Up</strong></a>
							<br>
							<em>Forgot your password?</em> <a href="{{ route('password.request') }}">Recover Password</a></p>
						</div>
						</div>
					</div>
					
				<!-- END LOGIN FORM -->
		</div>
		</form>
		<!--
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login Here</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>-->
    </div>
</div>
@endsection
