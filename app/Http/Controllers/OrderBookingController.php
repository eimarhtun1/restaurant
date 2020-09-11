<?php

namespace App\Http\Controllers;

use App\OrderBooking;
use Illuminate\Http\Request;

class OrderBookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return 'hello';
        $orders = OrderBooking::all();
       return view('backend.orders.index',compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $cartArr = json_decode($request->shop_data); // arr
        
        // $cartArr = $myArr->product_list; // if use array in localstorage

        $total = 0;
        foreach ($cartArr as $row) {
            $total+=($row->price * $row->qty);
        }

        $order = new Order;
        $order->voucherno = uniqid(); // 8880598734
        $order->orderdate = date('Y-m-d');
        $order->user_id = Auth::id(); // auth id (1 => users table)
        $order->note = $request->notes;
        $order->total = $total;
        $order->save(); // only saved into order table

        // save into order_detail
        foreach ($cartArr as $row) {
            $order->items()->attach($row->id,['qty'=>$row->qty]);
        }

        return 'Successful!';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\OrderBooking  $orderBooking
     * @return \Illuminate\Http\Response
     */
    public function show(OrderBooking $orderBooking)
    {
        return view('backend.orders.show',compact('orderBooking'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\OrderBooking  $orderBooking
     * @return \Illuminate\Http\Response
     */
    public function edit(OrderBooking $orderBooking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\OrderBooking  $orderBooking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OrderBooking $orderBooking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\OrderBooking  $orderBooking
     * @return \Illuminate\Http\Response
     */
    public function destroy(OrderBooking $orderBooking)
    {
        //
    }
}
