@include('layouts.header')
@include('layouts.navbar')
	<div class="row">
		<div class="col-3">
			@include('layouts.sidebar_admin')
		</div>
		<div class="col-3">
			@yield('content')
		</div>
	</div>
@include('layouts.footer')