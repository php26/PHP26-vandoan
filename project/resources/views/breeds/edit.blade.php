@extends('layouts.master')
@section('content')
<h1>Edit Breed</h1>
<form action="{{ route('breeds.update', $breed->id) }}" method="post">
	{{ csrf_field() }}
	{{method_field('PUT')}}
	<div class="form-group">
		<label>Name</label>
		<input type="text" name="name" class="form-control" value="{{ $breed->name }}">
	</div>
	<div class="form-group">
		<input type="submit" value="Update Breed" class="btn btn-primary">
	</div>
</form>
@endsection