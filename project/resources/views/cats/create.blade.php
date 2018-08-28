@extends('layouts.master')
@section('content')
<h1>Add Cats</h1>
<form action="{{ route('cats.store') }}" method="post">
	{{ csrf_field() }}
	<div class="form-group">
		<label>Name</label>
		<input type="text" name="name" class="form-control">
	</div>
	<div class="form-group">
		<label>BirthDay</label>
		<input type="date" name="dob" class="form-control">
	</div>
	<div class="form-group">
		<select class="form-control" name="breed_id">	
			@foreach($breeds as $breed)		
				<option value="{{ $breed->id }}">{{ $breed->name }}</option>	
			@endforeach			
		</select>
	</div>
	<div class="form-group">
		<input type="submit" value="Create Cat" class="btn btn-primary">
	</div>
</form>
@endsection