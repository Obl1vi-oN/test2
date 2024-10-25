<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index()
    {
        $product = Order::all()
            ->where('status', 'Новый')/*->orderByPivot('number', 'desc')*/
        ;
        return view('index', ['orders' => $product]);
    }

    public function history()
    {
        $product = Order::all()
            ->where('status', 'Завершен')
            /*->orderByPivot('created_at', 'desc')*/;
        return view('history', ['orders' => $product]);
    }

    public function store(Request $request)
    {
        Order::create([
            'order-list' => $request->list,
            'order-number' => $request->number,
            'time' => $request->created_at,
        ]);
    }
}
