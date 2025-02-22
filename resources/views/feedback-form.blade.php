@extends('layouts.app')

@section('content')
<div class="container mt-5">
	<h1>Feedback Form</h1>
	@if($errors->any())
		<div class="alert alert-danger">
			<ul>
				@foreach($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif
	<form action="/feedback/send" method="post">
		@csrf
		<div class="mb-3">
			<label for="name" class="form-label">Full Name:</label>
			<input type="text" id="name" name="full_name" class="form-control" required />
		</div>
		<div class="mb-3">
			<label for="mail" class="form-label">Email:</label>
			<input type="email" id="mail" name="email" class="form-control" required />
		</div>
		<div class="mb-3">
			<label for="msg" class="form-label">Comments:</label>
			<textarea id="msg" name="message" class="form-control" rows="4" required></textarea>
		</div>
		<p>Let us know what you think of our website</p>
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
</div>
@endsection

{{--used ai assistance for the styling classes from the bootstrap site/webpage--}}