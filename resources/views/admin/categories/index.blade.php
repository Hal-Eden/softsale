@extends('layouts.admin')

@section('content')
	<h1>Show Categories</h1>
	<a href={{ route("admin categories create") }}>Create Category</a>
	@include('admin.categories.categories', ['categories' => $categories])
@endsection

