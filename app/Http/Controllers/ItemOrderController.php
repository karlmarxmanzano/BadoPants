<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;

class ItemOrderController extends Controller
{
    public function store(Request $request, Item $item)
    {
		$item->orders()->create([
            'quantity' => $request->quantity,
            'cost' => $item->cost,
            'total_cost' => $request->quantity * $item->cost
        ]);

        return redirect()->back();
    }
}
