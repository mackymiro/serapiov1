@extends('layouts.app')
@section('title', 'Company Registration Form | Serapio.ph')
@section('content')
<!-- BREADCRUMBS -->
<div class="page-header">
	<div class="container">
		<h1 class="page-title pull-left">Company Registration Form</h1>
		<ol class="breadcrumb">
			<li><a href="#">Home</a></li>
			<li class="active">Company Registration Form</li>
		</ol>
	</div>
</div>
<!-- END BREADCRUMBS -->
<!-- PAGE CONTENT -->
<div class="page-content">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<form>
					<label>Comany Name</label>
					<input type="text" name="companyName" class="form-control" />
					<label>Comany Logo</label>
					<input type="file" name="photo" />
					<label>Company Address</label>
					<input type="text" name="companyAddress" class="form-control" />
					<label>Province</label>
					<select name="province" class="form-control">
						<option value=""></option>
					</select>
					<label>Account Executive</label>
					<input type="text" name="accountExecutive" class="form-control" />
					<label>Date Started</label>
					<input type="text" name="dateStarted" class="form-control" />
					<br>
					<input type="submit" class="btn btn-success" value="Submit" />
				</form>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-12">
				<table class="table table-striped table-bordered">
					<thead>
						<tr>
							<th>Company Logo</th>
							<th>Company Name</th>
							<th>Company Address</th>
							<th>Province</th>
							<th>Account Executive</th>
							<th>Date Started</th>
							<th>Options</th>
						</tr>
					</thead>
					<tbody>
					
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
@endsection