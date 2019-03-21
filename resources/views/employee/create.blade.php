@extends('layouts.app')

@section('content')

	<div class="container">
		<form action="{{route('employee.store')}}" method="POST" enctype="multipart/form-data">
			@csrf
			<div class="form-group">
				<label for="">Full Name</label>
				<input type="text" class="form-control" name='fullname'>
			</div>
			<div class="form-group">
				<label for="">Join Date</label>
				<input type="text" class="form-control" name='joindate'>
			</div>
			<div class="form-group">
				<label for="">Email</label>
				<input type="text" class="form-control" name='email'>
			</div>
			<div class="form-group">
				<label for="">Image</label>
				<input type="file" name="image" class="form-control">
			</div>
<br>
			<button class="btn btn-submit">Submit</button>
		</form>
	</div>

@endsection