<?php
Route::get('/', function () { return view('welcome'); });
Route::get('test', function () { return view('posts.index'); });

// Admin Panel Routes
// Admin Pages
Route::get('admin', function() {
	return redirect('admin/dashboard');
});
Route::get('admin/dashboard', 'admin\AdminController@index')->name('admin dashboard');
Route::get('admin/options', 'admin\AdminController@options')->name('admin options');

// Admin Products
Route::get('admin/products', 'admin\products\ProductController@index')->name('admin products');
Route::get('admin/products/create', 'admin\products\ProductController@create')->name('admin products create');
Route::get('admin/products/edit', 'admin\products\ProductController@edit')->name('admin products edit');

// Admin Brands
Route::get('admin/brands', 'admin\brands\BrandController@index')->name('admin brands');
Route::get('admin/brands/create', 'admin\brands\BrandController@create')->name('admin brands create');
Route::get('admin/brands/edit', 'admin\brands\BrandController@edit')->name('admin brands edit');

// Admin Category
Route::get('admin/categories', 'admin\categories\CategoryController@index')->name('admin categories');
Route::get('admin/categories/create', 'admin\categories\CategoryController@create')->name('admin categories create');
Route::get('admin/categories/edit', 'admin\categories\CategoryController@edit')->name('admin categories edit');

Route::post('admin/categories', 'admin\categories\CategoryController@store');

// Admin Users
Route::get('admin/users', 'admin\users\UserController@index')->name('admin users');
Route::get('admin/users/create', 'admin\users\UserController@create')->name('admin users create');
Route::get('admin/users/edit', 'admin\users\UserController@edit')->name('admin users edit');
