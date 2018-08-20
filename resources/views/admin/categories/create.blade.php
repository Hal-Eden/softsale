@extends('layouts.admin')

@section('content')
	<h1>Create Category</h1>
	<form action="/admin/categories" method="POST">
		@csrf
		<div class="form-group">
			<label for="name">Category Name</label>
			<input type="name" name="name" class="form-control" id="name" placeholder="Category Name">
		</div>
		<div class="form-group">
			<label for="category">Category Parent</label>
			<select name="category" class="form-control" id="categories">
				<option value=0>Select</option>
				@include('admin.categories.selectcats', ['categories' => $categories, 'sub' => ''])
			</select>
		</div>
				
		<div class="form-group">
			<button type="submit" class="btn btn-primary">Create</button>
		</div>
		
		@if ($errors->any())
		    <div class="alert alert-danger">
		        <ul>
		            @foreach ($errors->all() as $error)
		                <li>{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
		@endif
	</form>
@endsection