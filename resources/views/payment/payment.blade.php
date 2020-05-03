@extends('layouts.app')

@section('content')

<form method="POST" action="{{ route('pay') }}" accept-charset="UTF-8" class="form-horizontal" role="form">
  <div class="container m-5">
      <h2 class="text-center">Payment Method</h2>
      <p class="lead">Course: {{$course->name}}</p>
      {{-- {{$course->name}} --}}
      {{-- <p class="lead">
          <span>Amount: </span>
          <span id="f" class="f_amount" style="display: none;">NGN {{$course->price}}</span>
          <span id="i" class="i_amount" style="display: none;">NGN {{$course->price/2}}</span>
      </p> --}}
      {{-- <select name="payment_method" id="input" class="form-control">
          <option value>Select</option>
          <option value="full_payment" id="full_payment">Full Payment</option>
          <option value="installmental_payment" id="installmental_payment">Installmental Payment</option>
      </select> --}}
    
      {{-- @if (
      <input type="hidden" name="amount" value="{{$course->price}}00">
      @elseif()
      <input type="hidden" name="amount" value="{{$course->price/2}}00">
      @endif --}}
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
        <input type="radio" name="amount" id="amount" value="{{$course->price}}00">
        <label for="amount"><b>One time payment</b> : <b>NGN {{$course->price}}</b></label>
      </div>
      <div>
        <input type="radio" name="amount" id="amount" value="{{$course->price/2}}00">
        <label for="amount"><b>Installmental payment</b> : <b>NGN {{$course->price/2}}</b></label>
      </div>
        {{-- <div>
            <input type="radio" name="amount" id="amount" value="{{$course->price/3}}00">
            <label for="amount"><b>Installmental payment</b> : <b>NGN {{$course->price/3}}</b></label>
        </div> --}}
      <button class="btn btn-success btn-lg btn-block mt-4" type="submit" value="Pay Now!">
          <i class="fa fa-plus-circle fa-lg"></i> Pay Now!
      </button>
  </div>
</form>



@endsection


