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
					<a class="btn btn-info" href="">View</a>
					<a class="btn btn-warning" href="">Edit</a>
					<a class="btn btn-danger" href="">Delete</a>
				</div>
			</div>
		</div>
	</div>
@endsection