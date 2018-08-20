<ul class="nav flex-column">
	<li class="nav-item">
		<a href={{ route("admin dashboard") }} class="nav-link active" href="#">Dashboard</a>
	</li>
	<li class="nav-item">
		<a class="dropdown-toggle nav-link" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Products</a>
		<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
			<a href={{ route("admin products") }} class="dropdown-item" href="#">Products</a>
			<a href={{ route("admin categories") }} class="dropdown-item" href="#">Categories</a>
			<a href={{ route("admin brands") }} class="dropdown-item" href="#">Brands</a>
			<a href={{ route("admin dashboard") }} class="dropdown-item" href="#">Discounts</a>
			<a href={{ route("admin dashboard") }} class="dropdown-item" href="#">Tags</a>
		</div>
	</li>
	<li class="nav-item">
		<a class="dropdown-toggle nav-link" href="#" role="button" id="dropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Users</a>
		<div class="dropdown-menu" aria-labelledby="dropdownMenuLink2">
			<a href={{ route("admin users") }} class="dropdown-item" href="#">Users</a>
			<a href={{ route("admin dashboard") }} class="dropdown-item" href="#">User Roles</a>
		</div>
	</li>
	<li class="nav-item">
		<a href={{ route("admin options") }} class="nav-link" href="#">Options</a>
	</li>
</ul>