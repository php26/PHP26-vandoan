@extends('layouts.master')
@section('content')
<h1>List Cat</h1>
<table class="table table-dark">
	<thead>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>BirthDay</th>
			<th>Breed_id</th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>
	</thead>
	@foreach($cats as $cat)
	<tbody>
		<tr>
			<td>{{ $cat->id }}</td>
			<td>{{ $cat->name }}</td>
			<td>{{ $cat->dob }}</td>
			<td>{{ $cat->breed_id }}</td>
			<td><a href="{{ route('cats.edit', $cat->id) }}" class="btn btn-warning">Edit</a></td>
			<td>
				<form action="{{ route('cats.destroy', $cat->id) }}" method="post">
					{{ csrf_field() }}
					{{method_field('DELETE')}}
					<input type="submit" value="Delete" class="btn btn-danger">
				</form>
			</td>
		</tr>
	</tbody>
	@endforeach
</table>
<a href="{{ route('cats.create') }}" class="btn btn-primary">Add Cat</a>
@endsection