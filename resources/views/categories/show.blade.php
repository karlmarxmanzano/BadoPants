<!-- @extends('layouts.app') -->

@section('content')
<div class="row">
		<div class="col-md-12">
        	<div class="card">
            	<div class="card-header">Categories</a></div>

            	<div class="card-body">
					<h1>{{ $category->category_name }}</h1>
				</div>

				<div class="card-footer">
					<a class="btn btn-warning" href="{{ route('category.edit', ['category' => $category]) }}">Edit</a>
					<a class="btn btn-danger" onclick="event.preventDefault(); document.getElementById('delete-form').submit();">
                    	Delete
                	</a>
                    <form id="delete-form" action="{{ route('category.destroy', $category) }}" method="POST" style="display: none;">
                        @csrf
                        @method('DELETE')
                    </form>
				</div>
			</div>
		</div>
	</div>
@endsection