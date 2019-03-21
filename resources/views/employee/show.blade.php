@extends('layouts.app')



@section('content')

<div id="show">
	<div class="container">
		<h2 class="text-center">User Details</h2>
		<div class="row">
			<div class="col-md-6">
				<h3 >User Image</h3>
				<br>
				<img src="{{asset('images/'.$employee->image)}}" alt="" height="300px">
			</div>
			<div class="col-md-6">
				<br>
				<div class="form-group">
					<br>
					<label for="">Full Name</label>
					<input type="text" class="form-control" readonly value="{{$employee->fullname}}">
				</div>
				<div class="form-group">
					<br>
					<label for="">E-mail</label>
					<input type="text" class="form-control" readonly value="{{$employee->email}}">
				</div>
				<div class="form-group">
					<br>
					<label for="">Join Date</label>
					<input type="text" class="form-control" readonly value="{{$employee->joindate}}">
				</div>
				<form action="{{route('employee.destroy', $employee->id)}}" method="post">
					@csrf
					@method('DELETE')
					<a href="{{route('employee.edit', $employee->id)}}" class="btn btn-primary">EDIT</a>
					<button class="btn btn-danger">DELETE</button>
					<a href="{{route('employee.index')}}" class="btn btn-primary">CANCEL</a>
				</form>
			</div>
		</div>
		

{{-- <img src="{{$employee->image}}" alt="" height="500px"> --}}
	</div>
</div>

@endsection