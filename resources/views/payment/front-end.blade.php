@extends('layouts.app')

@section('content')

    <div class="container m-5">
        <h2 class="text-center">Payment Method</h2>
        <p class="lead">Course: Front-End Web Development</p>
        <p class="lead"><span>Amount: </span><span class="f_amount" style="display: none;">#150,000</span> <span class="i_amount" style="display: none;">#50,000</span></p>
        <select name="payment_method" id="input" class="form-control">
            <option value>Select</option>
            <option value="full_payment" id="full_payment">Full Payment</option>
            <option value="installmental_payment" id="installmental_payment">Installmental Payment</option>
        </select>
        <button class="btn btn-block bg-dark mt-4"><a class="text-decoration-none text-white font-weight-bold" href="">Pay Now</a></button>
    </div>

@endsection
