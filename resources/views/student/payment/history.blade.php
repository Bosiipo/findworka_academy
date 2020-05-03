@extends('layouts.other')

@section('content')
<div class="d-flex" id="wrapper">
    @if (session('error'))
        <div class="alert alert-danger" role="alert">
            {{ session('error') }}
        </div>
    @endif

    <!-- Sidebar -->
    @include('student.include.sidemenu')
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
        <nav class="navbar navbar-expand-md navbar bg-dark shadow-sm">
        <button class="btn btn-primary" id="menu-toggle">Dashboard</button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon text-white"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <a class="text-decoration-none text-white font-weight-bold navbar-brand" href="{{ url('/') }}">
                Findworka Academy
            </a>
          </ul>

        </div>
      </nav>

      <div class="container-fluid">
        <table class="table mt-5">
            <thead class="thead-dark">
                <tr>
                    <th scope="col" class="text-center">Transaction ID</th>
                    <th scope="col" class="text-center">Course</th>
                    <th scope="col" class="text-center">Amount(NGN)</th>
                    <th scope="col" class="text-center">Balance</th>
                    <th scope="col" class="text-center">Date</th>
                </tr>
            </thead>
            <tbody>
              @foreach ($payments as $payment)
                <tr>
                  <td class="p-4 text-center">{{$payment->transaction_id}}</td>
                  <td class="p-4 text-center">{{$payment->payment_purpose}}</td>
                  <td class="p-4 text-center">{{$payment->amount_paid}}</td>
                  <td class="p-4 text-center">{{$payment->to_balance}}</td>
                  <td class="p-4 text-center">{{($payment->created_at)->format('d/m/Y')}}</td>
                </tr>
              @endforeach
            </tbody>
        </table>
        @if($user->payments()->get()->last()->payment_status_id == 1)
          <button class="btn btn-block btn-primary"><a class="text-decoration-none text-white" href="{{url('/payment')}}/{{$course_id}}/balance">Balance payment!</a></button>
        @elseif($user->payments()->get()->last()->payment_status_id == 2)
          <h2 class="btn btn-block btn-danger">Payment has been paid in full!</h2>
        @endif
        </div>
    </div>
    <!-- /#page-content-wrapper -->

</div>
  <!-- /#wrapper -->
@endsection
