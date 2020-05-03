@extends('layouts.app')

@section('content')

<form method="POST" action="{{ route('pay') }}" accept-charset="UTF-8" class="form-horizontal" role="form">
  <div class="container m-5">
      <h2 class="text-center">Payment Method</h2>
      <p class="lead">Course: {{$course->name}}</p>
      <input type="hidden" name="email" value="{{Auth::user()->email}}"> {{-- required --}}
      <input type="hidden" name="orderID" value="{{Auth::user()->id}}">
      <input class="paystack_amount" type="hidden" name="amount" value="{{$course->price}}00">
      <input type="hidden" name="quantity" value="3">
      <input type="hidden" name="metadata" value="{{ $course_details }}"> {{-- For other necessary things you want to add to your payload. it is optional though --}}
      <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}"> {{-- required --}}
      <input type="hidden" name="key" value="{{ config('paystack.secretKey') }}"> {{--required--}}
      {{ csrf_field() }} {{-- works only when using laravel 5.1, 5.2 --}}
      <input type="hidden" name="_token" value="{{ csrf_token() }}"> {{-- employ this in place of csrf_field only in laravel 5.0 --}}
      
      <p>Choose your preferred mode of payment</p>
      <div>
        <input type="radio" name="amount" id="amount" value="{{$balance}}00">
        <label for="amount"><b>Balance</b> : <b>NGN {{$balance}}</b></label>
      </div>
      <button class="btn btn-success btn-lg btn-block mt-4" type="submit" value="Pay Now!">
          <i class="fa fa-plus-circle fa-lg"></i> Pay Now!
      </button>
  </div>
</form>



@endsection


