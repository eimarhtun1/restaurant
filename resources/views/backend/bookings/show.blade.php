@extends('backendtemplate')
@section('content')
{{-- <div class="container">
  <div class="d-sm-flex align-items-center justify-content-between">
    <h1 class="h3 mb-0 text-gray-800 ">Voucherno:{{$orderBooking->voucherid}}</h1>


      
  </div>
  <h1 class="h3 mb-0 text-gray-800 ">orderDate:{{$orderBooking->order_date}}</h1>

</div> --}}

<div class="row">
      <div class="col-md-10">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>No.</th>
              <th>Name</th>
             
              <th>Ph_no</th>
              <th>voucherid</th>
              <th>Booking_Date</th>
              <th>Booking Time</th>
              <th>No_Person</th>
            </tr>
          </thead>
          <tbody>
           
           @php

            $i=1; 
           @endphp
           @foreach ($bookings as $booking)
          
          <tr>
            <td>{{$i++}}</td>
            <td>{{$booking->name}}</td>
            <td>{{$booking->ph_no}}</td>
            <td>{{$booking->voucherid}}</td>
            <td>{{$booking->booking_date}}</td>
            <td>{{$booking->booking_time}}</td>
            <td>{{$booking->no_noperson}}</td>
          </tr>
          @endforeach
          
              
          </tbody>
          
        </table>
      </div>
    </div>


@endsection