@extends('layouts.email')

@section('content')
	<p>{{ $full_name }} has sent feedback about your website. Below are the comments left by {{ $full_name }}</p>
	<p>{{ $comment }}</p>
@endsection