@extends('layouts.master')
@section('content')
<h1>Add Breeds</h1>
<form action="{{ route('breeds.store') }}" method="post">
	{{ csrf_field() }}
	<div class="form-group">
		<label>Name</label>
		<input type="text" name="name" class="form-control">
	</div>
	<div class="form-group">
		<input type="submit" value="Create Breed" class="btn btn-primary">
	</div>
</form>
@endsection