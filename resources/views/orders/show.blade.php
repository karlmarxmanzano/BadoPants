@extends('layouts.app')

@section('content')
	<table>
		<thead>
			<th>Item Name</th>
			<th>Unit Price</th>
		</thead>
		<tbody>
			<tr>
				<td>{{ $item->item_name }}</td>
				<td></td>
			</tr>
		</tbody>
	</table>
@endsection