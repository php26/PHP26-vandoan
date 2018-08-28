@extends('layouts.master')
@section('content')
<h1>Edit Cats</h1>
<form action="{{ route('cats.update', $cat->id) }}" method="post">
	{{ csrf_field() }}
	{{method_field('PUT')}}
	<div class="form-group">
		<label>Name</label>
		<input type="text" name="name" class="form-control" value="{{ $cat->name }}">
	</div>
	<div class="form-group">
		<label>BirthDay</label>
		<input type="date" name="dob" class="form-control" value="{{ $cat->dob }}">
	</div>
	<div class="form-group">
		<select class="form-control" name="breed_id">	
			@foreach($breeds as $breed)		
				<option value="{{ $breed->id }}">{{ $breed->name }}</option>	
			@endforeach			
		</select>
	</div>
	<div class="form-group">
		<input type="submit" value="Update Cat" class="btn btn-primary">
	</div>
</form>
@endsection