@extends('layouts.master')
@section('content')
<h1>List Cats by Breed_id: {{ $breed_id }}</h1>
<table class="table table-dark">
	<thead>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Breed_id</th>
		</tr>
	</thead>
	@foreach($cats as $cat)
	<tbody>
		<tr>
			<td>{{ $cat->id }}</td>
			<td>{{ $cat->name }}</td>
			<td>{{ $cat->breed_id }}</td>
		</tr>
	</tbody>
	@endforeach
</table>
@endsection