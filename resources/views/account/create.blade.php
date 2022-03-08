@extends('layouts.app')
@section('content')
<h1 class="header" align="center">Add account</h1>
<div class="form-group" style="width: 50%; margin: auto">
	{{-- <form method="post" action="{{ route('person.store') }}"> --}}
	{{ Form::open(['route'=>'account.store', 'method'=>'post']) }}
		@csrf
		@include('account.form')
		
		<input type="submit" class="btn btn-success">
		<a href="{{ route('account.index') }}" class="btn btn-warning">Back</a>
	{{-- </form> --}}
	{{ Form::close() }}
</div>
@endsection