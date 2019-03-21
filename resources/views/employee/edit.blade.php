@extends('layouts.app')

@section('content')

	<div class="container">
		<form action="{{route('employee.update', $employee->id)}}" method="POST" enctype="multipart/form-data">
			@csrf
			 @method('PUT')
			<div class="form-group">
				<label for="">Full Name</label>
				<input type="text" class="form-control" name='fullname' value="{{$employee->fullname}}">
			</div>
			<div class="form-group">
				<label for="">Join Date</label>
				<input type="text" class="form-control" name='joindate' value="{{$employee->joindate}}">
			</div>
			<div class="form-group">
				<label for="">Email</label>
				<input type="text" class="form-control" name='email' value="{{$employee->email}}">
			</div>
			<div class="form-group">
				<label for="">Image</label>
				<input type="file" name="image" class="form-control" value="{{$employee->image}}">
			</div>
<br>
			<button class="btn btn-submit">Submit</button>
		</form>
	</div>

@endsection