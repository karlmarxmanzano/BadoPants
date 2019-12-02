<!-- @extends('layouts.app') -->

@section('content')
<div class="row">
		<div class="col-md-12">
        	<div class="card">
            	<div class="card-header">Items</a></div>

            	<div class="card-body">
					<h1>{{ $item->item_name }}</h1>
					<p>{{ $item->item_description }}</p>
				</div>

				<div class="card-footer">
					<a class="btn btn-warning" href="{{ route('item.edit', ['item' => $item]) }}">Edit</a>
					<a class="btn btn-danger" onclick="event.preventDefault(); document.getElementById('delete-form').submit();">
                    	Delete
                	</a>
                    <form id="delete-form" action="{{ route('item.destroy', $item) }}" method="POST" style="display: none;">
                        @csrf
                        @method('DELETE')
                    </form>
				</div>
			</div>
		</div>
	</div>
@endsection