<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\OrderBooking;
use App\Food;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderBookingController extends Controller
{
    public function __construct($value='')
    {
      $this->middleware('role:Admin')->only('index','show');
      $this->middleware('role:Customer')->only('store');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $date1=$request->sdate;
       $date2=$request->edate;
       if ($request->sdate && $request->edate) {
        
        $orders=Order::whereBetween('orderdate',[new Carbon($date1),new Carbon($date2)])->where('status',0)->get();
       }else{
       $orders = OrderBooking::all();
       }

       
        
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

        $order = new OrderBooking;
       $order->voucherid=uniqid();
       $order->order_date=date('Y-m-d');
       $order->user_id=Auth::id();;
       $order->total=$total;
       $order->save();
       
        foreach ($cartArr as $row) {
            // dd($row);
            $order->foods()->attach($row->id,['voucher_id'=>uniqid(),'price'=>$row->price,'qty'=>$row->qty]);
        }

        return 'Your Order is Successful!';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\OrderBooking  $orderBooking
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    { 
        $orderBooking =orderBooking::find($id); 

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
