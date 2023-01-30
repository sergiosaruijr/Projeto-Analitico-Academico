@extends('layouts.app2')

@section('content2')
    <h1>Products</h1>

    <div class="panel-heading">
		<h3 class="panel-title">Custom Filter</h3>
	</div>
	<div class="panel-body">
		<form method="POST" id="search-form" class="form-inline" role="form">

			<div class="form-group">
				<label for="name">Name</label>
				<input type="text" class="form-control" name="name" id="name" placeholder="search name">
			</div>
			<div class="form-group">
				<label for="email">Email</label>
				<input type="text" class="form-control" name="email" id="email" placeholder="search email">
			</div>

			<button type="submit" class="btn btn-primary">Search</button>
		</form>
	</div>
@endsection
