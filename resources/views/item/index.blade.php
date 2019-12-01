@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="col-md-12">
			<div class="pb-4">
				<a class="btn btn-primary" href="{{ route('item.create') }}">Add New Item</a>
			</div>
        	<div class="card">
            	<div class="card-header">Item</div>

            	<div class="card-body">
					<table class="table">
						<thead>
							<th>Item Name</th>
							<th>Item Description</th>
							<th>Categories</th>
							<th>Cost</th>
							<th>Quantity</th>
							<th>Action</th>
							<th>Add to Card / Order</th>
						</thead>
						<tbody>
							@foreach($items as $item)
								<tr> 
									<td>{{ $item->item_name }}</td>
									<td>{{ $item->item_description }}</td>
									<td>
										@foreach($item->categories as $category)
											{{ $category->category_name }}
										@endforeach
									</td>
									<td>{{ $item->cost }}</td>
									<td>
										<form id="order-form" class="form-inline" action="{{ route('order.store', ['item' => $item->id]) }}" method="POST">
	                                        @csrf
	                                        @method('POST')
	                                        <input type="number" class="form-control" name="quantity" placeholder="0">
	                                    </form>
									</td>
									<td>
										<a class="btn btn-info" href="{{ route('item.show', ['item' => $item]) }}">View</a>
										<a class="btn btn-warning" href="{{ route('item.edit', ['item' => $item]) }}">Edit</a>
										<a class="btn btn-danger" onclick="event.preventDefault(); document.getElementById('delete-form').submit();">
                                        	Delete
                                    	</a>
	                                    <form id="delete-form" action="{{ route('item.destroy', ['item' => $item]) }}" method="POST" style="display: none;">
	                                        @csrf
	                                        @method('DELETE')
	                                    </form>
									</td>
									<td>
										<a class="btn btn-info" href="" onclick="event.preventDefault(); document.getElementById('order-form').submit();">Place order</a>
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