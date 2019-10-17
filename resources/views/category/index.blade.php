@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="col-md-12">
        	<div class="card">
            	<div class="card-header">
            		Categories <a class="btn btn-primary" href="{{ route('categories.create') }}">Add New Category</a>
            	</div>

            	<div class="card-body">
					<table class="table">
						<thead>
							<th>Category Name</th>
							<th>Action</th>
						</thead>
						<tbody>
							@foreach($categories as $category)
								<tr> 
									<td>{{ $category->category_name }}</td>
									<td>
										<a class="btn btn-info" href="{{ route('categories.show', ['category' => $category]) }}">View</a>
										<a class="btn btn-warning" href="{{ route('categories.show', ['category' => $category]) }}">Edit</a>
										<a class="btn btn-danger" href="">Delete</a>
									</td>
								</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
@endsection