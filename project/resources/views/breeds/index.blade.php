@extends('layouts.master')
@section('content')
<h1>List Breed</h1>
<table class="table table-dark">
	<thead>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>
	</thead>
	@foreach($breeds as $breed)
	<tbody>
		<tr>
			<td>{{ $breed->id }}</td>
			<td><a href="{{ route('breeds.listCatsByCategoryId', $breed->id) }}">{{ $breed->name }}</a></td>
			<td><a href="{{ route('breeds.edit', $breed->id) }}" class="btn btn-warning">Edit</a></td>
			<td>
				<form action="{{ route('breeds.destroy', $breed->id) }}" method="post">
					{{ csrf_field() }}
					{{method_field('DELETE')}}
					<input type="submit" value="Delete" class="btn btn-danger">
				</form>
			</td>
		</tr>
	</tbody>
	@endforeach
</table>
<a href="{{ route('breeds.create') }}" class="btn btn-primary">Add Breed</a>
@endsection