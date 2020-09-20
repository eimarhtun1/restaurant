<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;
use Alert;
use App\Food;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $bookings =Booking::all();
       return view('backend.bookings.show',compact('bookings'));
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
        // dd($request);
        $request->validate([
            
            "name"=>'required',
            "noperson"=>'required',
            "date"=>'required',
            "time"=>'required',
            "phone"=>'required'           
        ]);
       // return $request->phone;
          $bookdate = Booking::select("booking_date")->pluck('booking_date');
          $booktime = Booking::select("booking_time")->pluck('booking_time');
          $person = Booking::where("booking_date","=",$request->date)
                ->where("booking_time","=",$request->time)
                ->GroupBy('booking_date')->sum('no_person');
          $noperson = 0;
        
        
        // $d = 0;
        // $t = 0;

        // foreach ($bookdate as $date) {
        //     if ($date == $request->date) {
        //         $d++;
        //     }
        // }
        // foreach ($booktime as $time) {
        //     if ($time == $request->time) {
        //         $t++;
        //     }
        // }

        $person+= $request->noperson;
        if ($person <= 10) {
        $booking =new Booking;
       
        $booking->name=$request->name;
        $booking->ph_no=$request->phone;
        $booking->voucherid=uniqid();
        $booking->booking_date=$request->date;
        $booking->booking_time=$request->time;
        $booking->no_person=$request->noperson;
        
        $booking->save();
        $foods =Food::all();

        Alert::success('Success','Successfully Your Booking');
        return view('frontend/home',compact('foods'));
        }else{
            $foods =Food::all();
            Alert::success('Try Another Time','Sorry,This time is not available');
        return view('frontend/home',compact('foods'));
        }
        
        
        
        //Data insert
        // $booking =new Booking;
       
        // $booking->name=$request->name;
        // $booking->ph_no=$request->phone;
        // $booking->voucherid=uniqid();
        // $booking->booking_date=$request->date;
        // $booking->booking_time=$request->time;
        // $booking->no_person=$request->noperson;
        
        // $booking->save();
        // return view('frontend.home');
        //redirect
        // return redirect()->route('foods.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Booking $bookings)
    {
        $bookings =Booking::all();
       return view('backend.bookings.show',compact('bookings'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
