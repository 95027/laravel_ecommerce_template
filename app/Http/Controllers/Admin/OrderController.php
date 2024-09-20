<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function orderSearch(Request $request)
    {
        $query = Order::query();

        // Filter by order number if provided
        if ($request->has('order_number') && !empty($request->order_number)) {
            $query->where('order_id', 'like', '%' . $request->order_number . '%');
        }

        // Filter by status if provided
        if ($request->has('status') && $request->status !== 'Fillter With Status') {
            $query->where('status', $request->status);
        }

        // Filter by date if provided
        if ($request->has('date') && !empty($request->date)) {
            $query->whereDate('created_at', $request->date);
        }

        // Fetch the filtered orders
        $orders = $query->get();

        // If request is AJAX, return JSON response
        if ($request->ajax()) {
            return response()->json(['orders' => $orders]);
        }

        // Otherwise, return view with filtered orders
        return view('admin.pages.orders', compact('orders'));
    }
}
