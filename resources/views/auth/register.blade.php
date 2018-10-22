@extends('layouts.app')
@section('title', 'Register | Serapio.ph')
@section('content')
<!-- BREADCRUMBS -->
<div class="page-header">
	<div class="container">
		<h1 class="page-title pull-left">Register</h1>
		<ol class="breadcrumb">
			<li><a href="#">Home</a></li>
			<li class="active">Register</li>
		</ol>
	</div>
</div>
<!-- END BREADCRUMBS -->
<div class="container">
    <div class="row">
		<form class="form-horizontal" method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
		<div class="col-md-6 form-horizontal">
			<!-- REGISTRATION FORM -->
			<br>
			<h2 class="section-heading">Member's Sign Up Info</h2>
				{{ csrf_field() }}
				@if (session('success'))
				   <p class="alert alert-success">{{ Session::get('success') }}</p>
				@endif	
				<div class="form-group">
					<div class="col-sm-12">
						<div class="input-group">
							<input type="text" class="form-control" id="firstName" name="firstName" value="{{ old('firstName') }}" placeholder="First Name" />
							<span class="input-group-addon"><i class="fa fa-user"></i></span>
						</div>
						@if ($errors->has('firstName'))
								<span class="help-block alert alert-danger">
									<strong>{{ $errors->first('firstName') }}</strong>
								</span>
						@endif
					</div>
				</div>
				
				<div class="form-group">
					<div class="col-sm-12">
						<div class="input-group">
							<input type="text" class="form-control" id="middleName" name="middleName" value="{{ old('middleName') }}" placeholder="Middle Name" />
								<span class="input-group-addon"><i class="fa fa-user"></i></span>
						</div>
						@if($errors->has('middleName'))
								<span class="help-block alert alert-danger">
									<strong>{{ $errors->first('middleName') }}</strong>
								</span>
						@endif
						
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-12">
						<div class="input-group">
							<input type="text" class="form-control" id="lastName" name="lastName" value="{{ old('lastName') }}" placeholder="Last Name" />
								<span class="input-group-addon"><i class="fa fa-user"></i></span>
						</div>
						@if($errors->has('lastName'))
								<span class="help-block alert alert-danger">
									<strong>{{ $errors->first('lastName') }}</strong>
								</span>
						@endif
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-12">
						<div class="input-group">
							<input type="text" class="form-control" id="address" name="address" value="{{ old('address') }}" placeholder="Address" />
								<span class="input-group-addon"><i class="fa fa-map-pin"></i></span>
						</div>
						@if($errors->has('address'))
								<span class="help-block alert alert-danger">
									<strong>{{ $errors->first('address') }}</strong>
								</span>
						@endif
						
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-12">
						<div class="input-group">
							<input type="text" class="form-control" id="contactNumber" name="contactNumber" value="{{ old('contactNumber') }}" placeholder="Contact Number" />
								<span class="input-group-addon"><i class="fa fa-phone-square"></i></span>
						</div>
						@if($errors->has('contactNumber'))
							<span class="help-block alert alert-danger">
								<strong>{{ $errors->first('contactNumber') }}</strong>
							</span>
						@endif
					</div>
				</div>
			
				
		</div>
		<div class="col-md-6 form-horizontal" style='margin-top:95px;'>
				<div class="form-group">
					<div class="col-sm-12">
						<div class="input-group">
							<input type="text" class="form-control" id="referencePerson" name="referencePerson" value="" placeholder="Reference Person (Optional)" />
								<span class="input-group-addon"><i class="fa fa-user"></i></span>
						</div>
						@if($errors->has('referencePerson'))
							<span class="help-block alert alert-danger">
								<strong>{{ $errors->first('referencePerson') }}</strong>
							</span>
						@endif
		
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-12">
						<div class="input-group">
							<input type="text" class="form-control" id="username" name="username" value="{{ old('username') }}" placeholder="Username" />
								<span class="input-group-addon"><i class="fa fa-user"></i></span>
						</div>
						@if($errors->has('username'))
							<span class="help-block alert alert-danger">
								<strong>{{ $errors->first('username') }}</strong>
							</span>
						@endif
					</div>
				</div>
				
				<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
					<label for="email" class="control-label sr-only">Email</label>
					<div class="col-sm-12">
						<div class="input-group">
							<input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" placeholder="Email">
							<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
							@if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
							@endif
						</div>

					</div>
				</div>
			
				<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
					<label for="password" class="control-label sr-only">Password</label>
					<div class="col-sm-12">
						<div class="input-group">
							<input type="password" class="form-control" id="password" name="password" value="" placeholder="Password">
							<span class="input-group-addon"><i class="fa fa-lock"></i></span>
							@if ($errors->has('password'))
								<span class="help-block">
									<strong>{{ $errors->first('password') }}</strong>
								</span>
							@endif
						</div>
						
					</div>
				</div>
			
				<div class="form-group">
					<label for="password2" class="control-label sr-only">Repeat Password</label>
					<div class="col-sm-12">
						<div class="input-group">
							<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Repeat Password">
							<span class="input-group-addon"><i class="fa fa-lock"></i></span>
						</div>
						
					</div>
				</div>
				
				<div class="form-group">
					<div class="col-sm-12">
						<label style="color:red;">Note* Upload Seaman's Book/Students ID<br><i>Please upload file using PDF or JPG</i></label>
						<input type="file" name="files"  />
						@if ($errors->has('files'))
								<span class="help-block alert alert-danger">
									<strong>{{ $errors->first('files') }}</strong>
								</span>
						@endif
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-12">
						<input type="checkbox" name="checkbox" /> <a href="">Terms and Condition</a>
						@if($errors->has('checkbox'))
							<span class="help-block alert alert-danger">
								<strong>{{ $errors->first('checkbox') }}</strong>
							</span>
						@endif
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-12">
						<button type="submit" class="pull-right btn btn-success btn-lg"><i class="fa fa-check-circle"></i> Create Account</button>
					</div>
				</div>
		</div>
		</form>
		<!--<div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

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
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>-->
    </div>
</div>
@endsection
