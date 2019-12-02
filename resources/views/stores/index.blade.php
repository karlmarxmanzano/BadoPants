@extends('layouts.app')

@section('content')
	<form action=" {{ route('stores.store') }} " method="POST">
		@csrf
		@method('POST')

		<input type="text" name="store_name">
		<input type="text" name="store_address">
		<button type="submit">Save</button>
	</form>
@endsection