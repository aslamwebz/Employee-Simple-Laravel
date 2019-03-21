@extends('layouts.app')

@section('content')

	<div id="data">
		<div class="container">
			<a href="{{route('employee.create')}}" class="btn btn-primary">Add Employee</a>
			<br>
			<br>
			<table class="table table-condensed table-bordered">
				<thead class="thead-dark">
				<tr>
					<th>ID</th>
					<th>Full Name</th>
					<th>Join Date</th>
					<th>Email</th>
					<th>Actions</th>
				</tr>
				</thead>
				<tbody>
					@foreach($employees as $employee)
						<tr>
							<td>{{$employee->id}}</td>
							<td><a href="{{route('employee.show' , $employee->id)}}">{{$employee->fullname}}</a></td>
							<td>{{$employee->joindate}}</td>
							<td>{{$employee->email}}</td>
							<td>
								<form action="{{route('employee.destroy', $employee->id)}}" method="POST">
									<a href="{{route('employee.edit', $employee->id)}}" class="btn btn-info">Edit</a>
									@csrf
									@method('DELETE')
									<button class="btn btn-danger">Delete</button>
								</form>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>


	

@endsection






